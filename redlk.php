
<?php
include('includes/header.php');
session_start();
if (!$_SESSION['user']){
    header('Location: #');
}
?>
<!doctype html>
<html>

<div class="row">
    <div class="col-2">
<form action="users/red.php" method="get">
    <label>Изменить имя на</label>
    <input type="text" name="name" placeholder= <?=$_SESSION['user']['name']?> > <br>
    <label>Изменить пароль</label>
    <input type="password" name="pass" placeholder= <?=$_SESSION['user']['pass']?>> <br>
    <button type="submit">Изменить</button>
</form>
    </div>
    <div class="row-2">
      <form action="users/avatar.php" method="post" enctype="multipart/form-data"> <!--  enctype="multipart/form-data позволяет загрузить файл на сервер-->
        <label>Загрузить изображение профиля</label>
        <input type="file" name="avatar"><br>
        <button type="submit">Загрузить</button>
        </form>
    </div>
</div>
</html>