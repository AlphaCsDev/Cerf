<?php require 'PHP/includes/Connection.php'; ?>
<!DOCTYPE html>
<html lang="ua">

<head>
	<meta charset="UTF-8">
	<title>Магазин «<?php echo $config['titleUkrainian']?>»</title>
	<link href="https://fonts.googleapis.com/css?family=Cuprum:400,400i,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php include 'PHP/includes/Header.php'; ?>
	<main>
		<h1 class="visually-hidden">Магазин будівельних матеріалів та інструментів для ремонту «Техномарт»</h1>

		<section class="popular container">
			<div class="popular-header">
				<h2>Популярні товари:</h2>
				<a class="button button-more" href="catalog.php">Всі популярні товари</a>
			</div>
			<ul class="catalog-items">
				<?php include 'PHP/filter.php';
				Show("SELECT * FROM commodity LIMIT 4"); ?>
			</ul>
		</section>

		<section class="popular popular-brands container">
			<div class="popular-header">
				<h2>Популярні виробники:</h2>
				<a class="button button-more">Всі виробники</a>
			</div>
			<ul class="brands-list">
				<li>
					<a class="brands-item" href="https://www.bosch.ua/">
						<img src="img/brand-bosch.png" alt="Логотип бренда BOSCH" width="126" height="37">
					</a>
				</li>
				<li>
					<a class="brands-item" href="http://makita.ua/">
						<img src="img/brand-makita.png" alt="Логотип бренда Makita" width="123" height="40">
					</a>
				</li>
				<li>
					<a class="brands-item" href="http://www.dewalt.ua/">
						<img src="img/brand-dewalt.png" alt="Логотип бренда DeWALT" width="146" height="44">
					</a>
				</li>
				<li>
					<a class="brands-item" href="http://www.interskol.ua/">
						<img src="img/brand-interskol.png" alt="Логотип бренда Інтерскол" width="184" height="32">
					</a>
				</li>
				<li>
					<a class="brands-item" href="https://www.hitachicm.ru/">
						<img src="img/brand-hitachi.png" alt="Логотип бренда HITACHI" width="169" height="31">
					</a>
				</li>
				<li>
					<a class="brands-item" href="https://www.lg.com/ua">
						<img src="img/brand-lg.png" alt="Логотип бренда LG" width="121" height="73">
					</a>
				</li>
				<li>
					<a class="brands-item" href="https://www.aeg.ua/">
						<img src="img/brand-aeg.png" alt="Логотип бренда AEG" width="151" height="96">
					</a>
				</li>
				<li>
					<a class="brands-item" href="https://www.metabo.com/ua/">
						<img src="img/brand-metabo.png" alt="Логотип бренда Metabo" width="204" height="69">
					</a>
				</li>
			</ul>
		</section>

		<section class="service">
			<div class="container">
				<h2>Сервіси</h2>
				<p>
					Хороший інтернет-магазин відрізняється від поганого не тільки цінами!<br>
					Ми стараємося з усіх сил, щоб зробити ваші покупки приємними.
				</p>
				<div class="service-wrapper">
					<ul class="service-slider">
						<li>
							<a id="Delivery" class="service-switcher">Доставка</a>
						</li>
						<li>
							<a id="Guarantee" class="service-switcher">Гарантія</a>
						</li>
						<li>
							<a id="Credit" class="service-switcher">Кредит</a>
						</li>
					</ul>
					<ul class="service-content">
						<li class="service-card-hidden">
							<section class="service-card" id="service-delivery">
								<h3>Доставка</h3>
								<p>Ми із задоволенням доставимо ваш товар прямо до<br>вашого під'їзду цілком
									безкоштовно!<br>Ми непогано заробимо,<br>піднімаючи його на ваш поверх!
								</p>
							</section>
						</li>
						<li class="service-card-hidden">
							<section class="service-card" id="service-guarantee">
								<h3>Гарантія</h3>
								<p>Якщо куплений у нас товар зламається чи заіскриться,<br>
									а також у випадку пожара, спровокованого його загоранням,<br>
									ви завжди можете бути впевнені в нашій гарантії. Ми обміняємо<br>
									згорівший товар на новий.<br>Будинок відновите вже якось самі.
								</p>
							</section>
						</li>
						<li class="service-card-hidden">
							<section class="service-card" id="service-credit">
								<h3>Кредит</h3>
								<p>Залізти в боргову яму стало простіше!<br>Кредитні консультанти прийдуть вам на
									допомогу.
								</p>
								<button class="button button-send" type="button" id="OpenCredit">Відправити заявку</button>
							</section>
						</li>
					</ul>
				</div>

			</div>
		</section>

		<div class="index-columns container">
			<section class="company">
				<h2>Компанія «Техномарт»</h2>
				<p>Справжній чоловічий шопінг починається тут! Величезний вибір товарів для ремонту і будівництва не
					залишить байдужими любителів зекономити на гастарбайтерах.</p>
				<p>Ми можемо доставити ваш товар у найвіддаленіші точки України!<br>Техномарт працює з багатьма
					транспортними компаніями:
				</p>
				<ul class="company-list">
					<li>Meest Express</li>
					<li>SAT</li>
					<li>Тропак</li>
				</ul>
				<a class="button button-more" href="contacts.php">Детальніше про компанію</a>
			</section>

			<section class="contacts">
				<h2>Контакти</h2>
				<p>Вы можете забрати товар самі,<br>заїхавши в наш офис:</p>
				<img src="img/map.png" id="map" alt="" width="300" height="158">
				<button class="button button-more" id="OpenModal" type="button">Заблукали? Напишіть нам!</button>
			</section>
		</div>

	</main>



	<?php
	include 'PHP/includes/Footer.php';
	include 'PHP/includes/MapAndForm.php';
	?>

	<?php
	include 'PHP/includes/SignUp.php';
	include 'PHP/includes/SignIn.php';
	?>

	<script src="js/ServiceSlider.js"></script>
	<script src="js/ShowModal.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/Login.js"></script>
	<script src="js/Search.js"></script>
	<script src="js/Buy.js"></script>
	<script src="js/Feedback.js"></script>
</body>

</html>