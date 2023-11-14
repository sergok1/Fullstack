<?php
// страница просмотра списка новостей

// подкл к БД
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

// запрос на получение новостей
$query = "SELECT news.id AS newsId, news.title, add_date, image,
                 authors.id AS authorId, first_name, last_name,
                 translation AS category, class_name
          FROM news, authors, category
          WHERE author_id = authors.id
                AND category_id = category.id
          ORDER BY add_date DESC;";
$statement = $pdo->query($query);
$newsList = $statement->fetchAll();
//DBConnect::debug($newsList);
?>

<?php include 'header.php'; ?>
<body> 
<div class="container">

    <div class="news-list">
        <?php foreach ($newsList as $newsItem):?>
            <div class="news-item">
                <div class="news-img">
                    <a href="news-detail.php?newsId=<?=$newsItem['newsId']?>">
                        <img src="<?=$newsItem['image']?>" alt="<?=$newsItem['title']?>">
                    </a>
                </div>
                <div class="news-text">
                    <h2><?=$newsItem['title']?> ID: <?=$newsItem['newsId']?></h2>
                    <div>
                        <p>Дата публикации: <?= str_replace('-', '.', substr($newsItem['add_date'], 0, 10))?></p>
                        <p>Повар:
                            <a href="author-detail.php?authorId=<?=$newsItem['authorId']?>">
                                <?=$newsItem['first_name'].' '.$newsItem['last_name']?>
                            </a>
                        </p>
                        <p>Категория: <span class="<?=$newsItem['class_name']?>"><?=$newsItem['category']?></span></p>
                        <a href="news-detail.php?newsId=<?=$newsItem['newsId']?>">Подробнее...</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

</body>
</html>
