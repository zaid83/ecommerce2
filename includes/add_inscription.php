

<!-- CETTE PAGE EST INCLUT DANS LA PAGE INSCRIPTION_VIEW , LE CODE PHP QUI PERMET DE S'INSCRIRE'-->




<?php

//lorsque j'ai terminé l'inscription...
if(isset($_POST['forminscription']))  
{
   //sécurisé et simplifié les variables
 $nom = $_POST['nom'];
 $mail = $_POST['mail'];
 $prenom = $_POST['prenom'];
 $adresse = $_POST['adresse'];
 $codepostal = $_POST['codepostal'];
 $telephone = $_POST['telephone'];
 $ville = $_POST['ville'];

$imgclient="http://via.placeholder.com/300";
   $mdp = $_POST['mdp'];
   $mdp2 = $_POST['mdp2'];

    // si les champs ne sont pas vides...
   if(!empty($_POST['nom']) AND !empty($_POST['mail'])  AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['prenom'])  AND !empty($_POST['telephone']) AND !empty($_POST['adresse']) AND !empty($_POST['ville'])  AND !empty($_POST['codepostal'])) {


      // longueur des variables
    $adresselength = strlen($adresse); 
    $telephonelength = strlen($telephone); 
    $codepostallength = strlen($codepostal); 
    $mdplength = strlen($mdp); 

       //si la taille des posts est respecté 

      //si longueur de l'adresse est inferieur à 100.
    if($adresselength <= 100) { 
      //si longueur du numero est =10
      if($telephonelength = 10) { 
        //si longueur du cp est = 5
        if($codepostallength = 5) { 

      //si longueur du mdp est >= 4
          if($mdplength >= 4 ) { 

            // verification d'un veritable email
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) { 

              $reqemail = $BDD->rowcount('SELECT * FROM client WHERE mail_client = ?',array($mail));
              $reqexist = ($reqemail->rowcount());
              if($reqexist == 0) {

               if (preg_match('#^[0-9]{5}$#',$codepostal)){


        // si le mot de passe a bien ete confirmé
                if($mdp == $mdp2) {
                  
 // on hash et salt le mot de passe 
 $long = strlen($mdp);

$mdp= "&=@+" . $long . $mdp . "#1%";

$mdp= hash('sha512', $mdp);


            //insertion des donnees dans la base de données

                 $insertmbr = $BDD->insert("client","img_client,nom_client,prenom_client,mail_client,mdp_client,tel_client,adresse_client,cp_client,ville_client",
                  ":img_client,:nom, :prenom,:mail,:mdp,:telephone,:adresse,:codepostal,:ville",
                  array(':img_client' => $imgclient,
                    ':nom' => $nom,
                   ':prenom' => $prenom,
                   ':mail' => $mail,
                   ':mdp' => $mdp,
                   ':telephone' => $telephone,
                   ':adresse' => $adresse,
                   ':codepostal' => $codepostal,
                   ':ville' => $ville));
                 $success = true;



                     //si les conditions ne sont pas respectés, l'ecran afichera...



                   } else {
                     $erreur = "Vos mots de passes ne correspondent pas !"; 
                   }

                 } else {
                   $erreur = " Votre code postal n'est pas aux normes !";
                 }

               } else {
                 $erreur = " Cette adresse email existe dejà !";  
               }

             } else {
             $erreur = " Votre adresse mail n'est pas valide !"; 
             }

           } else {
             $erreur = "Votre mot de passe  doit  dépasser 4 caractères !";
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

}


