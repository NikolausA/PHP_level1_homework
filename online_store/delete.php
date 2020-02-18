<?php
include "model.php";

$id = $GET['id'];
delete($connection, $id);

header("admin.php");
?>