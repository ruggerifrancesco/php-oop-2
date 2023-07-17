<?php
    include_once __DIR__ . '/../products.php';

    class Toy extends Products {
        public $materialType;
        public $category;
    
        public function __construct(
            $title, 
            $subtitle, 
            $description, 
            $price, 
            $materialType,
            $category
        ) {
            parent::__construct($title, $subtitle, $description, $price);
            $this->materialType = $materialType;
            $this->category = $category;
        }
    }

?>
