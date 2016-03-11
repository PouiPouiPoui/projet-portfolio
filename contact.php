<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Fabien Brossard - Designer Graphique - message envoyé</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="page">

		
	<div class="page">
		<header class="traitement">
			<a href="index.html">
				<h1 class="header"><img src="image/logo-hover.png" alt=""></h1>
            </a>
				<p class="header">traitement</p>
			
		</header>

		<div class="traitement">
			<p>Merci <?= $_POST['prenom']. ' ' .$_POST['nom'] ?> pour votre super message.</p>

			<p><a href="index.html">Retour au merveilleux accueil du Scooby Gang</a></p>
		</div>
		
			<?php
	ini_set('sendmail_from','contact@fabienbrossard.fr');
		extract($_POST);
	if(isset($_POST)) {
		if(!empty($nom) && !empty($email) && !empty($message)){
			$destinataire = "contact@fabienbrossard.fr";
			$sujet = "formulaire de contact portfolio";
			$msg = "un nouveau message est arrivé \n
			Nom : $nom \n
			Email : $email \n
			Message : $message";
			$entete="";
			mail($destinataire, $sujet, $msg);
			echo "<p>le mail à bien été envoyé</p>";
		}
		else{
			echo "vous n'avez pas rempli tous les champs";
		}
	}

?>
			
	</div>
	
</body>
</html>


