<?php
	include("fctAux.inc.php");

	session_start();
	session_destroy(); //destruction de la session a la prochaine requete

	header("Location:formConnexion.php"); //on renvoie vers le formulaire de connexion
?>