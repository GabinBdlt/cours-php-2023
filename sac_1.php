<?php

// Règle
// Notre aventurier dispose d’un sac à dos qui a une certaine contenance. Son sac est vide au départ.

// Il a ensuite à sa disposition, un ensembles d’objets, dont les valeurs représentent la place qu’ils occupent dans le sac.

// L’aventurier décide de remplir son sac de la façon suivante :

// Il va d’abord essayer de mettre les 10 objets les + gros, de manière décroissante.
// Puis il va essayer de mettre les 10 objets les + petits, de manière croissante.
// Attention à ne pas dépasser la place disponible dans le sac ! Si tu as un objet qui « occupe » 75 et qu’il ne reste plus que 50 dans le sac, 
// alors l’objet ne peut pas être déposé dans le sac.

// Tu dois retourner la place occupée dans le sac à dos par cette méthode de remplissage.

$sac = 691;
$objets = [22, 60, 72, 42, 50, 81, 16, 58, 82, 67, 14, 37, 30, 33, 29, 13, 53, 12, 26, 51, 46, 64, 43, 77, 35, 78];

echo '<pre>';
print_r($objets);
echo '</pre>';

// TRIER LE TABLEAU DANS L'ORDRE DECROISSANT POUR LE DEBUT
arsort($objets);
echo '<pre>';
print_r($objets);
echo '</pre>';

$remplissage = 0;

$misDansSac = 0;
$maxDansSac = 10;

// Pour éviter les compteurs ci-dessus :
// $10PlusGros = array_slice($objets, 0, 10);

foreach ($objets as $objet) {

    // Essayer de remplir le sac, donc vérifier s'il y a de la place.
    if ( ($remplissage + $objet) <= $sac) {
        $remplissage += $objet;
    }

    $misDansSac++;
    if ($misDansSac >= $maxDansSac) {
        break;
    }
}

echo $remplissage;


// PUIS ON CHANGE DANS L'AUTRE SENS
asort($objets);

// ENSUITE REMPLIR LE SAC DANS L'ORDRE DONNER 