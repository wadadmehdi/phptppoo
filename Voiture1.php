<?php

class Vehicule{
    private $nom;
    public $matricule;
    public $modele;
    public $couleur;


function __construct($n,$m,$mo,$c){

    $this->nom =$n;
    $this->matricule=$m;
    $this->modele=$mo;
    $this->couleur=$c;
}

function __get($nom){
     return $this->nom;
}

function get_nom(){
    return $this->nom;
}

function set_nom($n){
    return $this->nom = $n;
     
}

function __set($nom, $value)
{
    return $this->nom = $value;
}
}

// function __destruct()
// {
//     echo "the object has been destructed";
// }
// }
$v1 = new Vehicule("Ford","45678-F","2018","noir");
echo $v1->get_nom();
echo "<hr>";
$v1->nom = "AUDI";
echo $v1->get_nom();

//print_r($v1)

?>