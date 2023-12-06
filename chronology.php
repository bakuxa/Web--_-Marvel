<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="shield.png" type="image/x-icon">
	<title>Энциклопедия Marvel</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/chronology.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="News.php">Новости</a></li>
				<li><a href="actors/Robert.php">Актеры</a></li>
				<li><a href="index.php">Главная</a></li>
				<li><a href="heroes/IronMan.php">Герои</a></li>
				<li class="active"><a href="chronology.php">Фильмы</a></li>
			</ul>
		</nav>
	</header>
	

	<div class="list">
		<h2>КИНЕМАТОГРАФИЧЕСКАЯ ВСЕЛЕННАЯ MARVEL</h2>
		<ul>
		<?php
        $connection = mysqli_connect('localhost', 'root', '', 'website');

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT title FROM chronology";
        $result = mysqli_query($connection, $sql);

        while ($data = mysqli_fetch_assoc($result)) {
            echo '<li><span>' . $data['title'] . '</span></li>';
        }

        mysqli_close($connection);
        ?>
		</ul>
	  </div>
</body>
</html>
