<?php 
	include("head.php");
	?>
	
	<!-- CONTAINER INVISIBLE POUR L'ESPACE DE LA BANNIERE-->
	<div class="invisible">
	</div>
	
	<!-- CONTAINER INFORMATION -->
	<div class="row" id="base">
	
	<!-- CONTAINER SERVICE CULTUREL -->
		<div class="col-xs-12 col-sm-5 col-md-5 containerbis">
			<h1 class="titre"> Aides aux projets étudiants</h1>
				<p class="text">
					Vous avez des projets et vous voulez en faire profiter les autres étudiants ?
					Sport, culture, rencontres étudiantes, bénévolat ... toutes vos idées peuvent être soutenues.
				</p>
				<p class="text">
					Le FSDIE
				</p>
				<p class="text">
					La comission sociale d'établissement est chargée de la gestion du fonds de solidarité et de développement des initiatives étudiantes. 
					Le texte de référence est la circulaire du ministère de l'enseignement supérieur et de la recherche n°2011-1021 du 3 novembre 2011.
				</p>
				<p class="text">
					Elle est composée de personnalités qualifées et d'étudiants. Les credits du FSDIE, alimentés par une partie des droits d'inscription acquittés par les étudiants, 
					sont affectés à l'aide aux projets étudiants.
				</p>
				<p class="text">
					C'est la structure privilégiée pour susciter et concrétiser les initiatives étudiantes dans divers domaines : culturel, artistique, sportif, humanitaire,civique ...
				</p>
				<p class="text">
					La commission sociale se réunit plusieurs fois an pour examiner les demandes de financement de projets collectifs présentés par des étudiants.
				</p>
				<p class="text">
					Prochaine commission FSDIE : 4 février 2015. Date limite de dépôt des dossiers : 27 janviers 2015.
				</p>
				<p class="text">
					Avant tout dépôt d'un dossier de demande de financement, le projet devra être soumis au Bureau des formations et de la vie universitaire (BFVU). Aucun dossier ne sera
					présenté en commission FSDIE sans examen préalable par le VPCFVU et le chargé de mission vie étudiante.
				</p>
		</div>
		

	<!-- CONTAINER TELECHARGEMENT -->
		<div class="col-xs-12 col-sm-5 col-md-4 containerbis">
			<div class="containerdl">
				<h1 class="titre"> Téléchargements </h1>
				<a href="#" class="lienpdf">
					<img src="img/imgpdf.jpg" class="imgpdf" />
					<p class="textpdf">Charte FSDIE</p>
					<p class="textclear"> </p>
				</a>
				<a href="#" class="lienpdf">
					<img src="img/imgpdf.jpg" class="imgpdf" />
					<p class="textpdf">Dossier FSDIE</p>
					<p class="textclear"> </p>
				</a>
				<a href="#" class="lienpdf">
					<img src="img/imgpdf.jpg"  class="imgpdf" />
					<p class="textpdf">Financement</p>
					<p class="textclear"> </p>
				</a>
				<a href="#" class="lienpdf">
					<img src="img/imgpdf.jpg"  class="imgpdf" />
					<p class="textpdf">Calendrier des commissions 2015</p>
					<p class="textclear"> </p>
				</a>
			</div>
			<div class="containerinfoprojet">
				<p> Bureau des Formations et de la vie Universitaire</br>
				Bâtiment de la Présidence - 1er étage</br>
				Téléphone:+33(0)1 49 40 44 73</br>
				Courriel: vie-etudiantearrouniv-paris13.fr</p>
			</div>
		</div>
		
		
	<!-- CONTAINER IMAGE GAUCHE -->	
		<div class="col-xs-12 col-sm-12 col-md-2" >
			<img src="img/1.jpg" height="700px" width="100%">
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