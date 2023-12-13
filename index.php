<?php
require_once __DIR__ . '/vendor/autoload.php';

use Controllers\UserController;

if (isset($_GET['action']) && isset($_GET['controller'])) {
    require_once './Controllers/' . $_GET['controller'] . '.php';

    $controllerClassName = "\\Controllers\\" . $_GET['controller'];
    $userController = new $controllerClassName();

    if (isset($_GET['id'])) {
        $userController->{$_GET['action']}($_GET['id']);
    } else {
        $userController->{$_GET['action']}();
    }
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/Controller.php';
    $userController = new UserController();
    $userController->index();
}
