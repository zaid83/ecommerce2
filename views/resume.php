
<?php
require  "../includes/include_class.php";

if (!isset($_SESSION['id'])){
    header("Location: connexion_view.php");
}



?>
<title>Commandes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/styleacceuil.css">
<link rel="stylesheet" type="text/css" href="../css/responsive-accueil.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/stylecontact.css">
<link rel="stylesheet" href="../css/responsive-contact.css">
<link rel="stylesheet" href="../css/panier.css">
<link rel="stylesheet" href="../css/multiforms.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


<body>
    <div class="entete">
        <?php require '../includes/navbar.php' ; ?>

        <img src="../assets/img_contact/bgcontact.jpg" alt="background-contact" class="backgroundcontact">


    </div>
    <div class="formcontact">
        <p class="barre">_________________________________________________</p>
        <div id="barre"></div> <div id="barre"></div>
        <div class="textsouligne" >
            <p class="textform">COMMANDE</p>
            <p class="barre2">_____________</p>
        </div>

        <!-- multistep form -->
        <div id="msform">

            <fieldset>

                <h1 class="fs-title"> Votre commande </h1>
                <br>
                <br>
                <?php $livraisons = $BDD->query('SELECT * FROM commandes NATURAL JOIN client WHERE id_commande = '.$_GET['numerodecommande'].' ');



                foreach ($livraisons as $livraison):
                    ?>
                    <h6>Numero de commande :  <?= $livraison ->id_commande; ?></h6>
                    <h6><?= $livraison -> nom_client; ?>  <?= $livraison ->prenom_client; ?></h6>
                    <h5 style="color:yellow;">Adresse de livraison</h5>
                    <h6><?= $livraison -> adresse_livraison; ?></h6>
                    <h6>  <span><?= $livraison -> cp_livraison; ?></span> <span><?= $livraison -> ville_livraison; ?></span></h6>

                    <h6><span>TEL: </span><?= $livraison -> tel_livraison; ?></h6>


                <?php endforeach; ?>

                <br>
                <br>




                <table class="table table-striped text-center">

                    <thead>
                        <tr>
                            <td>Image du produit</td>
                            <td>Nom</td>
                            <td>Provenance</td>
                            <td>Quantite</td>
                            <td>Prix</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $fromages = $BDD->query('SELECT * FROM commandes NATURAL JOIN commande_articles NATURAL JOIN fromage NATURAL JOIN pays WHERE id_commande = '.$_GET['numerodecommande'].'');



                        foreach ($fromages as $fromage):
                            ?>




                            <tr>
                                <td><img src="<?= $fromage->img_fromage; ?>" width="100"></td>
                                <td><?= $fromage->nom_fromage; ?></td>
                                <td><?= $fromage->nom_pays; ?></td>
                                <td><?= $fromage->qtite_articles; ?></td>
                                <td><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</td>

                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total">TOTAL</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="prixht"><?= number_format($fromage->prix_total,2,',',' '); ?>€</td>
                        </tr>

                    </tbody>
                </table>

                <a href="profil_view.php">Retour dans la page profil</a>


            </fieldset>
        </div>
    </body>

    <?php require '../includes/footer.php'; ?>