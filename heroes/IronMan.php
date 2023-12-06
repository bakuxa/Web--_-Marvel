<!DOCTYPE html>
 <head>
	<link rel="icon" href="shield.png" type="image/x-icon">
	<title>Энциклопедия Marvel</title>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/hero.css">
	<script src="../menu.js"></script>
 </head>

 <body>

	<header>
		<nav>
			<ul>
				<li><a href="../News.php">Новости</a></li>
				<li><a href="../actors/Robert.php">Актеры</a></li>
				<li><a href="../index.php">Главная</a></li>
				<li class="active"><a href="../heroes/IronMan.php">Герои</a></li>
				<li><a href="../chronology.php">Фильмы</a></li>
			</ul>
		</nav>
	</header>

	<div class="container">
		<div class="sidebar prokrutka-menu-right" id="menu">	
		<p><a href="../heroes/IronMan.php"><img class="img-menu" src="../img/ЖелезныйЧеловек.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/Top.php"><img class="img-menu" src="../img/тор.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/SpiderMan.php"><img class="img-menu" src="../img/человек паук.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/BlackWidow.php"><img class="img-menu" src="../img/черная вдова.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/America.php"><img class="img-menu img-menu-active" src="../img/КапитанАмерика.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/Loki.php"><img class="img-menu" src="../img/Локи.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/Strange.php"><img class="img-menu" src="../img/ДокторСтрендж.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/Wanda.php"><img class="img-menu" src="../img/Ванда.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/Hulk.php"><img class="img-menu" src="../img/Халк.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/AntMan.php"><img class="img-menu" src="../img/ЧеловекМуравей.jpg" alt="Изображение"></a></p>
			<p><a href="../heroes/CaptainMarvel.php"><img class="img-menu" src="../img/КапитанМарвел.jpg" alt="Изображение"></a></p>
		</div>

		<div class="content">
		<?php
				$connection = mysqli_connect('localhost', 'root', '', 'website');
				$sql = "SELECT name, info FROM heroes WHERE id = 1"; 
				$result = mysqli_query($connection, $sql);
				$data = mysqli_fetch_assoc($result);

				mysqli_close($connection);

				if ($data) {
					echo '<h1 class="active active-width">' . $data['name'] . '</h1>';
					echo '<p class="prokrutka-info">' . (empty($data['info']) ? 'Info Not Found' : nl2br($data['info'])) . '</p>';
				} else {
					echo '<h1 class="active active-width">Actor Name Not Found</h1>';
					echo '<p class="prokrutka-info">Info Not Found</p>';
				}
			?>
		</div>

		<div class="image-block">
			<img src="../img/Iron-right.png" alt="Изображение">
		</div>

		<div class="left-arrow">
			<a href="../actors/Robert.php"><img src="../img/back.png" alt="Изображение"></a>
		</div>

	</div>
</body>

</html>
