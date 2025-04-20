<?php
    
    // TODO: Fix this function so it returns only pokemon which match $type 
    function getPokemonByType($type) {
        global $pokemonList;
        $ofType = [];
        foreach ($pokemonList as $pokemon){
            if (in_array($type, $pokemon['types'])) {
                $ofType[] = $pokemon;
            }
        }

        return $ofType;
    }

    $pokemonList = [
        [
            'number' => 1,
            'name' => 'Bulbasaur',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Overgrow', 'Chlorophyll'],
            'height' => '0.7m',
            'weight' => '6.9kg',
            'image' => 'images/1.png'
        ],
        [
            'number' => 2,
            'name' => 'Ivysaur',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Overgrow', 'Chlorophyll'],
            'height' => '1.0m',
            'weight' => '13.0kg',
            'image' => 'images/2.png'
        ],
        [
            'number' => 3,
            'name' => 'Venusaur',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Overgrow', 'Chlorophyll'],
            'height' => '2.0m',
            'weight' => '100.0kg',
            'image' => 'images/3.png'
        ],
        [
            'number' => 4,
            'name' => 'Charmander',
            'types' => ['Fire'],
            'abilities' => ['Blaze', 'Solar Power'],
            'height' => '0.6m',
            'weight' => '8.5kg',
            'image' => 'images/4.png'
        ],
        [
            'number' => 5,
            'name' => 'Charmeleon',
            'types' => ['Fire'],
            'abilities' => ['Blaze', 'Solar Power'],
            'height' => '1.1m',
            'weight' => '19.0kg',
            'image' => 'images/5.png'
        ],
        [
            'number' => 6,
            'name' => 'Charizard',
            'types' => ['Fire', 'Flying'],
            'abilities' => ['Blaze', 'Solar Power'],
            'height' => '1.7m',
            'weight' => '90.5kg',
            'image' => 'images/6.png'
        ],
        [
            'number' => 7,
            'name' => 'Squirtle',
            'types' => ['Water'],
            'abilities' => ['Torrent', 'Rain Dish'],
            'height' => '0.5m',
            'weight' => '9.0kg',
            'image' => 'images/7.png'
        ],
        [
            'number' => 8,
            'name' => 'Wartortle',
            'types' => ['Water'],
            'abilities' => ['Torrent', 'Rain Dish'],
            'height' => '1.0m',
            'weight' => '22.5kg',
            'image' => 'images/8.png'
        ],
        [
            'number' => 9,
            'name' => 'Blastoise',
            'types' => ['Water'],
            'abilities' => ['Torrent', 'Rain Dish'],
            'height' => '1.6m',
            'weight' => '85.5kg',
            'image' => 'images/9.png'
        ],
        [
            'number' => 10,
            'name' => 'Caterpie',
            'types' => ['Bug'],
            'abilities' => ['Shield Dust', 'Run Away'],
            'height' => '0.3m',
            'weight' => '2.9kg',
            'image' => 'images/10.png'
        ],
        [
            'number' => 11,
            'name' => 'Metapod',
            'types' => ['Bug'],
            'abilities' => ['Shed Skin'],
            'height' => '0.7m',
            'weight' => '9.9kg',
            'image' => 'images/11.png'
        ],
        [
            'number' => 12,
            'name' => 'Butterfree',
            'types' => ['Bug', 'Flying'],
            'abilities' => ['Compound Eyes', 'Tinted Lens'],
            'height' => '1.1m',
            'weight' => '32.0kg',
            'image' => 'images/12.png'
        ],
        [
            'number' => 13,
            'name' => 'Weedle',
            'types' => ['Bug', 'Poison'],
            'abilities' => ['Shield Dust', 'Run Away'],
            'height' => '0.3m',
            'weight' => '3.2kg',
            'image' => 'images/13.png'
        ],
        [
            'number' => 14,
            'name' => 'Kakuna',
            'types' => ['Bug', 'Poison'],
            'abilities' => ['Shed Skin'],
            'height' => '0.6m',
            'weight' => '10.0kg',
            'image' => 'images/14.png'
        ],
        [
            'number' => 15,
            'name' => 'Beedrill',
            'types' => ['Bug', 'Poison'],
            'abilities' => ['Swarm', 'Sniper'],
            'height' => '1.0m',
            'weight' => '29.5kg',
            'image' => 'images/15.png'
        ],
        [
            'number' => 16,
            'name' => 'Pidgey',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Keen Eye', 'Tangled Feet', 'Big Pecks'],
            'height' => '0.3m',
            'weight' => '1.8kg',
            'image' => 'images/16.png'
        ],
        [
            'number' => 17,
            'name' => 'Pidgeotto',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Keen Eye', 'Tangled Feet', 'Big Pecks'],
            'height' => '1.1m',
            'weight' => '30.0kg',
            'image' => 'images/17.png'
        ],
        [
            'number' => 18,
            'name' => 'Pidgeot',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Keen Eye', 'Tangled Feet', 'Big Pecks'],
            'height' => '1.5m',
            'weight' => '39.5kg',
            'image' => 'images/18.png'
        ],
        [
            'number' => 19,
            'name' => 'Rattata',
            'types' => ['Normal'],
            'abilities' => ['Run Away', 'Guts', 'Hustle'],
            'height' => '0.3m',
            'weight' => '3.5kg',
            'image' => 'images/19.png'
        ],
        [
            'number' => 20,
            'name' => 'Raticate',
            'types' => ['Normal'],
            'abilities' => ['Run Away', 'Guts', 'Hustle'],
            'height' => '0.7m',
            'weight' => '18.5kg',
            'image' => 'images/20.png'
        ],
        [
            'number' => 21,
            'name' => 'Spearow',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Keen Eye', 'Sniper'],
            'height' => '0.3m',
            'weight' => '2.0kg',
            'image' => 'images/21.png'
        ],
        [
            'number' => 22,
            'name' => 'Fearow',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Keen Eye', 'Sniper'],
            'height' => '1.2m',
            'weight' => '38.0kg',
            'image' => 'images/22.png'
        ],
        [
            'number' => 23,
            'name' => 'Ekans',
            'types' => ['Poison'],
            'abilities' => ['Intimidate', 'Shed Skin', 'Unnerve'],
            'height' => '2.0m',
            'weight' => '6.9kg',
            'image' => 'images/23.png'
        ],
        [
            'number' => 24,
            'name' => 'Arbok',
            'types' => ['Poison'],
            'abilities' => ['Intimidate', 'Shed Skin', 'Unnerve'],
            'height' => '3.5m',
            'weight' => '65.0kg',
            'image' => 'images/24.png'
        ],
        [
            'number' => 25,
            'name' => 'Pikachu',
            'types' => ['Electric'],
            'abilities' => ['Static', 'Lightning Rod'],
            'height' => '0.4m',
            'weight' => '6.0kg',
            'image' => 'images/25.png'
        ],
        [
            'number' => 26,
            'name' => 'Raichu',
            'types' => ['Electric'],
            'abilities' => ['Static', 'Lightning Rod'],
            'height' => '0.8m',
            'weight' => '30.0kg',
            'image' => 'images/26.png'
        ],
        [
            'number' => 27,
            'name' => 'Sandshrew',
            'types' => ['Ground'],
            'abilities' => ['Sand Veil', 'Sand Rush'],
            'height' => '0.6m',
            'weight' => '12.0kg',
            'image' => 'images/27.png'
        ],
        [
            'number' => 28,
            'name' => 'Sandslash',
            'types' => ['Ground'],
            'abilities' => ['Sand Veil', 'Sand Rush'],
            'height' => '1.0m',
            'weight' => '29.5kg',
            'image' => 'images/28.png'
        ],
        [
            'number' => 29,
            'name' => 'Nidoran-f',
            'types' => ['Poison'],
            'abilities' => ['Poison Point', 'Rivalry', 'Hustle'],
            'height' => '0.4m',
            'weight' => '7.0kg',
            'image' => 'images/29.png'
        ],
        [
            'number' => 30,
            'name' => 'Nidorina',
            'types' => ['Poison'],
            'abilities' => ['Poison Point', 'Rivalry', 'Hustle'],
            'height' => '0.8m',
            'weight' => '20.0kg',
            'image' => 'images/30.png'
        ],
        [
            'number' => 31,
            'name' => 'Nidoqueen',
            'types' => ['Poison', 'Ground'],
            'abilities' => ['Poison Point', 'Rivalry', 'Sheer Force'],
            'height' => '1.3m',
            'weight' => '60.0kg',
            'image' => 'images/31.png'
        ],
        [
            'number' => 32,
            'name' => 'Nidoran-m',
            'types' => ['Poison'],
            'abilities' => ['Poison Point', 'Rivalry', 'Hustle'],
            'height' => '0.5m',
            'weight' => '9.0kg',
            'image' => 'images/32.png'
        ],
        [
            'number' => 33,
            'name' => 'Nidorino',
            'types' => ['Poison'],
            'abilities' => ['Poison Point', 'Rivalry', 'Hustle'],
            'height' => '0.9m',
            'weight' => '19.5kg',
            'image' => 'images/33.png'
        ],
        [
            'number' => 34,
            'name' => 'Nidoking',
            'types' => ['Poison', 'Ground'],
            'abilities' => ['Poison Point', 'Rivalry', 'Sheer Force'],
            'height' => '1.4m',
            'weight' => '62.0kg',
            'image' => 'images/34.png'
        ],
        [
            'number' => 35,
            'name' => 'Clefairy',
            'types' => ['Fairy'],
            'abilities' => ['Cute Charm', 'Magic Guard', 'Friend Guard'],
            'height' => '0.6m',
            'weight' => '7.5kg',
            'image' => 'images/35.png'
        ],
        [
            'number' => 36,
            'name' => 'Clefable',
            'types' => ['Fairy'],
            'abilities' => ['Cute Charm', 'Magic Guard', 'Unaware'],
            'height' => '1.3m',
            'weight' => '40.0kg',
            'image' => 'images/36.png'
        ],
        [
            'number' => 37,
            'name' => 'Vulpix',
            'types' => ['Fire'],
            'abilities' => ['Flash Fire', 'Drought'],
            'height' => '0.6m',
            'weight' => '9.9kg',
            'image' => 'images/37.png'
        ],
        [
            'number' => 38,
            'name' => 'Ninetales',
            'types' => ['Fire'],
            'abilities' => ['Flash Fire', 'Drought'],
            'height' => '1.1m',
            'weight' => '19.9kg',
            'image' => 'images/38.png'
        ],
        [
            'number' => 39,
            'name' => 'Jigglypuff',
            'types' => ['Normal', 'Fairy'],
            'abilities' => ['Cute Charm', 'Competitive', 'Friend Guard'],
            'height' => '0.5m',
            'weight' => '5.5kg',
            'image' => 'images/39.png'
        ],
        [
            'number' => 40,
            'name' => 'Wigglytuff',
            'types' => ['Normal', 'Fairy'],
            'abilities' => ['Cute Charm', 'Competitive', 'Frisk'],
            'height' => '1.0m',
            'weight' => '12.0kg',
            'image' => 'images/40.png'
        ],
        [
            'number' => 41,
            'name' => 'Zubat',
            'types' => ['Poison', 'Flying'],
            'abilities' => ['Inner Focus', 'Infiltrator'],
            'height' => '0.8m',
            'weight' => '7.5kg',
            'image' => 'images/41.png'
        ],
        [
            'number' => 42,
            'name' => 'Golbat',
            'types' => ['Poison', 'Flying'],
            'abilities' => ['Inner Focus', 'Infiltrator'],
            'height' => '1.6m',
            'weight' => '55.0kg',
            'image' => 'images/42.png'
        ],
        [
            'number' => 43,
            'name' => 'Oddish',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Chlorophyll', 'Run Away'],
            'height' => '0.5m',
            'weight' => '5.4kg',
            'image' => 'images/43.png'
        ],
        [
            'number' => 44,
            'name' => 'Gloom',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Chlorophyll', 'Stench'],
            'height' => '0.8m',
            'weight' => '8.6kg',
            'image' => 'images/44.png'
        ],
        [
            'number' => 45,
            'name' => 'Vileplume',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Chlorophyll', 'Effect Spore'],
            'height' => '1.2m',
            'weight' => '18.6kg',
            'image' => 'images/45.png'
        ],
        [
            'number' => 46,
            'name' => 'Paras',
            'types' => ['Bug', 'Grass'],
            'abilities' => ['Effect Spore', 'Dry Skin', 'Damp'],
            'height' => '0.3m',
            'weight' => '5.4kg',
            'image' => 'images/46.png'
        ],
        [
            'number' => 47,
            'name' => 'Parasect',
            'types' => ['Bug', 'Grass'],
            'abilities' => ['Effect Spore', 'Dry Skin', 'Damp'],
            'height' => '1.0m',
            'weight' => '29.5kg',
            'image' => 'images/47.png'
        ],
        [
            'number' => 48,
            'name' => 'Venonat',
            'types' => ['Bug', 'Poison'],
            'abilities' => ['Compound Eyes', 'Tinted Lens', 'Run Away'],
            'height' => '1.0m',
            'weight' => '30.0kg',
            'image' => 'images/48.png'
        ],
        [
            'number' => 49,
            'name' => 'Venomoth',
            'types' => ['Bug', 'Poison'],
            'abilities' => ['Shield Dust', 'Tinted Lens', 'Wonder Skin'],
            'height' => '1.5m',
            'weight' => '12.5kg',
            'image' => 'images/49.png'
        ],
        [
            'number' => 50,
            'name' => 'Diglett',
            'types' => ['Ground'],
            'abilities' => ['Sand Veil', 'Arena Trap', 'Sand Force'],
            'height' => '0.2m',
            'weight' => '0.8kg',
            'image' => 'images/50.png'
        ],
        [
            'number' => 51,
            'name' => 'Dugtrio',
            'types' => ['Ground'],
            'abilities' => ['Sand Veil', 'Arena Trap', 'Sand Force'],
            'height' => '0.7m',
            'weight' => '33.3kg',
            'image' => 'images/51.png'
        ],
        [
            'number' => 52,
            'name' => 'Meowth',
            'types' => ['Normal'],
            'abilities' => ['Pickup', 'Technician', 'Unnerve'],
            'height' => '0.4m',
            'weight' => '4.2kg',
            'image' => 'images/52.png'
        ],
        [
            'number' => 53,
            'name' => 'Persian',
            'types' => ['Normal'],
            'abilities' => ['Limber', 'Technician', 'Unnerve'],
            'height' => '1.0m',
            'weight' => '32.0kg',
            'image' => 'images/53.png'
        ],
        [
            'number' => 54,
            'name' => 'Psyduck',
            'types' => ['Water'],
            'abilities' => ['Damp', 'Cloud Nine', 'Swift Swim'],
            'height' => '0.8m',
            'weight' => '19.6kg',
            'image' => 'images/54.png'
        ],
        [
            'number' => 55,
            'name' => 'Golduck',
            'types' => ['Water'],
            'abilities' => ['Damp', 'Cloud Nine', 'Swift Swim'],
            'height' => '1.7m',
            'weight' => '76.6kg',
            'image' => 'images/55.png'
        ],
        [
            'number' => 56,
            'name' => 'Mankey',
            'types' => ['Fighting'],
            'abilities' => ['Vital Spirit', 'Anger Point', 'Defiant'],
            'height' => '0.5m',
            'weight' => '28.0kg',
            'image' => 'images/56.png'
        ],
        [
            'number' => 57,
            'name' => 'Primeape',
            'types' => ['Fighting'],
            'abilities' => ['Vital Spirit', 'Anger Point', 'Defiant'],
            'height' => '1.0m',
            'weight' => '32.0kg',
            'image' => 'images/57.png'
        ],
        [
            'number' => 58,
            'name' => 'Growlithe',
            'types' => ['Fire'],
            'abilities' => ['Intimidate', 'Flash Fire', 'Justified'],
            'height' => '0.7m',
            'weight' => '19.0kg',
            'image' => 'images/58.png'
        ],
        [
            'number' => 59,
            'name' => 'Arcanine',
            'types' => ['Fire'],
            'abilities' => ['Intimidate', 'Flash Fire', 'Justified'],
            'height' => '1.9m',
            'weight' => '155.0kg',
            'image' => 'images/59.png'
        ],
        [
            'number' => 60,
            'name' => 'Poliwag',
            'types' => ['Water'],
            'abilities' => ['Water Absorb', 'Damp', 'Swift Swim'],
            'height' => '0.6m',
            'weight' => '12.4kg',
            'image' => 'images/60.png'
        ],
        [
            'number' => 61,
            'name' => 'Poliwhirl',
            'types' => ['Water'],
            'abilities' => ['Water Absorb', 'Damp', 'Swift Swim'],
            'height' => '1.0m',
            'weight' => '20.0kg',
            'image' => 'images/61.png'
        ],
        [
            'number' => 62,
            'name' => 'Poliwrath',
            'types' => ['Water', 'Fighting'],
            'abilities' => ['Water Absorb', 'Damp', 'Swift Swim'],
            'height' => '1.3m',
            'weight' => '54.0kg',
            'image' => 'images/62.png'
        ],
        [
            'number' => 63,
            'name' => 'Abra',
            'types' => ['Psychic'],
            'abilities' => ['Synchronize', 'Inner Focus', 'Magic Guard'],
            'height' => '0.9m',
            'weight' => '19.5kg',
            'image' => 'images/63.png'
        ],
        [
            'number' => 64,
            'name' => 'Kadabra',
            'types' => ['Psychic'],
            'abilities' => ['Synchronize', 'Inner Focus', 'Magic Guard'],
            'height' => '1.3m',
            'weight' => '56.5kg',
            'image' => 'images/64.png'
        ],
        [
            'number' => 65,
            'name' => 'Alakazam',
            'types' => ['Psychic'],
            'abilities' => ['Synchronize', 'Inner Focus', 'Magic Guard'],
            'height' => '1.5m',
            'weight' => '48.0kg',
            'image' => 'images/65.png'
        ],
        [
            'number' => 66,
            'name' => 'Machop',
            'types' => ['Fighting'],
            'abilities' => ['Guts', 'No Guard', 'Steadfast'],
            'height' => '0.8m',
            'weight' => '19.5kg',
            'image' => 'images/66.png'
        ],
        [
            'number' => 67,
            'name' => 'Machoke',
            'types' => ['Fighting'],
            'abilities' => ['Guts', 'No Guard', 'Steadfast'],
            'height' => '1.5m',
            'weight' => '70.5kg',
            'image' => 'images/67.png'
        ],
        [
            'number' => 68,
            'name' => 'Machamp',
            'types' => ['Fighting'],
            'abilities' => ['Guts', 'No Guard', 'Steadfast'],
            'height' => '1.6m',
            'weight' => '130.0kg',
            'image' => 'images/68.png'
        ],
        [
            'number' => 69,
            'name' => 'Bellsprout',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Chlorophyll', 'Gluttony'],
            'height' => '0.7m',
            'weight' => '4.0kg',
            'image' => 'images/69.png'
        ],
        [
            'number' => 70,
            'name' => 'Weepinbell',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Chlorophyll', 'Gluttony'],
            'height' => '1.0m',
            'weight' => '6.4kg',
            'image' => 'images/70.png'
        ],
        [
            'number' => 71,
            'name' => 'Victreebel',
            'types' => ['Grass', 'Poison'],
            'abilities' => ['Chlorophyll', 'Gluttony'],
            'height' => '1.7m',
            'weight' => '15.5kg',
            'image' => 'images/71.png'
        ],
        [
            'number' => 72,
            'name' => 'Tentacool',
            'types' => ['Water', 'Poison'],
            'abilities' => ['Clear Body', 'Liquid Ooze', 'Rain Dish'],
            'height' => '0.9m',
            'weight' => '45.5kg',
            'image' => 'images/72.png'
        ],
        [
            'number' => 73,
            'name' => 'Tentacruel',
            'types' => ['Water', 'Poison'],
            'abilities' => ['Clear Body', 'Liquid Ooze', 'Rain Dish'],
            'height' => '1.6m',
            'weight' => '55.0kg',
            'image' => 'images/73.png'
        ],
        [
            'number' => 74,
            'name' => 'Geodude',
            'types' => ['Rock', 'Ground'],
            'abilities' => ['Rock Head', 'Sturdy', 'Sand Veil'],
            'height' => '0.4m',
            'weight' => '20.0kg',
            'image' => 'images/74.png'
        ],
        [
            'number' => 75,
            'name' => 'Graveler',
            'types' => ['Rock', 'Ground'],
            'abilities' => ['Rock Head', 'Sturdy', 'Sand Veil'],
            'height' => '1.0m',
            'weight' => '105.0kg',
            'image' => 'images/75.png'
        ],
        [
            'number' => 76,
            'name' => 'Golem',
            'types' => ['Rock', 'Ground'],
            'abilities' => ['Rock Head', 'Sturdy', 'Sand Veil'],
            'height' => '1.4m',
            'weight' => '300.0kg',
            'image' => 'images/76.png'
        ],
        [
            'number' => 77,
            'name' => 'Ponyta',
            'types' => ['Fire'],
            'abilities' => ['Run Away', 'Flash Fire', 'Flame Body'],
            'height' => '1.0m',
            'weight' => '30.0kg',
            'image' => 'images/77.png'
        ],
        [
            'number' => 78,
            'name' => 'Rapidash',
            'types' => ['Fire'],
            'abilities' => ['Run Away', 'Flash Fire', 'Flame Body'],
            'height' => '1.7m',
            'weight' => '95.0kg',
            'image' => 'images/78.png'
        ],
        [
            'number' => 79,
            'name' => 'Slowpoke',
            'types' => ['Water', 'Psychic'],
            'abilities' => ['Oblivious', 'Own Tempo', 'Regenerator'],
            'height' => '1.2m',
            'weight' => '36.0kg',
            'image' => 'images/79.png'
        ],
        [
            'number' => 80,
            'name' => 'Slowbro',
            'types' => ['Water', 'Psychic'],
            'abilities' => ['Oblivious', 'Own Tempo', 'Regenerator'],
            'height' => '1.6m',
            'weight' => '78.5kg',
            'image' => 'images/80.png'
        ],
        [
            'number' => 81,
            'name' => 'Magnemite',
            'types' => ['Electric', 'Steel'],
            'abilities' => ['Magnet Pull', 'Sturdy', 'Analytic'],
            'height' => '0.3m',
            'weight' => '6.0kg',
            'image' => 'images/81.png'
        ],
        [
            'number' => 82,
            'name' => 'Magneton',
            'types' => ['Electric', 'Steel'],
            'abilities' => ['Magnet Pull', 'Sturdy', 'Analytic'],
            'height' => '1.0m',
            'weight' => '60.0kg',
            'image' => 'images/82.png'
        ],
        [
            'number' => 83,
            'name' => 'Farfetchd',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Keen Eye', 'Inner Focus', 'Defiant'],
            'height' => '0.8m',
            'weight' => '15.0kg',
            'image' => 'images/83.png'
        ],
        [
            'number' => 84,
            'name' => 'Doduo',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Run Away', 'Early Bird', 'Tangled Feet'],
            'height' => '1.4m',
            'weight' => '39.2kg',
            'image' => 'images/84.png'
        ],
        [
            'number' => 85,
            'name' => 'Dodrio',
            'types' => ['Normal', 'Flying'],
            'abilities' => ['Run Away', 'Early Bird', 'Tangled Feet'],
            'height' => '1.8m',
            'weight' => '85.2kg',
            'image' => 'images/85.png'
        ],
        [
            'number' => 86,
            'name' => 'Seel',
            'types' => ['Water'],
            'abilities' => ['Thick Fat', 'Hydration', 'Ice Body'],
            'height' => '1.1m',
            'weight' => '90.0kg',
            'image' => 'images/86.png'
        ],
        [
            'number' => 87,
            'name' => 'Dewgong',
            'types' => ['Water', 'Ice'],
            'abilities' => ['Thick Fat', 'Hydration', 'Ice Body'],
            'height' => '1.7m',
            'weight' => '120.0kg',
            'image' => 'images/87.png'
        ],
        [
            'number' => 88,
            'name' => 'Grimer',
            'types' => ['Poison'],
            'abilities' => ['Stench', 'Sticky Hold', 'Poison Touch'],
            'height' => '0.9m',
            'weight' => '30.0kg',
            'image' => 'images/88.png'
        ],
        [
            'number' => 89,
            'name' => 'Muk',
            'types' => ['Poison'],
            'abilities' => ['Stench', 'Sticky Hold', 'Poison Touch'],
            'height' => '1.2m',
            'weight' => '30.0kg',
            'image' => 'images/89.png'
        ],
        [
            'number' => 90,
            'name' => 'Shellder',
            'types' => ['Water'],
            'abilities' => ['Shell Armor', 'Skill Link', 'Overcoat'],
            'height' => '0.3m',
            'weight' => '4.0kg',
            'image' => 'images/90.png'
        ],
        [
            'number' => 91,
            'name' => 'Cloyster',
            'types' => ['Water', 'Ice'],
            'abilities' => ['Shell Armor', 'Skill Link', 'Overcoat'],
            'height' => '1.5m',
            'weight' => '132.5kg',
            'image' => 'images/91.png'
        ],
        [
            'number' => 92,
            'name' => 'Gastly',
            'types' => ['Ghost', 'Poison'],
            'abilities' => ['Levitate'],
            'height' => '1.3m',
            'weight' => '0.1kg',
            'image' => 'images/92.png'
        ],
        [
            'number' => 93,
            'name' => 'Haunter',
            'types' => ['Ghost', 'Poison'],
            'abilities' => ['Levitate'],
            'height' => '1.6m',
            'weight' => '0.1kg',
            'image' => 'images/93.png'
        ],
        [
            'number' => 94,
            'name' => 'Gengar',
            'types' => ['Ghost', 'Poison'],
            'abilities' => ['Cursed Body'],
            'height' => '1.5m',
            'weight' => '40.5kg',
            'image' => 'images/94.png'
        ],
        [
            'number' => 95,
            'name' => 'Onix',
            'types' => ['Rock', 'Ground'],
            'abilities' => ['Rock Head', 'Sturdy', 'Weak Armor'],
            'height' => '8.8m',
            'weight' => '210.0kg',
            'image' => 'images/95.png'
        ],
        [
            'number' => 96,
            'name' => 'Drowzee',
            'types' => ['Psychic'],
            'abilities' => ['Insomnia', 'Forewarn', 'Inner Focus'],
            'height' => '1.0m',
            'weight' => '32.4kg',
            'image' => 'images/96.png'
        ],
        [
            'number' => 97,
            'name' => 'Hypno',
            'types' => ['Psychic'],
            'abilities' => ['Insomnia', 'Forewarn', 'Inner Focus'],
            'height' => '1.6m',
            'weight' => '75.6kg',
            'image' => 'images/97.png'
        ],
        [
            'number' => 98,
            'name' => 'Krabby',
            'types' => ['Water'],
            'abilities' => ['Hyper Cutter', 'Shell Armor', 'Sheer Force'],
            'height' => '0.4m',
            'weight' => '6.5kg',
            'image' => 'images/98.png'
        ],
        [
            'number' => 99,
            'name' => 'Kingler',
            'types' => ['Water'],
            'abilities' => ['Hyper Cutter', 'Shell Armor', 'Sheer Force'],
            'height' => '1.3m',
            'weight' => '60.0kg',
            'image' => 'images/99.png'
        ],
        [
            'number' => 100,
            'name' => 'Voltorb',
            'types' => ['Electric'],
            'abilities' => ['Soundproof', 'Static', 'Aftermath'],
            'height' => '0.5m',
            'weight' => '10.4kg',
            'image' => 'images/100.png'
        ],
        [
            'number' => 101,
            'name' => 'Electrode',
            'types' => ['Electric'],
            'abilities' => ['Soundproof', 'Static', 'Aftermath'],
            'height' => '1.2m',
            'weight' => '66.6kg',
            'image' => 'images/101.png'
        ],
        [
            'number' => 102,
            'name' => 'Exeggcute',
            'types' => ['Grass', 'Psychic'],
            'abilities' => ['Chlorophyll', 'Harvest'],
            'height' => '0.4m',
            'weight' => '2.5kg',
            'image' => 'images/102.png'
        ],
        [
            'number' => 103,
            'name' => 'Exeggutor',
            'types' => ['Grass', 'Psychic'],
            'abilities' => ['Chlorophyll', 'Harvest'],
            'height' => '2.0m',
            'weight' => '120.0kg',
            'image' => 'images/103.png'
        ],
        [
            'number' => 104,
            'name' => 'Cubone',
            'types' => ['Ground'],
            'abilities' => ['Rock Head', 'Lightning Rod', 'Battle Armor'],
            'height' => '0.4m',
            'weight' => '6.5kg',
            'image' => 'images/104.png'
        ],
        [
            'number' => 105,
            'name' => 'Marowak',
            'types' => ['Ground'],
            'abilities' => ['Rock Head', 'Lightning Rod', 'Battle Armor'],
            'height' => '1.0m',
            'weight' => '45.0kg',
            'image' => 'images/105.png'
        ],
        [
            'number' => 106,
            'name' => 'Hitmonlee',
            'types' => ['Fighting'],
            'abilities' => ['Limber', 'Reckless', 'Unburden'],
            'height' => '1.5m',
            'weight' => '49.8kg',
            'image' => 'images/106.png'
        ],
        [
            'number' => 107,
            'name' => 'Hitmonchan',
            'types' => ['Fighting'],
            'abilities' => ['Keen Eye', 'Iron Fist', 'Inner Focus'],
            'height' => '1.4m',
            'weight' => '50.2kg',
            'image' => 'images/107.png'
        ],
        [
            'number' => 108,
            'name' => 'Lickitung',
            'types' => ['Normal'],
            'abilities' => ['Own Tempo', 'Oblivious', 'Cloud Nine'],
            'height' => '1.2m',
            'weight' => '65.5kg',
            'image' => 'images/108.png'
        ],
        [
            'number' => 109,
            'name' => 'Koffing',
            'types' => ['Poison'],
            'abilities' => ['Levitate', 'Neutralizing Gas', 'Stench'],
            'height' => '0.6m',
            'weight' => '1.0kg',
            'image' => 'images/109.png'
        ],
        [
            'number' => 110,
            'name' => 'Weezing',
            'types' => ['Poison'],
            'abilities' => ['Levitate', 'Neutralizing Gas', 'Stench'],
            'height' => '1.2m',
            'weight' => '9.5kg',
            'image' => 'images/110.png'
        ],
        [
            'number' => 111,
            'name' => 'Rhyhorn',
            'types' => ['Ground', 'Rock'],
            'abilities' => ['Lightning Rod', 'Rock Head', 'Reckless'],
            'height' => '1.0m',
            'weight' => '115.0kg',
            'image' => 'images/111.png'
        ],
        [
            'number' => 112,
            'name' => 'Rhydon',
            'types' => ['Ground', 'Rock'],
            'abilities' => ['Lightning Rod', 'Rock Head', 'Reckless'],
            'height' => '1.9m',
            'weight' => '120.0kg',
            'image' => 'images/112.png'
        ],
        [
            'number' => 113,
            'name' => 'Chansey',
            'types' => ['Normal'],
            'abilities' => ['Natural Cure', 'Serene Grace', 'Healer'],
            'height' => '1.1m',
            'weight' => '34.6kg',
            'image' => 'images/113.png'
        ],
        [
            'number' => 114,
            'name' => 'Tangela',
            'types' => ['Grass'],
            'abilities' => ['Chlorophyll', 'Leaf Guard', 'Regenerator'],
            'height' => '1.0m',
            'weight' => '35.0kg',
            'image' => 'images/114.png'
        ],
        [
            'number' => 115,
            'name' => 'Kangaskhan',
            'types' => ['Normal'],
            'abilities' => ['Early Bird', 'Scrappy', 'Inner Focus'],
            'height' => '2.2m',
            'weight' => '80.0kg',
            'image' => 'images/115.png'
        ],
        [
            'number' => 116,
            'name' => 'Horsea',
            'types' => ['Water'],
            'abilities' => ['Swift Swim', 'Sniper', 'Damp'],
            'height' => '0.4m',
            'weight' => '8.0kg',
            'image' => 'images/116.png'
        ],
        [
            'number' => 117,
            'name' => 'Seadra',
            'types' => ['Water'],
            'abilities' => ['Poison Point', 'Sniper', 'Damp'],
            'height' => '1.2m',
            'weight' => '25.0kg',
            'image' => 'images/117.png'
        ],
        [
            'number' => 118,
            'name' => 'Goldeen',
            'types' => ['Water'],
            'abilities' => ['Swift Swim', 'Water Veil', 'Lightning Rod'],
            'height' => '0.6m',
            'weight' => '15.0kg',
            'image' => 'images/118.png'
        ],
        [
            'number' => 119,
            'name' => 'Seaking',
            'types' => ['Water'],
            'abilities' => ['Swift Swim', 'Water Veil', 'Lightning Rod'],
            'height' => '1.3m',
            'weight' => '39.0kg',
            'image' => 'images/119.png'
        ],
        [
            'number' => 120,
            'name' => 'Staryu',
            'types' => ['Water'],
            'abilities' => ['Illuminate', 'Natural Cure', 'Analytic'],
            'height' => '0.8m',
            'weight' => '34.5kg',
            'image' => 'images/120.png'
        ],
        [
            'number' => 121,
            'name' => 'Starmie',
            'types' => ['Water', 'Psychic'],
            'abilities' => ['Illuminate', 'Natural Cure', 'Analytic'],
            'height' => '1.1m',
            'weight' => '80.0kg',
            'image' => 'images/121.png'
        ],
        [
            'number' => 122,
            'name' => 'Mr. Mime',
            'types' => ['Psychic', 'Fairy'],
            'abilities' => ['Soundproof', 'Filter', 'Technician'],
            'height' => '1.3m',
            'weight' => '54.5kg',
            'image' => 'images/122.png'
        ],
        [
            'number' => 123,
            'name' => 'Scyther',
            'types' => ['Bug', 'Flying'],
            'abilities' => ['Swarm', 'Technician', 'Steadfast'],
            'height' => '1.5m',
            'weight' => '56.0kg',
            'image' => 'images/123.png'
        ],
        [
            'number' => 124,
            'name' => 'Jynx',
            'types' => ['Ice', 'Psychic'],
            'abilities' => ['Oblivious', 'Forewarn', 'Dry Skin'],
            'height' => '1.4m',
            'weight' => '40.6kg',
            'image' => 'images/124.png'
        ],
        [
            'number' => 125,
            'name' => 'Electabuzz',
            'types' => ['Electric'],
            'abilities' => ['Static', 'Vital Spirit'],
            'height' => '1.1m',
            'weight' => '30.0kg',
            'image' => 'images/125.png'
        ],
        [
            'number' => 126,
            'name' => 'Magmar',
            'types' => ['Fire'],
            'abilities' => ['Flame Body', 'Vital Spirit'],
            'height' => '1.3m',
            'weight' => '44.5kg',
            'image' => 'images/126.png'
        ],
        [
            'number' => 127,
            'name' => 'Pinsir',
            'types' => ['Bug'],
            'abilities' => ['Hyper Cutter', 'Mold Breaker', 'Moxie'],
            'height' => '1.5m',
            'weight' => '55.0kg',
            'image' => 'images/127.png'
        ],
        [
            'number' => 128,
            'name' => 'Tauros',
            'types' => ['Normal'],
            'abilities' => ['Intimidate', 'Anger Point', 'Sheer Force'],
            'height' => '1.4m',
            'weight' => '88.4kg',
            'image' => 'images/128.png'
        ],
        [
            'number' => 129,
            'name' => 'Magikarp',
            'types' => ['Water'],
            'abilities' => ['Swift Swim', 'Rattled'],
            'height' => '0.9m',
            'weight' => '10.0kg',
            'image' => 'images/129.png'
        ],
        [
            'number' => 130,
            'name' => 'Gyarados',
            'types' => ['Water', 'Flying'],
            'abilities' => ['Intimidate', 'Moxie'],
            'height' => '6.5m',
            'weight' => '235.0kg',
            'image' => 'images/130.png'
        ],
        [
            'number' => 131,
            'name' => 'Lapras',
            'types' => ['Water', 'Ice'],
            'abilities' => ['Water Absorb', 'Shell Armor', 'Hydration'],
            'height' => '2.5m',
            'weight' => '220.0kg',
            'image' => 'images/131.png'
        ],
        [
            'number' => 132,
            'name' => 'Ditto',
            'types' => ['Normal'],
            'abilities' => ['Limber', 'Imposter'],
            'height' => '0.3m',
            'weight' => '4.0kg',
            'image' => 'images/132.png'
        ],
        [
            'number' => 133,
            'name' => 'Eevee',
            'types' => ['Normal'],
            'abilities' => ['Run Away', 'Adaptability', 'Anticipation'],
            'height' => '0.3m',
            'weight' => '6.5kg',
            'image' => 'images/133.png'
        ],
        [
            'number' => 134,
            'name' => 'Vaporeon',
            'types' => ['Water'],
            'abilities' => ['Water Absorb', 'Hydration'],
            'height' => '1.0m',
            'weight' => '29.0kg',
            'image' => 'images/134.png'
        ],
        [
            'number' => 135,
            'name' => 'Jolteon',
            'types' => ['Electric'],
            'abilities' => ['Volt Absorb', 'Quick Feet'],
            'height' => '0.8m',
            'weight' => '24.5kg',
            'image' => 'images/135.png'
        ],
        [
            'number' => 136,
            'name' => 'Flareon',
            'types' => ['Fire'],
            'abilities' => ['Flash Fire', 'Guts'],
            'height' => '0.9m',
            'weight' => '25.0kg',
            'image' => 'images/136.png'
        ],
        [
            'number' => 137,
            'name' => 'Porygon',
            'types' => ['Normal'],
            'abilities' => ['Trace', 'Download', 'Analytic'],
            'height' => '0.8m',
            'weight' => '36.5kg',
            'image' => 'images/137.png'
        ],
        [
            'number' => 138,
            'name' => 'Omanyte',
            'types' => ['Rock', 'Water'],
            'abilities' => ['Swift Swim', 'Shell Armor', 'Weak Armor'],
            'height' => '0.4m',
            'weight' => '7.5kg',
            'image' => 'images/138.png'
        ],
        [
            'number' => 139,
            'name' => 'Omastar',
            'types' => ['Rock', 'Water'],
            'abilities' => ['Swift Swim', 'Shell Armor', 'Weak Armor'],
            'height' => '1.0m',
            'weight' => '35.0kg',
            'image' => 'images/139.png'
        ],
        [
            'number' => 140,
            'name' => 'Kabuto',
            'types' => ['Rock', 'Water'],
            'abilities' => ['Swift Swim', 'Battle Armor', 'Weak Armor'],
            'height' => '0.5m',
            'weight' => '11.5kg',
            'image' => 'images/140.png'
        ],
        [
            'number' => 141,
            'name' => 'Kabutops',
            'types' => ['Rock', 'Water'],
            'abilities' => ['Swift Swim', 'Battle Armor', 'Weak Armor'],
            'height' => '1.3m',
            'weight' => '40.5kg',
            'image' => 'images/141.png'
        ],
        [
            'number' => 142,
            'name' => 'Aerodactyl',
            'types' => ['Rock', 'Flying'],
            'abilities' => ['Rock Head', 'Pressure', 'Unnerve'],
            'height' => '1.8m',
            'weight' => '59.0kg',
            'image' => 'images/142.png'
        ],
        [
            'number' => 143,
            'name' => 'Snorlax',
            'types' => ['Normal'],
            'abilities' => ['Immunity', 'Thick Fat', 'Gluttony'],
            'height' => '2.1m',
            'weight' => '460.0kg',
            'image' => 'images/143.png'
        ],
        [
            'number' => 144,
            'name' => 'Articuno',
            'types' => ['Ice', 'Flying'],
            'abilities' => ['Pressure', 'Snow Cloak'],
            'height' => '1.7m',
            'weight' => '55.4kg',
            'image' => 'images/144.png'
        ],
        [
            'number' => 145,
            'name' => 'Zapdos',
            'types' => ['Electric', 'Flying'],
            'abilities' => ['Pressure', 'Static'],
            'height' => '1.6m',
            'weight' => '52.6kg',
            'image' => 'images/145.png'
        ],
        [
            'number' => 146,
            'name' => 'Moltres',
            'types' => ['Fire', 'Flying'],
            'abilities' => ['Pressure', 'Flame Body'],
            'height' => '2.0m',
            'weight' => '60.0kg',
            'image' => 'images/146.png'
        ],
        [
            'number' => 147,
            'name' => 'Dratini',
            'types' => ['Dragon'],
            'abilities' => ['Shed Skin', 'Marvel Scale'],
            'height' => '1.8m',
            'weight' => '3.3kg',
            'image' => 'images/147.png'
        ],
        [
            'number' => 148,
            'name' => 'Dragonair',
            'types' => ['Dragon'],
            'abilities' => ['Shed Skin', 'Marvel Scale'],
            'height' => '4.0m',
            'weight' => '16.5kg',
            'image' => 'images/148.png'
        ],
        [
            'number' => 149,
            'name' => 'Dragonite',
            'types' => ['Dragon', 'Flying'],
            'abilities' => ['Inner Focus', 'Multiscale'],
            'height' => '2.2m',
            'weight' => '210.0kg',
            'image' => 'images/149.png'
        ],
        [
            'number' => 150,
            'name' => 'Mewtwo',
            'types' => ['Psychic'],
            'abilities' => ['Pressure', 'Unnerve'],
            'height' => '2.0m',
            'weight' => '122.0kg',
            'image' => 'images/150.png'
        ],
        [
            'number' => 151,
            'name' => 'Mew',
            'types' => ['Psychic'],
            'abilities' => ['Synchronize'],
            'height' => '0.4m',
            'weight' => '4.0kg',
            'image' => 'images/151.png'
        ]
    ];

?>
