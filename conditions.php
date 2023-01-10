<?php

$monAge = rand(5, 25);
define('AGE_LIMITE_POUR_PASSER_LE_PERMIS', 18);


// Version avec concaténation
if ($monAge >= AGE_LIMITE_POUR_PASSER_LE_PERMIS) {
    echo '<p>Je peux aller m\'inscrire à l\'auto-école</p>';
} else {
    $ageAttendre = AGE_LIMITE_POUR_PASSER_LE_PERMIS - $monAge;
    $phrase = '<p>J\'attends encore ' . $ageAttendre . ' an';
    if ($ageAttendre !== 1) {
        $phrase .= 's';
        echo $phrase;
    } else {
        $phrase .= '...';
        echo $phrase;
    }
}

// Version "Ternaire => If condensé"
if ($monAge >= AGE_LIMITE_POUR_PASSER_LE_PERMIS) {
    echo '<p>Je peux aller m\'inscrire à l\'auto-école</p>';
} else {
    $ageAttendre = AGE_LIMITE_POUR_PASSER_LE_PERMIS - $monAge;

    $mot = ($ageAttendre === 1) ? 'an' : 'ans';

    $phrase = '<p>J\'attends encore ' . $ageAttendre . ' ' . $mot . '...</p>';

    echo $phrase;
}

// La structure :
// Mot clé "if"
// La condition, comparaison, booléen se trouve entre()
// Plusieurs opérateurs de comparaison : 
    // > plus grand que, >= plus grand ou égal
    // < plus petit que, <= plus petit ou égal
    // == égal (à éviter)
    // === strictement égal (à favoriser)
    // !== strictement inégal
// Un premier bloc d'instruction, délimité par { }
// Si nécessaire le mot clé "else"