<!doctype html>
<?php
include('includes/header.php');
session_start();
if (!$_SESSION['user']){
    header('Location: #');
}
//if (isset($_COOKIE['name'])==true){
//    header('Location: index.php');
//}
?>
<html>
<head>

</head>
<body>
    <form>
        <h2 <p>Привет <?=$_COOKIE['user'] ?>.Чтобы выйти нажмите <a href="users/exit.php">здесь</a>. </p> </h2>
        <h2> Ваше имя: <br> <?=$_SESSION['user']['name']?> </h2>
<!--        <h2> --><?//=$_SESSION['user']['id']?><!--</h2>-->
<!--        <h2> --><?//=$_SESSION['user']['pass']?><!-- </h2>-->
            <h2> Ваш логин: <br> <?=$_SESSION['user']['login']?> </h2>
        <h2><a href="redlk.php">Редактировать профиль</a> </h2>
        <h2><a href="">Создать новость</a> </h2>
    </form>
</body>
</html>
