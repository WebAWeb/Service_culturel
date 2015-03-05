<?php 
	include("head.php");
	?>
		
	<div class="row" id="base">
		<div class="col-xs-12 col-sm-5 col-md-5" id="container">
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		réaliser un livre spécimen de polices de texte. 
		Le Lorem Ipsum est simplement du faux texte 
		</div>
		<div class="col-xs-12 col-sm-5 col-md-1">
		</div>
		<div class="col-xs-12 col-sm-5 col-md-4" id="container">
			<div id="Map"></div>
		</div>
		
		
		<div class="col-xs-12 col-sm-5 col-md-3" id="container">
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		</div>
		<div class="col-xs-12 col-sm-5 col-md-3" id="container">
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		</div>
		<div class="col-xs-12 col-sm-5 col-md-3" id="container">
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		Le Lorem Ipsum est simplement du faux texte 
		employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard 
		de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour 
		réaliser un livre spécimen de polices de texte. 
		</div>
	</div>	
	
	
	
	<footer>
		<p class="textfooter">Contact : Villetaneuse : 99 avenue JB Clément | 01.49.40.38.27</br>
		Bobigny : 1 rue de Chablis | 01.48.38.88.29 </p>
		<img src="img/paris13logo.png"  class="imgfooter" />
		<p class="copyright">Copyright © 2015 Université Paris 13. Tous droits réservés.</p>
	</footer>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function initialisation(){
			var centreCarte = new google.maps.LatLng(48.957285, 2.341058);
			var optionsCarte = {
				mapTypeControl : false,
				zoom: 15,
				center: centreCarte,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				streetViewControl: false,
				panControl : false
			}
			var maCarte = new google.maps.Map(document.getElementById("Map"), optionsCarte);
			}
		google.maps.event.addDomListener(window, 'load', initialisation);
	</script>
</body>
</html>