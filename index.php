<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <title>Falcon Heavy</title>
</head>
<?php
require_once "./utilsPHP/login.php";
?>
<body>
    <div class="background">
        <div class="container-form">
            <form action="" class="form-login" method="post">
                <img class="logo" src="./img/logo.png">
                <h1>Login</h1>
                <div>
                    <label for="">E-mail:</label>
                    <input type="text" placeholder="Digite seu e-mail" style="padding-left: 10px;" name="email">
                </div>
                <div>
                    <label for="">Senha:</label>
                    <input type="password" placeholder="Digite sua senha" style="padding-left: 10px;" name="password">
                </div>
                <div style="display: flex; flex-direction: row-reverse;">
                    <input type="submit" name="login" id="Entrar" class="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>