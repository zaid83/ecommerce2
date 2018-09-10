<?php require '../includes/head.php' ?>

<?php  
    
    	$delete = $_GET['delete'] ;

	$del = $BDD->query("DELETE FROM client  WHERE id_client = ?",array($delete));
	
	header("Location: ../views/deconnexion.php");


?>