<?php
    include_once __DIR__ . '/../products.php';

    class Food extends Products {
        public $nutritionalValues;
        public $foodType;
        public $category;
    
        public function __construct(
            $title, 
            $subtitle, 
            $description, 
            $price, 
            $nutritionalValues, 
            $foodType,
            $category
        ) {
            parent::__construct($title, $subtitle, $description, $price);
            $this->nutritionalValues = $nutritionalValues;
            $this->foodType = $foodType;
            $this->category = $category;
        }
    }
    
    ?>