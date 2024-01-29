<?php require_once("header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/modules/db_module.php");
?>

<main class="content dynamic-container">

    <section class="h-100" style="margin-bottom: 1rem;">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card-body bg-light">
                        <div class="card-body" id="card-profile">
                            <div style="height: 30px;"></div>
                            <h2 class="card-title" style="font-size: 30px !important;">Thiết lập tài khoản</h4>
                                <div style="height: 30px;"></div>
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="phone">Số điện thoại: </label>
                                        <?= $_SESSION['user_phone'] ?>
                                    </div>
                                    <?php $link = null;
                                    taoKetNoi($link);
                                    $currency = 0;
                                    $user_id = $_SESSION["user_id"];
                                    $current_currency = chayTruyVanTraVeDL($link, "SELECT `currency` FROM tbl_user WHERE `user_id` = '$user_id'");
                                    while ($rows = mysqli_fetch_assoc($current_currency)) {
                                        $currency = $rows['currency'];
                                    } ?>
                                    <div class="form-group">
                                        <label for="phone">Số dư: </label>
                                        <?= number_format($currency, 0, ",", ".") ?>
                                        VND
                                    </div>

                                    <div class="form-group">
                                        <label for="user_name">Họ tên</label>
                                        <input id="user_name" type="text" class="form-control" name="user_name" value="<?= $_SESSION['user_name'] ?>" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="user_address">Địa chỉ</label>
                                        <input id="user_address" type="text" class="form-control" name="user_address" value="<?= $_SESSION['user_address'] ?>" required autofocus>
                                    </div>

                                    <div class="form-group m-0">
                                        <button type="submit" name="update" class="btn btn-primary btn-block">
                                            Cập nhật
                                        </button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="user_invoke.php?action=logout" style="color: black;">Đăng xuất</a>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="order.php" style="color: black;">Lịch sử mua hàng</a>

                                    </div>
                                    <div style="height: 30px;"></div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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