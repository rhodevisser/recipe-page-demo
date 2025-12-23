<?php

$recipeOat = "oatmeal";

$messageOats = "An easy and quick dish, with some extra attention to make it more comfy. This oatmeal combines
the power of a bit fried and buttered dry oats, with a taste of cinnamon and cardemon.";


$totalPreparationTime = [
    "10 minutes in total",
    "5 minutes preparation",
    "5 minutes cooking"
];

$ingredients = [
    [
        'recipe' => 'oats',
        'base' => '6 spoons dry oats',
        'secondBase' => '400ml milk',
        'butter' => 'salted cream butter',
        'spice' => 'teaspoon cinnamon, and pinch of salt and cardemon'   
    ],
    [
        'recipe' => 'banana bread',
        'base' => 'one banana',
        'secondBase' => 'one egg',
        'butter' => 'salted cream butter',
        'spice' => 'pinch of salt' 
    ],
    [
        'recipe' => 'balkan breakfast',
        'base' => 'random veggies and soured cucumber',
        'secondBase' => 'bread and cheese',
        'butter' => 'olive oil',
        'spice' => 'salt and pepper'   
    ]
];


$filteredIngredients = array_filter($ingredients, function($ingredient){
    return $ingredient['recipe'] === 'oats';
});


require "view.index.php";