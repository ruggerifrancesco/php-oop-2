<?php
    //Parent

    class Products {
        protected $title;
        protected $subtitle;
        protected $description;
        protected $price;

        public function __construct($title, $subtitle, $description, $price) {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->description = $description;
            $this->price = $price;
        }

        // Add getter methods for the properties

        // Add any additional methods you need
    }
?>
