<?php
    include_once __DIR__ . '/../products.php';

    class Toy extends Products {
        public $materialType;
    
        public function __construct(
            $title, 
            $subtitle, 
            $description, 
            $price,
            $category,
            $poster,
            $materialType,
        ) {
            parent::__construct($title, $subtitle, $description, $price, $category, $poster);
            $this->materialType = $materialType;
        }
    }
?>
