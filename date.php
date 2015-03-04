<?php
class Date{

	var $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
	var $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
	function getAll($year){
		$r = array();
/*		$date = strtotime($year.'-01-01');
		// année mois jour = jour de la semaine
		while (date('Y', $date) <= $year){
			$y = date('Y',$date);
			$m = date('n',$date);
			$d = date('j',$date);
			$w = str_replace('0','7',date('w',$date));	//permet de commencer à lundi et pas dimanche
			$r[$y][$m][$d] = $w; 
			$date = strtotime(date('Y-m-d',$date).' +1DAY');
		}
		*/
		$date = new DateTime($year.'-01-01');
		// année mois jour = jour de la semaine
		while ($date->format('Y') <= $year){
			$y =$date->format('Y');
			$m =$date->format('n');
			$d = $date->format('j');
			$w = str_replace('0','7',$date->format('w'));	//permet de commencer à lundi et pas dimanche
			$r[$y][$m][$d] = $w; 
			$date->add(new DateInterval('P1D'));
		}
		return $r;
	}

}
?>