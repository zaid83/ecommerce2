           
         <!-- CETTE PAGE EST INCLUT DANS LA PAGE CONNEXION_VIEW , LE CODE PHP QUI PERMET DE SE CONNECTER-->

            <?php


            //lorsque j'ai terminé la connexion
            if(isset($_POST['formconnexion'])) {


                 //sécurisé et simplifié les variables
               $mailconnect = $_POST['mail'];
               $mdpconnect = $_POST['mdp'];

               //pass hashe
            $long = strlen($mdpconnect);

            $mdpconnect= "&=@+" . $long . $mdpconnect . "#1%";

            $mdpconnect= hash('sha512', $mdpconnect);




            // si les champs ne sont pas vides...
               if(!empty($mailconnect) AND !empty($mdpconnect)) {

                  //recherche des donnees dans la base de données

                  $requser = $BDD->rowcount("SELECT * FROM client WHERE mail_client = ? AND mdp_client = ?",array($mailconnect,$mdpconnect));
                  
                   //rowCount va retourne le nombre de ligne
                  $mailexist = $requser->rowCount();

                  //si une ligne correspond au mail du champ
                  if($mailexist == 1) {

                     //alors on fait un fetch et on demarre la session
                     $userinfo = $requser->fetch();
                     $_SESSION['img'] = $userinfo['img_client'];
                     $_SESSION['id'] = $userinfo['id_client'];
                     $_SESSION['mail'] = $userinfo['mail_client'];
                     $_SESSION['nom'] = $userinfo['nom_client'];
                     $_SESSION['prenom'] = $userinfo['prenom_client'];
                     $_SESSION['telephone'] = $userinfo['tel_client'];
                     $_SESSION['adresse'] = $userinfo['adresse_client'];
                     $_SESSION['cp'] = $userinfo['cp_client'];
                     $_SESSION['ville'] = $userinfo['ville_client'];

                     //redirection vers la page d'accueil 
                     header("Location: ../index.php?id=".$_SESSION['id']);
                     
                  } else {
                     $erreur = "Mauvais mail ou mot de passe !";
                  }
               } else {
                 $erreur = "Tous les champs doivent être complétés !";
               }
            }
            ?>