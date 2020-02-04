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

	<main>

		<h1 class="visually-hidden">Контакти</h1>
		<section class="find container">
			<p class="find-text">Знайдете нас тут:</p>
			<ul class="find-list">
				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Львів,вул. І. Горбачевського 18;</span>
						<span class="city-number">За номером: <a href="tel:+380976293">+38 (097) 62-93;</a></span>
						<i data-id="Lviv" class="city-arrow"></i>
						<section data-id="Lviv" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.748967096635!2d24.00692501567493!3d49.82838317939438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add7df5a9921f%3A0xc59052d9e18b2d4c!2sIppt%20Nu%20%22L%CA%B9vivs%CA%B9ka%20Politekhnika%22%2C%20Ivana%20Horbachevs&#39;koho%20St%2C%2018%2C%20L&#39;viv%2C%20L&#39;vivs&#39;ka%20oblast%2C%2079000!5e0!3m2!1sen!2sua!4v1571077467173!5m2!1sen!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>
							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>
				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Київ, вул. Бульвар Дружби народів 13;</span>
						<span class="city-number">За номером: <a href="tel:+380976442">+38 (097) 64-42;</a></span>
						<i data-id="Kyiv" class="city-arrow"></i>
						<section data-id="Kyiv" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.434230606093!2d30.53391955147809!3d50.41438077936961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4012166a2b%3A0xd7da5bc853daf4fc!2z0LHRg9C7LiDQlNGA0YPQttCx0Ysg0J3QsNGA0L7QtNC-0LIsIDEzLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1580575099493!5m2!1sru!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>

							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>

				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Одеса, вул. Балківська 193;</span>
						<span class="city-number">За номером: <a href="tel:+380993463">+38 (099) 34-63;</a></span>
						<i data-id="Odessa" class="city-arrow"></i>
						<section data-id="Odessa" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2748.2633005951275!2d30.704998951352604!3d46.46329237902306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63224c81b71b7%3A0xe4202f9337fc1c26!2z0YPQuy4g0JHQsNC70LrQvtCy0YHQutCw0Y8sIDE5Mywg0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1580578851846!5m2!1sru!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>

							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>

				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Харків, вул. Пушкінська 79/1;</span>
						<span class="city-number">За номером: <a href="tel:+380508832">+38 (050) 88-32;</a></span>
						<i class="city-arrow"></i>
						<section data-id="Kharkiv" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2848781846074!2d36.24737075146476!3d50.00601547931553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0db4d33f445%3A0x52f9152be5ad65ca!2z0YPQuy4g0J_Rg9GI0LrQuNC90YHQutCw0Y8sIDc5LzEsINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1580579016148!5m2!1sru!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>

							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>

				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Запоріжжя, вул. Ігоря Сікорського 73;</span>
						<span class="city-number">За номером: <a href="tel:+380673678">+38 (067) 36-78;</a></span>
						<i data-id="Zaporizhia" class="city-arrow"></i>
						<section data-id="Zaporizhia" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2677.5864406699006!2d35.18414955139583!3d47.84760467909935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc67623c92fdf5%3A0xf1d2b4042d7efe3c!2z0YPQuy4g0JjQs9C-0YDRjyDQodC40LrQvtGA0YHQutC-0LPQviwgNzMsINCX0LDQv9C-0YDQvtC20YzQtSwg0JfQsNC_0L7RgNC-0LbRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjkwMDA!5e0!3m2!1sru!2sua!4v1580579060890!5m2!1sru!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>

							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>

				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Луцьк, вул. Холмська 5;</span>
						<span class="city-number">За номером: <a href="tel:+380999231">+38 (099) 92-31;</a></span>
						<i data-id="Lutsk" class="city-arrow"></i>
						<section data-id="Lutsk" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.5457650090075!2d25.339831551488857!3d50.74691317941672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599fa2735011b%3A0x41ef385ec39106d8!2z0YPQuy4g0KXQvtC70LzRgdC60LDRjywgNSwg0JvRg9GG0LosINCS0L7Qu9GL0L3RgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNDMwMDA!5e0!3m2!1sru!2sua!4v1580579100597!5m2!1sru!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>
							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>

				<li class="find-city">
					<p class="city-text">
						<span class="city-address">м.Миколаїв, вул. Чкалова 118;</span>
						<span class="city-number">За номером: <a href="tel:+380970055">+38 (097) 00-55;</a></span>
						<i data-id="Mykolaiv" class="city-arrow"></i>
						<section data-id="Mykolaiv" class="modal modal-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.992199317906!2d32.01751645136807!3d46.961843279044956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5cbcf824e569b%3A0x9e0c143f94e20df2!2z0YPQuy4g0KfQutCw0LvQvtCy0LAsIDExOCwg0J3QuNC60L7Qu9Cw0LXQsiwg0J3QuNC60L7Qu9Cw0LXQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA1NDAwMA!5e0!3m2!1sru!2sua!4v1580579181020!5m2!1sru!2sua" width="940" height="440" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>
							<button class="modal-close" type="button">Закрити</button>
						</section>
					</p>
				</li>
			</ul>


			</div>
			<h1 class="visually-hidden">Магазин будівельних матеріалів та інструментів для ремонту «Техномарт»</h1>
	</main>

	<?php include 'PHP/includes/Footer.php'; ?>
	<?php
	include 'PHP/includes/SignUp.php';
	include 'PHP/includes/SignIn.php';
	?>
	<script src="JS/ShowModal.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/Login.js"></script>
	<script src="js/Search.js"></script>
</body>

</html>