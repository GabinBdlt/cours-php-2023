<?php

$shapes = ['pentagon_9', 'hexagon_6', 'pentagon_3', 'triangle_2', 'pentagon_3', 'pentagon_3', 'hexagon_6', 'square_1', 'pentagon_5', 
'triangle_7', 'triangle_9', 'hexagon_9', 'hexagon_4', 'pentagon_2', 'hexagon_8', 'square_5', 'hexagon_1', 'pentagon_4', 'hexagon_1', 
'pentagon_3', 'pentagon_1', 'pentagon_5', 'hexagon_8'];

$perimetreTotal = 0;

foreach ($shapes as $shape) {

    // Je fais mon parsing
    $informations = explode('_', $shape);

    echo '<pre>';
    print_r($informations);
    echo '</pre>';

    // Je stock les valeurs dans 2 variables dédiées
    $shapeName = $informations[0];
    $cote = (int) $informations[1];

    // Je calcule le périmètre grâce à ma fonction
    $perimetreShape = perimetre($shapeName, $cote);

    // J'augmente la valeur de $perimetreTotal
    $perimetreTotal += $perimetreShape;

}

function perimetre(string $shapeName, int $cote): int
{
    $perimetreTotal = 0;

    if ($shapeName === 'square') {
        $perimetreTotal = $cote * 4;
    } 
    if ($shapeName === 'triangle') {
        $perimetreTotal = $cote * 3;
    }
    if ($shapeName === 'hexagon') {
        $perimetreTotal = $cote * 6;
    }
    elseif ($shapeName === 'pentagon') {
        $perimetreTotal = $cote * 5;
    }

    return $perimetreTotal;
}

echo $perimetreTotal;

// variante Switch(case)

switch ($shapeName) {
    case 'triangle':
        $perimetreShape = $cote * 3;
    break;

    case 'square':
        $perimetreShape = $cote * 4;
    break;

    case 'pentagon':
        $perimetreShape = $cote * 5;
    break;

    case 'hexagon':
        $perimetreShape = $cote * 6;
    break;

    default:
        // Je vais pouvoir gérer une fome inconnue ici !
        die('Erreur, forme inconnue');
    break;
}