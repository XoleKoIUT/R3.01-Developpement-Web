<?php
/*----------------------------------------------------------------------*/
/*                             Variables                                */
/*----------------------------------------------------------------------*/
$loginErr = ""; // Initialisation
$PwdErr   = ""; // Initialisation
/*----------------------------------------------------------------------*/

function enTete() {
    echo "<!DOCTYPE HTML>\n";
    echo "<html lang=\"fr\">\n";
    echo "<head>\n";
    echo "<meta charset=\"utf-8\" />\n";
    echo "<title>Affichage de la base PAC </title>\n";
    echo "<link rel='stylesheet' href='formStyle.css' type='text/css' />";
    echo "</head>\n";
    echo "<body>\n";

}

function isLoginOk($login){
    /* Section qui gère les erreurs possibles */
    if (empty($_REQUEST['login'])) {
        $LoginErr = "Login is required";
        echo "$LoginErr";
    } else if ($login != "Admin" || "User"){
        $LoginErr = "Login Incorrect";
        echo "$LoginErr";
    }
    return $LoginErr;
}

function isMotDePasseOk($login, $pwd){
    $PwdErr = "";
    if (empty($_REQUEST['pwd'])) {
        $PwdErr = "Password is required";
        echo "$PwdErr";
    }

    if ( $login == "Admin" && $pwd != "adminPwd"){
        $PwdErr = "Password's Incorrect";
        echo "$PwdErr";
    }

    if ( $login == "User" && $pwd != "userPwd"){
        $PwdErr = "Password's Incorrect";
        echo "$PwdErr";
    }
    return $PwdErr;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function pied() {
    echo "</body></html>\n";
}
?>