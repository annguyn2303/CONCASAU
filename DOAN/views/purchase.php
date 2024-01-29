<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/cart_controller.php");
$cart_controller = new CartController();
$cart_controller->purchase($_POST["user_id_2"], $_POST["productquantity"]);
