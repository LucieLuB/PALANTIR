<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Lucie Belleudy">
    <meta name="description" content="Aplicacion de listas de prospectos">
    <!--LINK FAVICON-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="loginPage.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--FONTS-->
    <title>Login</title>
</head>

<body class="body-login">
    <main class="container-fluid main">
        <div class="container-fluid login">
            <h1 class="loginH1">Login</h1>

            <?php
            session_start();
            if (isset($_SESSION['error_message'])) {
                echo '<p class="error">' . $_SESSION['error_message'] . '</p>';
                unset($_SESSION['error_message']);
            }
            ?>


            <form class="loginForm" action="login.php" name="login" method="POST">
                <ul class="loginUl">
                    <li class="loginLi">
                        <input class="loginInput" type="text" name="username" id="user" placeholder="Username" required>
                    </li>
                    <hr>
                    <li class="loginLi">
                        <input class="loginInput" type="password" name="password" id="password" placeholder="Password" required>
                    </li>
                    <hr>
                </ul>
                <div class="loginButton">
                    <!--
                <a class="loginA" href="../LISTE/listePage.html"><button>Login</button></a>
            -->
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>

    </main>
</body>

</html>