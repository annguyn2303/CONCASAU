<?php require_once("header.php")
?>


<main class="content dynamic-container row">

    <?php
    if (isset($_GET['productid'])) {
        require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/detail_controller.php");
        $controller = new DetailController();
        $controller->product_detail_invoke($_GET['productid']);
    }
    ?>

</main>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="https://www.facebook.com/DHKT.UEH" target="_blank"> <i class="fab fa-facebook"></i> </a>
            <a href="#"> <i class="fab fa-twitter"></i> </a>
            <a href="#"> <i class="fab fa-instagram"></i> </a>
            <a href="https://www.youtube.com/c/UEHChannel" target="_blank"> <i class="fab fa-youtube"></i> </a>
        </div>
    </div>
</div>

<?php require_once("footer.php")
?>

</div>
</body>

</html>