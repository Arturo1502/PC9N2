<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- css -->
    <link rel="stylesheet" href="/styles/style.css">


</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Register</h1>
        </div>
        <div class="formu">

            <form class="formulario" action="/index.php?action=store&controller=UserController" method="post">

                <div class="input">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input">
                    <label for="pass">Password:</label>
                    <input type="password" id="pass" name="pass" required>
                </div>

                <button class="btn" type="submit">Register</button>
            </form>
        </div>

        <div>
            <p>Already have an account? <a href="./viewLogin.php">Login here</a> </p>
        </div>

    </div>
</body>

</html>