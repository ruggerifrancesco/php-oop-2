<?php
    //Parent

    class Products {
        public $title;
        public $subtitle;
        public $description;
        public $price;
        public $category;

        public function __construct($title, $subtitle, $description, $price, $category) {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
        }

    }
?>
