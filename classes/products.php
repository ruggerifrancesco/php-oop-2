<?php
    //Parent

    class Product {
        public $title;
        public $subtitle;
        public $description;
        public $price;
        public $category;
        public $poster;

        public function __construct(
            string $title, 
            string $subtitle, 
            string $description, 
            float $price, 
            Category $category, 
            string $poster
        ) {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
            $this->poster = $poster;
        }
    }
?>
