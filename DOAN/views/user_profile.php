<?php require_once("header.php")
?>

            <main class="content dynamic-container">

                <section class="h-100" style="margin-bottom: 1rem;">
                <div class="container h-100">
                    <div class="row justify-content-md-center h-100">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <div class="card-body" id="card-profile">
                                    <div style="height: 30px;"></div>
                                    <h4 class="card-title">Thiết lập tài khoản</h4>
                                    <div style="height: 30px;"></div>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label for="phone">Số điện thoại</label>
                                            <?= $_SESSION['user_phone'] ?>
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
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12">
                        <hr class="light" />
                        <h5>Contact Us</h5>
                        <hr class="light" />
                        <p>0948 999 999</p>
                        <p>269 Nguyễn Tri Phương</p>
                        <p>Quận 10, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Office Hours</h5>
                        <hr class="light" />
                        <p>Mon - Sar: 8:00 - 17:00</p>
                        <p>Sun: Closed</p>
                    </div>  
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Regional Offices</h5>
                        <hr class="light" />
                        <p>Quận 10, Hồ Chí Minh</p>
                        <p>Quận 3, Hồ Chí Minh</p>
                        <p>Huyện Bình Chánh, Hồ Chí Minh</p>
                        <p>Vĩnh Long</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100" />
                        <h5>&copy; H&A Corp, 2022</h5>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </body>
</html>