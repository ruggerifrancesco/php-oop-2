<?php
    //Parent

    class Products {
        public $title;
        public $subtitle;
        public $description;
        public $price;
        public $category;
        public $poster;

        public function __construct($title, $subtitle, $description, $price, $category, $poster) {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
            $this->poster = $poster;
        }

    }
?>
