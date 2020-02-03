<div class="catalog-columns container">
    <section class="filter catalog-column-left">
        <h2>Фільтр:</h2>

        <form class="filter-form">
            <fieldset>
                <legend>Ціна:</legend>
                <label class="visually-hidden" for="filter-price-min">Мінімальна ціна</label>
                <input class="filter-slider" name="priceMin" id="filter-price-min" type="range"" min=" 0" max="31000" step="200" value="0">
                <label class="visually-hidden" for="filter-price-max">Максимальна ціна</label>
                <input class="filter-slider" name="priceMax" id="filter-price-max" type="range" min="0" max="31000" step="200" value="31000">

                <div class="output-wrapper">
                    <output class="filter-form-output" id="filter-price-min-output" name="filter-price-min"></output>
                    <output class="filter-form-output" id="filter-price-max-output" name="filter-price-max"></output>
                </div>
            </fieldset>
            <fieldset>
                <legend>Виробники:</legend>
                <ul>
                    <?php include 'PHP/includes/Manufactures.php' ?>

                </ul>
            </fieldset>
            <fieldset>
                <legend>Живлення:</legend>
                <ul>
                    <li class="filter-option">
                        <input class="visually-hidden filter-input filter-input-radio" type="radio" name="source" id="filter-battery" data-id="0">
                        <label for="filter-battery">Акамуляторні</label>
                    </li>
                    <li class="filter-option">
                        <input class="visually-hidden filter-input filter-input-radio" type="radio" name="source" id="filter-network" data-id="1">
                        <label for="filter-network">Мережеві</label>
                    </li>
                    <li class="filter-option">
                        <input class="visually-hidden filter-input filter-input-radio" type="radio" name="source" id="filter-all">
                        <label for="filter-all">Всі</label>
                    </li>
                </ul>
            </fieldset>
        </form>
    </section>

    <div class="catalog-column-right">
        <section class="sort">
            <h2>Сортування:</h2>
            <a class="sort-price">По ціні</a>
            <a class="sort-type">По типу</a>
            <a class="sort-brand">По назві</a>
        </section>

        <section class="catalog">

            <h2 class="visually-hidden">Каталог</h2>
            <ul class="catalog-items">

            </ul>
        </section>

        <ul class="pagination-list" aria-label="Сторінки">
            <?php include "Pagination.php" ?>
        </ul>
    </div>
</div>