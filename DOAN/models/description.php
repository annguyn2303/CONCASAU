<?php
    class Description{
        private $product_id;
        private $description;
       

        public function getproduct_id(){return $this->product_id; }
        public function getDescription(){return $this->description; }
      
        public function __construct($product_id, $description){
            $this->product_id = $product_id;
            $this->description= $description;
        }   
    }
?>