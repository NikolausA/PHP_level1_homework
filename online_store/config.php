<?php
const SERVER = "localhost";
const LOGIN = "root";
const PASS = "";
const DB = "thebestwatchstore";
const LARGEFILE = "full_size\\"; //папка с полноразмерными фото
const SMALLFILE = "small\\"; //папка с маленькими фото

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);
?>