<?php
include "template.php";

if(!empty($_GET['p'])){
    $fileName = $_GET['p'].".php";
    $content = include "$fileName";
    echo "<h3> $filename </h3>";
} else {
    $content = include "main.php";
}

?>