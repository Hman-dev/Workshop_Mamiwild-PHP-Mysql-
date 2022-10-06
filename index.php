<?php
 require_once 'config.php';
 require __DIR__.'/src/models/recipe-model.php';
// plein de code PHP nécessaire à la connexion avec la base de données
// $connection = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
// $statement = $connection->query('SELECT id, title FROM recipe');
// $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);

// Fetching all recipes
$recipes = getAllRecipes();

// $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . '/src/views/index.php';



// // Fetching all recipes from database - assuming the database is okay

// // Generate the web page
// ?>
<!-- // <!doctype html>
// <html lang="en">
//     <head>
//         <meta charset="UTF-8">
//         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
//         <title>List of Recipes</title>
//     </head>
//     <body>
//         <h1>List of Recipes</h1>
//         <ul>
//             <?php foreach ($recipes as $recipe) : ?>
//             <li>
//                 <a href="show.php?id=<?= $recipe['id'] ?>">
//                     <?= $recipe['title'] ?>
//                 </a>
//             </li>
//             <?php endforeach ?>
//         </ul>
//     </body>
// </html> -->
