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
function double($nombre): int // On met int pour indiquer le typage nombre est un int et la fonction renvoie un int
{
    $double = 2 * $nombre;

    return $double;
}

$essai = double(4);
echo $essai;

/**
 * La recette d'une fonction :
 * 1. Le mot clé function
 * 2. Son nom : camelcase, explicite 
 * 3. Le ou les paramètres, avec leur type
 *      int => nombre entier
 *      float => chaine de caractères
 *      bool => booléen
 *      array => tableau
 *      .... (il y en a d'autres) ....
 * 4. Le type de retour (cf. point précédent)
 * 5. Le return
 * 
 * 6. Les instructions de la fonction.
 */

 function repeteUnMot(string $mot, int $nbRepetition): string
 {
    $motRepetes = ' ';

    // Etape 6, je code le "coeur" de ma fonction

    return $motRepetes;
 }

 // NE PAS CONFONDRE :
 // - La déclaration d'une fonction
 // - Son utilisation
 // On parle de différence de "scope"

 function buildSentence(string $name, string $room): string
 {
    $sentence = '';
    $sentence .= $name;
    $sentence .= ' is in the ';
    $sentence .= $room;

    return $sentence;
 }

 echo '<p>' . buildSentence('Bryan', 'kitchen') . '</p>';