<?php
 session_start();
 include('../includes/connews.php');
 $head=$_POST['head'];
 $text=$_POST['text'];
 $login=$_COOKIE['user'];
 mysqli_query($mysql, "UPDATE `news` SET `heading` = '$head', `text_news` = '$text' WHERE `news`.`author` = '$login'");
$mysql->close();
header('location:../news_state.php');