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