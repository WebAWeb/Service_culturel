<?php
	include("head.php");
	if(isset($_POST["check"]))
	{
		$okInscr = true;
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
			$recup->bindParam(':idS', $_POST['id'], PDO::PARAM_STR, 100);
			$recup->execute();
			$donnee = $recup->fetch();
			$_POST['idUse'] = $donnee[0];
			$recup=$connexion->prepare("SELECT COUNT(*) FROM user WHERE mail=:mailS");
			$recup->bindParam(':mailS', $_POST['mail'], PDO::PARAM_STR, 150);
			$recup->execute();
			$donnee = $recup->fetch();
			$_POST['mailUse'] = $donnee[0];
			if($_POST['idUse']>0 || $_POST['mailUse']>0)
			{
				$okInscr=false;
			}
		}
		if($okInscr)
		{
			$maj = $connexion->prepare('INSERT INTO user (id, mdp, mail, nom, prenom, statut, campus, droit) VALUES (:idS, :mdpS, :mailS, :nomS, :prenomS, :statutS, :campusS, "0")');
			$maj->bindParam(':idS', $_POST['id'], PDO::PARAM_STR, 100);
			$maj->bindParam(':mdpS', $_POST['mdp'], PDO::PARAM_STR, 100);
			$maj->bindParam(':mailS', $_POST['mail'], PDO::PARAM_STR, 150);
			$maj->bindParam(':nomS', $_POST['nom'], PDO::PARAM_STR, 100);
			$maj->bindParam(':prenomS', $_POST['prenom'], PDO::PARAM_STR, 100);
			$maj->bindParam(':statutS', $_POST['statut'], PDO::PARAM_STR, 100);
			$maj->bindParam(':campusS', $_POST['campus'], PDO::PARAM_STR, 100);
			$maj->execute();
		}
	}
	if(isset($okInscr) && $okInscr==false)
	{
		?>
		<h1>ERREUR</h1>
		<?php
	}
	else if(isset($okInscr) && $okInscr==true)
	{
		?>
		<h1>SUCCES</h1>
		<?php
	}
	?>
	<form action="inscription.php" method="POST">
		identifiant : <input type="text" name="id"></input>
		<?php
			if(isset($_POST['idUse']) && $_POST['idUse']>0)
			{
				?><p>L'identifiant est déjà utilisé</p><?php
			}
			else if(isset($okInscr) && (!isset($_POST['id']) || empty($_POST['id'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>mot de passe : <input type="password" name="mdp"></input>
		<?php
			if(isset($okInscr) && (!isset($_POST['mdp']) || empty($_POST['mdp'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>mail : <input type="text" name="mail"></input>
		<?php
			if(isset($_POST['mailUse']) && $_POST['mailUse']>0)
			{
				?><p>Le mail est déjà utilisé</p></br><?php
			}
			else if(isset($okInscr) && (!isset($_POST['mail']) || empty($_POST['mail'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?> 
		</br>nom : <input type="text" name="nom"></input>
		<?php
			if(isset($okInscr) && (!isset($_POST['nom']) || empty($_POST['nom'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>prenom : <input type="text" name="prenom"></input>
		<?php
			if(isset($okInscr) && (!isset($_POST['prenom']) || empty($_POST['prenom'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>statut : 
		<select name="statut">
			<option value="etudiant">étudiant</option>
			<option value="personnel universitaire">personnel universitaire</option>
		</select></br>
		</br>campus :
		<select name="campus">
			<option value="Bobigny">Bobigny</option>
			<option value="Villetaneuse">Villetaneuse</option>
		</select></br>
		<button type="submit" name="check">valider</button>
	</form>
</body>
</html>