<?php

// 1.
// Ecrivez 100 fois : " Je ne copierais pas le code PHP de mon voison "

for ($i = 1; $i <= 100; $i++) {
    echo '<p> ' . $i . ' Je ne copierais pas le code PHP de mon voison.</p>';
}

echo '<hr />';

// 2. 
// Ecrivez 150 fois : " Je ne copierais pas le code PHP de mon voisin " en affichant chaque numéroque de ligne. 

for ($i = 1; $i <= 150; $i++) {
    echo '<p> ' . $i . ') Je ne copierais pas le code PHP de mon voison.</p>';
}

echo '<hr />';

// 3. 
// Trouver la somme des 100 premiers nombres : 1 + 2 + 3 + ... + 100 = ?

$somme = 0;
for ($i = 1; $i <= 100; $i++) {
    $somme += $i;
}

echo $somme;

echo '<hr />';

// 4.
// Trouver la somme des 100 premiers nombres pairs : 2 + 4 + 6 + ... + 200 = ?

    // 2 façons de faire, avec ou sans modulp

// V1, avec le modulo

$somme = 0;
for ($i = 1; $i <= 200; $i++) {
    if ($i%2 == 0) {
        $somme += $i;
    }
}

echo $somme;

// V1, sans le modulo

// $somme = 0;
// for ($i = 2; $i <= 200; $i+=2) {
//     $somme += $i;
// }

// echo $somme;

echo '<hr />';

// 5.
// Trouver la différence entre la somme des carrés des 100 premiers nobres et le carré de la somme des 100 premiers nombres :
// (1^2 + 2^2 + 3^2 + ... + 100^2) - (1 + 2 + 3 + ... + 100)^2

$somme = 0;
$sommeDesCarres = 0;

for ($i = 1; $i <= 100; $i++) {
    $carre = $i * $i;
    $sommeDesCarres += $carre;
}

for ($i = 1; $i <= 100; $i++) {
    $somme += $i;
}

$carreDeLaSomme = $somme * $somme;

// Différence 
$difference = $sommeDesCarres - $carreDeLaSomme;

echo $difference;

// En 1 boucle 

$somme = 0;
$sommeDesCarres = 0;

for ($i = 1; $i <= 100; $i++) {
    $sommeDesCarres += $i * $i;
    $somme += $i;
}

// Différence 
$difference = $sommeDesCarres - ($somme * $somme);
    
echo '<hr />';