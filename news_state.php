<!doctype html>
<?php
session_start();
include('includes/header.php');
include_once('includes/connews.php')
?>
<div class="row">
    <div class="col-2">
        <ul class="list-group list-group-flush>">
            <?php if ($result = $mysql->query($sql)){
                foreach ($result as $article): ?>
                    <li><a class='text' href="news/newsid.php?id=<?= $article['id'] ?>"><?= mb_strimwidth($article['data'],'0','10') ?> <?= $article['heading'] ?> </a></li>
                <?php endforeach; }?>
        </ul>
    </div>
    <div class="col-6">

    <?php foreach ($result as $row) : ?>
    <div class="row">
        <div class="col" >
            <h1><?=$row['heading']?></h1>
            <img src="<?=$row['image']?>" alt="foto" align="left" hspace="10" width="250" height="250">
            <div class="w-100"><?= mb_strimwidth($row['text_news'],0,100, "...");?> </div>  <!--кратко о статье --!>
            <b>Автор: <?=$row['author']?> Дата написания : <?=mb_strimwidth($row['data'],0,10,"");?>  </b>
            <div><button class="button"><a class="button" href="news/newsid.php?id=<?=$row['id'] ?>">Читать дальше</a></button></div>
        </div>
        <div class="w-100"></div>
        <div class="col-3"></div>
        <?php endforeach;?>
    </div>
    </div>


</div>

