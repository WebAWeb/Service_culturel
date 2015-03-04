<?php
	include("connexion.inc");
	session_start();
	if(isset($_POST["logout"]))
	{
		unset($_SESSION['login']);
		unset($_SESSION['userName']);
		unset($_SESSION['droit']);
	}
	

	function printMire()
	{
		?>
		<form action="login.php" method="POST">
			<input type="text" name="id"/>
			<input type="text" name="mdp"/>
			<button type="submit"/>Connexion</button>
		</form>
		<?php
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Service Culturel</title>
</head>

<body>
	<?php
		if(isset($_SESSION['login']))
		{
			if($_SESSION['login']==true)
			{
				?>
				<p> bonjour <?php echo($_SESSION['userName']); ?></p>
				<form action="index.php" method="POST">
					<button type='submit' name='logout'>Deconnection</button>
				</form>
				<?php
			}
			else
			{
				printMire();
			}
		}
		else
		{
			printMire();
		}
	?>
</body>
</html>
