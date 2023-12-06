<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="shield.png" type="image/x-icon">
    <title>Энциклопедия Marvel</title>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/news_article.css">
</head>

<header>
    <nav>
        <ul>
            <li class="active"><a href="../News.php">Новости</a></li>
            <li><a href="../actors/Robert.php">Актеры</a></li>
            <li><a href="../main.php">Главная</a></li>
            <li><a href="../heroes/IronMan.php">Герои</a></li>
            <li><a href="../chronology.php">Фильмы</a></li>
        </ul>
    </nav>
</header>

<body>
    <main>
        <div class="news-block">
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'website');

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT title, photo2, article, date_published FROM news2 WHERE id = ?";
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_bind_param($stmt, 'i', $_GET['id']);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if ($result) {
                $data = mysqli_fetch_assoc($result);

                echo '<div class="news-block">';
                echo '<h2>' . $data['title'] . '</h2>';
                echo '<h6 class="date">Дата публикации: ' . $data['date_published'] . '</h6>';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($data['photo2']) . '" alt="' . nl2br($data['article']) . '">';

                // Разбиваем текст статьи на абзацы
                $paragraphs = explode("\n", $data['article']);
                foreach ($paragraphs as $paragraph) {
                    echo '<p>' . $paragraph . '</p>';
                }

                echo '</div>';

                mysqli_free_result($result);
            } else {
                echo "Error retrieving data: " . mysqli_error($connection);
            }
        }

        mysqli_close($connection);
        ?>
        </div>
    </main>
</body>

</html>
