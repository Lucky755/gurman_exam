<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Гурман Б.А.
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Аутентификация пользователя</h1>
            </div>
        </div>
        <div>        
            <form method='POST' action='login.php'>
                <div class="row form__reg"><input class="form" type="text" name="username" placeholder="Login"></div>
                <div class="row form__reg"><input class="form" type="password" name="pass" placeholder="Password"></div>
                <button type="submit" class="btn_red btn_reg" name="submit"> Продолжить </button>
            </form>    
        </div>
    </div>
 </body>
</html>

<?php

require_once('db.php');

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

$link = mysqli_connect('db', 'root', 'kali', 'exam');


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if (!$username || !$pass) die ('Пожалуйста введите все значения!');

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');
      } else {
        echo "Неправильное имя или пароль";
      }
    }     
?>