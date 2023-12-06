<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="shield.png" type="image/x-icon">
	<title>Энциклопедия Marvel</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">
</head>

<header>
	<nav>
		<ul>
			<li class="active"><a href="News.php">Новости</a></li>
			<li><a href="actors/Robert.php">Актеры</a></li>
			<li><a href="index.php">Главная</a></li>
			<li><a href="heroes/IronMan.php">Герои</a></li>
			<li><a href="../chronology.php">Фильмы</a></li>
		</ul>
	</nav>
</header>

<body>
	
	<main>
	<div class="ul">
    <?php
            $connection = mysqli_connect('localhost', 'root', '', 'website');

            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id, title, photo, article FROM news2";
            $result = mysqli_query($connection, $sql);

            echo '<ul>';

            while ($data = mysqli_fetch_assoc($result)) {
                echo '<li>';
                echo '<a href="news_article.php?id=' . $data['id'] . '">';
                echo '<figure>';
                
                // Передача изображения через PHP
                echo '<img src="data:image/jpeg;base64,' . base64_encode($data['photo']) . '" alt="' . $data['title'] . '">';
                
                echo '<figcaption>' . $data['title'] . '</figcaption>';
                echo '</figure>';
                echo '</a>';
                echo '</li>';
            }

            echo '</ul>';

            mysqli_close($connection);
            ?>
</div>
	</main>
</body>
</html>
