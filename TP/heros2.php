<?php
// Intègre ici tout le contenu de ce fichier
require('heros_fonctions.php');

$force = rand(20, 30);
$agilite = rand(20 ,30);
$defense = rand(20, 30);
$magie = rand(1, 10);

$pointDeVie = 100;

$ennemis = [
    ['nom' => 'Bouftou 1', 'puissance' => rand(50,95)],
    ['nom' => 'Bouftou 2', 'puissance' => rand(50,95)],
    ['nom' => 'Bouftou 3', 'puissance' => rand(50,95)],
    ['nom' => 'Bouftou 4', 'puissance' => rand(50,95)],
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

foreach ($ennemis as $bouftou) {
    $maPuissance = puissance($force, $agilite, $defense);
    if ($maPuissance >= $bouftou['puissance']) {
        $force ++;
        echo '<p>J\'ai gagné contre ' . $bouftou['nom'] . ', ez.</p>';
    } else {
        $agilite --;
        $pointDeVie -= 10;
        echo '<p>J\'ai perdu ' . $bouftou['nom'] . ', 0 luck.</p>';
    }
}

// Ecrire le déroulé des combats

// 2. Créer une fonction qui génère un ennemi aléatoirement, c'est à dire qui retourne un tableau avec un nom et une puissance. Cette fonction 
// prendra en paramètre un niveau. La puissance de l'ennemi sera alors comprise entre 10 * $niveau et 20 * $niveau.
// Chaque ennemi s'appelera "Bouftou " suivi de 6 caractères majuscules aléatoires
// Regarder du côté de str_shuffle et substr

// echo creerUnEnnemi($nom, $puissance, $niveau);


// 3. Faire un "while" pour affronter les ennemis jusqu'à la mort !
// Combien d'ennemi est il possibloe d'affronter ?
// Tous les 20 ennemis, augmenter le niveau des ennemis créés (on commence à 1)
// (Pas de nouvelle fonction à créer)

// On va construire une sécurité pour pouvoir coder le while sans risque
// Bloqueur
$bloqueur = 0;

// Je reprends la logique de mon programme
$compteurEnnemisCombattus = 0;
$niveauEnnemi = 1;

while($pointDeVie > 0) {
    // Je combats un nouvel ennemi

    // 1. Créer un nouvel ennemi
    $ennemi = creerUnEnnemi($niveauEnnemi);

    // 2. Je recalcule ma puissance
    $maPuissance = puissance($force, $agilite, $defense);

    // 3. Je compare les puissances
        // 3.1 Je gagne
        if ($maPuissance >= $ennemi['puissance']) {
            // 3.1.1 Mes caractéristiques évoluent
            // $force ++;
            echo '<p>J\'ai gagné contre ' . $ennemi['nom'] . ', ez.</p>';
        }
        // 3.2 Je perds
            // 3.2.1 Mes caractéristiques évoluents
            else {
                $agilite --;
                $pointDeVie -= 10;
                echo '<p>J\'ai perdu ' . $ennemi['nom'] . ', 0 luck.</p>';
        }
    
    // 4. J'incrémente le compteur d'ennemis combattus
    $compteurEnnemisCombattus++;
        // 4.1 Tous les 5 ennemis, j'augmente le niveau
        if ($compteurEnnemisCombattus % 5 === 0) {
            $niveauEnnemi++;
        }

    // Bloqueur
    $bloqueur++; // A chaque itération, j'incrémente de 1
    if ($bloqueur > 1000) {
        break; // Au bout de 1000 itérations, par sécurité, je casse ma boucle while
    }
}

echo '<p>J\'ai combattu ' . $compteurEnnemisCombattus . ' ennemis.</p>';



// Variante pour le while
// while(true)
// Attention, il n'y a plus de condition d'arrêt, donc le bloqueur devietn obligatoire en phase de DEV

$bloqueur = 0;

while (true) {

    // ...toute la logiue du while précédent...
    
    // Condition d'arrêt
    if ($pointDeVie <= 0) {
        break;
    }

    // Bloqueur par sécurité
    $bloqueur++;
    if ($bloqueur > 1000) {
        break;
    }
}