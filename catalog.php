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

    <main class="inner-page">

        <ul class="breadcrumbs container">
            <li>
                <a href="index.html" aria-label="Головна">
                    <img src="img/icon-home.svg" alt="Іконка будинку" width="15" height="12">
                    <span class="visually-hidden">Головна</span>
                </a>
            </li>
            <li>
                <a href="#">Каталог</a>
            </li>
            <li>
                <a href="#">Інструмент</a>
            </li>
            <li class="breadcrumbs-current">
                Перфоратори
            </li>
        </ul>

        <h1 class="page-title">Перфоратори</h1>

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
                                <input class="visually-hidden filter-input filter-input-radio" name="sourceBattery" type="radio" value="battery" id="filter-battery">
                                <label for="filter-battery">Акамуляторні</label>
                            </li>
                            <li class="filter-option">
                                <input class="visually-hidden filter-input filter-input-radio" name="sourceNetwork" type="radio" value="network" id="filter-network">
                                <label for="filter-network">Мережеві</label>
                            </li>
                        </ul>
                    </fieldset>
                    <button class="button-inner" id="FilterBut" type="button">Показати</button>
                </form>
            </section>

            <div class="catalog-column-right">
                <section class="sort">
                    <h2>Сортування:</h2>
                    <a class="sort-price" href="#">По ціні</a>
                    <a class="sort-type" href="#">По типу</a>
                    <a class="sort-function" href="#">По функціоналу</a>
                    <a class="sort-to-high"  aria-label="По зростанню">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11px" height="10px">
                            <polygon fill="#c5c5c5" points="5.5,0 0,10 11,10 " /></svg>
                    </a>
                    <a class="sort-to-down"  aria-label="По спаданню">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11px" height="10px">
                            <polyline fill="#c5c5c5" points="5.5,10 0,0 11,0 " /></svg>
                    </a>
                </section>

                <section class="catalog">
                    <h2 class="visually-hidden">Каталог</h2>

                    <ul class="catalog-items">
                        <!-- First row -->
                        <?php   /*include 'PHP/includes/Commodity.php'*/
                        include 'PHP/filter.php' ?>
                    </ul>
                </section>

                <ul class="pagination-list" aria-label="Сторінки">
                    <li class="pagination-item">
                        <a class="button-inner">1</a>
                    </li>
                    <li class="pagination-item">
                        <a class="button-inner">2</a>
                    </li>
                    <li class="pagination-item">
                        <a class="button-inner">3</a>
                    </li>
                    <li class="pagination-item">
                        <a class="button-inner button-next">Наступна</a>
                    </li>
                </ul>
            </div>
        </div>

        <article class="description">
            <div class="container">
                <h2>Декілька слів про перфоратори</h2>
                <p>Перфоратор - універсальний будівельний інструмент. Призначений для сверління і довбання отворів в цеглі, бетоні і камні.<br>Існують електромеханічні і пневматичні перфоратори. Сучасні моделі можуть виконувати функції дриля, шуруповерта і відбійного молотка. В асортиментному ряді є вибір «трьохрежимників»: в одному пристрої будуть суміщені відбійний молоток і дриль.</p>
            </div>
        </article>
    </main>

    <?php include 'PHP/includes/Footer.php'; ?>

    <?php
    include 'PHP/includes/SignUp.php';
    include 'PHP/includes/SignIn.php';
    ?>

    <script src="js/RangePrice.js"></script>
    <script src="js/ShowModal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/Ajax.js"></script>
    <script src="js/Filtration.js"></script>
</body>

</html>