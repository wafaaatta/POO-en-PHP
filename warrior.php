<?php 
class Warrior {  
    // Propriétés
    public $name; 
    public $power; 
    public $life;

    // Méthode constructeur
    public function __construct($name, $power, $life) {
        $this->name = $name;
        $this->power = $power;
        $this->life = $life;
    }

    public function attack($opponent) {
        $opponent->life -= $this->power;
        echo $this->name . " attaque " . $opponent->name . " et lui inflige " . $this->power . " points de dégâts." . PHP_EOL;
        //PHP_EOL est équivalent à "\n" (un saut de ligne).
    }

    public function isAlive() {
        return $this->life > 0;
    }
}

?>