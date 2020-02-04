<?php include 'PHP/includes/Connection.php';?>
<header class="page-header">
    <div class="header-user">
        <div class="container">
            <p class="logo"><a class="index-logo" href="index.php" tabindex="0"><?php echo $config['titleUkrainian'] ?></a></p>
            <form class="search-form">
                <label class="visually-hidden" for="search-field">Пошук по сайту</label>
                <button class="visually-hidden" id="SearchButton" type="button" tabindex="0">Шукати</button>
                <input type="search" name="search" id="search" placeholder="Пошук:">
            </form>
        </div>
    </div>
    <div class="header-middle container">
        <strong>
            Інтернет-магазин<br>
            будівельних матеріалів<br>
            та інструментів для ремонту
        </strong>
        <div class="header-contacts">
            <p class="header-phone"><?php echo $config['PhoneNumber'] ?></p>
            <p class="header-address ">м. Львів, вул. І. Горбачевського 18</p>
        </div>

        <? if (!isset($_SESSION['user'])) : ?>
            <ul class="auth-navigation">
                <li>
                    <a class="sign-in" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17">
                            <g fill="#c5c5c5">
                                <path d="M21 8.5L12.125 0v6h-6v5h6v6z" />
                                <path d="M3.106 13.952V3.048c.018-.376.171-1.057 1.01-1.057h5.027V0H4.116C1.938 0 1.112 1.81 1.087 3.027v10.946C1.112 15.189 1.938 17 4.116 17h5.027v-1.99H4.116c-.839 0-.992-.683-1.01-1.058z" />
                            </g>
                        </svg>
                        Вхід
                    </a>
                </li>
                <li><a class="sign-up" href="#">Реєстрація</a></li>
            </ul>
    </div>
<?php
        else : ?>
    <div class="account-wrapper">
        <ul class="account-navigation">
            <li>
                <a class="account-name" href="account.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                        <path fill="#c5c5c5" d="M17.881 14.166c-2.144-.735-4.256-1.666-5.207-2.39-.657-.501-.77-1.618-.517-2.415 1.118-.903 1.864-2.477 1.864-4.278C14.021 2.276 12.221 0 10 0S5.979 2.276 5.979 5.083c0 1.801.746 3.374 1.863 4.277.253.798.141 1.915-.517 2.416-.95.724-3.063 1.654-5.207 2.39S0 18 0 18h20s.025-3.099-2.119-3.834z" />
                    </svg>
                    <span><?php echo $_SESSION['user']['userLogin'] ?></span>
                </a>
            </li>
            <li>
                <a class="account-logout" href="PHP/exit.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17">
                        <g fill="#c5c5c5">
                            <path d="M21 8.5L12.125 0v6h-6v5h6v6z" />
                            <path d="M3.106 13.952V3.048c.018-.376.171-1.057 1.01-1.057h5.027V0H4.116C1.938 0 1.112 1.81 1.087 3.027v10.946C1.112 15.189 1.938 17 4.116 17h5.027v-1.99H4.116c-.839 0-.992-.683-1.01-1.058z" />
                        </g>
                    </svg>
                    <span class="visually-hidden">Вийти</span>
                </a>
            </li>
        </ul>
    </div>

<?php endif; ?>
</div>
<nav class="main-navigation container">
    <ul class="site-navigation">
        <li>
            <a href="index.php">Головна</a>
        </li>
        <li>
            <a href="catalog.php">Каталог</a>
        </li>
        <li>
            <a href="contacts.php">Контакти</a>
        </li>
    </ul>
</nav>
</header>