<!--1. Создать форму-калькулятор операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>-->
<?php
$var1 = $_GET['var1'];
$var2 = $_GET['var2'];
$mark = $_GET['mark'];

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
?>
  
   <form action="#">
    <input type="text" name="var1" value="<?=$var1?>">
    <select name="mark" id="">
        <option value="+">Прибавить</option>
        <option value="-">Вычесть</option>
        <option value="*">Умножить</option>
        <option value="/">Разделить</option>
    </select>
    <input type="text" name="var2" value="<?=$var2?>">
    <input type="submit" value="=">
    <p>Результат</p>
    <p style="border:1px solid red; width:150px;"><?=$result?></p>
</form>

<!--2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.-->
<?php
$mark = $_GET['id'];
$var3 = $_GET['var3'];
$var4 = $_GET['var4'];

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
<form action="#" method="get">
    <input type="text" name="var3" value="<?=$var3?>">
    <a href="homework_lesson_6.php?id=1"><button>+</button></a>
    <a href="homework_lesson_6?id=2"><button>-</button></a>
    <a href="homework_lesson_6?id=3"><button>*</button></a>
    <a href="homework_lesson_6?id=4"><button>/</button></a>
    <input type="text" name="var4" value="<?=$var4?>">
    
    <p style="border:1px solid red; width:150px;"><?=$result2?></p>
</form>