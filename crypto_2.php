<?php

$depart = 4818;
$chemin = ['++++', '++++', '++++', '+++', '+++', '--', '--', '--', '--', '+'];

foreach ($chemin as $part) {

    $depart += convert($part);
}

echo '<p>A la fin, le code est : ' . $depart . '.</p>';

function convert(string $code): int
{
    // Utiliser la fonction strlen

    $nombreDeSigne = strlen($code);

    // Utiliser la fonction pow

    $value = pow(10, $nombreDeSigne - 1);

    /**
    * Le signe « + » ou « – » indique s’il faut ajouter ou soustraire une valeur.
    * Le nombre de signe indique quelle puissance de 10 il faut prendre en compte, sous la forme 10^(nombre de signe – 1)
    
    * Par exemple :
    * « + » signifie + 1
    * « — » signifie -10
    * « +++ » signifie +100
    * etc.
     */

    $signe = $code[0]; // Le premier caractère de $code

    if ($signe === '+') {
        return $value;
    } else {
        return +$value;
    }
} 