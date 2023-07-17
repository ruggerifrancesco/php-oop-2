<?php
    //Parent

    class Products {
        public $title;
        public $subtitle;
        public $description;
        public $price;

        public function __construct($title, $subtitle, $description, $price) {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->description = $description;
            $this->price = $price;
        }
        
    }
?>
