<?php 

// Le premier type de variable : 
// Les CHAINES DE CARACTERES

// Déclaration d'une variable, utilisation du symbole $

// Le nommage es très important
// Pas de caractères spéciaux 
// On utilisera du camelCase
// On ne nommera PAS : $a, $b, $var, $truc, $carac , $mPCDC etc...
// Quelques exceptions : petits exercices d'algos, $i, $key dans certains cas

$sautDeLigne = '<br />';

$maPremiereChaineDeCaracteres = 'Bonjour' . $sautDeLigne;

echo $maPremiereChaineDeCaracteres;

$maPremiereChaineDeCaracteres = 'Au revoir';

echo $maPremiereChaineDeCaracteres;

/* 
Notes :
L'opérateur de concaténation est le point .
La concaténation sert à "coller" les chaines de caractères entre elles
*/


$prenom = 'Bryan';
$piece = 'Kitchen';

$phrase = $prenom . ' is in the ' . $piece;

echo $sautDeLigne;
echo $phrase;

// Cas particulier de l'apostrophe
$phrase = 'Je suis à l\'école'; // Utilisation d'un backslash \
// "Echappement de caractère"

// Utilisation des doubles quotes
$phrase = "Je suis à l'école et je dis : \"Bonjour\"";

// ¨Publipostage de variables
$lieu = 'jardin';
$phrase = "Je suis dans le $lieu"; // La variable est exécutée
echo $sautDeLigne;
echo $phrase;

$piece = 'Bathroom';

$autrePhrase = ' '; // Chaine de caractères vide
$autrePhrase = $autrePhrase . $prenom;
$autrePhrase = $autrePhrase . ' is in the ';
$autrePhrase = $autrePhrase . $piece;

echo $sautDeLigne;
echo $autrePhrase;
// => Bryan is in the Bathroom

// Opérateur de concaténation "condensé"
// La même chose que au dessus mais écrit différement
$autrePhrase = ''; // J'initialise, un seul égal =
$autrePhrase .= $prenom; // Je remplis .=
$autrePhrase .= ' is in the ';
$autrePhrase .= $piece;

// -------------------------------------------------------
// -------------------------------------------------------
// -------------------------------------------------------

// Deuxième type de variables, les nombres ENTIERS

$unNombre = 35;
$unAutreNombre = 11;

// Il y a une limite à ce que peut contenir un entier
// PHP n'est pas "très bon" pour gérer des grands nombres.

$UnNombreNegatif = -7;

// Calculs
// 5 opérateurs importants pour faire des calculs
// Addition : +
// Soustraction : - (tiret du 6)
// Multiplication : * (étoile)
// Division : / (slash)
// Modulo : % (reste de la division euclidienne)

$calcul = $unNombre + 9;
echo $sautDeLigne;
echo $calcul;

$calcul = $unAutreNombre - 34;
echo $sautDeLigne;
echo $calcul;

$calcul = $unNombre * $unAutreNombre;
echo $sautDeLigne;
echo $calcul;

$calcul = $unNombre + $unNombre + $unNombre + $unAutreNombre;
echo $sautDeLigne;
echo $calcul;

$calcul = $unNombre + ($unAutreNombre * $UnNombreNegatif);
echo $sautDeLigne;
echo $calcul;

$positionGrille = 6;
$penaliteBoite = 5;
$penalitePiste = 10;

$calcul = $positionGrille + $penaliteBoite + $penalitePiste;
echo $sautDeLigne;
echo $calcul;

$nombrePilote = 44;
$nombreGroupe = 4;

$calcul = $nombrePilote / $nombreGroupe;
echo $sautDeLigne;
echo $calcul;

// On peut faire des opérations mathématiques aussi complexe que nécessaires.

// Opération condensés
// Addition : +=
// Soustraction : -= 
// Multiplication : *=
// Division : /= 
// Modulo : %=

$somme = 0;
$somme = $somme + 1; //1
$somme = $somme + 2; //3
$somme = $somme + 3; //6

// Version condensée 
$somme = 0;
$somme += 1;
$somme += 2;
$somme += 3;

// += et -= sont souvent utilisés
// Les autres beaucoup moins
// C'est à l'appréciation du développeur

// Opérateur d'incrémentation et décrémentation 

$compteur = 5;
$compteur++; //6

$autreCompteur = 12;
$autreCompteur--; //11

$a = 1;
// Ces 3 lignes font la même chose :
$a = $a +1;
$a += 1;
$a++;

// -------------------------------------------------------
// -------------------------------------------------------
// -------------------------------------------------------

// 3ème type de variable : les nombres DECIMAUX

$unNombreDecimal = 23.34;
// Il faut utiliser le point, et non la virgule
// On peut utiliser tous les opérateurs de calculs sur les nombrs décimaux

$unNombreEntier = 34 + 18;

$unNombreDecimal = 34 / 18;
// Quand on manipule des nombres entiers, on peut finir avec des nombres décimaux.