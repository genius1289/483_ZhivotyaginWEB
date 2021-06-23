<?php
session_start();
if (!$_SESSION['user']){
    header('Location: #');
}
$name=$_GET['name'];
$pass=$_GET['pass'];
$id=$_SESSION['user']['id'];
echo 'имя'."$name";

echo  'пароль'."$pass";

echo 'id'.$_SESSION['user']['id'];
$mysql = mysqli_connect('localhost', 'root', '','sites');
if (!$mysql){
    die('Error connect to DataBase');
}else if($name ==!null AND $pass ==!null){
        mysqli_query($mysql, "UPDATE `users` SET `name` = '$name', `pass` = '$pass' WHERE `users`.`id` = '$id'");
}else if($name == !null){
    mysqli_query($mysql, "UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = '$id'");
}else if($pass== !null){
    mysqli_query($mysql, "UPDATE `users` SET `pass` = '$pass' WHERE `users`.`id` = '$id'");
}


$result=$mysql->query("SELECT * FROM `users` WHERE `users`.`id` = '$id'");
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

?>

