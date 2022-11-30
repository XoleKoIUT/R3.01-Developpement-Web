<?php // exemple1.php
//Informations pour la connexion a la bdd
$dbname = "ma210454";  //A MODIFIER! (nom de la base Postgres)
$host   = "woody";
$user   = "ma210454";   //A MODIFIER ! (login compte Postgres)
$pwd    = "xoleko525"; //A MODIFIER ! (mot de passe compte Postgres)
$port   = 5432;

//chaine de connexion
$connStr = 'pgsql:host='.$host.' port='.$port.' dbname='.$dbname;

try {
     // Connexion la base de données
     $pdo = new PDO($connStr, $user, $pwd);
     echo '1=> connexion reussie ! <br/>\n';
     // Configuration facultative de la connexion
     $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // les noms de champs seront en caractères minuscules
     $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); // les erreurs lanceront des exceptions

     $requete = "delete from client where ncli=500";
     $res = $pdo->exec($requete); //execution de l'ordre SQL, renvoie le nombre de lignes affectées par l'ordre SQL
     if ($res) {
       echo '2=> la suppression a été exécutée correctement ! <br/>\n';
     }
     else {
       echo '2=> erreur : la suppression n\'a pas pu être exécutée ! <br>>\n';
     }
}
catch (PDOException $e) {
     echo "ERREUR D'ACCES A LA BDD : | ".$e->getMessage();
}
echo ' | 3=> deconnexion';
$pdo = null; //fermeture de la connexion
?>
