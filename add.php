<?php

require_once 'config.php';

require __DIR__ . '/src/models/recipe-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    //$recipe = /* les données nettoyées de $_POST */;
    $title= [trim(htmlspecialchars($_POST['title']))];
    $description = trim(htmlspecialchars($_POST['description']));
    
    $recipe =[$title,$description];
    if (empty($errors)) {
        saveRecipe($recipe);
        // header('Location: /');
    }
    var_dump($recipe);
    var_dump(saveRecipe($recipe));
}

require __DIR__ . '/src/views/form.php';