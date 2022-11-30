<?php
include "DB.inc.php";
include "fctAux.inc.php";
include "formConnexion.php";

enTete();
page();
pied();

function page(){
    echo "<div class=\"haut\">";
        echo "<div class=\"hautGauche\">";
            echo"<img src=\"imagesWA3.png\" alt=\"logo webapp\">";
        echo"</div>";

        echo"<div class=\"hautCentre\">";
            echo"P-A-C";
        echo"</div>";
    echo"</div>";

    echo"<div class=\"milieu\">";
        echo"<div class=\"menu\">";
            echo"Consultation";
            echo"<ul>";
            echo"<li><a href=\"consultProduit.php\">Produit</a>";
            echo"<li><a href=\"consultAchat.php\">Achat</a>";
            echo"<li><a href=\"consultClient.php\">Client</a>";
            echo"</ul>";
        echo"</div>";

        echo"<div class=\"contenu\">";
            echo"<h1> Bienvenue sur le cas P-A-C : Produit-Achat-Client </h1>\n\n";
        echo"</div>";
    echo"</div>";
    echo"<br><br><br><br>";
    formConnexion();
}
?>