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
			<input type="text" name="id" value="identifiant" onclick="if(this.value=='identifiant'){this.value='';}" onBlur="if(this.value==''){this.value='identifiant';}"></input>
			<input type="password" name="mdp"  value="mot de passe" onclick="if(this.value=='mot de passe'){this.value=''};" onBlur="if(this.value==''){this.value='mot de passe';}"></input>
			<input type="hidden" name="goto" value=<?php echo($_SERVER['REQUEST_URI']); ?>></input>
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
	<link href="test.css" rel="stylesheet"></link>
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/owl.carousel.js"></script>
</head>

<body>

	<!--  CONTAINER BARRE DE MENU -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
		<div class="container" id="header">
			<div class="navbar-header">
				<img src="img/LogoServiceCulturelDEF.png" width="100px" height="80px" alt="logo" />
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
			</div>
			<div class="navbar-collapse collapse">
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php" class="navbar-brand"><i class="fa fa-home"> Service culturel</i></a>
						</li>
						<li>
							<a href="evenement.php" class="lien navbar-brand">Evenement</a>
						</li>
						<li>
							<a href="campusbobigny.php" class="lien navbar-brand">Campus Bobigny</a>
						</li>
						<li>
							<a href="campusvilletaneuse.php" class="lien navbar-brand">Campus Villetaneuse</a>
						</li>
						<li>
							<a href="vosprojets.php" class="lien navbar-brand">Vos projets</a>
						</li>
						<li>
							<!--<a href="#" class="lien navbar-brand">Connexion</a>-->
					
							<?php
								if(isset($_SESSION['login']))
								{
									if($_SESSION['login']==true)
									{
										?>
										<p> bonjour <?php echo($_SESSION['userName']); ?></p>
										<form action=<?php echo($_SERVER['REQUEST_URI']); ?> method="POST">
											<button type='submit' class="lien navbar-brand deco" name='logout'>Deconnection</button>
										</form>
										<?php
									}
									else
									{
										?>
										<a type="button" class="lien navbar-brand" onclick="showCo()">Connexion</a>
										</br><div id="mire">
											<?php printMire(); ?>
										</div>
										<?php
									}
								}
								else
								{
									?>
									<a type="button" class="lien navbar-brand" onclick="showCo()">Connexion</a>
									</br><div id="mire">
										<?php printMire(); ?>
									</div>
									<?php
								}
							?>
						</li>
						<?php
							if(isset($_SESSION['login']) && $_SESSION['login']==true)
							{
								?>
								<p> bonjour <?php echo($_SESSION['userName']); ?></p>
								<?php
							}
							if(isset($_SESSION['droit']) && $_SESSION['droit']==2)
							{
								?>
								<a href="envoiEvent.php">poster un artice</a>
								<?php
							}
							?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php" ><img src="img/drapeau_francais.png" width="30px" height="20px"  /></a></li>
						<li><a href="indexE.html" ><img src="img/drapeau_anglais.png" width="30px" height="20px"  /></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
