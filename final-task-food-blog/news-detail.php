<?php

// страница детального просмотра новости

// получаем ID новости из массива $_GET
$newsId = (int)$_GET['newsId'];

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

// запрос на получение ОДНОЙ новости по ее ID
$query = "SELECT news.title, text, add_date, image,
          authors.id AS authorId, first_name, last_name, short_info, avatar,
          translation AS category, class_name
          FROM news, authors, category
          WHERE author_id = authors.id
            AND category_id = category.id
            AND news.id = ?;";
// подготавливаем запрос
$statement = $pdo->prepare($query);
// выполняем запрос
$statement->execute([$newsId]);

$newsItem = $statement->fetch();

//DBConnect::debug($newsItem);

// заменяем символы \r\n\r\n на переносы
$newsItem['text'] = str_replace("\r\n", '</p><p class="main-text">', $newsItem['text']);
// удаляем пустые параграфы
$newsItem['text'] = str_replace('<p class="main-text"></p>', '', $newsItem['text']);
?>

<?php include 'header.php'; ?>

<body>
    <div class="container">
 
        <div class="news-item">
            <div class="news-info">
                <h1><?=$newsItem['title']?></h1>
                <img src="<?=$newsItem['image']?>" alt="<?=$newsItem['title']?>">
                <p class="main-text"><?=$newsItem['text']?></p>
                <p>Дата публикации: <?=$newsItem['add_date']?></p>
                <p>Категория: <span class="<?=$newsItem['class_name']?>"><?=$newsItem['category']?></span></p>
            </div>
            <div class="author-info">
                <img src="<?=$newsItem['avatar']?>" alt="<?=$newsItem['first_name'].' '.$newsItem['last_name']?>">
                <h3>
                    <a href="author-detail.php?authorId=<?=$newsItem['authorId']?>">
                        <?=$newsItem['first_name'].' '.$newsItem['last_name']?>
                    </a>
                </h3>
                <p><?=$newsItem['short_info']?></p>
            </div>
        </div>
    </div>
</body>
</html>
