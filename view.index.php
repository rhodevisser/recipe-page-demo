<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Simple Recipe's</title>
</head>

<body>

    <div class="container-recipe-content"> 
        <h1>
            <?= "A comfy, but luxurious version of {$recipeOat}" ?>
        </h1>
        <ul class="prepTime">
            <?php foreach ($totalPreparationTime as $preparationTime)  { ?>
                <li><?= $preparationTime; ?></li> 
            <?php } ?>
        </ul>
    
</body>
</html>