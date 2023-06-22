<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/models/index_model.php");
    class IndexController{
        public $model;
        public function __construct()
        {
            $this->model = new IndexModel();
        }
        public function product_invoke($name){
            $category_id= $this->model->getProduct_categoryId();
            $productlist=$this->model->getProductList();
            include "product_hightlighted.php";   
        }

        
    }
?>
