<?php 
session_start();
include_once("db.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Изменение данных <?php echo $login; ?></title>
</head>
<body>
<?php
 

////////Изменение имени
 
 if(isset($login) AND isset($password)){
    }
 
    $up = mysql_query("SELECT * users  WHERE id='$id_user'");//обновляем имя
    if {
 
   
    $_SESSION['password']=$password; 
    $_SESSION['login']=$login; 
    $_SESSION['id']=$id_user['id'];
          
}
echo "<meta http-equiv='Refresh' content='0; URL=save_profile.php?id=".$id_user."'>";

	?>
 </body>
	 </html>