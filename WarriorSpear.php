
<?php
class WarriorSpear extends Warrior {
    public function __construct($name, $power) {
        parent::__construct($name, $power, 0);
    }

    public function attack($opponent) {
        // Vérifie si l'opposant est une instance de WarriorAxe
        if ($opponent instanceof WarriorAxe) {
            $this->power *= 2; // Double le pouvoir d'attaque si l'opposant a une hache
        }
        parent::attack($opponent); // Appel de la méthode attack de la classe parente
    }
}
?>