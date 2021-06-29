<?php
include('includes/header.php');
session_start();
if (isset($_SESSION['user'])==true){
    header('Location: error');
}
?>
<!doctype html>
<html lang="en">


<body>
<div class="container mt-4">

<h1>Форма авторизации</h1>
<form action="users/sp.php" method="POST">
    <label>
        Логин
    </label>
        <input type="text"  name="login" placeholder="Введите логин"><br>
    <label>
        Пароль
    </label>
        <input type="password" name="pass"  placeholder="Введите пароль"> <br>
    <button class="btn btn-success" type="submit">Войти</button>
</form>
</div>
</body>
</html>