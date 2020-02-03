<!--1. Создать форму-калькулятор операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>-->
   <form action="server.php" method="post">
    <input type="text" name="var1">
    <select name="mark" id="">
        <option value="+">Прибавить</option>
        <option value="-">Вычесть</option>
        <option value="*">Умножить</option>
        <option value="/">Разделить</option>
    </select>
    <input type="text" name="var2">
    <input type="submit" value="Выполнить">
    <?php
    include 'server.php';
    ?>
    <p><?=$var1?></p>
    <p><?=$result?></p>
</form>

<!--2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.-->
<form action="server2.php" method="get">
    <input type="text" name="var3">
    <a href="server2.php?id=1"><button>+</button></a>
    <a href="server2.php?id=2"><button>-</button></a>
    <a href="server2.php?id=3"><button>*</button></a>
    <a href="server2.php?id=4"><button>/</button></a>
    <input type="text" name="var4">
    <?php
    include 'server2.php';
    ?>
    <p style="border:1px solid grey; width:150px;">result<?=$result2?></p>
</form>