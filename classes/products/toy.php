<?php
    include_once __DIR__ . '../../products.php';

    class Toy extends Products {
        private $nutritionalValues;
        private $foodType;
    
        public function __construct($title, $subtitle, $description, $price, $nutritionalValues, $foodType) {
            parent::__construct($title, $subtitle, $description, $price);
            $this->nutritionalValues = $nutritionalValues;
            $this->foodType = $foodType;
        }
    
        // Add getter methods for the new properties
        public function getNutritionalValues() {
            return $this->nutritionalValues;
        }
    
        public function getFoodType() {
            return $this->foodType;
        }
    
        // Add any additional methods specific to food products
    }

?>
