
<!-- CETTE PAGE EST INCLUT DANS LA PAGE PANIER , LE CODE PHP QUI PERMET DE COMMANDER DES ARTICLES ET D'ENREGISTRER LA LIVRAISON-->


<?php
require  "include_class.php";
if (!isset($_SESSION['id'])){
    header("Location: ../views/connexion_view.php");
}

if(isset($_POST['commandesubmit']))
{

    //sécurisé et simplifié les variables

    $adresse = htmlspecialchars($_POST['adresse']);
    $codepostal = htmlspecialchars($_POST['codepostal']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $ville = htmlspecialchars($_POST['ville']);
    $idclient = htmlspecialchars($_SESSION ['id']);
    $prixtotal = $panier->total();








    if(!empty($_POST['telephone']) AND !empty($_POST['adresse']) AND !empty($_POST['ville'])  AND !empty($_POST['codepostal'])) {


        // longueur des variables
        $adresselength = strlen($adresse);
        $telephonelength = strlen($telephone);
        $codepostallength = strlen($codepostal);


        //si la taille des posts est respecté

        //si longueur de l'adresse est inferieur à 100.
        if($adresselength <= 100) {
            //si longueur du numero est =10
            if($telephonelength = 10) {
                //si longueur du cp est = 5
                if($codepostallength = 5) {





                    //insertion des donnees dans la base de données

                    $insertadresse = $BDD->insert("commandes","prix_total,id_client,tel_livraison,adresse_livraison,cp_livraison,ville_livraison",
                        ":prixtotal,:idclient,:telephone,:adresse,:codepostal,:ville",
                        array(
                            ':prixtotal' => $prixtotal,
                            ":idclient" => $idclient,
                            ':telephone' => $telephone,
                            ':adresse' => $adresse,
                            ':codepostal' => $codepostal,
                            ':ville' => $ville));

                    $ids = array_keys($_SESSION['panier']);
                    $fromagesid = array();
                    if(empty($ids)){
                    }else{
                        $fromagesid = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
NATURAL JOIN categories  WHERE id_fromage IN ('.implode(',',$ids).')');

                    }
                    foreach ($fromagesid as $idfromage) {

                        $insertcommande = $BDD->insert("commande_articles", "id_client,id_fromage,qtite_articles",
                            ":idclient,:idfromage,:qtite",
                            array(
                                ':idclient' => $idclient,
                                ':idfromage' => $idfromage->id_fromage,
                                ':qtite' => $_SESSION['panier'][$idfromage->id_fromage] ));

                    }
                    header('Location:../views/profil_view.php');
                    $success = true;


                    //si les conditions ne sont pas respectés, l'ecran affichera...





                } else {
                    $erreur = " Votre code postal n'est pas aux normes !";
                }





            } else {
                $erreur = "Votre code postal doit comporter minimum 5 chiffres !";
            }

        } else {
            $erreur = "Votre numero doit comporter 10 chiffres !";
        }

    } else {
        $erreur = "Votre adresse ne doit pas dépasser 100 caractères !";
    }

} else {
    $erreur = " Tous les champs doivent être complétés !";
}

