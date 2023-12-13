<?php
session_start();
if (isset($_SESSION['users'])) {
    $users=$_SESSION['users'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- css -->
    <link rel="stylesheet" href="/styles/styleDash.css">


</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Welcome to Your Dashboard</h1>
        </div>

        <div class="input">
            <!-- imprimir el correo y el email desde variables de sesion -->
            <?php foreach ($users as $user):?>
            
                <p><?="Username: " . $user['user'];?> </p> 
                <p><?="Email: " . $user['email'];?> </p> 
                        
            <?php endforeach?>
        </div>
        <a href="/index.php?action=logout&controller=UserController">Logout</a>

    </div>
</body>

</html>