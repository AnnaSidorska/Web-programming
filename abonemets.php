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
                <a class="nav__link active" href="abonemets.php">Абонементи</a>
                <a class="nav__link" href="trainers.php">Тренери</a>
                <a class="nav__link" href="about_us.php">Про нас</a>
                <a class="nav__link" href="contacts.php">Контакти</a>
            </nav>

            <div class="time">
                Пн - Пт   6:00 - 22:00<br>Сб - Нд   7:00 - 21:00
            </div>

        </div>
    </div>
</header>

<div class="intro__abonement intro">
    <div class="container">
        <div class="abonement__inner">
            <div class="intro__title">Абонементи в SportClub</div>
            <div class="intro__subtitle">Ваша іменна клубна карта відкриває доступ до всіх зон клубу<br>
                та розширює можливості для різноманітних тренувань щодня.</div>

            <a class="button" href="#">Придбати абонемент</a>
        </div>
    </div>
</div>

<div class="block_gym">
    <div class="container">
        <div class="gym__title">Тренажерний зал</div>
        <div class="block_gym__items">
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB MORNING</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу в ранкові години.</div>
                    <div class="main__time">
                        Будні: 6:00 до 12:00<br>
                        Вихідні: 7:00 до 13:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1200₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="./images/angle_gray.png" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB DAY</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу в денні години.</div>
                    <div class="main__time">
                        Будні: 12:00 до 18:00<br>
                        Вихідні: 13:00 до 18:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1100₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="./images/angle_gray.png" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB EVENING</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу у вечірні години.</div>
                    <div class="main__time">
                        Будні: 17:00 до 22:00<br>
                        Вихідні: 17:00 до 13:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1400₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="./images/angle_gray.png" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB full</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу без часових обмежень.</div>
                    <div class="main__time">
                        Будні: 6:00 до 22:00<br>
                        Вихідні: 7:00 до 21:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1800₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="./images/angle_gray.png" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB ultra</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу в ранкові години.</div>
                    <div class="main__time">
                        Будні: 6:00 до 22:00<br>
                        Вихідні: 7:00 до 21:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">2500₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="./images/angle_gray.png" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item other_tile">
                <div class="other__title">Виникли труднощі з вибором абонементу?</div>
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

<div class="block__about intro">
    <div class="container">
        <div class="about__inner">
            <div class="about__items">
                <div class="about__titles">Абонемент включає в себе:</div>
                <ol style="list-style-image: url('./images/anglea.png')">
                    <li>Тренажерний і кардіо зали</li>
                    <li>Йога, пілатес</li>
                    <li>Функціональний тренінг</li>
                    <li>EMS-тренування</li>
                    <li>Бокс, єдиноборства</li>
                    <li>Басейн</li>
                    <li>Заморозка абонемента</li>
                </ol>
            </div>
            <div class="about__items">
                <div class="about__titles">Додаткові послуги:</div>
                <ol style="list-style-image: url('./images/anglea.png')">
                    <li>Персональні тренування</li>
                    <li>Всі види масажу</li>
                    <li>Фітнес бар</li>
                    <li>Сауна</li>
                    <li>Оренда шафки</li>
                    <li>Іменний халат</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="questions">
    <div class="container">
        <div class="questions__items">
            <div class="que__item">
                Залишилися питання?
                <p>Потребуєте допомоги у виборі? Наш менеджер допоможе<br> знайти відповіді на кожне ваше питання</p>
                <div class="intro__form">
                    <label for="name"></label><input type="text" id="name2" placeholder="Ім'я">
                    <label for="phone"></label><input type="text" id="phone2" placeholder="Номер телефону">
                    <label for="email"></label><input type="text" id="email" placeholder="Електрона пошта">
                </div>
                <a class="button" href="#">Отримати допомогу</a>
            </div>
            <div class="que__item">
                <img src="./images/img3.jpg" alt="">
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
                <a class="footer__link active" href="abonemets.php">Абонементи</a>
                <a class="footer__link" href="trainers.php">Тренери</a>
                <a class="footer__link" href="about_us.php">Про нас</a>
                <a class="footer__link" href="contacts.php">Контакти</a>
            </nav>

        </div>
    </div>
</footer>
</body>

</html>