<!doctype html>
<?php
session_start();
include('../includes/header.php');
if (!$_SESSION['user']){
    header('Location: error');
}
?>
<div class="row">
    <div class="col-2">
        <form action="new_news.php" method="post" enctype="multipart/form-data">
            <label>Введите заголовок</label>
            <input type="text" name="heading" placeholder="До 70 символов" maxlength="70" required>
            <label>Загрузите картинку</label>
            <input type="file" name="image" required>
            <label>Наберите текст статьи</label>
            <textarea name="text_news" cols="100" required> </textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>

