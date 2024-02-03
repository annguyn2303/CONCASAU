<?php require_once("header.php"); ?>

<main class="content dynamic-container">

    <h3 class="text-center" style="margin-bottom: 2rem; margin-top: 2rem;">Lịch sử mua hàng</h3>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/order_controller.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/user_controller.php");
    $userController = new UserController();
    $controller = new OrderController();
    $controller->getOrderItemsDetails($_SESSION["user_id"]);
    ?>

</main>
<div style="height:200px"></div>
<?php require_once("footer.php")
?>

</div>
</body>

</html>