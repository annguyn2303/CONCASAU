<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/user_controller.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/cart_controller.php");
$userController = new UserController();
if ($userController->checkLogin()) {
    $cartController = new CartController();
    $cartController->addProductToCart($_GET["productid"], $_GET["productquantity"]);
} else {
    header("Location: user_invoke.php");
    exit();
}
