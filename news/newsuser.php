<?php
session_start();
include_once('../includes/header.php');
$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : null;
include_once('../includes/connews.php');

$login=$_COOKIE['user'];

$result=$mysql->query("SELECT * FROM `news` WHERE `author`='$login'");
$result1=$result->fetch_assoc();
//print_r($result1);
?>
<?php if(isset($result1['author'])==$login){ ?>
<?php foreach ($result as $row) : ?>
<div class="row">
    <div class="col" >
        <h1><?=$row['heading']?></h1>
        <img src="../<?=$row['image']?>" alt="foto" align="left" hspace="10" width="250" height="250">
        <div class="w-100"><?= mb_strimwidth($row['text_news'],0,100, "...");?> </div>  <!--кратко о статье --!>
        <b>Автор: <?=$row['author']?> Дата написания : <?=mb_strimwidth($row['data'],0,10,"");?>  </b>
        <div><button class="button"><a class="button" href="../news/newsid.php?id=<?=$row['id'] ?>">Читать дальше</a></button></div>
        <div><button class="button"><a class="button" href="../news/deletenews.php?id=<?=$row['id'] ?>">Удалить новость</a></button></div>
    </div>
    <div class="w-100"></div>
    <div class="col-3"></div>
</div>
    <?php endforeach;?>
<?php }else { echo "У вас нет публикаций, желаете "."<a href='new.php'>создать</a>";}

?>


