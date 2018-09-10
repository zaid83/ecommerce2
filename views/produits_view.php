<?php $title = 'Nos produits'; ?>

<?php require '../includes/head.php'; ?>


<link rel="stylesheet" href="../css/nosproduits.css">


<body>



  <?php require '../includes/navbar.php'; ?>


  <!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active"> 
      <img class="d-block w-100" src="../assets/img_nosproduits/carousel4.jpg" alt="First slide">
       <div class="mask rgba-black-light"></div>
                 <div class="carousel-caption">
        <h3 class="h3-responsive">Nos produits</h3>
        <p>En provenance de l'Europe toute entière<br>
          et regroupant des produits locaux,<br>
          nos fromages sont de qualité et<br>
          vous feront voyager dans 
          les pays du continent</b>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/img_nosproduits/carousel2.jpg" alt="Second slide">
            <div class="carousel-caption">
        <h3 class="h3-responsive">Nos types de fromages</h3>
<p>Nous disposons de tout type de produit,<br> en partant du fromage de brebis au<br> fromage de chèvres ainsi que du <br> fromage au lait de vache.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/img_nosproduits/carousel5.jpg" alt="Third slide">
                  <div class="carousel-caption">
        <h3 class="h3-responsive">Nos types de fromages</h3>
<p>Nous disposons de tout type de produit,<br> en partant du fromage de brebis au<br> fromage de chèvres ainsi que du <br> fromage au lait de vache.</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->

  <!--/.Controls-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="../assets/img_nosproduits/carousel1.jpg"
        class="img-fluid"></li>
    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="../assets/img_nosproduits/carousel2.jpg"
        class="img-fluid"></li>
    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="../assets/img_nosproduits/carousel3.jpg"
        class="img-fluid"></li>
  </ol>
</div>



</div>
</body>

<?php require '../includes/footer.php'; ?>
</html>
