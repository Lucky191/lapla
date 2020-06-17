<?php
session_start();
include_once("db.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> <?php echo $login; ?></title>
</head>
<body>
<?php
if(isset($login) AND isset($password)){
	$result = mysqli_query($conn,"SELECT * FROM users  WHERE id='$id_user' ");
$array = mysqli_fetch_array($result);
}
echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
?>