<?php
session_start();
include_once('../includes/header.php');
$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : null;
include_once('../includes/connews.php');

$result=$mysql->query("SELECT * FROM `news` WHERE `id`='$id'");
$result1=$result->fetch_assoc();
//print_r($result1);
$date=mb_strimwidth($result1['data'], '0','10')
?>
<div class="row">
    <div class="col-3"></div>
    <div class="col">
        <?php if($_SESSION['user']['login']==$result1['author']){?>
            <div align="right">
                <form action="../news/rednewuser.php" method="post">
                    <label>Загловок</label>
                    <input type="text" name="head" value="<?=$result1['heading']?>" size="30"></br>
                    <textarea type="text" name="text" cols="88" rows="5"><?=$result1['text_news']?></textarea>
                   <button  type="submit">Отправить</button>
                </form>
            </div>
        <?php }else{
            echo "Вы не являетесь ".$result1['author'].", ".'<a href="../index.php"> вернуться на главную </a>';} ?>
    </div>
</div>