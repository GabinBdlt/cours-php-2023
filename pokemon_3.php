<?php

// Remplir les données ici

$pokemons = ['Herbe:29', 'Eau:20', 'Herbe:24', 'Eau:11', 'Air:45', 'Feu:31', 'Herbe:10', 'Insecte:79', 'Feu:15', 'Herbe:44', 
'Poison:87', 'Poison:100', 'Feu:23', 'Eau:45', 'Poison:48', 'Herbe:19', 'Glace:53', 'Feu:10', 'Eau:35', 'Insecte:72', 'Glace:51', 'Eau:13', 
'Eau:28', 'Feu:15', 'Eau:10', 'Insecte:82', 'Eau:16', 'Herbe:40'];

// Programme à inscrire

// Constantes

define('TYPE_EAU', 'Eau');
define('TYPE_FEU', 'Feu');
define('TYPE_HERBE', 'Herbe');
define('TYPES_RARES', 'Rares');
define('TYPE_AIR', 'Air');
define('TYPE_POISON', 'Poison');
define('TYPE_GLACE', 'Glace');
define('TYPE_PSYCHIQUE', 'Psychique');
define('TYPE_INSECTE', 'Insecte');

$herbes = filtreLesPokemons($pokemons, TYPE_HERBE);
$feux = filtreLesPokemons($pokemons, TYPE_FEU);
$eaux = filtreLesPokemons($pokemons, TYPE_EAU);
$rares = filtreLesPokemons($pokemons, TYPES_RARES);

$top1 = $herbes[0] + $feux[0] + $eaux[0] + $rares[0];
$top2 = $herbes[1] + $feux[1] + $eaux[1] + $rares[1];
$top3 = $herbes[2] + $feux[2] + $eaux[2] + $rares[2];

echo $top1 + $top2 + $top3;

$sommePuissance1 = 0;

echo '<pre />';
print_r($pokemons);
echo '<pre />';

// Fonction

function filtreLesPokemons(array $pokemons, string $type): array
{
    // 1. Définir quel(s) type(s) on garde

    if($type === TYPES_RARES){
        $authorisedTypes = [TYPE_AIR, TYPE_POISON, TYPE_GLACE, TYPE_PSYCHIQUE, TYPE_INSECTE];
    }
    else {
        $authorisedTypes = [$type];
    }

    // 2. Initialiser notre retour

    $forces = [];

    // 3. Boucler sur $pokemon

    foreach ($pokemons as $pokemon) {
        // Parsing
        [$pokemonType, $pokemonForce] = explode(':', $pokemon);

        // PAREIL QUE
        // $informations = explode(':', $pokemon);
        // $types = $informations[0];
        // $puissances = $informations[1];

        // Conserver ce qui nous intéresse, avec in_array
        if (! in_array($pokemonType, $authorisedTypes)) {
            continue;
        }

        $forces[] = $pokemonForce;
    }

    // Tri dans l'ordre décroissant
    rsort($forces);


    // 4. Return

    return $forces;

};

$essai = filtreLesPokemons($pokemons, TYPE_HERBE);
echo '<pre />';
print_r($essai);
echo '<pre />';

function lePokemonLePlusFort(array $pokemons, string $type)
{
    return max(filtreLesPokemons($pokemons, $type));
};

$essai = lePokemonLePlusFort($pokemons, TYPE_HERBE);
echo '<pre />';
print_r($essai);
echo '<pre />';

$sommePuissance1 = 
    lePokemonLePlusFort($pokemons, TYPE_EAU) +
    lePokemonLePlusFort($pokemons, TYPE_FEU) +
    lePokemonLePlusFort($pokemons, TYPE_HERBE) +
    lePokemonLePlusFort($pokemons, TYPES_RARES); 

echo $sommePuissance1;

unset($sommePuissance1);