<?php
/*Classe permettant de représenter les tuples de la table Utilisateur*/
class Utilisateur {
    /* Avec PDO, il faut que les noms attributs soient les mêmes que ceux de la table */
    public $nom;
    public $droitAcces;

    private static $instance = null; // Mémorisation de l'instance de DB pour appliquer le pattern Singleton
    private        $connect  = null; // Connexion PDO à la base

    /************************************************************************/
    /*	Constructeur gérant la connexion à la base via PDO                  */
    /*	NB : il est non utilisable à l'extérieur de la classe DB            */
    /************************************************************************/
    private function __construct() {
        $dbname = "ma210454"; //A MODIFIER! (nom de la base Postgres)
        $host   = "woody";
        $user   ="ma210454"; //A MODIFIER ! (login compte Postgres)
        $pwd    = "xoleko525";   //A MODIFIER ! (mot de passe compte Postgres)
        $port   = 5432;

        //Chaine de connexion
        $connStr = 'pgsql:host='.$host.' port='.$port.' dbname='.$dbname;
        try {
            // Connexion à la base
            $this->connect = new PDO($connStr, 'ma210454', 'xoleko525'); //A MODIFIER !
            $this->connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
            echo "probleme de connexion :".$e->getMessage();
            return null;
        }
    }

    /************************************************************************/
    //	Methode permettant d'obtenir un objet instance de DB
    //	NB : cet objet est unique pour l'exécution d'un même script PHP
    //	NB2: c'est une methode de classe.
    /************************************************************************/
    public static function getInstance() {
        if (is_null(self::$instance)) {
            try {
                self::$instance = new Utilisateur();
            }
            catch (PDOException $e) {
                echo $e;
            }
        } //fin IF
        $obj = self::$instance;

        if (($obj->connect) == null) {
            self::$instance=null;
        }
        return self::$instance;
    } //fin getInstance

    /************************************************************************/
    //	Methode permettant de fermer la connexion a la base de données
    /************************************************************************/
    public function close() {
        $this->connect = null;
    }

    /************************************************************************/
    //	Methode uniquement utilisable dans les méthodes de la class DB
    //	permettant d'exécuter n'importe quelle requête SQL
    //	et renvoyant en résultat les tuples renvoyés par la requête
    //	sous forme d'un tableau d'objets
    //	param1 : texte de la requête à exécuter (éventuellement paramétrée)
    //	param2 : tableau des valeurs permettant d'instancier les paramètres de la requête
    //	NB : si la requête n'est pas paramétrée alors ce paramètre doit valoir null.
    //	param3 : nom de la classe devant être utilisée pour créer les objets qui vont
    //	représenter les différents tuples.
    //	NB : cette classe doit avoir des attributs qui portent le même que les attributs
    //	de la requête exécutée.
    //	ATTENTION : il doit y avoir autant de ? dans le texte de la requête
    //	que d'éléments dans le tableau passé en second paramètre.
    //	NB : si la requête ne renvoie aucun tuple alors la fonction renvoie un tableau vide
    /************************************************************************/
    private function execQuery($requete,$tparam,$nomClasse) {
        // On prépare la requête
        $stmt = $this->connect->prepare($requete);

        // On indique que l'on va récupérer les tuples sous forme d'objets instance de Client
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $nomClasse);

        // On exécute la requête
        if ($tparam != null)
            $stmt->execute($tparam);
        else
            $stmt->execute();

        // Récupération du résultat de la requête sous forme d'un tableau d'objets
        $tab   = array();
        $tuple = $stmt->fetch(); //on récupère le premier tuple sous forme d'objet

        if ($tuple)
            while ($tuple != false) {
                $tab[] = $tuple;         // On ajoute l'objet en fin de tableau
                $tuple = $stmt->fetch(); // On récupère un tuple sous la forme
            }
        return $tab;
    }

    /************************************************************************/
    //	Methode utilisable uniquement dans les méthodes de la classe DB
    //	permettant d'exécuter n'importe quel ordre SQL (update, delete ou insert)
    //	autre qu'une requête.
    //	Résultat : nombre de tuples affectés par l'exécution de l'ordre SQL
    //	param1 : texte de l'ordre SQL à exécuter (éventuellement paramétré)
    //	param2 : tableau des valeurs permettant d'instancier les paramètres de l'ordre SQL
    //	ATTENTION : il doit y avoir autant de ? dans le texte de la requête
    //	que d'éléments dans le tableau passé en second paramètre.
    /************************************************************************/
    private function execMaj($ordreSQL,$tparam) {
        $stmt = $this->connect->prepare($ordreSQL);
        $res = $stmt->execute($tparam); //execution de l'ordre SQL
        return $stmt->rowCount();
    }

    public function getNom       () { return $this->nom;        }
    public function getDroitAcces() { return $this->droitAcces; }

    /* toString pour l'affichage des variables */
    public function __toString() {
        $res = "Nom:".$this->nom."\n";
        $res = $res ."Droit d'Acces:".$this->droitAcces."\n";
        $res = $res ."<br/>";
        return $res;
    }
}
?>