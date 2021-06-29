<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title> NewSite</title>
</head>
<div class="container-fliud">
			<div class="row">
				<div class="col">
					<nav class="nav">
						<a class="nav-link" aria-current="page" href="index.php"> Главная </a>
                        <?php if (isset($_COOKIE['user'])==false): ?>
						<a class="nav-link" href="reg.php">Регистрация </a>
						<a class="nav-link" href="aut.php">Вход </a>
                        <?php else : ?>
						<a class="nav-link" href="lk.php">Личный кабинет</a>
                        <?php endif;?>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<img src="http://pravdahim.ru/wp-content/uploads/2018/10/8.jpg" class="img img-fluid"/>
				</div>
			</div>