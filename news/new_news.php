<?php
session_start();
$heading=$_POST['heading'];
$author=$_SESSION['user']['login'];
$text_news=$_POST['text_news'];
$date= date('Y-m-j');
$path='image/'.time().$_FILES['image']['name'];
if (!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)) {
    $_SESSION['message'] = 'Ошибка при загрузке сообщения';
    //header('Location: ../register.php');
}
$mysql = mysqli_connect('localhost', 'root', '','sites');

if (!$mysql){
    die('Error connect to DataBase');
}else {

    mysqli_query($mysql, "INSERT INTO `news` (`id`, `heading`, `image`, `text_news`, `author`,`data`) VALUES (NULL, '$heading', '$path', '$text_news', '$author','$date')");
}
//$result=$mysql->query("SELECT * FROM `news` WHERE `author` ='$author'");
//    $news = $result->fetch_assoc();
//    $_SESSION['news']=[
//        "id"=>$news['id'],
//        "heading"=>$news['heading'],
//        "image"=>$news['image'],
//        "text_news"=>$news['text_news'],
//        "author"=>$news['author'],
//        "data"=>$news['data']
//    ];
$mysql->close();
header('Location: ../lk.php');
?>