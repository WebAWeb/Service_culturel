<?php
	include("head.php");
	?>
	
	<!-- CONTAINER INVISIBLE POUR L'ESPACE DE LA BANNIERE-->
	<div class="invisible">
	</div>
	
	<!-- CONTAINER BANNIERE -->
	<div>
		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item"><img src="img/1.jpg" height="300px"></div>
			<div class="item"><img src="img/2.jpg" height="300px"></div>
			<div class="item"><img src="img/3.jpg" height="300px"></div>
		</div>
	</div>
	
	<!-- CONTAINER INFORMATION -->
	<div class="row" id="base">
	
	<!-- CONTAINER SERVICE CULTUREL -->
		<div class="col-xs-12 col-sm-5 col-md-5 containerbis">
			<h1 class="titre"> QU'EST CE QUE LE SERVICE CULTUREL ?</h1>
				<p class="text">
					Le service culturel de Paris 13 propose tout au long de l’année :</br></br>
					<span>#</span> Des ateliers de pratique artistique (langue des signes, théâtre, écriture, musique,
					chant, arts plastiques, vidéo, histoire de l’art, histoire du cinéma).</br>
					Un accompagnement aux projets artistiques des étudiants et du personnel.</br>
					<span>#</span> Des spectacles sur les campus (concerts, cirque, danse), des expositions, des événements exceptionnels (bal, scènes ouvertes)</br>
					<span>#</span> Des spectacles hors les murs dans les théâtres partenaires (MTD, MC93, TGP, Comédie Française,
					Théâtre national de Chaillot, Théâtre de la Ville, Théâtre du Rond Point, La Villette, le 104, la Gaîté Lyrique…)
				</p>
				
			<h2 class="soustitre">Adhésion:</h2>
				<p class="text">10€ pour les étudiants et 15€ pour les personnel.</p>
				
			<h2 class="soustitre">Où nous trouver:</h2>
				<p class="text">
					Campus de Villetaneuse : tous les jours de 10h à 17h</br>
					Café expo 1er étage / 99, avenue JB Clément, 93430 Villetaneuse / 01 49 40 38 27</br>
					Campus de Bobigny : tous les jours de 10h à 17h</br>
					Foyer de l’Illustration / 1 rue de Chablis, 93017 Bobigny / 01 48 38 88 29</br>
				</p>
			<a href="inscription.php" class="inscriptionlien">Inscription au service culturel</a>
		</div>
		
	<!-- CONTAINER ESPACE VIDE MILIEU -->	
		<div class="col-xs-12 col-sm-12 col-md-2" >
		</div>
	
	<!-- CONTAINER AGENDA -->
		<div class="col-xs-12 col-sm-5 col-md-4 containerbis">
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		</div>
	
	<!-- CONTAINER ESPACE VIDE MILIEU -->	
		<div class="col-xs-12 col-sm-12 col-md-2" >
		</div>
		
	<!-- CONTAINER TWITTER -->
		<div class="col-xs-12 col-sm-5 col-md-4 containerbis" >
		<a class="twitter-timeline" height="300px" href="https://twitter.com/demoparis13" data-widget-id="573068769205092352">Tweets de @demoparis13</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		
		
	</div>	
	
	<!-- CONTAINER FOOTER -->
	<footer>
		<p class="textfooter">Contact : Villetaneuse : 99 avenue JB Clément | 01.49.40.38.27</br>
		Bobigny : 1 rue de Chablis | 01.48.38.88.29 </p>
		<img src="img/paris13logo.png"  class="imgfooter" />
		<p class="copyright">Copyright © 2015 Université Paris 13. Tous droits réservés.</p>
	</footer>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
 
		  $("#owl-demo").owlCarousel({
		 
			  navigation : true, // Show next and prev buttons
			  slideSpeed : 300,
			  paginationSpeed : 400,
			  singleItem:true
		 
			  // "singleItem:true" is a shortcut for:
			  // items : 1, 
			  // itemsDesktop : false,
			  // itemsDesktopSmall : false,
			  // itemsTablet: false,
			  // itemsMobile : false
		 
		  });
		 
		});
	</script>
</body>
</html>
</body>
</html>