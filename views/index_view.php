  <?php $title = "Page d'accueil"; ?>

  <?php require '../includes/head.php' ?>

  <body>

    <!-- Ligne bootstrap (row) -->
    <div class="row">

      <!-- Colonne de gauche --> 
      <div class="col-xl-5 fromage-simplon">

        <div class="texteaccueil text-center">

          <!--si une session est ouverte -->
          
          <?php if(isset($_SESSION['id'])){ ?>
            <h3 style="color:white">Bienvenue <span class="connecte" ><?php echo htmlspecialchars($_SESSION['nom']); ?></span><a href="profil_view.php"><i class="fas fa-user-circle"></i></a></h3> 

          <?php } ?>
            <img src ="../assets/img_accueil/eurofro.png" alt="image de fromage europeen" />
          <h1 class="fromagerie wow slideInLeft ">Fromagerie Simplon</h1>
          <h5 class="simplon wow slideInLeft ">Vente de fromages européens</h5>

          <p class="boutonentrertexte">
            <a href="pagefromages_view.php" class="btn btn-sm animated-button victoria-one" >Commander</a>
        
         </p>
       </div>
     </div>


     <!-- Colonne de droite -->  
     <div class="col-xl-7">

      <div class="imgaccueil">

        <!-- Navbar --> 


        <!-- appel de la navbar.php -->
        <?php require '../includes/navbar.php'; ?>

        <!-- Image de droite -->              
        <img src="../assets/img_accueil/background1.jpg" alt="backgroundimage" class="imageaccueil img-fluid"> <!-- "img-fluid" propriete bootstrap qui rend l'image responsive --> 

      </div>
    </div>


  </div>

</body>

