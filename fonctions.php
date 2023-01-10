<?php

// LES FONCTIONS 

// echo
// rand()
// min() et max()
// print_r
// shuffle()
// range()
// etc.

// 2 grandes familles de fonctions

// Fonctions natives, déjà disponibles dans PHP. 
// Est ce que ça n'existe pas déjà dans PHP ?

$tableau = [1, 2, 3];

$nbElement = count($tableau);

// Nom de la fonction.
// Des parenthèses
// Un ou des paramètres, séparés par des virgules
// Imortant de respecter les types attendus
// Important de respecter l'ordre

$carreDeTrois = pow(3, 2); // Différent de pow(2, 3) 

// Ne pas hésiter à se référer à la documentation.


// Fonctions personnalisées
function double($nombre)
{
    $double = 2 * $nombre;

    return $double;
}

$essai = double(4);
echo $essai;