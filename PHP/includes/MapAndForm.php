<section class="modal modal-success">
	<h2 class="visually-hidden">Успішно</h2>
	<img src="img/success.png" alt="Успіх" width="300" height="300">
</section>

<section class="modal modal-confirm-cart">
	<h2 class="visually-hidden">Форма підтвердження видалення товару з корзини</h2>
	<p>Ви дійсно хочете видалити цей товар з корзини?</p>
	<div class="сonfirm-form">
		<button class="confirm-button DeleteFrom" type="button">Так</button>
		<button class="confirm-button CloseConfirm" type="button">Відмінити</button>
	</div>
	<button class="modal-close" type="button">Закрити</button>
</section>

<section class="modal modal-confirm-order">
	<h2 class="visually-hidden">Підтвердження замовлення</h2>
	<form class="confirm-order-form" id="confirm-order" action="https://echo.htmlacademy.ru/" method="post">
		<p>
			<label for="confirm-order-address">Адреса доставки:</label>
			<input name="address" type="text" id="confirm-order-address" placeholder="Адреса доставки">
			<ul class="DropAddress">
			</ul>
		</p>
		<p>
			<label for="confirm-order-delivery">Спосіб доставки:</label>
			<input readonly="readonly" name="delivery" type="text" id="confirm-order-delivery" placeholder="Спосіб доставки" value="">
			<ul class="DropDelivery">
				<li class="DeliveryType" data-id="Нова Пошта">Нова Пошта</li>
				<li class="DeliveryType" data-id="Міст Експрес">Міст Експрес</li>
				<li class="DeliveryType" data-id="Укр Пошта">Укр Пошта</li>
			</ul>
		</p>
	</form>
	<p class="confirm-order-text">До оплати:</p>
	<p class="confirm-order-price"></p>

	<div class="сonfirm-form">
		<button class="confirm-button ConfirmOrder" type="submit" form="confirm-cart">Замовити</button>
		<button class="confirm-button CancelOrder" type="submit" form="confirm-cart">Відмінити</button>
	</div>
	<button class="modal-close" type="button">Закрити</button>
</section>

<section class="modal modal-form">
	<h2 class="visually-hidden">Форма відправлення</h2>
	<form class="request-form" id="request">
		<p>
			<label for="request-name">Ваше ім'я:</label>
			<input name="name" type="text" id="request-name" placeholder="Представтесь, будь ласка">
		</p>
		<p>
			<label for="request-email">Ваш e-mail:</label>
			<input name="email" type="email" id="request-email" placeholder="Для отримання відповіді">
		</p>
		<p>
			<label for="request-comment">Текст листа:</label>
			<textarea name="comment" id="request-comment" placeholder="У вільній формі"></textarea>
		</p>
	</form>
	<div class="request-form-bottom">
		<p class="Error"></p>
		<button class="button SendModal" type="button" form="request">Надіслати</button>
	</div>
	<button class="modal-close" type="button">Закрити</button>
</section>

<section class="modal modal-map">
	<h2 class="visually-hidden">Як до нас добратися</h2>
	<a href="#">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.748967096635!2d24.00692501567493!3d49.82838317939438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add7df5a9921f%3A0xc59052d9e18b2d4c!2sIppt%20Nu%20%22L%CA%B9vivs%CA%B9ka%20Politekhnika%22%2C%20Ivana%20Horbachevs&#39;koho%20St%2C%2018%2C%20L&#39;viv%2C%20L&#39;vivs&#39;ka%20oblast%2C%2079000!5e0!3m2!1sen!2sua!4v1571077467173!5m2!1sen!2sua" width="940" height="446" id="map" frameborder="0" style="border:solid 1px;border-color: grey;" allowfullscreen=""></iframe>
	</a>
	<button class="modal-close" type="button">Закрити</button>
</section>