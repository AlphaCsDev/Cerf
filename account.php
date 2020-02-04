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
	<?php $user = $_SESSION['user'];
	$id = $user['IDUser'];
	$q = mysqli_query($connection, "SELECT * FROM `users` where `IDUser`= '$id'");
	$newUser = mysqli_fetch_assoc($q); ?>
	<main class="order-page">
		<h1 class="page-title toggleAccount">Персональний аккаунт</h1>
		<section class="orders  dropAcc container">
			<p class="order">
				<label for="TelNumber" class="date">Ім'я</label>
				<input name="number" readonly="readonly" type="text" id="UserName" value="<?php echo $newUser['userName']; ?>">
			</p>
			<p class="order">
				<label for="TelNumber" class="date">Прізвище</label>
				<input name="number" readonly="readonly" type="text" id="UserSurname" value="<?php echo $newUser['userSurname']; ?>">
			</p>
			<p class="order">
				<label for="AddressDel" class="date">Адреса доставки</label>
				<input name="address" type="text" id="AddressDel" value="<? if ($newUser['userAddress']) {
																				echo $newUser['userAddress'];
																			} ?>">
				<?php if (!$newUser['userAddress']) { ?>
					<button class="button SendAddress" style=" margin-left:40px;background-color:#ee3643">Зберегти</button><? } ?>
			</p>
			<p class="order">
				<label for="TelNumber" class="date">Номер телефону</label>
				<input name="number" type="text" id="TelNumber" value="<? if ($newUser['userNumber']) {
																			echo $newUser['userNumber'];
																		} ?>">
				<?php if (!$newUser['userNumber']) { ?>
					<button class="button SendNumber" style=" margin-left:40px;background-color:#ee3643">Зберегти</button><? } ?>
			</p>

		</section>
		<h1 class="page-title toggleOrder">Мої замовлення</h1>

		<section class="orders dropOrder container">
			<ul>
				<li class="order order-top">
					<div class="date">Дата</div>
					<div class="cost">Номер</div>
					<div class="numb">Назва</div>
					<div class="image">Зображення</div>
					<div class="cost">Загальна сума</div>

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