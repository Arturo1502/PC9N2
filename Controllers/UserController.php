<?php

namespace Controllers;

use Models\User;

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';


class UserController
{
    function index()
    {
        session_start();
        $user = new User();
        $users = $user->all();

        $_SESSION['users'] = $users;

        header('Location: /views/viewDashboard.php');
        exit;
    }

    function store()
    {
        $user = new User();
        $user->create($_POST['username'], $_POST['email'], $_POST['pass']);
        print_r($user);

        header('Location: /views/viewLogin.php');
        exit;
    }

    function login()
    {
        
    }
    


    function logout()
    {
        session_start();
        session_unset(); // Limpiar todas las variables de sesión
        session_destroy(); // Destruir la sesión
        header('Location: /views/viewLogin.php');
        exit;
    }
}
