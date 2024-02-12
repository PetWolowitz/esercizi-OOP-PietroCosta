

<?php

class Animal {
    public $name;
    public $habitat;


    public function __construct($nome, $casa) {
        $this->name = $nome;
        $this->habitat = $casa;

    }

    // metodo
    public function getNome() {
    echo "Ciao, sono " . $this->name . " e vivo in " . $this->habitat . ".\n";
    
    }
}



class Mammifero extends Animal {
    public $tipopelo;
    public $dieta;


    public function __construct($nome, $casa, $pelo, $dieta) {
        parent::__construct($nome, $casa);
        $this->tipopelo = $pelo;
        $this->dieta = $dieta;
    }

    public function getTipoPelo() {
        echo "Ciao, sono " . $this->name . " e vivo in " . $this->habitat . " e ho il pelo " . $this->tipopelo . ".\n";
    }
    public function getDieta () {
        echo "Ciao, sono " . $this->name ." e vivo in " . $this->habitat . " e sono " . $this->dieta . ".\n";
    }
    
}



$leone = new Mammifero("Simba", "Africa", "corto", "carnivoro");
// $leone->getNome();
// $leone->getTipoPelo();
// $leone->getDieta();
// print_r($leone);

$castoro = new Mammifero("Bucky", "Fiume", "lungo", "erbivoro");
// $castoro->getNome();
// $castoro->getTipoPelo();
// $castoro->getDieta();
// print_r($castoro);

$pinguino = new Mammifero("Pingu", "Antartide", "corto", "carnivoro");
// $pinguino->getNome();
// $pinguino->getTipoPelo();
// $pinguino->getDieta();
// print_r($pinguino);


$coccodrillo = new Mammifero("Drillo", "Fiume", "squame", "carnivoro");
// $coccodrillo->getNome();
// $coccodrillo->getTipoPelo();
// $coccodrillo->getDieta();
// print_r($coccodrillo);


$animali = array($leone, $castoro, $pinguino, $coccodrillo);

foreach ($animali as $animale) {
    if ($animale->getDieta() == "carnivoro") {
        echo $animale->getNome() . " è un carnivoro.\n";
    }
}
$animali->getTipoPelo();
$animali->getDieta();
$animali->getNome();
print_r($animali);
?>
// 


