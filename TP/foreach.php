<?php

// 1.
// Créer un tableau vide.
// Remplisser ce tableau avec les valeurs de 1 à 1000.

$tableau = [ ];
for ($i = 1; $i <= 1000; $i++) {
    $tableau[]= $i;
}
echo '<pre>';
print_r($tableau);
echo '</pre>';

// a) En parcourant le tableau, affichez tous les multiples de 3.
// b) En parcourant le tableau, affichez les nombres multiples de 3 ET de 5.
// c) Et compter combien il y en a.

$compteur = 0;

foreach ($tableau as $key => $nombres) {
    if ($nombres%3 === 0) {
        echo '<p>Multiple de 3 : ' . $nombres . '</p>';
    }

    if ($nombres%3 === 0 && $nombres%5 === 0) {
        echo '<p>Multiple de 3 et de 5 : ' . $nombres . '</p>';
        $compteur++;
    }
    
} 
// 2.
// Créer un tableau de 5 prénoms masculins.
// Créer un tableau de 5 prénoms féminins.
// Créer un tableau de 5 aliments.
// Créer un tableau de 5 villes.
// Générer 50 phrases aléatoires du genre " Arthur et Pauline mangent une pomme à Paris. ".

$prenomsMasculins = ['Quentin', 'Paul', 'Baptiste', 'Nicolas', 'Carl'];
$prenomsFeminins = ['Justine', 'Alice', 'Margot', 'Lea', 'Michelle'];
$aliments = ['une pomme', 'une poire', 'du cheval', 'une tarte', 'une banane'];
$villes = ['Paris', 'Lyon', 'Rennes', 'Rouen', 'Annecy'];

$phrases = '';

// Générer toutes les combinaisons possibles : 625.

foreach ($prenomsMasculins as $prenomM) {
    foreach ($prenomsFeminins as $prenomF) {
        foreach ($aliments as $aliment) {
            foreach ($villes as $ville) {
                echo '<p>' . $prenomM . ' et ' . $prenomF . ' mangent ' . $aliment . ' à ' . $ville . '.</p>';
            }
        }
    }
}

// Générer 50 phrases aléatoires du genre " Arthur et Pauline mangent une pomme à Paris. ".


// 3.
// Créer un tableau de 10 valeurs comprises entre 0 et 100 aléatoirement.
// Trouver la valeur maximum et la valeur minimum à chaque exécution du code.
// (sans utiliser les fonctions min et max)

$tableau = [];
for ($i = 1; $i <= 10; $i++) {
    $tableau[]= rand(0, 100);

}

$min = $tableau[0];
$max = $tableau[0];

echo '<pre>';
print_r($tableau);
echo '</pre>';


// Traitement
foreach ($tableau as $valeur) {
    if ($valeur < $min) {
        echo '<p> Changement de minimum, ' . $valeur . ' devient le nouveau min.</p>';
        $min = $valeur;
    }      
}

foreach ($tableau as $valeur) {
    if ($valeur > $max) {
        echo '<p> Changement de maximum, ' . $valeur . ' devient le nouveau max.</p>';
        $max = $valeur;
    }      
}

// Affichage de la solution
echo '<p>Le minimum est : ' . $min;
echo '<p>Le maximum est : ' . $max;