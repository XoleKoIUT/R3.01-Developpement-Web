<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "fctAux.inc.php";

/* Appel des fonctions  */
enTete();
contenu();
piedDePage();

function contenu(){
    
    if (empty($_REQUEST['Login'])) {
        echo "<form action=\"connexion.php\" method=\"get\">\n";
        echo "<h2>Page De Connexion</h2>";
        echo "<fieldset><div><label for=\"Login\">Login</label>\n";
        echo "<input type=\"text\" name=\"Login\">\n\n</div>";
       
        echo "<div><label for=\"Pwd\">Password</label>\n";
        echo "<input type=\"text\" name=\"Pwd\">\n</div>";
        echo "</form>\n";
    }
    
    echo ("<input type=\"reset\" name=\"effacer\" value=\"effacer\">");
    echo ("<input type=\"submit\" name=\"envoyer\" value=\"envoyer\">");

    if ( isLoginOk() && isMotDePasseOk() ){
        if ( $_GET['Login'] == "Admin" && $_GET['Pwd'] == "adminPwd"){
            pageAdmin();
        } else {
            pageUser();
        }

    }
}