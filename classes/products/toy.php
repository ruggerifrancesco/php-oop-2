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
            $materialType,
        ) {
            parent::__construct($title, $subtitle, $description, $price, $category);
            $this->materialType = $materialType;
        }
    }

?>
