<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/cart_controller.php");

$cart_controller = new CartController();

$cart_controller->deleteCartItem($_POST["user_id"], $_POST["product_id"]);
