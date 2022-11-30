<?php

/*classe permettant de representer les tuples de la table produit */
class Produit {
    /*avec PDO, il faut que les noms attributs soient les mêmes que ceux de la table*/
    private $np;
    private $lib;
    private $coul;
    private $qs;

    /* Les méthodes qui commencent par __ sont des methodes magiques */
    /* Elles sont appelées automatiquement par php suite à certains événements. */
    /* Ici c'est l'appel à new sur la classe qui déclenche l'exécution de la méthode */
    /* des valeurs par défaut doivent être spécifiées pour les paramètres du constructeur sinon
         il y aura une erreur lorsqu'il sera appelé automatiquement par PDO
     */

    public function __construct($n=-1,$l="",$c="", $q="") {
        $this->np = $n;
        $this->lib = $l;
        $this->coul = $c;
        $this->qs = $q;
    }

    public function getNp() { return $this->np; }
    public function getLib() { return $this->lib;}
    public function getCoul() { return $this->coul; }
    public function getQs() { return $this->qs; }

    public function __toString() {
        $res = "num produit:".$this->np."\n";
        $res = $res ."libelé:".$this->lib."\n";
        $res = $res ."couleur:".$this->coul."\n";
        $res = $res ."quantité stocks:".$this->qs."\n";
        $res = $res ."<br/>";
        return $res;

    }
}

//test
//$unProduit = new Produit(101,'chaise','verte',15);
//echo $unProduit;
?>
