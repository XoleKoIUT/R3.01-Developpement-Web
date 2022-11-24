<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "pageuser.php" ;
include "pageadmin.php";

$loginErr = "";
$PwdErr   = "";
$PwdCrypt['user' ] = password_hash($pwd['user' ], PASSWORD_DEFAULT);
$PwdCrypt['admin'] = password_hash($pwd['admin'], PASSWORD_DEFAULT);

function enTete() {
    echo "<html lang=\"fr\">\n";
    echo "<head>\n";
    echo "<meta charset=\"utf-8\">\n";
    echo "<link rel=\"stylesheet\" href=\"styleFormulaire.css\">\n";
    echo "<title>Formulaire & PHP</title>\n";
    echo "</head>\n";
    echo "<body>\n";
}

function isLoginOk($login){
    /* Section qui gère les erreurs possible */
    if (empty($_REQUEST['login'])) {
        $LoginErr = "Login is required";
        echo "$LoginErr";
    } else if ($login != "Admin" || "User"){
        $LoginErr = "Login Incorrect";
        echo "$LoginErr";
    }
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

    /*
    return ($login == "User"  && $pwd == "userPwd"  ||
            $login == "Admin" && $pwd == "adminPwd" ):*/
}

function piedDePage() {
    echo '</body></html>';
}
?>
