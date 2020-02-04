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

        <?php include 'PHP/includes/CatalogColumns.php' ;?>

        <article class="description">
            <div class="container">
                <h2>Декілька слів про перфоратори</h2>
                <p>Перфоратор - універсальний будівельний інструмент. Призначений для сверління і довбання отворів в цеглі, бетоні і камні.<br>Існують електромеханічні і пневматичні перфоратори. Сучасні моделі можуть виконувати функції дриля, шуруповерта і відбійного молотка. В асортиментному ряді є вибір «трьохрежимників»: в одному пристрої будуть суміщені відбійний молоток і дриль.</p>
            </div>
        </article>

    </main>

    <?php include 'PHP/includes/Footer.php';
    include 'PHP/includes/MapAndForm.php'; ?>

    <?php
    include 'PHP/includes/SignUp.php';
    include 'PHP/includes/SignIn.php';
    ?>

    <script src="js/RangePrice.js"></script>
    <script src="js/ShowModal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/Login.js"></script>
    <script src="js/Search.js"></script>
    <script src="js/Filtration.js"></script>
    <script src="js/Buy.js"></script>

</body>

</html>