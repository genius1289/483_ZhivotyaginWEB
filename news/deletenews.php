<?php
session_start();
include('../includes/connews.php');
$head=$_POST['head'];
$text=$_POST['text'];
$login=$_COOKIE['user'];
$id=$_GET['id'];
mysqli_query($mysql, "DELETE FROM `news` WHERE `news`.`id` = '$id'");
mysqli_query($mysql, "DELETE FROM `comm` WHERE `comm`.`page_id` = '$id'");
$mysql->close();
header('location:../lk.php');