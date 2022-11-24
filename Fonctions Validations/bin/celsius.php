<!DOCTYPE html>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "fctAux.inc.php";

    enTete();   // fonction declaree dans fctAux
    contenu();  // fonction a definir ci-dessous
    tab_html();  // fonction a definir ci-dessous
    tab_html2(3);  // fonction a definir ci-dessous
    pied();     // fonction declaree dans fctAux 

function contenu() {

    echo "\t\t<table>";
    echo "\t\t\t<tr><th> Celsius </th><th>Fahrenheit</th></tr>";
    for ($cpt = -50; $cpt <= 50; $cpt++){
    	if($cpt % 5 == 0){
    	    echo'<tr><td>' . $cpt . '</td><td>' . ($cpt*9/5 + 32) . '</td></tr>';
    	}
    }
    echo "\t\t</table>";
}

function tab_html() {

    echo "\t\t<table>";
    echo "\t\t\t<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th>
    		<th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>";
    for ($cpt = 1; $cpt <= 42; $cpt++){
    	
    	echo '<td>' .$cpt . '</td>';
    	if($cpt % 7 == 0) {
    	    echo"<tr>";
    	    echo"</tr>";
    	}
    }
    echo "\t\t</table>";
}

function tab_html2($debut) {

    $cpt2 = 0;
    echo "\t\t<table>";
    echo "\t\t\t<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th>
    		<th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>";
    
    for ( $cpt2 = 1; $cpt2 < $debut; $cpt2++ ){
         echo "<td> </td>";
    }
    
    for ($cpt = 1; $cpt <= 40; $cpt++){
    	echo '<td>' . $cpt . '</td>';
    	if($cpt % 7 == 0) {
    	    echo"<tr>";
    	    echo"</tr>";
    	}
    }
    echo "\t\t</table>";
}
?>
