<?php
$sautDeLigne = '<br />';

$stop = 64;
$somme = 0;

for ($i = 0; $i < $stop; $i++) {
    $somme += $i;
}

echo $somme;

echo $sautDeLigne;

$values = [5, 6, 6, 1, 6, 5, 4, 7, 6, 5, 6, 4, 3, 3, 3, 1, 4, 1, 7, 5, 3, 1];

$somme = 0;

foreach ($values as $nombres) {
    if ($nombres >= 5) {
        echo $nombres;
        $somme += $nombres;
    }      
}
echo $sautDeLigne;

echo $somme;

echo $sautDeLigne;

$somme = 0;

foreach ($values as $nombres) {

    if ($nombres < 5) {
        continue;
    }
    $somme += $nombres;
}

echo $sautDeLigne;

$values = [35, 18, 88, 43, 52, 19, 100, 64, 13, 17, 54, 47, 69, 61, 36, 17, 12, 84, 62, 58, 44, 57, 56, 61, 38, 42, 33, 64, 49];

foreach ($values as $nombres) {

    if ($nombres%3 !== 0) {
        continue;
        
    }

    $tab[] = $nombres;
}


$reponse = implode('-', $tab);

echo $reponse;

function filtresLesMultiples(array $values, int $multiple): array
{
    foreach ($values as $nombres) {

        if ($nombres % $multiple !== 0) {
            continue;
            
        }
    
        $tab[] = $nombres;
    }

    return $tab;
}

echo '<br>';
echo implode('-', filtresLesMultiples($values, 9));