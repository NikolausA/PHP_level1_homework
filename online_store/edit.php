<?php
include "config.php";
$id = $_GET['id'];
$good = goodGet($connection, $id);
?>
<form action="#" method="post">
    <p>Название товара</p>
    <input type="text" name="title" value="<?=good['title']?>">
    <p>Краткое описание</p>
    <input type="text" name="short-descr" value="<?=good['short_descr']?>">
    <p>Полное описание</p>
    <input type="text" name="description" value="<?=good['description']?>">
    <p>Цена</p>
    <input type="text" name="price" value="<?=good['price']?>">
    <input type="submit" name="submit" value="Редактировать">
</form>

<?php
$title = strip_tags($_POST['title']);
$short_descr = strip_tags($_POST['short_descr']);
$description = strip_tags($_POST['description']);
$price = strip_tags($_POST['price']);
           
isset($_POST['submit'])?goodEdit($connection, $id, $title, $short_descr, $description, $price): ;
           

?>