<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
include_once("db.php");
?>
<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laplandiya-Admin-Panel</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<header>
	 <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><span class="color-b">Лапландия</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
       <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Меню</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Контакты</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="order.html">Оформление заказа</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="profille.php"><span><img src="../assets/img/ico/seo-and-web.png"></span></a>
          </li>
          <li class="nav-item">
			  <a class="nav-link" href="cart.html"><span id="total-cart-count" class="badge"></span><span><img src="../assets/img/ico/14_104869.png"></span></a>
          </li>
        </ul>
      </div>
	  </div>

  </nav><!-- End Header/Navbar -->
</header>
<body>
  <?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'mysql';    // Имя созданного вами пользователя
    $pass = 'mysql'; // Установленный вами пароль пользователю
    $db_name = 'site';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

    // Ругаемся, если соединение установить не удалось
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    //Если переменная Name передана
    if (isset($_POST["name"])) {
      //Если это запрос на обновление, то обновляем
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE `goods` SET `name` = '{$_POST['name']}',`price` = '{$_POST['price']}',`descc` = '{$_POST['descc']}',`kkal` = '{$_POST['kkal']}',`ghir` = '{$_POST['ghir']}',`prot` = '{$_POST['prot']}',`yglev` = '{$_POST['yglev']}' WHERE `id`={$_GET['red_id']}");
      } else {
          //Иначе вставляем данные, подставляя их в запрос
          $sql = mysqli_query($link, "INSERT INTO `goods` (`name`, `price`,`descc`,`kkal`,`ghir`,`prot`,`yglev`) VALUES ('{$_POST['name']}', '{$_POST['price']}','{$_POST['descc']}','{$_POST['kkal']}','{$_POST['ghir']}','{$_POST['prot']}','{$_POST['yglev']}')");
      }

      //Если вставка прошла успешно
      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($link, "DELETE FROM `goods` WHERE `id` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p>Товар удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($link, "SELECT * FROM `goods` WHERE `id`={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }
    writeJson();
    function writeJson(){
	$connection = mysqli_connect('localhost', 'mysql', 'mysql');
	$db=mysqli_select_db($connection, "site");
    $sql = "SELECT * FROM goods";
    $resultat = mysqli_query($connection, $sql);

    if (mysqli_num_rows($resultat) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($resultat)) {
            $out[$row["id"]] = $row;
        }
        file_put_contents( '../pizza.json', json_encode($out));
    } else {
        echo "0";
    }
    mysqli_close($connection);
}
  ?>
  <main>
  <section></section>
  <section></section>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>

  <form action="" method="post">
    <table>
      <tr>
        <td>Наименование:</td>
        <td><input type="text" name="name" value="<?= isset($_GET['red_id']) ? $goods['name'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Цена:</td>
        <td><input type="text" name="price" size="3" value="<?= isset($_GET['red_id']) ? $goods['price'] : ''; ?>"> руб.</td>
      </tr>
       <tr>
        <td>Описание:</td>
        <td><input type="text" name="descc" value="<?= isset($_GET['red_id']) ? $goods['descc'] : ''; ?>"></td>
      </tr>
       <tr>
        <td>Ккал:</td>
        <td><input type="text" name="kkal" value="<?= isset($_GET['red_id']) ? $goods['kkal'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Жиры:</td>
        <td><input type="text" name="ghir" value="<?= isset($_GET['red_id']) ? $goods['ghir'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Белки:</td>
        <td><input type="text" name="prot" value="<?= isset($_GET['red_id']) ? $goods['prot'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Углеводы:</td>
        <td><input type="text" name="yglev" value="<?= isset($_GET['red_id']) ? $goods['yglev'] : ''; ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
      </tr>
    </table>
  </form>
  <table border='1'>
    <tr>
      <td>Идентификатор</td>
      <td>Наименование</td>
      <td>Цена</td>
      <td>Описание</td>
      <td>Ккал</td>
<td>Жиры</td>
<td>Белки</td>
<td>Углеводы</td>

      <td>Удаление</td>
      <td>Редактирование</td>
    </tr>
    <?php
      $sql = mysqli_query($link, 'SELECT * FROM `goods`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['id']}</td>" .
             "<td>{$result['name']}</td>" .
             "<td>{$result['price']} ₽</td>" .
             "<td>{$result['descc']}</td>" .
             "<td>{$result['kkal']}</td>" .
             "<td>{$result['ghir']}</td>" .
             "<td>{$result['prot']}</td>" .
             "<td>{$result['yglev']}</td>" .
             "<td><a href='?del_id={$result['id']}'>Удалить</a></td>" .
             "<td><a href='?red_id={$result['id']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
  </table>
  <p><a href="?add=new">Добавить новый товар</a></p>
</main>
</body>
</html>