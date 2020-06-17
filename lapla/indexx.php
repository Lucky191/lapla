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

<section class="intro-single">
  <div class="reg">
	<h1 class="text-reg">Вход</h1>
	<form action="login.php" method="post">
		<label>
			<span class="label-text">Логин</span>
			<input type="text" name="login">
		</label>
		<label class="password">
			<span class="label-text">Пароль</span>

			<input type="password" name="password">
		</label>
		<div class="text-reg">
			<button class="submit" name="register">Войти</button><a href="registration.php"> Зарегестрироваться</a>
		</div>
    <font face="Verdana" size="4"> </font>


</div>

	</form>
	</section>


	<section class="section-property">
		</section>
<main id="main">
	</main>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
	 <!-- Vendor JS Files -->
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