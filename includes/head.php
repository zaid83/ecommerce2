  <?php
  session_start();
  require  "../class/db.class.php";
  require  "../class/panier.class.php";

  $BDD = new BDD(); 
  $panier = new panier($BDD);


  ?>

  <!-- CETTE PAGE EST LA PARTIE HEAD DE TOUTES LES PAGES VIEWS -->

  <html>
  <head>

   <meta charset="utf-8">
   
   <meta name="viewport" content="">
   <title> <?= $title ?> </title>

   <!--Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

   <!-- Les liens CSS -->
    <link rel="stylesheet" href="../css/buttons.css">
   <link rel="stylesheet" type="text/css" href="../css/styleacceuil.css">
   <link rel="stylesheet" type="text/css" href="../css/responsive-accueil.css">
   <link rel="stylesheet" href="../css/animate.css">
   <link rel="stylesheet" href="../css/footer.css">


   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  

   <!-- Les polices de texte -->
   <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Cinzel|Noticia+Text" rel="stylesheet"> 

   <!-- Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

   <script src="../js/wow.min.js"></script>
   <script>
    new WOW().init();
  </script>

  
</head>