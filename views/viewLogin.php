<?php
session_start();

$loginError = isset($_GET['login_error']) ? $_GET['login_error'] : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- css -->
    <link rel="stylesheet" href="/styles/style.css">



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var alertMessage = document.getElementById('alertMessage');
                if (alertMessage) {
                    alertMessage.style.display = 'none';
                }
            }, 5000); 
        });
    </script>

</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Login</h1>
        </div>

        <div id="alertMessage" class="alert" style="<?php echo $loginError ? '' : 'display: none;' ?>">
            Incorrect username or password. Try again.
        </div>

        <div class="formu">
            <form class="formulario" action="/index.php?action=login&controller=UserController" method="post">

                <div class="input">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input">
                    <label for="pass">Password:</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <button class="btn" type="submit">Login</button>
            </form>
        </div>

        <div>
            <p>Don't have an account? <a href="/views/viewRegister.php">Register here</a> </p>
        </div>

    </div>
</body>

</html>