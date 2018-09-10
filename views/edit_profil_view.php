
<?php $title = 'Editer Votre Profil'; ?>
<?php require '../includes/head.php' ?>



<!-- Les liens CSS -->
<title> Profil </title>
<link rel="stylesheet" type="text/css" href="../css/inscription.css">



<?php require'../includes/edit_profile.php' ?>


<body>

	<!-- Ligne bootstrap (row) -->
	<div class="row no-gutters">

		<!-- Colonne de gauche --> 
		<div class="col-xl-5 fromage-simplon">

			<div class="texteaccueil text-center">

				<!--si une session est ouverte -->

				<?php if(isset($_SESSION['id'])){ ?>
					<h3 style="color:white">Bienvenue <span class="connecte" ><?php echo htmlspecialchars($_SESSION['nom']); ?></span><a href="profil_view.php"><i class="fas fa-user-circle"></i></a></h3> 

				<?php } ?>
				<img src ="../assets/img_accueil/eurofro.png" alt="image de fromage europeen" />
				<h1 class="fromagerie ">Fromagerie Simplon</h1>
				<h5 class="simplon ">Vente de fromages européens</h5>
				<a href="pagefromages_view.php" class="btn btn-sm animated-button victoria-one" >Commander</a>


			</div>
		</div>



		<!-- Colonne de droite -->  

		<div class="col-xl-7">
			<div class="profile text-center ">

				<?php require '../includes/navbar.php' ?>
				
				<h2>Mon Profil</h2>
				<!-- Image de profil session img correspond a l'image de session-->
				<img src="<?php echo $_SESSION['img']; ?>" width="250" height="250" alt="image de profil">

				<br>
				<br>
				<br>

				<form action="" method="POST">


					<!-- profil de la session -->
					<table class="table table-striped table-dark tableprofile">

						<tr>
							<td class="label">IMAGE: </td>
							<td><input type="text" placeholder="Mettez un lien image" name="monfichier"></td>
						</tr>

						<tr>
							<td class="label">NOM: </td>
							<td><input type="text" name="editNom" placeholder="nom" value="<?php echo $_SESSION['nom']; ?>"></td>
						</tr>
						
						<tr>
							<td class="label">PRENOM: </td>
							<td><input type="text" name="editPrenom" placeholder="prenom" value="<?php echo $_SESSION['prenom']; ?>"></td>
						</tr>
						<tr>
							<tr>
								<td class="label">MOT DE PASSE </td>
								<td><input type="text" name="editpassword" placeholder="password" value=""></td>
							</tr>
							<tr>
								<td class="label">EMAIL: </td>
								<td><input type="text" name="editMail" placeholder="email" value="<?php echo $_SESSION['mail']; ?>"></td>
							</tr>
							<tr>
								<td class="label">ADRESSE: </td>
								<td><input type="text" name="editAdresse" placeholder="adresse" value="<?php echo $_SESSION['adresse']; ?>"></td>
							</tr>
							<tr>
								<td class="label">CP: </td>
								<td><input type="text" name="editCP" placeholder="codepostal" value="<?php echo $_SESSION['cp']; ?>"></td>
							</tr>
							<tr>
								<td class="label">VILLE: </td>
								<td><input type="text" name="editVille" placeholder="ville" value="<?php echo $_SESSION['ville']; ?>"></td>
							</tr>
							<tr>
								<td class="label">TEL: </td>
								<td><input type="text" name="editTel" placeholder="telephone" value="<?php echo $_SESSION['telephone']; ?>"></td>
							</tr>

						</table>

						<button class="btn btn-success" ><input type="submit" class="form-control" id="validedit" name="formedit" value="Modifier" ></button>
					</form>