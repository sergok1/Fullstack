<?php
// страница просмотра списка поваров

// подкл к БД
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

// запрос на получение поворов и фото
$query = "SELECT authors.id AS authorId, first_name, last_name, avatar
          FROM authors
          ORDER BY authorId DESC;";

$statement = $pdo->query($query);
$authorsList = $statement->fetchAll();

//DBConnect::debug($authorsList);
?>

<?php include 'header.php'; ?>
<body> 
<div class="container">

<div class="authors-list">
    <?php foreach ($authorsList as $authorsItem): ?>
        <div class="authors-item">
            <div class="authors-text">
                <h2><?= $authorsItem['first_name'] . ' ' . $authorsItem['last_name'] ?> ID: <?= $authorsItem['authorId'] ?></h2>
                <div>
                    <p>Повар: <?= $authorsItem['first_name'] . ' ' . $authorsItem['last_name'] ?></p>
                    <!-- Добавил проверку наличия фото -->
                    <?php if (isset($authorsItem['avatar'])): ?>
                        <img src="<?= $authorsItem['avatar'] ?>" alt="<?= $authorsItem['first_name'] . ' ' . $authorsItem['last_name'] ?> Avatar">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


</div>

</body>
</html>
