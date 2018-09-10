 <?php
  class panier {
           private $BDD;

        public function __construct($BDD){


// si session n'existe pas demarre une session 
        	if(!isset($_SESSION)){
        		session_start();
        	}

// si session panier n'exite pas demarre un array panier
        	if(!isset($_SESSION['panier'])){
        		$_SESSION['panier'] = array();
        	}
          
             $this->BDD = $BDD;
             //si delpanier dans les parametres URL existe cela automatise la suppression du produit 
             if(isset($_GET['delPanier'])){
                $this->del($_GET['delPanier']);
             }



        // si il existe une quantite j'appelle la fonction recalculer pour recalculer les quantités
        if(isset($_POST['panier']['quantity'])){
            $this->recalc();
        }
    }










    public function recalc(){
        foreach($_SESSION['panier'] as $fromage_id => $quantity){
        
            if(isset($_POST['panier']['quantity'][$fromage_id])){
                $_SESSION['panier'][$fromage_id] = $_POST['panier']['quantity'][$fromage_id];
            }
        }
    }








         // compte le nombre de fromage dans le panier
        public function count(){
            return array_sum($_SESSION['panier']);
        }






        //somme des differents produits commandes
        public function total(){
          // le total vaut 0 au debut
            $total = 0;
            //parcourir le tableau session panier et trouver les ids
            $ids = array_keys($_SESSION['panier']);
              if(empty($ids)){
                //si les id sont vide retourne un tableau de fromages vide
                $fromages = array();
              }else{
                 // cherche le prix et l'id du fromage 
             $fromages = $this->BDD->query('SELECT id_fromage,prix_fromage FROM fromage WHERE id_fromage IN ('.implode(',',$ids).')');
         }
         foreach ( $fromages as  $fromage){
          // += veut dire qu'il incremente le total du prix du produit qui est multiplie par le nombre de fromages
            $total += $fromage->prix_fromage * $_SESSION['panier'][$fromage->id_fromage];

         }
         // je retourne le total a la fin
         return $total;

        }



      // fonction ajouter un fromage au panier
        public function add($fromage_id){
            if(isset($_SESSION['panier'][$fromage_id])){
                $_SESSION['panier'][$fromage_id]++;
            }else{
        	$_SESSION['panier'][$fromage_id] = 1 ;
        }
    }
         

         // fonction supprimer un fromage du panier
        public function del($fromage_id){
            unset($_SESSION['panier'][$fromage_id]);

        }
}