

<?php

require  "../includes/include_class.php";
if (!isset($_SESSION['id'])){
    header("Location: connexion_view.php");
}


?>
<title> Le panier </title>
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



    </div>

       
        <img src="../assets/img_contact/bgcontact.jpg" alt="background-contact" class="backgroundcontact">
    <div class="formcontact">
        <p class="barre">_________________________________________________</p>
        <div id="barre"></div> <div id="barre"></div>
        <div class="textsouligne" >
            <p class="textform">COMMANDE</p>
        
        </div>

        <!-- multistep form -->
        <div id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"></li>
                <li></li>


            </ul>








            <!-- fieldsets -->
            <fieldset>

                <h1 class="fs-title"> Votre Panier </h1>
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
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method ="POST">
                            <?php
                     // ids de la session panier
                            $ids = array_keys($_SESSION['panier']);
                            $fromage = array();
                            if(empty($ids)){
                            }else{
                                $fromage = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
                                    NATURAL JOIN categories  WHERE id_fromage IN ('.implode(',',$ids).')');

                            }
                    // affichage du panier
                            foreach($fromage as $fromage):

                                ?>

                                <tr>
                                    <td><img src="<?= $fromage->img_fromage; ?>" width="100"></td>
                                    <td><?= $fromage->nom_fromage; ?></td>
                                    <td><?= $fromage->nom_pays; ?></td>
                                    <td><input type="number" name="panier[quantity][<?= $fromage->id_fromage; ?>]" value="<?= $_SESSION['panier'][$fromage->id_fromage]; ?>"></td>
                                    <td><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</td>
                                    <td><a href="panier.php?delPanier=<?= $fromage->id_fromage; ?>" class="del">Supprimer</a></td>
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
                                <td class="prixht"><?= number_format($panier->total(),2,',',' '); ?>€</td>
                            </tr>

                        </tbody>
                    </table>
                    <input type="submit" class="next action-button" name="recalc" value="Recalculer">
                </form>

                <input type="button" name="next" class="next action-button" value="Suivant" />

            </fieldset>











            <fieldset>
                <form action="../includes/add_livraison.php" method ="POST">


                    <h2 class="fs-title">Livraison</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre Adresse">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Votre Code postal" minlength="5" maxlength="5">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre Ville">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9]{10}" placeholder="Votre Numero de Telephone" minlength="10" maxlength="10">
                    </div>

                    
                    <input type="submit" name="commandesubmit" class="next action-button livraison" value="Envoyer" />
                </form>


            </fieldset>






        </div>


    </div>



    <!-- jQuery easing plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" type="text/javascript"></script>

    <script src="../js/multiforms.js"></script>
</body>
<?php require '../includes/footer.php'; ?>
</html>
