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

    <main class="bookmark-page">
        <h1 class="page-title">Закладки</h1>

        <div class="bookmark-catalog container">
            <section class="catalog">
                <h2 class="visually-hidden">Каталог</h2>

                <ul class="catalog-items">
                    <!-- First row -->
                    <li class="catalog-item" tabindex="0">
                        <div class="actions">
                            <a href="#" class="button buy">Купити</a>
                        </div>
                        <div class="image"><img src="img/bosch_bfg-3000.jpg" alt="Перфоратор BOSCH BFG 3000" width="218" height="110"></div>
                        <div class="title">Перфоратор BOSCH BFG 3000</div>
                        <div class="discount">22500 ГPН.</div>
                        <div class="price">15500 ГРН.</div>
                    </li>
                    <li class="catalog-item" tabindex="0">
                        <div class="actions">
                            <a href="#" class="button buy">Купити</a>
                        </div>
                        <div class="image"><img src="img/bosch_bfg-6000.jpg" alt="Перфоратор BOSCH BFG 6000" width="218" height="110"></div>
                        <div class="title">Перфоратор BOSCH BFG 6000</div>
                        <div class="discount">30500 ГРН.</div>
                        <div class="price">25500 ГРН.</div>
                    </li>
                    <li class="catalog-item" tabindex="0">
                        <div class="flag flag-new">Новинка</div>
                        <div class="actions">
                            <a href="#" class="button buy">Купити</a>
                        </div>
                        <div class="image"><img src="img/bosch_bfg-3000.jpg" alt="Перфоратор BOSCH BFG 9000" width="218" height="110"></div>
                        <div class="title">Перфоратор BOSCH BFG 2000</div>
                        <div class="discount"></div>
                        <div class="price">12500 ГРН.</div>
                    </li>
                    <li class="catalog-item" tabindex="0">
                        <div class="flag flag-new">Новинка</div>
                        <div class="actions">
                            <a href="#" class="button buy">Купити</a>
                        </div>
                        <div class="image"><img src="img/bosch_bfg-3000.jpg" alt="Перфоратор BOSCH BFG 9000" width="218" height="110"></div>
                        <div class="title">Перфоратор BOSCH BFG 2000</div>
                        <div class="discount"></div>
                        <div class="price">12500 ГРН.</div>
                    </li>
                    <li class="catalog-item" tabindex="0">
                        <div class="flag flag-new">Новинка</div>
                        <div class="actions">
                            <a href="#" class="button buy">Купити</a>
                        </div>
                        <div class="image"><img src="img/bosch_bfg-3000.jpg" alt="Перфоратор BOSCH BFG 9000" width="218" height="110"></div>
                        <div class="title">Перфоратор BOSCH BFG 2000</div>
                        <div class="discount"></div>
                        <div class="price">12500 ГРН.</div>
                    </li>
                    <li class="catalog-item" tabindex="0">
                        <div class="flag flag-new">Новинка</div>
                        <div class="actions">
                            <a href="#" class="button buy">Купити</a>
                        </div>
                        <div class="image"><img src="img/bosch_bfg-3000.jpg" alt="Перфоратор BOSCH BFG 9000" width="218" height="110"></div>
                        <div class="title">Перфоратор BOSCH BFG 2000</div>
                        <div class="discount"></div>
                        <div class="price">12500 ГРН.</div>
                    </li>
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

    </main>

    <?php include 'PHP/includes/Footer.php'; ?>

    <?php
    include 'PHP/includes/SignUp.php';
    include 'PHP/includes/SignIn.php';
    ?>

    <script src="js/ServiceSlider.js"></script>
    <script src="js/ShowModal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/Login.js"></script>
    <script src="js/Search.js"></script>
    <script src="js/Filtration.js"></script>
</body>

</html>