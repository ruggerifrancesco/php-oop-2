<?php
    include_once __DIR__ . '/../products.php';

    class Food extends Products {
        public $nutritionalValues;
        public $foodType;
    
        public function __construct(
            $title, 
            $subtitle, 
            $description, 
            $price, 
            $category,
            $poster,
            $nutritionalValues, 
            $foodType,
        ) {
            parent::__construct($title, $subtitle, $description, $price, $category, $poster);
            $this->nutritionalValues = $nutritionalValues;
            $this->foodType = $foodType;
        }
    }
    
    ?>