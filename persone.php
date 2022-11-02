<?php

class Personne
{

    var $nom;
    var $prenom;
    var $age;
    var $adresse;
    var $cordonne;
    function __construct($nom, $prenom, $age, $address, $cordonne)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->address = $address;
        $this->cordonne = $cordonne;
    }

    function __destruct()
    {
        echo "L'object a ete detruit";
    }
}

$p = new Personne("Amin", "Lami", 23, "Agadir", 73722929);

// $p->nom = "Diana";
// $p->prenom = "Morales ";
// $p->age = 34;
// $p->adress = " Veracruz ";
// $p->cordonne = 83829292;


var_dump($p);