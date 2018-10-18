               <!--si il n' ya pas de session ouverte -->

                <?php if(!isset($_SESSION['id'])){ ?>

            <div class="navbaraccueil red topBotomBordersOut clearfix">

               <a href="contact_view.php">CONTACT</a>
               <a href="connexion_view.php">CONNEXION</a>
               <a href="inscription_view.php">INSCRIPTION</a>
               <a href="pagefromages_view.php">FROMAGES</a>
               <a href="produits_view.php">PRODUITS</a>
               <a href="index_view.php">ACCUEIL</a>

           </div>

<!--si il  y a une session ouverte -->
           <?php 
       }
            
            else { ?>

           <div class="navbaraccueil red topBotomBordersOut clearfix">

               <a href="contact_view.php">CONTACT</a>
               <a href="deconnexion.php">DECONNEXION</a>
               <a href="panier.php">PANIER</a>
               <a href="pagefromages_view.php">FROMAGES</a>
               <a href="produits_view.php">PRODUITS</a>
               <a href="index_view.php">ACCUEIL</a>

           </div>


         <?php   } ?>