<?php
$title = "Каталог часов";
include "model.php";
$goods = goodsAll($connect);
foreach($goods as $good){?>
   <div class="good-item">
       <a href="item.php?id=<?=good['id']?>"><img src="small/<?=$good['image_name']?>.jpg" alt="<?=good['title']?>"></a>
       <p class="short-descr"><?=good['short-descr']?></p>
       <h3 class="item-name"><?=good['title']?></h3>
       <p class="price"><?=good['price']?>руб.</p>
       <p class="add-to-basket"><a href="basket.php?id=<?=good['id']?>"></a>Добавить в корзину</p>
   </div>
<?php    
}
?>