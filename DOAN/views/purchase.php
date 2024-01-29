<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/cart_controller.php");
$cart_controller = new CartController();
$remain_currency = $_POST["remain_currency"];
$cart_controller->purchase($_POST["user_id_2"], $_POST["productquantity"], $remain_currency);
