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
    }
        $result=$mysql->query("SELECT * FROM `users` WHERE `login` ='$login'");
        $user = $result->fetch_array();
        if (!empty($user)){
            echo "Такой пользователь уже существует"."<a href='../reg.php'> Попробуй снова</a>";
            //exit();
            $_SESSION['message'] = 'Такой пользователь уже существует';
            header('Location: ../reg.php');
        }else{

            mysqli_query($mysql, "INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");
            header('Location: ../aut.php');
        }


?>
