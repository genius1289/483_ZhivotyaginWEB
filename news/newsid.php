<?php
session_start();
include_once('../includes/header.php');
$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : null;
include('../includes/connews.php');

$login=isset($_SESSION['user']['login']) ? $_COOKIE['user'] : !null;
$result=$mysql->query("SELECT * FROM `news` WHERE `id`='$id'");
$result1=$result->fetch_assoc();
//print_r($result1);
$date=mb_strimwidth($result1['data'], '0','10')
//$comm=$mysql->query()
?>

<html>
<body>

    <div class="row">
        <div >

        <h1> <?=$result1['heading'] ?> </h1>
        <p style="text-indent: 25px"> <?=$result1['text_news']?> </p>
        <p>Автор: <?=$result1['author']?> Дата написания: <?=$date?></p>
        </div>
        </div>
    </div>
    <?php if(isset($_SESSION['user']['login'])==$result1['author']){?>
   <button class="button"><a class="button" href="../users/rednews.php?id=<?=$result1['id']?>"></a>Редактировать</button>
    <?php } ?>
</body>
<div class="row">
    <div class="col">
        <form action="comm.php" method="POST">
            <label>Оставить комментарий</label>
            <?php if(isset($_COOKIE['user'])==false){ ?>
            <input type="email" name="author" placeholder="Введите почту" required>
            <?php }?>
            <input type="hidden" name="author" value="<?=$login?>">
            <br>
            <textarea name="text_comm" cols="150" rows="6"></textarea>
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <button type="submit">Отправить</button>
        </form>

    </div>
</div>
<h1>Комментарии: </h1>
<?php

$comm=$mysql->query(("SELECT * FROM `comm` WHERE `page_id`= '$id' "));
while($result1=$comm->fetch_assoc()){?>
    <h1>Имя: <?=$result1['login']?></h1>
    <h2>Комментарий:</h2>
    <h1><?=$result1['text_comm']?></h1>
    <br>
<?php }?>

</html>

