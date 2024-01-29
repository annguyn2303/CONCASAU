<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/user_controller.php");
$user_controller = new UserController();
$user_controller->userInvoke();

if (isset($_GET["msg"]) && (($_GET["msg"] == "loginsuccess"))) {
  echo '<script>
          {
           alert("Đăng nhập thành công!");
            }
           </script>
            ';
} else if (isset($_GET["msg"]) && (($_GET["msg"] == "signupsuccess"))) {
  echo '<script>
              {
              alert("Đăng ký tài khoản thành công!");
              }
              </script>
               ';
}
