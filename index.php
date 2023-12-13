<?php
require_once __DIR__ . '/vendor/autoload.php';

use Controllers\UserController;

if (isset($_GET['action']) && isset($_GET['controller'])) {
    require_once './Controllers/' . $_GET['controller'] . '.php';

    $controllerClassName = "\\Controllers\\" . $_GET['controller'];
    $UserController = new $controllerClassName();

    if(isset($_GET['id'])) {
        $UserController->{$_GET['action']}($_GET['id']);
    } else {
        $UserController->{$_GET['action']}();
    }
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/UserController.php';
    $UserController = new UserController();
    $UserController->index();
}
?>