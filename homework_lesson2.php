<?php

//Задание №1
$a = 8;
$b = 0;
$result;
if ($a >= 0 && $b >= 0) {
    $result = $a - $b;
} else if ($a < a && $b < 0) {
    $result = $a * $b;
} else {
    $result =$a + $b;
}
echo "$result";

//Задание №2
function figline($c) {
    if ($c <= 15) {
        echo "$c ";
        $c++;
        figline($c);
    }
}
$c = 14;
switch($c) {
    case 15:
        figline($c);
        break;
    case 14:
        figline($c);
        break; 
    case 13:
        figline($c);
        break;
    case 12:
        figline($c);
        break;
    case 11:
        figline($c);
        break;
    case 10:
        figline($c);
        break;
    case 9:
        figline($c);
        break;
    case 8:
        figline($c);
        break;
    case 7:
        figline($c);
        break;
    case 6:
        figline($c);
        break;
    case 5:
        figline($c);
        break;
    case 4:
        figline($c);
        break;
    case 3:
        figline($c);
        break;
    case 2:
        figline($c);
        break;
    case 1:
        figline($c);
        break;
    case 0:
        figline($c);
        break;
}
    
//Задание №3
function sum($x, $y) {
    return $x + $y;
}
function subtr($x, $y) {
    return $x - $y;
}
function mult($x, $y) {
    return $x * $y;
}
function div($x, $y) {
    return $x / $y;
}
//Задание №4
function mathOperation($arg1, $arg1, $operation) {
    switch ($operation) {
        case "+":
            sum($x, $y);
            break;
        case "-":
            subtr($x, $y);
            break;
        case "*":
            mult($x, $y);
            break;
        case "/":
            div($x, $y);
            break;
    } 
}
mathOperation(10, 2, "/");
?>