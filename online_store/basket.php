<?php
$title = "Корзина";
include "model.php";

if(isset($_COOKIES['login']) && isset($_COOKIES['pass'])){
    $user_name = $_COOKIES['login'];
    $id = $_GET['id'];
    $good = goodGet($connection,$id);
    $item_id = $good['id'];
    $title = good['title'];
    $price = good['price'];
} else {
    header("Location: reg.php");
}

addToCart($connection,$id,$user_name,$item_id,$title,$price);

$goodsInCart = goodsInCart($connection,$user_name);
foreach($goodsInCart as $good){?>
   <table>
       <tr>
           <td><?=$good['user_name']?></td>
           <td><?=$good['title']?></td>
           <td><?=$good['price']?></td>
           <td><?=$good['count']?></td>
       </tr>
   </table>
<?php    
}
?>