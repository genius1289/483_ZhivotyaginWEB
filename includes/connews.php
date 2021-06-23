<?php
$mysql = mysqli_connect('localhost', 'root', '','sites');
if (!$mysql){
    die('Error connect to DataBase');
}
$result=$mysql->query("SELECT * FROM `news`");
$sql = "SELECT * FROM news";
//$newsid="SELECT * FROM `comm` WHERE `page_id`= '$id' ";
?>