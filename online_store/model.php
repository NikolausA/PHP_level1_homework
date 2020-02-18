<?php
include "config.php";

function goodsAll($connect){
    $query = "select * from goods";
    $result = mysqli_query($connect, $query);
    $goods = [];
    while($row = mysqli_fetch_assoc($result)){
        $goods = $row;
    }
    return $goods;
}

function goodGet($connection, $id){
    $query = "select * from goods where id=$id";
    $result = mysqli_query($connection, $query);
    $good = mysqli_fetch_assoc($result);
    return $good;
}
 
function addToCart($connection,$id,$user_name,$item_id,$title,$price){
    $query = "select * from cart where item_id=$id and user_name=$user_name";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)){
        $item = mysqli_fetch_assoc($result);
        $count = $item['count'] + 1;
        $query = "update cart set count=$count where item_id=$id and user_name=$user";
        return mysqli_query($connection, $query);
    } else {
        $count = 1;
        $query = "insert into cart(user_name,item_id,title,price,count) values($user_name, $item_id, $title, $price, $count)";
        return mysqli_query($connection, $query);
    }
}

function goodsInCart($connection, $user_name){
    $query = "select * from cart where user_name=$user_name";
    $result = mysqli_query($connection, $query);
    $goodsInCart = [];
    while($row = mysqli_fetch_assoc($result)){
        $goodsInCart = $row;
    }
    return $goodsInCart;
}
function checkUsers($connection, $login, $pass){
    $query = "select * from users where login='$login' and pass='$pass'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)>0){
        setcookie("login", $login);
        setcookie("pass", $pass);
        header("Location: main.php");
    } else {
        addUser($connection, $login, $pass);
        header("Location: main.php");    
    }
}
function addUser($connection, $login, $pass){
    $query = "insert into users(login,pass) values($login, $pass)";
    return mysqli_query($connection, $query);
}
function delete($connection, $id){
    $query = "delete * from cart where id=$id";
    return mysqli_query($connection, $query);
}
function goodEdit($connection, $id, $title, $short_descr, $description, $price){
    $query = "update goods set title=$title, short_descr=$short_descr, description=$description, price=$price";
    return mysqli_query($connection, $query);
}

function addComment($connection, $fio, $text){
    $query = "insert into comments (fio, text) values ($fio, $text)";
    return mysqli_query($connection, $query);
}
function commentsAll($connection){
    $query = "select * from comments";
    $result = mysqli_query($connect, $query);
    $comments = [];
    while($row = mysqli_fetch_assoc($result)){
        $comments = $row;
    }
    return $comments;
}
?>