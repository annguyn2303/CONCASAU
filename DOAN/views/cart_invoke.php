<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/user_controller.php");
$userController = new UserController();
if ($userController->checkLogin()) {
    include("cart.php");
} else {
    header("Location: user_invoke.php");
    exit();
}
