<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/cart_controller.php");
$cart_controller = new CartController();
$remain_currency = $_POST["remain_currency"];

if ($remain_currency < 0) {
    echo
    "<script> 
        alert('Số dư không đủ, hãy nạp thêm tiền vào tài khoản!'); 
        var base_url = window.location.origin;
        window.location = base_url + '/DOAN/views/cart_invoke.php';
        setTimeout(window.location, 3000);
    </script>";
} else {
    $cart_controller->purchase($_POST["user_id_2"], $_POST["productquantity"], (int)$remain_currency);
}
