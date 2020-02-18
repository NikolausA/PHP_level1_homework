<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Best Watch</title>
    <link rel="stylesheet" href="#" type="text/css">
</head>
<body>
    <h1><?=$title?></h1>
    <div class="header" style="height: ; background-image: ;">
        <ul class="main-menu" style="list-style-type: none; ">
            <a href="index.php?p=main" style=""><li style="display: inline-block; border: 1px solid blue;">Главная</li></a>
            <a href="index.php?p=goods"><li style="display: inline-block; border: 1px solid blue;">Каталог</li></a>
            <a href="index.php?p=basket"><li style="display: inline-block; border: 1px solid blue;">Корзина</li></a>
            <a href="index.php?p=comments"><li style="display: inline-block; border: 1px solid blue;">Отзывы</li></a>
            <a href="index.php?p=reg"><li style="display: inline-block; border: 1px solid blue;">Регистрация</li></a>
            <a href="index.php?p=admin"><li style="display: inline-block; border: 1px solid blue;">Админка</li></a>
        </ul>
    </div>
    <div class="main">
        <?php
            $content;
        ?>
    </div>
    <div class="footer"></div>
</body>
</html>