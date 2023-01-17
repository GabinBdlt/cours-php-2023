<?php 
declare(strict_types=1);
// NOS FONCTIONS

function puissance(int $force, int $agilite, int $defense): int
{
    $puissance = 0;

    $puissance += $force * 2;
    $puissance += $agilite;

    $puissance += (int) round($defense / 2); // On passe de float à int

    return $puissance;
}

function creerUnEnnemi(int $niveau): array
{
    $puissance = rand(10*$niveau, 20*$niveau);
    $alphabet = 'ADEGIMQSU';
    $alphabet= str_shuffle($alphabet);
    $nom = substr($alphabet, 0, 9); 

    return [
        'nom' => 'Bouftou ' . $nom,
        'puissance' => $puissance,
    ];
}

// $ennemiDeNiveau1 = creerUnEnnemi(1);
// $ennemiDeNiveau1 = creerUnEnnemi(2);
