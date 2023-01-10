<?php

$sautDeLigne = '<br />';
// On va raconter une histoire...
$histoire = ' '; // On fait un seul echo à la fin (déjà écrit)
$nomDuHeros = ' Flash McQueen.'; // A choisir
$distanceParcourue = 0;
// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire, utilisez un peu d'html : hX, p, b, etc.

$histoire .= '<h1>Rapide, il est rapide. Rapide comme l\'élair et la voiture la plus rapide du monde<h1>';
$histoire .= '<h4>Le héros s\'appelle' . $nomDuHeros . '<h4>';

// On va définir quelques valeurs aléatoirement
$force = rand(1, 10);
$histoire .= 'Force : ' . $force;
$agilite = rand(1, 10);
$piecesDOr = rand(50, 150);
$NbJourDeLaSemaine = rand(1, 7);
$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
//
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//
// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.


// $force = rand(1, 10);
// echo $sautDeLigne;
// echo $force;

// $agilite = rand(1, 10);

define('GAINS_AGILITE', 8);

echo $sautDeLigne;
if ($force > GAINS_AGILITE) { 
    $agilite++;
    $histoire .= '<p>Flash gagne 1 point d\'agilité.</p>';
    // echo 'Agilité : ' . $agilite . ' ( Agilité gagne +1)';
}
// 3.
// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m.
// Dans le chemin de droite, je trouve 4 pièces d'or

define('PIECES_AJOUT', 4);

echo $sautDeLigne;
if ($force < 6) {
    $distanceParcourue += 500;
    $histoire .= '<p>Flash passe dans le chemin de gauche, le circuit de Monaco.</p>';
} else {
    $distanceParcourue += 850;
    $piecesDOr += PIECES_AJOUT;
    $histoire .= '<p>Flash passe par le chemin de droite, le circuit de Spa, il y trouve ' . PIECES_AJOUT . ' pièces d\'or.' . ' Il a maintenant ' . $piecesDOr . ' pièces d\'or.</p>';
}

// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j'en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force

$histoire .= '<p>Flash possède ' . $piecesDOr . ' pièces.</p>';

$distanceParcourue += 150;

if ($piecesDOr > 80) {
    $piecesDOr -= 30;
    $agilite += 2;

    $histoire .=  '<p>Flash utilise 30 pièces d\'or pour gagner 2 points d\'agilité</p>';

} elseif ($piecesDOr <= 80 && $piecesDOr > 60) {
    $piecesDOr -= 15;
    $agilite++;

    $histoire .= '<p>Flash utilise 15 pièces d\'or pour gagner 1 point d\'agilité</p>';

} elseif ($piecesDOr < 60) {
    $piecesDOr -= 5;
    $force++;

    $histoire .=  '<p>Flash utilise 5 pièces d\'or pour gagner 1 point de force.</p>';
}


// 5. 
// Je parcours 300m
// Si ma force et mon agilité sont supérieures à 6, je gagne 10 pièce d'or
// Si ma force ou mon agilité est inférieure à 3, je perds 10 pièces d'or
// (stockez les conditions dans des variables)
$distanceParcourue += 300;

// $assezDePiece = ($piecesDOr > 80); // Contient true ou false
// $moyenDePiece = ($piecesDOr <= 80 && $piecesDOr > 60); // || (barre du 6, pipe)

$conditionsPourGagnerDesPiecesDOr = ($force > 6 && $agilite > 6);
$conditionsPourPerdreDesPiecesDOr = ($force < 3 || $agilite < 3);

if ($conditionsPourGagnerDesPiecesDOr) {
    $piecesDOr += 10;

    $histoire .= '<p>Flash gagne 10 pièces d\'or.';
}

if ($conditionsPourPerdreDesPiecesDOr) {
    $piecesDOr -= 10;

    $histoire .= '<p>Flash perd 10 pièces d\'or.';
}

if (!$conditionsPourGagnerDesPiecesDOr && !$conditionsPourPerdreDesPiecesDOr) {
    
    $histoire .= '<p>Flash ne fait rien.';
}

// 6.
// Indiquez dans l'histoire quel jour nous sommes

$jour = $joursDeLaSemaine[$NbJourDeLaSemaine - 1];
$histoire .= '<p>Nous sommes un ' . $jour . '.</p>';

// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité

// $debutSemaine = (array_rand($joursDeLaSemaine));

// if ($debutSemaine) {
//     $distanceParcourue += 740;
//     $force += 1;
//     $histoire .= '<p>Flash prend le chemin de 740m et gagne 1 point de force. </p>';
// }

// else {
//     $distanceParcourue += 1345;
//     $agilite -= 1;
//     $histoire .= '<p>Flash prend le chemin de 1345m et perd 1 point d\'agilité. </p>'; 
// }

switch ($NbJourDeLaSemaine) {
    case 1:
    case 2:
    case 3:
        $distanceParcourue += 740;
        $force += 1;
        $histoire .= '<p>Flash prend le chemin de 740m et gagne 1 points de force.</p>';
        break;

// Possible de mettre (default:) à la place des cases, car ils ne restent que ces valeurs.
    case 4:
    case 5:
    case 6:
    case 7:
        $distanceParcourue += 1345;
        $agilite -= 1;
        $histoire .= '<p>Flash prend le chemin de 1345m et perd 1 point d\'aglité.</p>';
        break;
}

// Ou : 
// switch ($jour) {
//     case 'Lundi':
//     case 'Mardi':
//     case 'Mercredi':
        // Bloc d'instructions

        // --------------------
//     case 'Jeudi':
//     case 'Vendredi':
//     case 'Samedi':
//     case 'Dimanche': 
        // Bloc d'instructions

        // --------------------  
// }


// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également

if ($piecesDOr <= 20) {
    $histoire .= '<p>Flash possède peu de pièce, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr <= 40) {
    $histoire .= '<p>Flash possède un nombre de pièce limité, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr <= 60) {
    $histoire .= '<p>Flash possède quelques pièce, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr <= 80) {
    $histoire .= '<p>Flash possède pas mal de pièce, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr <= 100) {
    $histoire .= '<p>Flash possède beaucoup de pièce, car il possède ' . $piecesDOr . '.</p>';
} else {
    $histoire .= '<p>Flash possède énormément de pièce, car il possède ' . $piecesDOr . '.</p>';
}

// Variante avec un "switch true"

switch (true) {

    case $piecesDOr <= 20:
        $histoire .= '<p>Flash possède peu de pièce, car il possède ' . $piecesDOr . '.</p>';   
        break;

    case $piecesDOr <= 40:
        $histoire .= '<p>Flash possède un nombre de pièce limité, car il possède ' . $piecesDOr . '.</p>';   
        break;
    
    case $piecesDOr <= 60:
        $histoire .= '<p>Flash possède quelques pièce, car il possède ' . $piecesDOr . '.</p>';   
        break;
    
    case $piecesDOr <= 80:
        $histoire .= '<p>Flash possède pas mal de pièce, car il possède ' . $piecesDOr . '.</p>';
        break;
    
    case $piecesDOr <= 100:
        $histoire .= '<p>Flash possède beaucoup de pièce, car il possède ' . $piecesDOr . '.</p>';
        break;
    
    default:
        $histoire .= '<p>Flash possède énormément de pièce, car il possède ' . $piecesDOr . '.</p>';
        break;
}

// Depuis PHP 8, il y a également une autre structure, nommée "match"

$distanceSecondJour = match($jour) {
    'Lundi', 'Mardi', 'Mercredi' => 740,
    default => 1345
};

$histoire .= '<p>Le ' . $jour . ' je parcours ' . $distanceSecondJour . '.</p>';


echo $sautDeLigne;
$histoire .= '<p>' . $distanceParcourue . ' m</p>';
echo $histoire;