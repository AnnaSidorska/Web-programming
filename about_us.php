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
                <a class="nav__link" href="trainers.php">Тренери</a>
                <a class="nav__link active" href="about_us.php">Про нас</a>
                <a class="nav__link" href="contacts.php">Контакти</a>
            </nav>

            <div class="time">
                Пн - Пт   6:00 - 22:00<br>Сб - Нд   7:00 - 21:00
            </div>

        </div>
    </div>
</header>

<div class="aboutus__intro">
    <div class="container">
        <div class="aboutus__inner">
            <div class="aboutus__title">Про нас</div>
            <div class="aboutus__subtitble">Наші двері завжди для вас відчинені.<br>
                Дізнайтеся переваги нашого клубу.
            </div>
        </div>
    </div>
</div>

<div class="trainers__block">
    <div class="container">
        <div class="tblock__inner">
            <div class="text">Ознайомтесь з найкращими тренерами!</div>
            <a class="blue__button" href="trainers.php">Переглянути тренерів</a>
        </div>
    </div>
</div>

<div class="advantages">
    <div class="container">
        <div class="advantages__inner">
            <div class="advantages__header">
            <div class="advantages__title">SportClub - ваш надійний партнер</div>
            <div class="advantages__subtitle">Обслуговування клієнтів зажди проводиться на найвищому рівні.<br>
                Команда SportClub - це справні професіонали, які допоможуть вам у досягненні вашої мети. </div>
            </div>

            <div class="tiles__title advantages__title">Наші переваги</div>
            <div class="advantages__tiles">
                <div class="advantages__item">
                    <div class="item__title">Місцерозташування</div>
                    <div class="item__text">Клуб знаходиться у центрі міста</div>
                </div>
                <div class="advantages__item">
                    <div class="item__title">Обладнання</div>
                    <div class="item__text">Найсучасніше спортивне обладнання від найкращих виробників</div>
                </div>
                <div class="advantages__item">
                    <div class="item__title">Дизайн</div>
                    <div class="item__text">Стильний, зручний дизайн клубу</div>
                </div>
                <div class="advantages__item">
                    <div class="item__title">Спеціалісти</div>
                    <div class="item__text">Допомога висококваліфікованих спеціалістів</div>
                </div>
                <div class="advantages__item">
                    <div class="item__title">Атмосфера</div>
                    <div class="item__text">Дружна і привітна атмосфера</div>
                </div>
                <div class="advantages__item">
                    <div class="item__title">Індивідуальний підхід</div>
                    <div class="item__text">Індивідуальний підхід до кожного клієнта</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trainers__block">
    <div class="container">
        <div class="tblock__inner">
            <div class="text">Дозвольте собі бути здоровими!</div>
            <a class="blue__button" href="abonemets.php">Переглянути послуги</a>
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

