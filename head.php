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
		<form action="login.php" method="POST" id="mire">
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
	<script src="script/feat.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="test.css" rel="stylesheet"></link>
</head>

<body>
	<a href="index.php">accueil</a>
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
				?>
				<button type="button" onclick="showCo()">Connexion</button>
				<div id="mire">
					<?php printMire(); ?>
				</div>
				<?php
			}
		}
		else
		{
			?>
			<button type="button" onclick="showCo()">Connexion</button>
			<div id="mire">
				<?php printMire(); ?>
			</div>
			<?php
		}
