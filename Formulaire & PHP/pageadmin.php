<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "fctAux.inc.php";

/* Appel des fonctions  */
enTete();
Administrateur();
piedDePage();

function Administrateur(){
    echo "<form action=\"connexion.php\" method=\"get\">\n";
    echo "<h2>Connexion en mode Administrateur</h2>";
    echo "Bonjour Admins";
    echo "</form>\n";
}