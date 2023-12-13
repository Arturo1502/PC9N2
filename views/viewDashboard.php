<?php
session_start();
if (isset($_SESSION['user'])) {
    $users=$_SESSION['user'];
    
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
            
                <p><?="Username: " . $users['user'];?> </p> 
                <p><?="Email: " . $users['email'];?> </p> 
                        
        </div>
        <a href="/index.php?action=logout&controller=UserController">Logout</a>

    </div>
</body>

</html>