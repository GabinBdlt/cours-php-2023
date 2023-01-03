<?php

/* une constante, c'est une valeur "importante" dans notre programme qui doit être identifiée comme telle 
qui n'a aucune raison d'évoluer. */

// Exemple dela TVA : 20%

define('TAUX_TVA', 20);
// On écrit les constantes en FULL MAJ avec des underscores en guise d'espace. 

$produitPrixHT = 100;
$produitTVA = $produitPrixHT * TAUX_TVA / 100;

$produitPrixTTC = $produitPrixHT + $produitTVA;

define('PI', 3,14); // Contient une valeur décimale
define('GENERIC_MESSAGE_ERROR', 'An error occured on line'); // Contient une chaine de caractères

echo GENERIC_MESSAGE_ERROR . 32;