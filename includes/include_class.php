<?php
session_start();
require  "../class/db.class.php";
require  "../class/panier.class.php";

$BDD = new BDD(); 
$panier = new panier($BDD);


?>

<!-- CETTE PAGE PERMET D'INSTANCIER LES CLASSES -->