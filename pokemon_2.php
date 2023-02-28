<?php

// Remplir les données ici

$pokemons = ['Herbe:26', 'Eau:34', 'Feu:41', 'Herbe:37', 'Air:45', 'Psychique:45', 'Feu:38', 'Poison:88', 'Feu:13', 'Glace:81', 'Eau:45', 'Insecte:94'];

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

$sommePuissance = 0;

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

$sommePuissance = 
    lePokemonLePlusFort($pokemons, TYPE_EAU) +
    lePokemonLePlusFort($pokemons, TYPE_FEU) +
    lePokemonLePlusFort($pokemons, TYPE_HERBE) +
    lePokemonLePlusFort($pokemons, TYPES_RARES); 

echo $sommePuissance;