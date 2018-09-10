


<!-- CETTE PAGE EST INCLUT DANS LA PAGE pagesfromages_view , LE CODE PHP  PERMET D'AFFICHER LES ARTICLES DES DIFFERENTS PAYS-->


<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 1');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png"  alt="bouton de fermeture" class="closebutton" id="boutoncroix"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>


     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>





    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 2');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all2">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix2"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 4');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all4">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix4" class="closebutton"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>






<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 5');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all5">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix5"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>





<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 6');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all6">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix6"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 7');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all7">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix7"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 8');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all8">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix8"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 9');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all9">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix9"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 10');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all10">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png"  class="closebutton" alt="bouton de fermeture" id="boutoncroix10"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 11');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all11">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png"   class="closebutton" alt="bouton de fermeture" id="boutoncroix11"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 12');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all12">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix12"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 3');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all3">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix3"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>







     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>






    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>






  </div>
</div>

</div>









</div>

<?php endforeach ?>


<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 13');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all13">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix13"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       
       





     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>





    
    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
    





  </div>
</div>

</div>









</div>

<?php endforeach ?>




<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 14');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all14">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix14"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       
       





     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>





    
    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
    





  </div>
</div>

</div>









</div>

<?php endforeach ?>



<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 15');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all15">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix15"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       
       





     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>





    
    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
    





  </div>
</div>

</div>









</div>

<?php endforeach ?>




<?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
  NATURAL JOIN categories 
  WHERE pays.id_pays = 16');
  foreach ($reqfromages as $fromage ):?>


   <div class="fiche" id="all16">

    <div class="row">
     <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
     <a href="#"><img src="../assets/img_fromages/boutoncroix.png" class="closebutton" alt="bouton de fermeture" id="boutoncroix16"></a>
     <div class="col-sm-4 col-xs-4 colorange">


       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
       <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       
       





     </div>

     <div class="col-sm-8 col-xs-8 colwhite">

      <div class="entete_fiche">     
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
     </div>

     <?php if ($fromage->id_categories == 2){ ?>
      <a href="categories_views.php?categories=2"><img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton"></a>
    <?php } else if ($fromage->id_categories == 1){ ?>
      <a href="categories_views.php?categories=1"><img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache"></a>
    <?php } else { ?>
      <a href="categories_views.php?categories=3"><img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre"></a>
    <?php } ?>





    
    <h3 class="details">Détails</h3>
    <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

    <p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
    





  </div>
</div>

</div>









</div>

<?php endforeach ?>