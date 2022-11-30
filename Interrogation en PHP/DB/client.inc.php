<?php

/*classe permettant de representer les tuples de la table client */
class Client {
    /*avec PDO, il faut que les noms attributs soient les mêmes que ceux de la table*/
    private $ncli;
    private $nom;
    private $ville;

    /* Les méthodes qui commencent par __ sont des methodes magiques */
    /* Elles sont appelées automatiquement par php suite à certains événements. */
    /* Ici c'est l'appel à new sur la classe qui déclenche l'exécution de la méthode */
    /* des valeurs par défaut doivent être spécifiées pour les paramètres du constructeur sinon
         il y aura une erreur lorsqu'il sera appelé automatiquement par PDO
     */

    public function __construct($i=-1,$n="",$v="") {
        $this->ncli = $i;
        $this->nom = $n;
        $this->ville = $v;
    }

    public function getNcli() { return $this->ncli; }
    public function getNom() { return $this->nom;}
    public function getVille() { return $this->ville; }

    public function __toString() {
        $res = "idcli:".$this->ncli."\n";
        $res = $res ."nom:".$this->nom."\n";
        $res = $res ."ville:".$this->ville."\n";
        $res = $res ."<br/>";
        return $res;

    }
}

//test
//$unclient = new Client(5,'Dupont','Le Havre');
//echo $unclient;
?>