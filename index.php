<?php

$recipeOat = "oatmeal";

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




require "view.index.php";