<?php require_once("header.php")
?>
            <main class="content dynamic-container">
                 <section class="h-100">
                
                                <div class="card-body" id ="card-login">
                                    <h4 class ="text-center">Đăng nhập</h4>
                                    <form method="POST" action="/CONCASAU/DOAN/views/user_invoke.php">
                                        <div class="form-group">
                                            <label for="user_phone">Số điện thoại</label>
                                            <input id="user_phone" type="tel" class="form-control" name="user_phone" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="user_password">Mật khẩu</label>
                                            <input id="user_password" type="password" class="form-control" name="user_password" required data-eye>
                                        </div>
                                        <?php
                                        if(isset($_GET["msg"]) && (($_GET["msg"] == "loginfail") || $_GET["msg"] == "usernotfound"))
                                        {
                                            echo '<div class="alert">
                                                <span class = "closebtn">&times; </span>
                                                <strong>Warning! </strong>Tài khoản hoặc mật khẩu không đúng!
                                            </div>';
                                        }
                                        ?>
                                        <div class="form-group m-0">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">
                                                Đăng nhập
                                            </button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            Chưa có tài khoản? <a href="/CONCASAU/DOAN/views/user_invoke.php?page=signup">Đăng ký</a>
                                        </div>
                                    </form>
                                </div>
                          
            </section>
        </main>
            </section>
            </main>
            <div style="height: 100px;"></div>
             <hr style="clear: both;">
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