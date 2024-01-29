<?php require_once("header.php");
?>

<main class="content dynamic-container">

    <div id="slides" class="carousel slide carousel-light carousel-fade" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/DOAN/images/index-top-img-1.jpg" />
            </div>
            <div class="carousel-item">
                <img src="/DOAN/images/index-top-img-2.jpg" height="800" />
            </div>
            <div class="carousel-item">
                <img src="/DOAN/images/index-top-img-3.jpg" height="800" />
            </div>
            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slides" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <hr style="clear: both;">
    <div class="container-fluid">
        <div class="row jumbotron-fluid">
            <div class="col-xs-12 col-sm-12 col-xl-12 text-center">
                <p class="lead">2022 FALL FRAGRANCE COLLECTION DIOR ADDICT</p>
            </div>
        </div>
    </div>
    <hr style="clear: both;">
    <div class="image-container">
        <div class="pb-4">
            <div class="embed-responsive embed-responsive-16by9 text-center">
                <video class="videoDiv video-mp4" autoplay muted loop>
                    <source src="/DOAN/video/index-video-1.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center" id="video1">
        <h6>MAKE-UP</h6>
        <h4>ĐỒ TRANG ĐIỂU NỔI BẬT</h4>
    </div>
    <hr style="clear: both;">
    <div id="phones-carousel" style="min-height: 425px;" class="carousel slide carousel-fade my-carousel" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
            <div class="row">
                <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/index_controller.php");
                $controller = new IndexController();
                $controller->product_invoke("Make-up");
                ?>
            </div>
        </div>
        <a class="carousel-control-prev" href="#phones-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#phones-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <hr style="clear: both;">
    <div class="container-fluid">
        <div class="row jumbotron-fluid">
            <div class="col-xs-12 col-sm-12 col-xl-12 text-center">
                <p class="lead">2022 FALL FRAGRANCE COLLECTION DIOR SAUVAGE</p>
            </div>
        </div>
    </div>
    <hr style="clear: both;">
    <div class="image-container">
        <div class="text-center">
            <video class="videoDiv video-mp4" width="100%" autoplay muted loop>
                <source src="/DOAN/video/index-video-2.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <hr style="clear: both;">
    <div class="container-fluid text-center" id="video1">
        <h6>MEN'S FRAGRANCE</h6>
        <h4>NƯỚC HOA NAM NỔI BẬT</h4>
    </div>
    <hr style="clear: both;">
    <div id="tablet-carousel" class="carousel slide my-carousel" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/index_controller.php");
            $controller = new IndexController();
            $controller->product_invoke("Men's Fragrance");
            ?>
        </div>
        <a class="carousel-control-prev" href="#tablet-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#tablet-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <hr style="clear: both;">
    <div class="container-fluid">
        <div class="row jumbotron-fluid">
            <div class="col-xs-12 col-sm-12 col-xl-12 text-center">
                <p class="lead">2022 FALL FRAGRANCE COLLECTION DIOR EN ROUGE</p>
            </div>
        </div>
    </div>
    <hr style="clear: both;">
    <div class="image-container">
        <div class="text-center">
            <video class="videoDiv video-mp4" width="100%" autoplay muted loop>
                <source src="/DOAN/video/index-video-3.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <hr style="clear: both;">
    <div class="container-fluid text-center" id="video1">
        <h6>WOMEN'S FRAGRANCE</h6>
        <h4>NƯỚC HOA NỮ NỔI BẬT</h4>
    </div>
    <hr style="clear: both;">
    <div id="laptop-carousel" class="carousel slide my-carousel" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/index_controller.php");
            $controller = new IndexController();
            $controller->product_invoke("Women's Fragrance");
            ?>
        </div>
        <a class="carousel-control-prev" href="#laptop-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#laptop-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
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
</main>
<?php require_once("footer.php")
?>
</div>
</body>

</html>