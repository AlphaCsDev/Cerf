<?php require 'PHP/includes/Connection.php'; ?>
<!DOCTYPE html>
<html lang="ua">

<head>
	<meta charset="UTF-8">
	<title>Магазин «Техномарт»</title>
	<link href="https://fonts.googleapis.com/css?family=Cuprum:400,400i,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include 'PHP/includes/Header.php'; ?>

	<main>
		<h1 class="visually-hidden">Магазин будівельних матеріалів та інструментів для ремонту «Техномарт»</h1>
	</main>

	<?php include 'PHP/includes/Footer.php'; ?>

	<?php
	include 'PHP/includes/SignUp.php';
	include 'PHP/includes/SignIn.php';
	?>

	<script src="JS/ServiceSlider.js"></script>
	<script src="JS/ShowModal.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/Ajax.js"></script>
	<script src="js/Filtration.js"></script>
</body>

</html>