<?php

  $nom = $_REQUEST['nom'];  //NB : ne marche que parce qu'on suppose qu'un nom a bien ete saisi
  $password = $_REQUEST['password'];

  //verification verifie que le mot de passe et le login sont corrects
  if (verification($nom, $password)) {

	// cree une nouvelle session si la session n'existait pas
  	// ou bien récupère une session existante si une session est en cours
  	session_start();

 	$_SESSION['nom']=$nom;
    	$_SESSION['droitAcces'] = niveauDroit($nom);

    	header ("Location: suite.php");
    	exit();
  } else {
    	header ("Location: formConnexion.php");
    	exit();
  }

  function verification($nom, $pass){
    if ((($nom == 'dupont') && ($pass == 'truc')) ||
        (($nom == 'milou')  && ($pass == 'chien'))) {
      return true;
    } else {
      return false;
    }
  }

  function niveauDroit($nom) {
    if ($nom == 'dupont') return 1; // droit de consultation
    if ($nom == 'milou')  return 2; // droit de modification
    return 0; // aucun droit
  }
?>