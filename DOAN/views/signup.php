<?php require_once("header.php")
?>
<main class="content dynamic-container">
    <section class="center">

        <div class="card-body" id="card-signup">
            <h4 class="text-center">Đăng ký</h4>
            <form method="POST">
                <div class="form-group">
                    <label for="user_phone">Số điện thoại</label>
                    <input id="user_phone" type="tel" class="form-control" name="user_phone" required autofocus>
                </div>

                <div class="form-group">
                    <label for="user_password">Mật khẩu</label>
                    <input id="user_password" type="password" class="form-control" name="user_password" required data-eye>
                </div>

                <div class="form-group">
                    <label for="repeat_password">Nhập lại mật khẩu</label>
                    <input id="repeat_password" type="password" class="form-control" name="password_2" required data-eye>
                </div>

                <div class="form-group">
                    <label for="user_name">Họ tên</label>
                    <input id="user_name" type="text" class="form-control" name="user_name" required autofocus>
                </div>

                <div class="form-group">
                    <label for="user_address">Địa chỉ</label>
                    <input id="user_address" type="text" class="form-control" name="user_address" required autofocus>
                </div>

                <?php
                if (isset($_GET["msg"]) && (($_GET["msg"] == "passwordnotmatch"))) {
                    echo '<div class="alert">
                                                <span class="closebtn">&times;</span> 
                                                <strong>Warning!</strong> Mật khẩu không đúng!
                                                </div>
                                                ';
                }
                if (isset($_GET["msg"]) && (($_GET["msg"] == "phonenumberalreadyexist"))) {
                    echo '<div class="alert">
                                                <span class="closebtn">&times;</span> 
                                                <strong>Warning!</strong> Số điện thoại đã tồn tại!
                                                </div>
                                                ';
                }
                ?>
                <div class="form-group m-0">
                    <button type="submit" name="signup" class="btn btn-primary btn-block">
                        Đăng ký
                    </button>
                </div>
                <div class="mt-4 text-center">
                    Đã có tài khoản? <a href=" /DOAN/views/login.php">Đăng nhập</a>
                </div>
            </form>
        </div>

    </section>
</main>
<div style="height: 50px;"></div>
<hr style="clear: both;">
<?php require_once("footer.php")
?>
</div>
</body>

</html>