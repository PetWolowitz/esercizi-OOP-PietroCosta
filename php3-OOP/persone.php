<?php



class Person{

    public $nome;
    public $cognome;
    public $età;

    public function __construct($nome, $cognome, $età){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->età=$età;
    }


    public function greeting(){

        echo "Ciao, mi chiamo $this->nome $this->cognome, ho $this->età anni ";
    }

}

class Player extends Person{

    public $giochi = [];

    public function __construct($nome, $cognome, $età, $giochi){
        parent::__construct($nome, $cognome, $età);
        $this->giochi = $giochi;
    }

    public function getGiochi(){
        echo "e mi piace giocare a: ";
        foreach($this-> giochi as $gioco){
            echo $gioco . " ";
        }
    }
}

$GigiLuigi = new Player("Gigi", "Luigi", 30, ["Prince of Persia", "Palworld", "Lego Fortnite"]);
$GigiLuigi -> greeting();
$GigiLuigi -> getGiochi();

$giannigiovanni = new Player("Gianni", "Giovanni", 25, ["Fifa 21", "Call of Duty", "Minecraft"]);
$giannigiovanni -> greeting();
$giannigiovanni -> getGiochi();


class Sports extends Person{
    public $sport;
    public $durata;

    public function __construct($nome, $cognome, $età, $sport, $durata){
        $this->durata=$durata;
        $this->sport=$sport;
        parent::__construct($nome, $cognome,$età);
    }

    public function practice(){
        echo "e pratico $this->sport da $this->durata anni.\n";
    }
}


$PistolPete = new Sports("Pistol","Pete", 37, "basket", 30);
$PistolPete -> greeting();
$PistolPete -> practice();

?>