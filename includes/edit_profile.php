<?php

if(!isset($_SESSION['id'])) {
	header("Location: connexion_view.php");
}
if(isset($_POST['formedit'])) {

	
	if(isset($_POST["editNom"]) AND !empty($_POST['editNom']) AND $_POST["editNom"] != $_SESSION['nom']){

		$newNom = ($_POST['editNom']);
		$insertNom = $BDD->query("UPDATE client SET nom_client = ? WHERE id_client = ?",array($newNom, $_SESSION['id']));
		
		header("Location: profil_view.php?id=".$_SESSION['id']);
	}

	if(isset($_POST["editPrenom"]) AND !empty($_POST['editPrenom']) AND $_POST["editPrenom"] != $_SESSION['prenom']){

		$newPrenom = ($_POST['editPrenom']);
		$insertPrenom = $BDD->query("UPDATE client SET Prenom_client = ? WHERE id_client = ?",array($newPrenom, $_SESSION['id']));
		
		header("Location: profil_view.php?id=".$_SESSION['id']);
	}

	if(isset($_POST["editMail"]) AND !empty($_POST['editMail']) AND $_POST["editMail"] != $_SESSION['mail']){

		$newMail = ($_POST['editMail']);
		$insertMail = $BDD->query("UPDATE client SET Mail_client = ? WHERE id_client = ?",array($newmail, $_SESSION['id']));
		
		header("Location: profil_view.php?id=".$_SESSION['id']);
	}

	if(isset($_POST["editAdresse"]) AND !empty($_POST['editAdresse']) AND $_POST["editAdresse"] != $_SESSION['Adresse']){

		$newAdresse = ($_POST['editAdresse']);
		$insertAdresse = $BDD->query("UPDATE client SET Adresse_client = ? WHERE id_client = ?",array($newAdresse, $_SESSION['id']));

		header("Location: profil_view.php?id=".$_SESSION['id']);
	}

	if(isset($_POST["editCP"]) AND !empty($_POST['editCP']) AND $_POST["editCP"] != $_SESSION['CP']){

		$newCP = ($_POST['editCP']);
		$insertCP = $BDD->query("UPDATE client SET CP_client = ? WHERE id_client = ?",array($newCP, $_SESSION['id']));

		header("Location: profil_view.php?id=".$_SESSION['id']);
	}
	if(isset($_POST["editVille"]) AND !empty($_POST['editVille']) AND $_POST["editVille"] != $_SESSION['ville']){

		$newVille = ($_POST['editVille']);
		$insertVille = $BDD->query("UPDATE client SET Ville_client = ? WHERE id_client = ?",array($newVille, $_SESSION['id']));

		header("Location: profil_view.php?id=".$_SESSION['id']);
	}
	if(isset($_POST["editTel"]) AND !empty($_POST['editTel']) AND $_POST["editTel"] != $_SESSION['tel']){

		$newTel = ($_POST['editTel']);
		$insertTel = $BDD->query("UPDATE client SET Tel_client = ? WHERE id_client = ?",array($newTel, $_SESSION['id']));
		header("Location: profil_view.php?id=".$_SESSION['id']);
	}


	if(isset($_POST["editpass"]) AND !empty($_POST['editpass'])){

		$newpass = ($_POST['editpass']);
		$insertpass = $BDD->query("UPDATE client SET mdp_client = ? WHERE id_client = ?",array($newpass, $_SESSION['id']));
		header("Location: profil_view.php?id=".$_SESSION['id']);
	}

	if(isset($_POST["monfichier"]) AND !empty($_POST['monfichier'])){

		$newfichier = ($_POST['monfichier']);
		$insertfichier = $BDD->query("UPDATE client SET img_client = ? WHERE id_client = ?",array($newfichier, $_SESSION['id']));
		header("Location: profil_view.php?id=".$_SESSION['id']);
	}

}
?>