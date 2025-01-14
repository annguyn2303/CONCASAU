<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/models/cart_item.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/models/cart_model.php");

class CartController
{
    private $model;
    public function __construct()
    {
        $this->model = new CartModel();
    }
    public function getCartItems($user_id)
    {
        $cart_items = $this->model->getCartItems($user_id);
        include "cart_view.php";
    }
    public function getProduct($product_id)
    {
        $product = $this->model->getCartItems($product_id);
    }
    public function addProductToCart($product_id, $productquantity)
    {
        $this->model->addCartItem($product_id, $productquantity);
    }
    public function purchase($user_id, $product_quantity, $remain_currency)
    {
        $this->model->purchase($user_id, $product_quantity, $remain_currency);
    }
    public function deleteCartItem($user_id, $product_id)
    {
        $this->model->deleteCartItem($user_id, $product_id);
    }
}
