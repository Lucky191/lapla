<?php
session_start();
include_once("db.php");
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'admin' && $pas == admin123456)
  {

  $_SESSION['admin'] = true;
  echo "<meta http-equiv='Refresh' content='0; URL=redac.php'>";
  }
else
echo "<meta http-equiv='Refresh' content='0; URL=avtadministrator.html'>";
?>