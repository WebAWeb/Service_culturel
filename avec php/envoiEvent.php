<?php
	include("head.php");
	if(isset($_POST["check"]))
	{
		$okEvent = true;
		if($okEvent && (!isset($_POST['titre']) || empty($_POST['titre'])))
		{
			$okEvent = false;
		}
		var_dump($okEvent);
		if($okEvent && (!isset($_POST['lieu']) || empty($_POST['lieu'])))
		{
			$okEvent = false;
		}
		var_dump($okEvent);
		if($okEvent && (!isset($_POST['date']) || empty($_POST['date'])))
		{
			$okEvent = false;
		}
		var_dump($okEvent);
		if($okEvent && (!isset($_POST['img']) || empty($_POST['img'])))
		{
			$okEvent = false;
		}
		var_dump($okEvent);
		if($okEvent && (!isset($_POST['descript']) || empty($_POST['descript'])))
		{
			$okEvent = false;
		}
		var_dump($okEvent);
		if($okEvent)
		{
			$recup=$connexion->prepare("SELECT COUNT(*) FROM event WHERE titre=:titreS");
			$recup->bindParam(':titreS', $_POST['titre'], PDO::PARAM_STR, 200);
			$recup->execute();
			$donnee = $recup->fetch();
			$_POST['titreUse'] = $donnee[0];
			
			if($_POST['titreUse']>0)
			{
				$okEvent=false;
			}
		}
		if($okEvent)
		{
			$dossier = 'ressourceEvent/';
			$fichier = basename($_FILES['img']['name']);
			$taille_maxi = 100000;
			$taille = filesize($_FILES['img']['tmp_name']);
			$extensions = array('.png', '.gif', '.jpg', '.jpeg');
			$extension = strrchr($_FILES['img']['name'], '.'); 
			//Début des vérifications de sécurité...
			if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
			{
			     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
			}
			if($taille>$taille_maxi)
			{
			     $erreur = 'Le fichier est trop gros...';
			}
			if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
			{
			     //On formate le nom du fichier ici...
			     $fichier = strtr($fichier, 
			          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			     if(move_uploaded_file($_FILES['img']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			     {
			          echo 'Upload effectué avec succès !';
			     }
			     else //Sinon (la fonction renvoie FALSE).
			     {
			          echo 'Echec de l\'upload !';
			     }
			}
			$imgPath = $dossier . $fichier;
			$maj = $connexion->prepare('INSERT INTO user (titre,date,description,lieu,image) VALUES (:titreS, :dateS, :descriptionS, :lieuS, :imageS)');
			$maj->bindParam(':titreS', $_POST['titre'], PDO::PARAM_STR, 100);
			$maj->bindParam(':dateS', $_POST['mdp'], PDO::PARAM_STR, 100);
			$maj->bindParam(':desciptionS', $_POST['descript'], PDO::PARAM_STR, 150);
			$maj->bindParam(':lieuS', $_POST['lieu'], PDO::PARAM_STR, 100);
			$maj->bindParam(':imageS', $imgPath, PDO::PARAM_STR, 100);
			$maj->execute();
		}
	}
	if(isset($okEvent) && $okEvent==false)
	{
		?>
		<h1>ERREUR</h1>
		<?php
	}
	else if(isset($okEvent) && $okEvent==true)
	{
		?>
		<h1>SUCCES</h1>
		<?php
	}
	?>
	<form action="envoiEvent.php" method="POST">
		titre : <input type="text" name="titre"></input>
		<?php
			if(isset($_POST['titreUse']) && $_POST['titreUse']>0)
			{
				?><p>L'identifiant est déjà utilisé</p><?php
			}
			else if(isset($okEvent) && (!isset($_POST['titre']) || empty($_POST['titre'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>lieu : <input type="text" name="lieu"></input>
		<?php
			if(isset($okEvent) && (!isset($_POST['lieu']) || empty($_POST['lieu'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>date : <input type="date" name="date"></input>
		<?php
			if(isset($okEvent) && (!isset($_POST['date']) || empty($_POST['date'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
	</br>image : <input type="file" name="img"></input>
		<?php
			if(isset($okEvent) && (!isset($_POST['img']) || empty($_POST['img'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		</br>description : <input type="textArea" name="descript"></input>
		<?php
			if(isset($okEvent) && (!isset($_POST['descript']) || empty($_POST['descript'])))
			{
				?><p>Vous devez renseigner ce champs</p><?php
			}
		?>
		<button type="submit" name="check">valider</button>
	</form>
</body>
</html>