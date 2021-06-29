<?php
session_start();

$mysql = mysqli_connect('localhost', 'root', '','sites');
if (!$mysql){
    die('Error connect to DataBase');
}

$login =filter_var( trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass =filter_var( trim($_POST['pass']),FILTER_SANITIZE_STRING);

//$pass=md5($pass);
//$pass=md5($pass."wefewrfgop2313");


  $result=$mysql->query("SELECT * FROM `users` WHERE `login` ='$login' AND `pass`='$pass'");
    $user = $result->fetch_assoc();
    if (empty($user)){
        //echo "Пользователь не найден";
        //exit();
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../aut.php');
    }else{
        $_SESSION['user']=[
            "id"=>$user['id'],
            "name"=>$user['name'],
            "pass"=>$user['pass'],
            "login"=>$user['login'],
            "avatar"=>$user['avatar']
        ];
        setcookie('user',$user['login'], time() + 3600, "/");
        header('Location: ../lk.php');
    }

?>

