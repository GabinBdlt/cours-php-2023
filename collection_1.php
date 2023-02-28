<?php

// Commencer par "fusionner" les tableaux en 1 seul qui contient toutes les informations (tableau de tableaux, avec des index bien nommés :
// 'exemplaire', 'achat', 'cote', 'revente')

$exemplaires = [50000, 50000, 50000, 500, 50000, 2000, 2000, 50000, 100, 2000, 2000, 2000, 50000, 50000, 2000, 50000, 2000];
$cotes = [0.6, 0.6, 0.6, 1.6, 0.8, 0.8, 0.8, 0.8, 1.6, 0.8, 0.8, 0.6, 0.6, 1.2, 0.8, 0.6, 0.6];

$tableauAvecTout = [];

foreach ($exemplaires as $key => $exemplaire) {
    $cote = $cotes[$key];

    // Calcul prix d'achat
    $achat = 15;
    if ($exemplaire < 2000) {
        $achat = 30;
    }

    // Calcul prix de revente
    $revente = $achat * $cote;

    // On met tout bien rangé dans $tableauAvecTout
    $figurine = [
        'exemplaire' => $exemplaire,
        'achat' => $achat,
        'cote' => $cote,
        'vente' => $revente
    ];

    $tableauAvecTout[] = $figurine;
}


echo '<pre>';
print_r($tableauAvecTout);
echo '</pre>';

// Et utiliser array_column et array_sum

$tousMesAchats = array_column($tableauAvecTout, 'achat');

echo '<pre>';
print_r($tousMesAchats);
echo '</pre>';

echo array_sum($tousMesAchats);

$total = 
    array_sum(array_column($tableauAvecTout, 'revente')) -
    array_sum(array_column($tableauAvecTout, 'achat'));

echo $total;