<?php
$title = "Карточка товара";
$id = $good['id'];
$item = goodGet($connection, $id);
?>
<img src="full_size/<?=$item['image_name']?>.jpg" alt="<?=$item['title']?>">
<p><?=$item['description']?></p>
<p><?=$item['price']?></p>
<p><a href="basket.php?id=<?=item['id']?>"></a>Добавить в корзину</p>