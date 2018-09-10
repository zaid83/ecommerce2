<?php $title = 'Inscrivez-vous'; ?>
<?php require '../includes/head.php' ?>

<?php require '../includes/add_inscription.php' ?>

<!-- Les liens CSS -->
<title> Inscription </title>
<link rel="stylesheet" type="text/css" href="../css/inscription.css">

<body>

  <!-- Ligne bootstrap (row) -->
  <div class="row no-gutters">

    <!-- Colonne de gauche --> 
    <div class="col-xl-5 fromage-simplon">

      <div class="texteaccueil text-center">

        <!--si une session est ouverte -->

        <img src ="../assets/img_accueil/eurofro.png" alt="image de fromage europeen" />
        <h1 class="fromagerie ">Fromagerie Simplon</h1>
        <h5 class="simplon ">Inscrivez-Vous</h5>
        <a href="pagefromages_view.php" class="btn btn-sm animated-button victoria-one" >Commander</a>


      </div>
    </div>


    <!-- Colonne de droite -->  

    <div class="col-xl-7">

      <div class="inscription text-center ">

        <?php require '../includes/navbar.php' ?>
        
        <h2>INSCRIPTION</h2>

        <div class="formulaire"> 
          

          <?php require '../includes/formulaire_inscription.php' ?>

        </div>


        <!-- si erreur renvoie un message d'alerte -->


        
        <?php if(isset($erreur)){ ?>

          <div class="alert alert-danger" role="alert">
           <?= $erreur; ?>
         </div>





         <!-- si inscription reussit renvoie ce message -->
         <?php



       } else if(isset($success)) {
        ?>
        <div class="alert alert-success" role="alert">

          <strong>Vous êtes inscrit!</strong> Bienvenue a Simplon Fromage  <a href="connexion_view.php" class="alert-link">  Connectez-vous dès maintenant</a>.

        </div>

      <?php }else {} ?>



    </div>
  </div>
</div>
</body>
<?php require '../includes/footer.php'; ?>