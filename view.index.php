<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Simple Recipe's</title>
</head>

<body>

    <div class="recipe-content-container"> 

    <div class="image-container"> 
    
    </div>

        <h1>
            <?= "A comfy, but luxurious version of {$recipeOat}" ?>
        </h1>
    

        <div class="intro-message">
            <?php if ($recipeOat === "oatmeal") {
                echo $messageOats;
            } ?> 
        </div>

        <div class="preptime-container">
            <h2 class="preptime-title">
                Preparation time
            </h2>
            <ul class="prepTime">
                <?php foreach ($totalPreparationTime as $preparationTime)  { ?>
                    <li><?= $preparationTime; ?></li> 
                <?php } ?>
            </ul>
        </div>

        <div class="ingredient-container">
            <h2>
                Ingredients oats
            </h2>
            <ul class="ingredients">
                <?php foreach ($filteredIngredients as $ingredient) : ?>
                    <li><?= $ingredient['butter']; ?></li>
                    <li><?= $ingredient['base']; ?></li>
                    <li><?= $ingredient['secondBase']; ?></li>
                    <li><?= $ingredient['spice']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    
</body>
</html>