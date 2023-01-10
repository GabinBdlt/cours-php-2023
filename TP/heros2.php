<?php
// Intègre ici tout le contenu de ce fichier
require('heros_fonctions.php');

$force = rand(20, 30);
$agilite = rand(20 ,30);
$defense = rand(20, 30);
$magie = rand(1, 10);

$pointDeVie = 100;

$ennemis = [
    ['nom' => 'Bouftou', 'puissance' => rand(50,95)],
    ['nom' => 'Bouftou', 'puissance' => rand(50,95)],
    ['nom' => 'Bouftou', 'puissance' => rand(50,95)],
    ['nom' => 'Bouftou', 'puissance' => rand(50,95)],
];

echo '<pre>';
print_r($ennemis);
echo '</pre>';


// 1.
// Créer une fonction puissance pour calculer la puissance du héros selon la formule
// Puissance = force * 2 + agilite + (defense / 2) (arrondi à l'entier)
$puissance = puissance($force, $agilite, $defense);

echo '<p>Sadida possède : ' . puissance($force, $agilite, $defense)
. ' de puissance.</p>';

// Affronter chaque ennemi en comparant la puissance du héros avec celle de l'ennemi
// Celui qui a le plus de puissance gange
// Si je gagne, je gagne 1pt de force
// Si je perds, je perds 1pt d'agilité et 10 points de vie

for ($i=0; $i <= 3; $i++) {
    if ($puissance >= $ennemis[$i]['puissance']) {
        $force ++;
        echo '<p>J\'ai gagné, ez.</p>';
    } else {
        $agilite --;
        $pointDeVie -= 10;
        echo '<p>J\'ai perdu, 0 luck.</p>';
    }
}

// Ecrire le déroulé des combats
