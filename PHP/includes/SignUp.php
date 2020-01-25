<section class="modal modal-sign-up">
    <h2 class="visually-hidden">Форма реєстрації</h2>
    <form class="sign-up-form" id="sign-up">
        <p>
            <label for="sign-up-name">Ім'я:</label>
            <input name="name" type="text" id="sign-up-name" placeholder="Ваше ім'я" minlength="3">
        </p>
        <p>
            <label for="sign-up-surname">Прізвище:</label>
            <input name="surname" type="text" id="sign-up-surname" placeholder="Ваше прізвище" minlength="3">
        </p>
        <p>
            <label for="sign-up-nickname">Нікнейм:</label>
            <input name="nickname" type="text" id="sign-up-nickname" placeholder="Ваш нікнейм" minlength="3">
        </p>
        <p>
            <label for="sign-up-password">Пароль:</label>
            <input name="password" type="password" id="sign-up-password" placeholder="Ваш пароль" minlength="5">
        </p>
        <p>
            <label for="sign-up-email">E-mail:</label>
            <input name="email" type="email" id="sign-up-email" placeholder="Ваш email" minlength="5">
        </p>
    </form>
    <div class="sign-up-form-bottom">
        <p class="Error"></p>
        <button class="button" id="butSignUp" type="button" form="sign-up">Зареєструватись</button>
    </div>
    <button class="modal-close" type="button">Закрити</button>
</section>