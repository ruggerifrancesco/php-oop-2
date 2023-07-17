<?php
    include_once __DIR__ . '/../classes/categories.php';
    include_once __DIR__ . '/../classes/products.php';
    include_once __DIR__ . '/../classes/products/food.php';
    include_once __DIR__ . '/../classes/products/toy.php';

    // Create instances of categories
    $dogsCategory = new Category('Cane');
    $catsCategory = new Category('Gatto');

    $productsList = [
        new Toy (
            'Giocattolo Vivis', 
            'Interactive Dog Toy', 
            'Keep your dog entertained for hours', 
            9.99, 
            $dogsCategory,
            'Durable material', 
        ),

        new Toy (
            'Giocattolo Axis', 
            'Interactive Cat Toy', 
            'Keep your cat entertained for hours', 
            8.99, 
            $catsCategory,
            'Non-toxic materials', 
        ),

        new Food (
            'Croccantini', 
            'Premium Cat Food', 
            'Healthy and nutritious cat food', 
            17.99, 
            'Calories',
            $catsCategory, 
            'Meat and fish',
        ),

        new Food(
            'Bustine', 
            'Premium Dog Food', 
            'Healthy and nutritious dog food', 
            19.99, 
            'Calories', 
            $dogsCategory,
            'Meat and fish',
        ),
    ]
?>
