<?php require 'PHP/includes/Connection.php'; ?>
<!DOCTYPE html>
<html lang="ua">

<head>
	<meta charset="UTF-8">
	<title>Магазин «<?php echo $config['titleUkrainian'] ?>»</title>
	<link href="https://fonts.googleapis.com/css?family=Cuprum:400,400i,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include 'PHP/includes/Header.php'; ?>

	<main class="order-page">
		<h1 class="page-title">Мої замовлення</h1>

		<section class="orders container">
			<ul>
				<li class="order order-top">
					<div class="date">Дата</div>
					<div class="numb">Номер</div>
					<div class="cost">Загальна сума</div>
					<div class="address">Адреса доставки</div>
				</li>
				<?php include 'PHP/includes/Cart.php' ?>
			</ul>
		</section>

	</main>

	<?php include 'PHP/includes/Footer.php';
	include 'PHP/includes/MapAndForm.php'; ?>

	<?php
	include 'PHP/includes/SignUp.php';
	include 'PHP/includes/SignIn.php';
	?>

	<script src="JS/ServiceSlider.js"></script>
	<script src="JS/ShowModal.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/Login.js"></script>
	<script src="js/Search.js"></script>
	<script src="js/Filtration.js"></script>
	<script src="js/Buy.js"></script>
</body>

</html>