<?php
session_start();
$login =filter_var( trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass =filter_var( trim($_POST['pass']),FILTER_SANITIZE_STRING);

//$pass=md5($pass);
//$pass=md5($pass."wefewrfgop2313");
$mysql = mysqli_connect('localhost', 'root', '','sites');
if (!$mysql){
    die('Error connect to DataBase');
}else {


  $result=$mysql->query("SELECT * FROM `users` WHERE `login` ='$login' AND `pass`='$pass'");
    $user = $result->fetch_assoc();

    if (count($user) == 0 ){
        echo "Пользователь не найден";
        exit();
    }else{
        $_SESSION['user']=[
            "id"=>$user['id'],
            "name"=>$user['name'],
            "pass"=>$user['pass'],
            "login"=>$user['login'],
            "avatar"=>$user['avatar']
        ];
        setcookie('user',$user['login'], time() + 3600, "/");
    }



}
    $mysql->close();
    header('Location: ../lk.php');
?>