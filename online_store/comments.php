<?php
include "model.php";
$title = "Комметарии";
?>

<form action="#" method="post">
    <p>Укажите имя</p>
    <input type="text" name="fio">
    <p>Добавьте комментарий</p>
    <textarea name="text" rows="10"></textarea>
    <input type="submit" value="Отправить">
</form>

<?php
if(isset($_POST['submit'])){
    $fio = strip_tags($_POST['fio']);
    $text = strip_tags($_POST['text']);
    addComment($connection, $fio, $text);

$comments = commentsAll($connect);
foreach($comments as $comment):?>
   <div class="comments">
       <?=$comment['fio']?><br>
       <?=$comment['text']?><br>
       <?=$comment['time_create']?><br>
   </div>
<?php    
endforeach
?>