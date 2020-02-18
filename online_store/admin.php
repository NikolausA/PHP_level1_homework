<?php
$title = "Каталог часов";
include "model.php";
$goods = goodsAll($connect);
foreach($goods as $good){?>
  <table>
      <tr>
          <td><?=good['title']?></td>
          <td><?=good['price']?></td>
          <td><p class="edit"><a href="edit.php?id=<?=good['id']?>"></a>Редактировать</p></td>
          <td><p class="delete"><a href="delete.php?id=<?=good['id']?>"></a>Удалить</p></td>
      </tr>
  </table>
<?php
}
?>