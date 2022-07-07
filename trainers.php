<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link href="https://fonts.google.com/specimen/Open+Sans"
          rel="stylesheet">
    <Title>SportClub</Title>
    <style>
        html, body {
            padding: 0;
            margin: 0;
        }

        /*Контейнер*/
        .container {
            width: 100%;
            max-width: 1220px;
            margin: 0 auto;
            background: none;
        }

        .content .row div{
            background: #0dcaf0;
            border: 1px solid;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__upline">
            <div class="header__section section1">
                <img class="icon" src="./images/marker.png" alt="" style="height: 19px; width: auto">
                <div class="header__place">Київ</div>
            </div>

            <div class="header__section section2">
                <img class="icon" src=./images/phone-call.png alt="" style="width: 24px; height: 24px">
                <div class="header__phone">050 555 55 55</div>
            </div>
        </div>

        <div class="header__inner">
            <div class="header__logo">
                <img class="logo__icon" src="./images/gym.png" alt="" style="width: 50px; height: auto; transform: rotate(44.37deg)">
                Sport<span class="logo_col">Club</span>
            </div>

            <nav class="nav">
                <a class="nav__link" href="index.php">Головна</a>
                <a class="nav__link" href="abonemets.php">Абонементи</a>
                <a class="nav__link active" href="trainers.php">Тренери</a>
                <a class="nav__link" href="about_us.php">Про нас</a>
                <a class="nav__link" href="contacts.php">Контакти</a>
            </nav>

            <div class="time">
                Пн - Пт   6:00 - 22:00<br>Сб - Нд   7:00 - 21:00
            </div>

        </div>
    </div>
</header>

<div class="intro__trainers intro">
    <div class="container">
        <div class="abonement__inner">
            <h1 class="intro__title">Наші тренери</h1>
            <h2 class="intro__subtitle">Ваш особистий тренер - запорука успіху. Усі наші тренери -<br> майстри
                своєї справи, що допоможуть вам у досягненні<br> поставленої мети.  </h2>
        </div>
    </div>
</div>

<div class="button__block">
    <div class="container">
        <a class="but but1" href="about_us.php">Про нас</a>
        <a class="but but2" href="contacts.php">Контакти</a>
        <a class="but but3" href="abonemets.php">Абонементи</a>
    </div>
</div>

<div class="professionals">
    <div class="container">
        <div class="professionals__inner">
            <div class="trainers__title">Команда професіоналів</div>
            <div class="professionals__tiles">
                <div class="professionals__item">
                    <img src="./images/kate.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Катерина Сомська</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/victor.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Віктор Безух</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/alex.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Олексій Захаров</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/july.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Юлія Савчук</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/nataly.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Наталія Боженко</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/maria.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Марія Старшко</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/james.png" alt="" style="width: 360px; height: auto">
                    <div class="names">Джеймс Сандерленд</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/rocky.jpg" alt="" style="width: 360px; height: auto">
                    <div class="names">Рокі Палачев</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/Screenshot_1.png" alt="" style="width: 360px; height: auto">
                    <div class="names">Клара Сабурова</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/Screenshot_3.png" alt="" style="width: 360px; height: auto">
                    <div class="names">Данило Данковський</div>
                </div>
                <div class="professionals__item">
                    <img src="./images/Screenshot_2.png" alt="" style="width: 360px; height: auto">
                    <div class="names">Артем Бурах</div>
                </div>
                <div class="professionals__item set">
                    <div class="other__title" style="color:white">Потрібна допомога у виборі тренера?</div>
                    <div class="other__text">Залиште заявку, і ми зателефонуємо вам,<br> щоб допомогти з вибором.</div>
                    <div class="questions__form">
                        <label for="name"></label><input type="text" id="name" placeholder="Ім'я">
                        <label for="phone"></label><input type="text" id="phone" placeholder="Номер телефону">
                    </div>
                    <div class="button questions__button">Надіслати заявку</div>
                </div>
                </div>
            </div>

        </div>
    </div>


<footer class="footer">
    <div class="container">
        <div class="footer__items">
            <div class="footer__logos">
                <div class="header__logo">
                    <img class="logo__icon" src="./images/gym.png" alt="" style="width: 50px; height: auto; transform: rotate(44.37deg)">
                    Sport<span class="logo_col">Club</span>
                </div>
                <div class="footer__text">© Copyright 2020 - 2022<br>All Rights Reserved</div>
                <div class="icons">
                    <img class="images" src=./images/insta.png alt="" style="width: 50px; height: auto">
                    <img class="images" src=./images/telegram.png alt="" style="width: 50px; height: auto">
                    <img class="images" src=./images/facebook.png alt="" style="width: 50px; height: auto">
                </div>

            </div>

            <div class="footer__info">
                <div class="footer__title_text">Адреса клубу</div>
                <div class="footer__text">
                    вул. Академіка Янгеля, 5<br>
                    м. Київ<br>
                    03056
                </div>

                <div class="footer__title_text">Контакти</div>
                <div class="footer__text">
                    E-mail: sportclub@club.com<br>
                    Тел: 050 555 55 55
                </div>
            </div>

            <div class="footer__time">
                <div class="footer__title_text">Графік роботи</div>
                <div class="footer__text">
                    Пн - Пт    6:00 - 22:00 <br> Сб - Нд    7:00 - 21:00
                </div>
            </div>

            <nav class="footer__navigation">
                <a class="footer__link" href="index.php">Головна</a>
                <a class="footer__link" href="abonemets.php">Абонементи</a>
                <a class="footer__link" href="trainers.php">Тренери</a>
                <a class="footer__link" href="about_us.php">Про нас</a>
                <a class="footer__link" href="contacts.php">Контакти</a>
            </nav>

        </div>
    </div>
</footer>
</body>

</html>
