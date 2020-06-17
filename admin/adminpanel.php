<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
include_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Админ панель</title>
<meta charset="utf-8">
</head>
<header>
	<a href="redac.php">Изменить товар</a>
</header>
<body>

<form action="newart.php" method="post">
<p>Название блюда:</p>
<input name="name" type="text" placeholder="Имя"/>
<p>Цена:</p>
<input name="price" type="text" placeholder="Текст"/>
<p>Описание:</p>
<input name="descc" type="text" placeholder="Текст"/>
<p>Ккал:</p>
<input name="kkal" type="text" placeholder="Текст"/>
<p>Жиры:</p>
<input name="ghir" type="text" placeholder="Текст"/>
<p>Белки:</p>
<input name="prot" type="text" placeholder="Текст"/>
<p>Углеводы:</p>
<input name="yglev" type="text" placeholder="Текст"/>
<input type="submit" value="Добавить ">
</form>
</body>
</html>