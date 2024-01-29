<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/models/detail_model.php");
class DetailController
{
    public $model;
    public function __construct()
    {
        $this->model = new DetailModel();
    }
    public function product_detail_invoke($id)
    {
        $product = $this->model->getProduct($id);
        $review = $this->model->getDescription($id);
        include "detail_view.php";
    }
}
