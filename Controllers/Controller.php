<?php
namespace Controllers;
use Models\User;

class UserController{
    function index() {
        session_start();
        $user = new User();
        $users = $user->all();
        
        $_SESSION['users'] = $users;

        header('Location: /views/viewDashboard.php');
        exit;
    }

    function store() {   
        $user = new User();
        $user->create($_POST['username'], $_POST['email'], $_POST['password']);

        header('Location: /views/viewLogin.php');
        exit;
    }



}










?>