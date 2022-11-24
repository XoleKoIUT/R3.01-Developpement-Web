<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "fctAux.inc.php";

/* Appel des fonctions  */
enTete();
Utilisateur();
piedDePage();

function Utilisateur(){
    echo "<form action=\"connexion.php\" method=\"get\">\n";
    echo "<h2>Connexion en mode Utilisateur</h2>";
    echo "Bonjour user";
    echo "</form>\n";
}