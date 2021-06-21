<?php
$login =filter_var( trim($_POST['login']),FILTER_SANITIZE_STRING);
$name =filter_var( trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass =filter_var( trim($_POST['pass']),FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($name)<3 || mb_strlen($name) > 50) {
    echo "Недопустимая длина Имени";
    exit();
} else if (mb_strlen($pass)<2 || mb_strlen($pass) > 6) {
    echo "Недопустимая длина пароля(от 2 до 6";
    exit();
}
    //$pass=md5($pass);
    //$pass=md5($pass."wefewrfgop2313");
    $mysql = mysqli_connect('localhost', 'root', '','sites');
    if (!$mysql){
        die('Error connect to DataBase');
    }else {


        mysqli_query($mysql, "INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");

        $mysql->close();
        header('Location: ../aut.php');
    }
?>
