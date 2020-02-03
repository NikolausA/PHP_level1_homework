<?php
//print_r($_POST);
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$mark = $_POST['mark'];

function calc($x, $y, $z){
    switch ($z) {
        case "+":
            return $x + $y;
            break;
        case "-":
            return $x - $y;
            break;
        case "*":
            return $x * $y;
            break;
        case "/":
            if($y != 0) {
                return $x / $y;
                break;
            } else {
                return "На ноль делить нельзя!";
            }
    }
}
$result = calc($var1, $var2, $mark);