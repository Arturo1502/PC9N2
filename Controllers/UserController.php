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

        header('Location: /views/viewLogin.php');
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['pass'];
    
            $user = new User();
    
            $userData = $user->getUser($username);
    
            echo "Input Username: $username<br>";
            echo "Input Password: $password<br>";
            echo "Stored Password Hash: {$userData['password']}<br>";
    
            if ($userData && password_verify($password, $userData['password'])) {
                session_start();
                $_SESSION['user'] = $userData;
                header('Location: /views/viewDashboard.php');
            } else {
                echo "Incorrect username or password";
            }
        }
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
