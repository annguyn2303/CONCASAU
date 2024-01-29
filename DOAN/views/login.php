<?php require_once("header.php")
?>
<main class="content dynamic-container">
    <section class="h-100">

        <div class="card-body" id="card-login">
            <h4 class="text-center">Đăng nhập</h4>
            <form method="POST" action=" /DOAN/views/user_invoke.php">
                <div class="form-group">
                    <label for="user_phone">Số điện thoại</label>
                    <input id="user_phone" type="tel" class="form-control" name="user_phone" required autofocus>
                </div>

                <div class="form-group">
                    <label for="user_password">Mật khẩu</label>
                    <input id="user_password" type="password" class="form-control" name="user_password" required data-eye>
                </div>
                <?php
                if (isset($_GET["msg"]) && (($_GET["msg"] == "loginfail") || $_GET["msg"] == "usernotfound")) {
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
                    Chưa có tài khoản? <a href=" /DOAN/views/user_invoke.php?page=signup">Đăng ký</a>
                </div>
            </form>
        </div>

    </section>
</main>
</section>
</main>
<div style="height: 100px;"></div>
<hr style="clear: both;">
<?php require_once("footer.php")
?>
</div>
</body>

</html>