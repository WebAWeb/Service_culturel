<?php
	include("head.php");
	if(isset($_POST["check"]))
	{
		$okInscr = true;
		var_dump($_POST);
		if($okInscr && (!isset($_POST['id']) || empty($_POST['id'])))
		{
			$okInscr = false;
		}
		var_dump($okInscr);
		if($okInscr && (!isset($_POST['mdp']) || empty($_POST['mdp'])))
		{
			$okInscr = false;
		}
		var_dump($okInscr);
		if($okInscr && (!isset($_POST['nom']) || empty($_POST['nom'])))
		{
			$okInscr = false;
		}
		var_dump($okInscr);
		if($okInscr && (!isset($_POST['prenom']) || empty($_POST['prenom'])))
		{
			$okInscr = false;
		}
		var_dump($okInscr);
		if($okInscr && (!isset($_POST['mail']) || empty($_POST['mail'])))
		{
			$okInscr = false;
		}
		var_dump($okInscr);
		/*if($okInscr && (!isset($_POST['satut']) || empty($_POST['satut'])))
		{
			echo("test");
			$okInscr = false;
		}
		var_dump($okInscr);
		if($okInscr && (!isset($_POST['campus']) || empty($_POST['campus'])))
		{
			$okInscr = false;
		}*/
		var_dump($okInscr);
		if($okInscr)
		{
			$recup=$connexion->prepare("SELECT COUNT(*) FROM user WHERE id=:idS");
			//$recup=$connexion->prepare("SELECT COUNT(*) FROM user WHERE mail=:mailS");
			$recup->bindParam(':idS', $_POST['id'], PDO::PARAM_STR, 100);
			//$recup->bindParam(':mailS', $_POST['mail'], PDO::PARAM_STR, 150);
			$recup->execute();
			$donnee = $recup->fetchAll();
			var_dump($donnee);
		}
	}
	if(isset($okInscr) && $okInscr==false)
	{
		?>
		<h1>ERREUR</h1>
		<?php
	}
	?>
	<form action="inscription.php" method="POST">
		identifiant : <input type="text" name="id"></input></br> 
		mot de passe : <input type="password" name="mdp"></input></br>
		mail : <input type="text" name="mail"></input></br>
		nom : <input type="text" name="nom"></input></br>
		prenom : <input type="text" name="prenom"></input></br>
		statut : 
		<select name="statut">
			<option value="etudiant">étudiant</option>
			<option value="personnel universitaire">personnel universitaire</option>
		</select></br>
		campus :
		<select name="campus">
			<option value="Bobigny">Bobigny</option>
			<option value="Villetaneuse">Villetaneuse</option>
		</select></br>
		<button type="submit" name="check">valider</button>
	</form>
</body>
</html>