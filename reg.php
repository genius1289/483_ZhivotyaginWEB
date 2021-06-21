<?php
include('includes/header.php');
?>
<!doctype html>
<html lang="en">


<body>
        <h1>Форма регистрации</h1>
        <form action="users/check.php" method="POST">
            <label>
                Логин
            </label>
            <input type="text"  name="login" placeholder="Введите логин">
            <label>
                Имя
            </label>
            <input type="text"  name="name"  placeholder="Введите имя">
            <label>
                Пароль
            </label>
            <input type="password" name="pass"  placeholder="Введите пароль"> <br>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button>
        </form>
</body>
</html>
