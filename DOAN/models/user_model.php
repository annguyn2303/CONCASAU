<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/models/user.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/modules/db_module.php");

class UserModel
{
    /*---------------------------------Logout---------------------------------*/


    public function signup()
    {
        if ($this->emptyInputSignup() == false) {
            header("Location:  user_invoke.php?msg=empty");
            exit();
        }
        if ($this->checkpass() == false) {
            header("Location: user_invoke.php?msg=passwordnotmatch");
            exit();
        }
        if ($this->checkphone() == false) {
            header("Location: user_invoke.php?msg=phonenumberalreadyexist");
            exit();
        }
        if ($this->setUser() == false) {
            header("Location: user_invoke.php?msg=signupfail");
            exit();
        } else {
            header("Location: user_invoke.php?msg=signupsuccess");
            exit();
        }
    }

    private function emptyInputSignup()
    {
        $result = null;
        if (empty($_POST['user_phone']) || empty($_POST['user_password']) || empty($_POST['password_2']) || empty($_POST['user_name']) || empty($_POST['user_address'])) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function checkpass()
    {
        $result = null;
        if ($_POST['user_password'] === $_POST['password_2']) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function checkPhone()
    {
        $checkPhonenumber = $_POST['user_phone'];
        $link = null;
        taoKetNoi($link);

        $query = "SELECT * FROM tbl_user WHERE `user_phone` = '$checkPhonenumber'";
        $result = chayTruyVanTraVeDL($link, $query);
        $checkphone = null;
        if (mysqli_num_rows($result) == 0) {
            $checkphone = true;
        } else {
            $checkphone = false;
        }

        giaiPhongBoNho($link, $result);
        return $checkphone;
    }

    private function setUser()
    {
        $result = null;
        $user_phone = $_POST['user_phone'];
        $user_password = $_POST['user_password'];
        $user_name = $_POST['user_name'];
        $user_address = $_POST['user_address'];
        $link = null;
        taoKetNoi($link);
        $query = "INSERT INTO tbl_user (`user_phone`, `user_password`, `user_name`, `user_address`) VALUES ( '$user_phone', '$user_password', '$user_name', '$user_address')";
        $setuser = chayTruyVanKhongTraVeDL($link, $query);
        if ($setuser) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    private function getUser()
    {
        $getuser = null;
        $user_phone = $_POST['user_phone'];
        $user_password = $_POST['user_password'];
        $link = null;
        taoKetNoi($link);
        $query = "SELECT * FROM tbl_user WHERE `user_phone` = '$user_phone' AND `user_password` = '$user_password'";
        $result = chayTruyVanTraVeDL($link, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_phone'] = $row['user_phone'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_address'] = $row['user_address'];
                $getuser = true;
            }
        } else {
            $getuser = false;
        }
        giaiPhongBoNho($link, $result);
        return $getuser;
    }

    /*---------------------------------Login---------------------------------*/


    public function login()
    {
        if ($this->emptyInput() == false) {
            header("Location: login.php?msg=empty");
            exit();
        } else if ($this->userNotFound() == false) {
            header("Location: login.php?msg=usernotfound");
            exit();
        } else if ($this->getUser() == false) {
            header("Location: login.php?msg=loginfail");
            exit();
        } else {
            header("Location: user_invoke.php?msg=loginsuccess");
            exit();
        }
    }

    private function emptyInput()
    {
        $result = null;
        if (empty($_POST['user_phone']) || empty($_POST['user_password'])) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function userNotFound()
    {
        $checkuser = null;

        $userphone = $_POST['user_phone'];
        $userpassword = $_POST['user_password'];

        $link = null;
        taoKetNoi($link);

        $query = "SELECT * FROM tbl_user WHERE `user_phone` = '$userphone' AND `user_password` = '$userpassword'";
        $result = chayTruyVanTraVeDL($link, $query);

        if (mysqli_num_rows($result) == 0) {
            $checkuser = false;
        } else {
            $checkuser = true;
        }
        giaiPhongBoNho($link, $result);
        return $checkuser;
    }




    /*---------------------------------Update---------------------------------*/


    public function updateUser()
    {
        if ($this->emptyUpdate() == false) {
            header("Location: index.php?msg=empty");
            exit();
        } else if ($this->NewInfo() == false) {
            header("Location: index.php?msg=updatefail");
            exit();
        } else {
            header("Location: index.php?msg=updatesuccess");
            exit();
        }
    }

    private function emptyUpdate()
    {
        $result = null;
        if (empty($_POST['user_name']) || empty($_POST['user_address'])) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function NewInfo()
    {
        $userid = $_SESSION['user_id'];
        $newname = $_POST['user_name'];
        $newaddress = $_POST['user_address'];

        $link = null;
        taoKetNoi($link);

        $query = "UPDATE `tbl_user` SET user_name = '$newname', `user_address` = '$newaddress' WHERE user_id = $userid";
        $result = chayTruyVanKhongTraVeDL($link, $query);

        if ($result) {
            $_SESSION['user_name'] = $newname;
            $_SESSION['user_address'] = $newaddress;
            return true;
        } else {
            return false;
        }
    }


    /*---------------------------------Logout---------------------------------*/


    public function logout()
    {
        session_destroy();
        header("Location: user_invoke.php?msg=logoutsuccess");
    }
}
