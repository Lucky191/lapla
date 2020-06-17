
<?php
 $conn = mysqli_connect ("localhost","mysql","mysql");
mysqli_select_db ($conn,'site');


$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];

?>