<?php
	include("connexion.inc");
	session_start();
	$idS = $_POST['id'];
	$mdpS = $_POST['mdp'];
	$goto = $_POST['goto'];
	$recup = $connexion->prepare("SELECT * FROM user WHERE id=:idS");
	$recup->bindParam(':idS', $idS, PDO::PARAM_STR, 100);
	$recup->execute();
	
	$donnee = $recup->fetch();
	var_dump($donnee);

	if(!empty($donnee) && $idS=$donnee['id'] && $mdpS=$donnee['mdp'])
	{
		$_SESSION['login']=true;
		$_SESSION['userName']=$donnee['prenom'];
		$_SESSION['droit']=$donnee['droit'];
		header("location:".$goto);
		exit();
	}
	else
	{
		?>
		<!doctype html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Service Culturel</title>
		</head>

		<body>
			<form action="login.php" method="POST">
				<input type="text" name="id"/>
				<input type="text" name="mdp"/>
				<button type="submit">Connexion</button>
			</form>
			<p class="error">Les information saisies sont erronées</p>
			<button type="button">
				<a href="index.php">retour à l'accueil</a>
			</button>
		</body>
		<?php
	}
	
?>