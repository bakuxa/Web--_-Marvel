<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="../shield.png" type="image/x-icon">
		<title>Энциклопедия Marvel</title>
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<link rel="stylesheet" type="text/css" href="../css/actors.css">
		<script src="../menu.js"></script>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="../News.php">Новости</a></li>
					<li class="active"><a href="../actors/Robert.php">Актеры</a></li>
					<li><a href="../index.php">Главная</a></li>
					<li><a href="../heroes/IronMan.php">Герои</a></li>
					<li><a href="../chronology.php">Фильмы</a></li>
				</ul>
			</nav>
		</header>
	<main>
		
		<div class="container">

			<div class="sidebar prokrutka-menu-left" id="menu">	
			<p><a href="../actors/ChrisHemsworth.php"><img class="img-menu" src="../img/КрисХемс.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/Tom.php"><img class="img-menu" src="../img/ТомХолланд.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/Scarlett.php"><img class="img-menu" src="../img/Скарлет.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/ChrisEvans.php"><img class="img-menu" src="../img/КрисЭванс.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/TomHiddleston.php"><img class="img-menu" src="../img/ТомХиддлстон.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/Benedict.php"><img class="img-menu" src="../img/Бенедикт.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/Elizabeth.php"><img class="img-menu" src="../img/ЭлизабетОлсен.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/MarkRuffalo.php"><img class="img-menu" src="../img/МаркРуффало.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/PaulRudd.php"><img class="img-menu img-menu-active" src="../img/ПолРадд.jpg" alt="Изображение"></a></p>
				<p><a href="../actors/BrieLarson.php"><img class="img-menu" src="../img/БриЛарсон.jpg" alt="Изображение"></a></p>
			</div>

			<div class="content">
			<?php
				$connection = mysqli_connect('localhost', 'root', '', 'website');
				$sql = "SELECT name, info1 FROM website WHERE id = 10"; 
				$result = mysqli_query($connection, $sql);
				$data = mysqli_fetch_assoc($result);

				mysqli_close($connection);

				if ($data) {
					echo '<h1 class="active active-width">' . $data['name'] . '</h1>';
					echo '<p class="prokrutka-info">' . (empty($data['info1']) ? 'Info Not Found' : nl2br($data['info1'])) . '</p>';
					
				} else {
					echo '<h1 class="active active-width">Actor Name Not Found</h1>';
					echo '<p class="prokrutka-info">Info Not Found</p>';
				
				}
			?>
			</div>

			<div class="image-block">
				<img src="../img/PaulRudd.png" alt="Изображение">
			</div>

			<div class="right-arrow">
				<a href="../heroes/AntMan.php"><img src="../img/next.png" alt="Изображение"></a>
			</div>

		 </div>
	</main>
</body>
</html>
