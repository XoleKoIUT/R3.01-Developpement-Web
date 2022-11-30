<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "fctAux.inc.php";

if(! isset($_SESSION['nom'])) {
    header('Location: formConnexion.php');
}else {
    entete();
    contenu();
    pied();
}

function contenu() {
    echo "SUITE<br/>\n";
    $droitAcces = $_SESSION['droitAcces'];

    if ($droitAcces == 1) {
        echo "droit de consultation <br/> \n";
        echo "<form action=\"formConnexion.php\" method=\"get\">\n";
        echo "<h2>Connexion en mode Utilisateur</h2>";
        echo "Bonjour User Dupont";
        echo "</form>\n";

    }
    if ($droitAcces == 2) {
        echo "droit de modification <br/> \n";
        echo "<form action=\"formConnexion.php\" method=\"get\">\n";
        echo "<h2>Connexion en mode Administrateur</h2>";
        echo "Bonjour Utilisateur Milou";
        echo "</form>\n";
    }

    echo "<br/><a href=\"bye.php\"> Déconnexion </a>";
}

?>