<?php
session_start();
include_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Профиль <?php echo $login; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="reg.css" rel="stylesheet">

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
             <a class="nav-link" href="registr.html"><span><img src="assets/img/ico/seo-and-web.png"></span></a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="cart.html"><span id="total-cart-count" class="badge"></span><span><img src="assets/img/ico/14_104869.png"></span></a>
          </li>
        </ul>
      </div>
    </div>

  </nav><!-- End Header/Navbar -->
	  </header>
  <body>

<div class="reg">
	<h1 class="text-reg">Регистрация</h1>

      <form action="" method="POST">
      <label >
			<span class="label-text">Логин<font color="red">*</font></span>
			<input name="login" type="text">
		</label>
   <label >
			<span class="label-text">Пароль<font color="red">*</font></span>
			<input type="password" name="password">
		</label>
     <label >
			<span class="label-text">Подтверждение пароля<font color="red">*</font></span>
			<input type="password" name="password2">
		</label>
		 <label>
			<span class="label-text">E-mail<font color="red">*</font></span>
			<input type="text" name="email">
		</label>

     <label>
			<span class="label-text">Имя</span>
			<input type="text" name="name">
		</label>
      <label >
			<span class="label-text">Фамииля</span>
			<input type="text" name="lastname">
		</label>

		  <div class="text-center">
			<input type="submit" value="Зарегистроваться" name="submit" ><a href="indexx.php"> Вход</a>
		</div>
		  <br/>
		  <font face="Verdana" size="4">Поля со значком <font color="red">*</font> должны быть обязательно заполнены!</font>

<?php

    if (isset($_POST['submit'])){
        if(empty($_POST['login']))  {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="Введите логин!"> Введите логин! </font>';
        }
        elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="В поле "Логин" введены недопустимые символы!"> В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
        }
        elseif(empty($_POST['password'])) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="Введите пароль !"> Введите пароль!</font>';
        }
        elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="Пароль слишком короткий!"> Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
        }
        elseif(empty($_POST['password2'])) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt=""> Введите подтверждение пароля!</font>';
        }
        elseif($_POST['password'] != $_POST['password2']) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="Введенные пароли не совпадают!"> Введенные пароли не совпадают!</font>';
        }
        elseif(empty($_POST['email'])) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="Введите E-mail!">Введите E-mail! </font>';
        }
        elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
            echo '<br><font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="E-mail имеет недопустимий формат!"> E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
        }

        else{
            $login = $_POST['login'];
            $password = $_POST['password'];
            $mdPassword = md5($password);
            $password2 = $_POST['password2'];
            $email = $_POST['email'];
            $rdate = date("d-m-Y в H:i");
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];


            $query = ("SELECT id FROM users WHERE login='$login'");
            $sql = mysqli_query($conn,$query) or die(mysqli_error($conn));

            if (mysqli_num_rows($sql) > 0) {
                echo '<font color="red"><img border="0" src="assets/img/ico/close.png" align="middle" alt="Пользователь с таким логином зарегистрированый!"> Пользователь с таким логином зарегистрирован!</font>';
            }
            else {
                $query2 = ("SELECT id FROM users WHERE email='$email'");
                $sql =mysqli_query ($conn,$query2) or die(mysqli_error($conn));
                if (mysqli_num_rows($sql) > 0){
                    echo '<font color="red"><img border="0" src="assets/img/ico/close.png"  alt="Пользователь с таким e-mail зарегистрированый!"> Пользователь с таким e-mail уже зарегистрирован!</font>';
                }
                else{
                    $query = "INSERT INTO users (login, password, email, reg_date, name_user, lastname  )
                              VALUES ('$login', '$mdPassword', '$email', '$rdate', '$name', '$lastname')";
                    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                    echo '<font color="green"><img border="0" src="ok.gif" align="middle" alt="Вы успешно зарегистрировались!"> Вы успешно зарегистрировались!</font><br><a href="profille.php">На главную</a>';


                }
            }
        }
    }
?>
		  </div>
      </form>



	  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalog.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/compare.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>
 </body>
 </html>



