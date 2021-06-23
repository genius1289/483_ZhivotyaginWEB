<?php
include("../includes/connews.php");
    $login=$_POST['author'];
    $text=$_POST['text_comm'];
    $id=$_POST['id'];
    $comm=$mysql->query("INSERT INTO `comm` (`login`,`page_id`,`text_comm`)VALUES('$login','$id','$text') ");
    header("Location: ".$_SERVER["HTTP_REFERER"]);
?>