<?php
print_r($_GET);
$mark = $$_GET['id'];
$var3 = $_POST['var3'];
$var4 = $_POST['var4'];

function calc2($x, $y, $z){
    switch ($z) {
        case 1:
            return $x + $y;
            break;
        case 2:
            return $x - $y;
            break;
        case 3:
            return $x * $y4;
            break;
        case 4:
            if($var4 != 0) {
                return $x / $y;
                break;
            } else {
                return "На ноль делить нельзя!";
            }
    }
}
$result2 = calc2($var3, $var4 , $mark);
?>