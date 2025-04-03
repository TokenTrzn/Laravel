<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="../../scripts/menu.js" defer></script>
    <script src="../../scripts/slider.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="header__menu">
            <img src="../../assets/menu_icon.png" class="header__menu__icon">
            <img src="../../assets/close_menu_icon.png" class="header__menu__close-icon hidden" />
        </div>
        <div class="header__logo">
            <div class="header__logo__icon">
                <p class="header__logo__icon__content">H</p>
            </div>
            <div class="header__logo__text">
                <p class="header__logo__text__up">HOTEL</p>
                <p class="header__logo__text__down">MIRANDA</p>
            </div>
        </div>
        <div class="header__icons">
            <img src="../../assets/account_icon.png" class="header__icons__item">
            <img src="../../assets/search_icon.png" class="header__icons__item">
        </div>
        <nav class="header__nav hidden">
            <ul class="header__nav__list">
                <li class="header__nav__list__item" id="first"><a href="aboutUs">About Us</a></li>
                <li class="header__nav__list__item"><a href="rooms">Rooms</a></li>
                <li class="header__nav__list__item"><a href="offer">Offers</a></li>
                <li class="header__nav__list__item"><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="ultimate">
            <div>
                <p class="ultimate__title">THE ULTIMATE LUXURY</p>
                <h2 class="ultimate__description">New Details</h2>
            </div>
            <div class="ultimate__nav">
                <span class="ultimate__nav__links">
                    <p class="ultimate__nav__links__text"><a href="home">Home | </a>Blog</p>
                </span>
            </div>
        </section>

        <section class="contact">
            <div class="contact__media">
                <div class="contact__item">
                    <p class="contact__item__background">01</p>
                    <img class="contact__item__icon" src="../../assets/email_icon.png" />
                    <p class="contact__item__title">Hotel Address <span>19/A, Cirikon City hall Tower New York, NYC</span>
                    </p>
                </div>
                <div class="contact__item">
                    <p class="contact__item__background">02</p>
                    <img class="contact__item__icon" src="../../assets/phone_icon.png" />
                    <p class="contact__item__title">Phone Number <span>+34 645 630 341</span>
                    </p>
                </div>
                <div class="contact__item">
                    <p class="contact__item__background">03</p>
                    <img class="contact__item__icon" src="../../assets/location_icon.png" />
                    <p class="contact__item__title">Email <span>alberto.gil.sanjuan@gmail.com</span>
                    </p>
                </div>
            </div>
            <img class="contact__image" src="../../assets/habitacion1.jpg" />
        </section>

        <form action="">
            <div class="form">
                <div class="form__item">
                    <img class="form__item__icon" src="../../assets/person_icon.png" />
                    <input class="form__item__input" type="text" placeholder="Your full name">
                </div>
                <div class="form__item">
                    <img class="form__item__icon" src="../../assets/phone_small_icon.png" />
                    <input class="form__item__input" type="tel" placeholder="Add phone number">
                </div>
                <div class="form__item">
                    <img class="form__item__icon" src="../../assets/mail_icon.png" />
                    <input class="form__item__input" type="email" placeholder="Enter email address">
                </div>
                <div class="form__item">
                    <img class="form__item__icon" src="../../assets/agend_icon.png" />
                    <input class="form__item__input" type="text" placeholder="Enter subject">
                </div>
                <div class="form__item" id="messageInput">
                    <img class="form__item__icon" src="../../assets/pencil_icon.png" />
                    <input class="form__item__input" type="text" placeholder="Enter message">
                </div>
                <button class="form__button" id="formButton" type="submit">SEND</button>
            </div>
        </form>

    </main>

    <footer class="footer">
        <img class="footer__background" src="./assets/footer_background_pattern.png" />
        <div class="footer__media">
            <div class="footer__info">
                <div class="footer__info__title">
                    <div class="footer__info__title__icon">
                        <p class="footer__info__title__icon__content">H</p>
                    </div>
                    <div class="footer__info__title__text">
                        <p class="footer__info__title__text__up">HOTEL</p>
                        <p class="footer__info__title__text__down">MIRANDA</p>
                    </div>
                </div>
                <p class="footer__info__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius
                    mod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion
                    ullamco
                    laboris nisi.</p>
                <div class="footer__info__social">
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="../../assets/facebook_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="../../assets/twitter_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="../../assets/behance_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="../../assets/linkedin_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="../../assets/youtube_icon.png" />
                    </div>
                </div>
            </div>

            <div class="footer__services">
                <h3 class="footer__services__title">Services.</h3>
                <ul class="footer__services__list">
                    <li class="footer__services__list__item">+ Restaurant & Bar</li>
                    <li class="footer__services__list__item">+ Swimming Pool</li>
                    <li class="footer__services__list__item">+ Wellness & Spa</li>
                    <li class="footer__services__list__item">+ Restaurant</li>
                    <li class="footer__services__list__item">+ Conference Room</li>
                    <li class="footer__services__list__item">+ Coctail Party House</li>
                    <li class="footer__services__list__item">+ Gaming Zone</li>
                    <li class="footer__services__list__item">+ Marriage Party</li>
                    <li class="footer__services__list__item">+ Party Planning</li>
                    <li class="footer__services__list__item">+ Tour Consultancy</li>
                </ul>
            </div>

            <div class="footer__contact-us">
                <h3 class="footer__contact-us__title">Contact Us.</h3>
                <div class="footer__contact-us__row">
                    <img class="footer__contact-us__row__icon" src="../../assets/phone_icon.png" />
                    <div class="footer__contact-us__row__info">
                        <p class="footer__contact-us__row__info__title">Phone Number</p>
                        <p class="footer__contact-us__row__info__text">+34 645 630 341</p>
                    </div>
                </div>
                <div class="footer__contact-us__row">
                    <img class="footer__contact-us__row__icon" src="../../assets/email_icon.png" />
                    <div class="footer__contact-us__row__info">
                        <p class="footer__contact-us__row__info__title">Email</p>
                        <p class="footer__contact-us__row__info__text">alberto.gil.sanjuan@gmail.com</p>
                    </div>
                </div>
                <div class="footer__contact-us__row">
                    <img class="footer__contact-us__row__icon" src="../../assets/location_icon.png" />
                    <div class="footer__contact-us__row__info">
                        <p class="footer__contact-us__row__info__title">Location</p>
                        <p class="footer__contact-us__row__info__text">Tarazona (Zaragoza)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <p class="footer__copyright__info" id="text-up">Copyright By@Example - 2020</p>
            <p class="footer__copyright__info">Terms of Use <span class="footer__copyright__info__separator">|</span>
                Privacy Environmental Policy</p>
        </div>

    </footer>
</body>

</html>