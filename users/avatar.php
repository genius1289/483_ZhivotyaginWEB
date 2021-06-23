<?php
 session_start();
$path='uploads/'.time().$_FILES['avatar']['name'];
$id=$_SESSION['user']['id'];

if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
    $_SESSION['message'] = 'Ошибка при загрузке сообщения';
    //header('Location: ../register.php');
}
$mysql = mysqli_connect('localhost', 'root', '','sites');

if (!$mysql){
    die('Error connect to DataBase');
}else {

    mysqli_query($mysql, "UPDATE `users` SET `avatar` = '$path'WHERE `users`.`id` = '$id'");

    $result=$mysql->query("SELECT * FROM `users` WHERE `avatar` ='$path'");
    $user = $result->fetch_assoc();
    $_SESSION['user']=[
        "id"=>$user['id'],
        "name"=>$user['name'],
        "pass"=>$user['pass'],
        "login"=>$user['login'],
        "avatar"=>$user['avatar']
    ];

$mysql->close();
header('Location: ../lk.php');
}
