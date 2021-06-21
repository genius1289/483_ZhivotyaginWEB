<!doctype html>
<?php
include('includes/header.php');
session_start();
if (!$_SESSION['user']){
    header('Location: #');
}
?>
<html>


<form action="red.php" method="post">
    <label>Изменить имя на</label>
    <input type="text" name="name" placeholder= <?=$_SESSION['user']['name']?> >
    <button type="submit">Изменить</button>
</form>
</html>