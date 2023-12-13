<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- css -->
    <link rel="stylesheet" href="/styles/style.css">


</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Login</h1>
        </div>
        <div class="formu">
            <!-- falta mandar el form para que me verifique el login -->
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