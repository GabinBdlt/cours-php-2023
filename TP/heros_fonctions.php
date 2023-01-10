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
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphabet= str_shuffle($alphabet);
    $nom = substr($alphabet, 0, 6); 

    return [
        'nom' => 'Bouftou ' . $nom,
        'puissance' => $puissance,
    ];
}

