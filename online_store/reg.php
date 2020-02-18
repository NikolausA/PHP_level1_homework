<?php
include "model.php"
//$title = "Регистрация на сайте";
?>
<form method="post">
  <p>Введите логин</p>
  <input type="text" name="login" value="<?=$_COOKIE['login']?>" placeholder="Введите логин">
  <p>Введите пароль</p>
  <input type="password" name="pass"  value="<?=$_COOKIE['pass']?>" placeholder="Введите пароль"><br><br>
  <input type="submit" name="submit" value="Зарегистрироваться">  
</form>
<?php
if(isset($_POST['submit'])){
    $login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
    $pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";
    checkUsers($connection, $login, $pass);
}


?>