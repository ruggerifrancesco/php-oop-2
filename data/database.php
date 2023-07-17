<?php
    include_once __DIR__ . '/../classes/categories.php';
    include_once __DIR__ . '/../classes/products.php';
    include_once __DIR__ . '/../classes/products/food.php';
    include_once __DIR__ . '/../classes/products/toy.php';

    // Create instances of categories
    $dogsCategory = new Category('Dogs');
    $catsCategory = new Category('Cats');

    $productsList = [
        new Toy('Dog Toy', 'Interactive Dog Toy', 'Keep your dog entertained for hours', 9.99, 'Durable material', $dogsCategory),
        new Toy('Cat Toy', 'Interactive Cat Toy', 'Keep your cat entertained for hours', 8.99, 'Non-toxic materials', $catsCategory),
        
        new Food('Cat Food', 'Premium Cat Food', 'Healthy and nutritious cat food', 17.99, 'Calories', 'Meat and fish', $catsCategory),
        new Food('Dog Food', 'Premium Dog Food', 'Healthy and nutritious dog food', 19.99, 'Calories', 'Meat and fish', $dogsCategory),
    ]
?>
