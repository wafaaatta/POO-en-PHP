<?php 
// Création de deux instances de la classe Warrior
$joan = new Warrior('Joan', 10, 100);
$leon = new Warrior('Leon', 15, 80);

// Test de la méthode attack
$joan->attack($leon); 

// Test de la méthode isAlive
echo "{$joan->name} est vivant : " . ($joan->isAlive() ? 'true' : 'false') . PHP_EOL;
echo "{$leon->name} est vivant : " . ($leon->isAlive() ? 'true' : 'false') . PHP_EOL;

// Leon attaque Joan jusqu'à ce que Joan ne soit mort
while ($joan->isAlive()) {
    $leon->attack($joan);
}
echo "{$joan->name} est vivant : " . ($joan->isAlive() ? 'true' : 'false') . PHP_EOL;

// Création des instances de guerriers
$WarriorA = new WarriorAxe('WarriorA', 5);
$WarriorS = new WarriorSpear('WarriorS', 5);
$WarriorSs = new WarriorSword('WariorSs', 5);

// Combats
$WarriorA->attack($WarriorSs); // WarriorA (hache) attaque WariorSs (épée)
$WarriorSs->attack($WarriorA); // WariorSs (épée) attaque WarriorA (hache)
$WarriorS->attack($WarriorS); // WarriorS (lance) attaque lui-même


// Fonction pour faire combattre deux guerriers
function battle($warrior1, $warrior2) {
    while ($warrior1->isAlive() && $warrior2->isAlive()) {
        $warrior1->attack($warrior2);
        $warrior2->attack($warrior1);
    }

    if (!$warrior1->isAlive() && !$warrior2->isAlive()) {
        echo "It's a draw" . PHP_EOL;
    } elseif (!$warrior1->isAlive()) {
        echo "{$warrior2->name} wins" . PHP_EOL;
    } else {
        echo "{$warrior1->name} wins" . PHP_EOL;
    }
}

// Créer deux instances de sous-classes Warrior
$warrior1 = new WarriorAxe('Warrior1', 10);
$warrior2 = new WarriorSword('Warrior2', 15);

// Faire combattre les deux guerriers
battle($warrior1, $warrior2);


?>