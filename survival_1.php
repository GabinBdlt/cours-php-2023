<?php

$islandX = 40;
$islandY = 43;
$planes = ['P:85,75C:ISJ', 'P:96,27C:YNM', 'P:44,92C:TAU', 'P:9,60C:EAC', 'P:62,92C:YJC', 'P:57,100C:ABD', 'P:0,86C:DDP'];

// Initialiser un tableau vide
$planesDistances = [];

foreach ($planes as $planeInformations) {
    // On mettra comme clé le code de l'avion,
    // Et comme valeur la distance

    $plane = parser($planeInformations);

    $distanceBetweenPlaneAndIsland = pythagore(
        xPlane: $plane['x'],
        yPlane: $plane['y'],
        xIsland: $islandX,
        yIsland: $islandY,
    );

    // On mettra comme clé le code de l'avion, et le reste.
    $planesDistances[$plane['code']] = $distanceBetweenPlaneAndIsland;
}

// Sort => Tri dans l'ordre croissant
asort($planesDistances); // a => associative

$planesDistances = array_slice($planesDistances, 3, 5);

echo '<pre>';
print_r($planesDistances);
echo '</pre>';

$planesCodes = array_keys($planesDistances);

echo '<pre>';
print_r($planesCodes);
echo '</pre>';


$codes = implode('', $planesCodes);
echo $codes;


echo '<pre>';
print_r($planesDistances);
echo '</pre>';

function pythagore(int $xPlane, int $xIsland, int $yPlane, int $yIsland): float
{
    $xTotal = 0;
    $yTotal = 0;

    $xTotal = pow($xPlane - $xIsland, 2);
    $yTotal = pow($yPlane - $yIsland, 2);

    return sqrt($xTotal + $yTotal);
}  

echo pythagore(
    xPlane: 3, 
    xIsland: 0, 
    yPlane: 4, 
    yIsland: 0
);

function parser(string $informations): array
{
    $format = 'P:%d,%dC:%s';

    $data = sscanf($informations, $format);

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    return [
        'x' => $data[0],
        'y' => $data[1],
        'code' => $data[2]
     ];
} 


$informations = 'P:62,1C:WAD';
parser($informations);

$p = parser($informations);
echo $p;