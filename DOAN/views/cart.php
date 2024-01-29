<?php require_once("header.php")
?>

<main class="content dynamic-container text-center">

    <h3 style="margin-bottom: 7rem; margin-top: 2rem;">Giỏ hàng</h3>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/cart_controller.php");
    $controller = new CartController();
    $controller->getCartItems($_SESSION["user_id"]);
    ?>
</main>
<div style="height:250px"></div>
<hr style="clear: both;">
<?php require_once("footer.php")
?>
</div>
</body>

</html>