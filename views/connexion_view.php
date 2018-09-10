
<?php $title = 'Se connecter'; ?>
<?php require '../includes/head.php'; ?>
<?php require '../includes/add_connexion.php' ?>

<!-- Les liens CSS -->
<link rel="stylesheet" type="text/css" href="../css/connexion.css">

<body>

  <!-- Ligne bootstrap (row) -->
  <div class="row no-gutters">

    <!-- Colonne de gauche --> 
    <div class="col-xl-5 fromage-simplon">

      <div class="texteaccueil text-center">

         <img src ="../assets/img_accueil/eurofro.png" alt="image de fromage europeen" />
        <h1 class="fromagerie ">Fromagerie Simplon</h1>
        <h5 class="simplon ">Connectez-Vous</h5>
        <a href="pagefromages_view.php" class="btn btn-sm animated-button victoria-one" >Commander</a>


      </div>
    </div>


    <!-- Colonne de droite -->  
    <div class="col-xl-7">

      <div class="connexion text-center ">

        <!-- Navbar --> 


        <!-- appel de la navbar.php -->
        <?php require '../includes/navbar.php' ?>

        <h2>CONNEXION</h2>



        <div class="formulaire">

          <form action="" method="POST" class="form-line mx-auto">
           <div class="form-group">
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Votre Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre Mot de Passe">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control" id="valideconnexion" name="formconnexion" value="Se connecter" >
          </div>
        </form>
      </div>

    </div>

  </div>
</div>

<?php if(isset($erreur)){ ?>
  <div class="alert alert-danger" role="alert">
   <?= $erreur; ?>
 </div>
 <?php
} ?>

</body>
<?php require '../includes/footer.php'; ?>