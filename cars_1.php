<?php

// informations 

$plates = ['NQ-356-MJ', 'ZQ-328-FY', 'CI-707-II', 'SJ-705-HL', 'IW-246-HZ', 'SL-547-MT'];

// règles 

// La plaque ED-845-TY ne présente aucune symétrie et vaut donc 1 point
// La plaque ED-845-TE présente 1 symétrie (le E) et vaut donc 10 points
// La plaque ED-845-DY présente 1 symétrie (le D) et vaut donc 10 points
// La plaque ED-848-TY présente 1 symétrie (le 8) et vaut donc 10 points
// La plaque ED-845-DE présente 2 symétries (le E et le D) et vaut donc 100 points (2 autres possibilités de double symétrie)
// La plaque ED–848–DE présente 3 symétries (le E, le D et le 8) et vaut donc 1 000 points

$score = 0;

foreach ($plates as $plate) {

}

/*
* Créer une fonction qui analyse la plaque et une position, et renvoie true ou false selon la symétrie
* Par exemple, analyse ('ED-845-TE', 0), renvoie true, symétrie sur la position 0.
* */

function analyse(string $plate, int $position): bool
{
    
}