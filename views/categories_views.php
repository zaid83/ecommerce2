                
<?php $title = 'Liste des Fromages par Categories'; ?>
<?php require '../includes/head.php' ?>


<body style ="background-color:white; color:black;" class="text-center">

 <div class="entetecategories">
    <div class="categorie_lait" >

        <?php if ($_GET['categories'] == 2){ ?>
            <img src="../assets/img_fromages/mouton.png" class="img_categ" alt="logo de mouton" width="150">  LISTE DES FROMAGES PROVENANTS DE LA BREBIS
        <?php } else if ($_GET['categories'] == 1){ ?>
          <img src="../assets/img_fromages/vache.png" class="img_categ"  alt="logo de vache" width="150">LISTE DES FROMAGES PROVENANTS DE LA VACHE
        <?php } else { ?>
         <img src="../assets/img_fromages/chevre.png" class="img_categ"  alt="logo de chevre" width="150">LISTE DES FROMAGES PROVENANTS DE LA CHEVRE
      <?php } ?>
      <br>
      <br>

      


  </div>


  <a href="pagefromages_view.php"> RETOUR A LA PAGE PRECEDENTE </a>
  <br>
  <br>


  <div style ="margin-bottom:80px;"><a  href="panier.php#msform"><i class="fas fa-shopping-cart fa-5x"></i></a><sup><span id="count"><?= $panier->count(); ?></span></sup></div>
</div>
  <table  class="table table-striped text-center">

    <thead style ="background-color:orangered;">
        <tr>
            <td>Image du produit</td>
            <td>Nom</td>
            <td>Provenance</td>
            <td>Details</td>
            <td>Prix</td>
            <td>Panier</td>

        </tr>
    </thead>
    <tbody>


        <?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
            NATURAL JOIN categories 
            WHERE id_categories = '.$_GET['categories'].' ');
            foreach ($reqfromages as $fromage ):?>


               
              <tr>
                <td><img src="<?= $fromage->img_fromage; ?>" width="100"></td>
                <td><?= $fromage->nom_fromage; ?></td>
                <td><?= $fromage->nom_pays; ?></td>
                <td><?= $fromage->details_fromage; ?></td>
                <td><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</td>
                <td><p class="boutonpanier"><a class="boutonajouter addPanier" href="../includes/add_panier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<body>

    <?php require '../includes/footer.php'; ?>