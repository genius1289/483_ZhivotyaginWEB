<?php
include('includes/header.php');
session_start();
if (isset($_COOKIE['user'])==true){
 header('Location: lk.php');
}
?>
<!doctype html>
<html lang="en">


<body>
<div class="container mt-4">

<h1>Форма авторизации</h1>
<form action="users/sp.php" method="POST">
    <label>Логин</label>
    <input type="text"  name="login" placeholder="Введите логин" required><br>
    <label>Пароль</label>
    <input type="password" name="pass"  placeholder="Введите пароль" required> <br>
    <button class="btn btn-success" type="submit">Войти</button>
    <p></p>
    <?php
    if (isset($_SESSION['message'])==true) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</div>
</body>
</html>