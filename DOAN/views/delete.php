<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/controllers/cart_controller.php");
    $cart_controller = new CartController();
    $cart_controller->deleteCartItem($_POST["user_id_1"], $_POST["product_id"]);
?>