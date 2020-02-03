 <section class="modal modal-sign-in">
    <h2 class="visually-hidden">Форма входу</h2>
    <form class="sign-in-form" id="sign-in">
        <p>
            <label for="sign-in-nickname">Логін:</label>
            <input name="nickname" type="text" id="sign-in-nickname" placeholder="Ваш нікнейм або пошта" required>
        </p>
        <p>
            <label for="sign-in-password">Пароль:</label>
            <input name="password" type="password" id="sign-in-password" placeholder="Ваш пароль" required>
        </p>

    </form>
    <div class="sign-in-form-bottom">
        <p class="Error"></p>
        <button class="button" id ="butSignIn" type="button" form="sign-in">Увійти</button>
    </div>
    <button class="modal-close" type="button">Закрити</button>
</section>