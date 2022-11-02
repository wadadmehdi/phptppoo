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

    function __get($name)
    {

        return $this->$name;
    }

    // function get_pernom()
    // {
    //     return $this->prenom;
    // }

    function __set($name, $value)
    {
        return $this->$name = $value;
    }

    function modifier($v)
    {
        return $this->nom = $v;
    }
    // function __destruct()
    // {
    //     echo "L'object a ete detruit";
    // }
}



$p = new Personne("Amin", "Lami", 23, "Agadir", 73722929);
echo $p->nom = "User";
echo "<hr>";
echo $p->modifier("Neo");


// $p->nom = "Diana";
// $p->prenom = "Morales ";
// $p->age = 34;
// $p->adress = " Veracruz ";
// $p->cordonne = 83829292;
// echo $p->get_pernom();

// var_dump($p)