<?php
session_start();
require  "../class/db.class.php";
require  "../class/panier.class.php";

$BDD = new BDD(); 
$panier = new panier($BDD);





// si il existe un id 
  if(isset($_GET['id'])){

            // on cherche le fromage correspondant
         $fromagere = $BDD->query('SELECT id_fromage FROM fromage WHERE id_fromage=:id', array('id' => $_GET['id']));

         //si l'id du fromage n'existe pas en renvoie un message d'erreur
        if(empty($fromagere)){
        	$json['message'] ="ce produit n'existe pas";
        }
       //sinon on rajoute le fromage au panier
       $panier->add($fromagere[0]->id_fromage);

       $json['error'] = false;
       $json['count']  = $panier->count();
       $json['message'] = 'Ce produit a bien été ajouté';
  }else{
  	$json['message'] = "Vous n'avez pas selectionné de produit à ajouter au panier";
  }
 echo json_encode($json);
