<!DOCTYPE HTML>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "fctAux.inc.php";

// appel des fonctions pour creer une page html

enTete(); // fonction declaree dans fctAux
piedDePage(); // fonction declaree dans fctAux

echo "<h2>Page De Connexion</h2>";

if (empty($_REQUEST['Login'])) {
    $LoginErr = "Login is required";
} else {
    $Login = genererFormulaire($_POST["Login"]);

    /* Permet de vérifier s'il ne contient que des espaces ou des lettres */
    if (! preg_match("/^[a-zA-Z-' ]*$/", $Login)) {
        $LoginErr = "Only letters and white space allowed";
    }
}

function genererFormulaire($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>