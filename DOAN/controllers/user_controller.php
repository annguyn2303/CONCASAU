<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/models/user_model.php");

class UserController
{
    private $usermodel;

    public function __construct()
    {
        $this->usermodel = new UserModel();
        session_start();
    }

    public function userInvoke()
    {
        if (isset($_SESSION['user_id'])) {
            $this->Logout();
            $this->Update();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/user_profile.php");
        } else if (isset($_GET['page']) && $_GET['page'] == "signup") {
            $this->Signup();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/signup.php");
        } else if (isset($_GET['msg']) && $_GET['msg'] == "passwordnotmatch") {
            $this->Signup();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/signup.php");
        } else if (isset($_GET['msg']) && $_GET['msg'] == "phonenumberalreadyexist") {
            $this->Signup();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/signup.php");
        } else if (isset($_GET['page']) && $_GET['page'] == "login") {
            $this->Login();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/login.php");
        } else if (isset($_GET['msg']) && $_GET['msg'] == "signupsuccess") {
            $this->Login();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/login.php");
        } else {
            $this->Login();
            include($_SERVER['DOCUMENT_ROOT'] . "/DOAN/views/login.php");
        }
    }

    public function checkLogin()
    {
        if (isset($_SESSION['user_id'])) {
            return true;
        }
        return false;
    }

    private function Signup()
    {
        if (isset($_POST['signup'])) {
            $this->usermodel->signup();
        }
    }

    private function Login()
    {
        if (isset($_POST['login'])) {
            $this->usermodel->login();
        }
    }

    private function Logout()
    {
        if (isset($_GET['action']) && $_GET['action'] == "logout") {
            $this->usermodel->logout();
        }
    }

    private function Update()
    {
        if (isset($_POST['update'])) {
            $this->usermodel->updateUser();
        }
    }
}
