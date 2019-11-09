<?php
require_once "./utilsPHP/database.php";
session_start();

if($_POST['login']) {
    $email = $_POST['email'];
    $senha = $_POST['password'];
    if(!empty($email) and !empty($senha)) {
        $query = mysqli_query($connect, "SELECT * FROM login WHERE email = '{$email}' and admin = '1'");

        if($query) {
            while($result = mysqli_fetch_array($query)) {
                if($result["email"] == $email and $result["senha"] == $senha) {
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    mysqli_close($connect);
                    header("Location: ../home.html");
                }
            }
        }
    }
}
?>