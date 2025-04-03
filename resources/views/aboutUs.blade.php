<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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
                <h2 class="ultimate__description">About Us</h2>
            </div>
            <div class="ultimate__nav">
                <span class="ultimate__nav__links">
                    <p class="ultimate__nav__links__text"><a href="home">Home | </a>About</p>
                </span>
            </div>
        </section>

        <section class="aboutUs">
            <video class="aboutUs__video" width="640" height="360" controls poster>
                <source src="ruta-del-video.mp4" type="video/mp4">
            </video>
            <p class="aboutUs__title">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
            <div class="aboutUs__icons">
                <div class="aboutUs__icons__background">
                    <img class="aboutUs__icons__background__item" src="../../assets/breakfast_icon (2).png" />
                    <p class="aboutUs__icons__background__text">BREAKFAST</p>
                </div>
                <div class="aboutUs__icons__background">
                    <img class="aboutUs__icons__background__item" src="../../assets/plane_icon.png" />
                    <p class="aboutUs__icons__background__text">AIRPORT PICKUP</p>
                </div>
                <div class="aboutUs__icons__background">
                    <img class="aboutUs__icons__background__item" src="../../assets/city_guide_icon.png" />
                    <p class="aboutUs__icons__background__text">CITY GUIDE</p>
                </div>
                <div class="aboutUs__icons__background">
                    <img class="aboutUs__icons__background__item" src="../../assets/luxury_room_icon.png" />
                    <p class="aboutUs__icons__background__text">LUXURY ROOM</p>
                </div>
            </div>
        </section>

        <section class="restaurant">
            <img class="restaurant__img" src="../../assets/habitacion1.jpg" />
            <p class="restaurant__text">RESTAURANT</p>
            <p class="restaurant__title">Get Restaurant Facilities & Many Other More</p>
            <p class="restaurant__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="restaurant__button">TAKE A TOUR</button>
        </section>

        <section class="facilities">
            <p class="facilities__title">FACILITIES</p>
            <p class="facilities__subtitle">Core Features</p>
            <div class="swiper facilities__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide facilities__swiper__slide">
                        <p class="facilities__swiper__slide__background">01</p>
                        <img class="facilities__swiper__slide__icon" src="../../assets/rating_icon.png" />
                        <p class="facilities__swiper__slide__title">Have High Rating</p>
                        <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilities__swiper__slide">
                        <p class="facilities__swiper__slide__background">02</p>
                        <img class="facilities__swiper__slide__icon" src="../../assets/rating_icon.png" />
                        <p class="facilities__swiper__slide__title">Have High Rating</p>
                        <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilities__swiper__slide">
                        <p class="facilities__swiper__slide__background">03</p>
                        <img class="facilities__swiper__slide__icon" src="../../assets/rating_icon.png" />
                        <p class="facilities__swiper__slide__title">Have High Rating</p>
                        <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilities__swiper__slide">
                        <p class="facilities__swiper__slide__background">04</p>
                        <img class="facilities__swiper__slide__icon" src="../../assets/rating_icon.png" />
                        <p class="facilities__swiper__slide__title">Have High Rating</p>
                        <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilities__swiper__slide">
                        <p class="facilities__swiper__slide__background">05</p>
                        <img class="facilities__swiper__slide__icon" src="../../assets/rating_icon.png" />
                        <p class="facilities__swiper__slide__title">Have High Rating</p>
                        <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilities__swiper__slide">
                        <p class="facilities__swiper__slide__background">06</p>
                        <img class="facilities__swiper__slide__icon" src="../../assets/rating_icon.png" />
                        <p class="facilities__swiper__slide__title">Have High Rating</p>
                        <p class="facilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="counter">
            <p class="counter__title">COUNTER</p>
            <p class="counter__subtitle">Some Fun Facts</p>
            <div class="counter__facts">
                <div class="counter__facts__item">
                    <img class="counter__facts__item__img" src="../../assets/happy_users_icon.png" />
                    <p class="counter__facts__item__text">8000 <span>Happy Users</span></p>
                    <img class="counter__facts__item__icon" src="../../assets/arrow_icon.png" />
                </div>
                <div class="counter__facts__item">
                    <img class="counter__facts__item__img" src="../../assets/rating_icon.png" />
                    <p class="counter__facts__item__text">10M <span>Reviews & Appreciate</span></p>
                    <img class="counter__facts__item__icon" src="../../assets/arrow_icon.png" />
                </div>
                <div class="counter__facts__item">
                    <img class="counter__facts__item__img" src="../../assets/world_icon.png" />
                    <p class="counter__facts__item__text">100 <span>Country Coverage</span></p>
                    <img class="counter__facts__item__icon" src="../../assets/arrow_icon.png" />
                </div>
            </div>
            <div class="swiper counter__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide counter__swiper__slide">
                        <img class="counter__swiper__slide__img" src="../../assets/habitacion1.jpg" />
                    </div>
                    <div class="swiper-slide counter__swiper__slide">
                        <img class="counter__swiper__slide__img" src="../../assets/habitacion1.jpg" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

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
                        <img class="footer__info__social__item__icon" src="./assets/facebook_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="./assets/twitter_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="./assets/behance_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="./assets/linkedin_icon.png" />
                    </div>
                    <div class="footer__info__social__item">
                        <img class="footer__info__social__item__icon" src="./assets/youtube_icon.png" />
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
                    <img class="footer__contact-us__row__icon" src="./assets/phone_icon.png" />
                    <div class="footer__contact-us__row__info">
                        <p class="footer__contact-us__row__info__title">Phone Number</p>
                        <p class="footer__contact-us__row__info__text">+34 645 630 341</p>
                    </div>
                </div>
                <div class="footer__contact-us__row">
                    <img class="footer__contact-us__row__icon" src="./assets/email_icon.png" />
                    <div class="footer__contact-us__row__info">
                        <p class="footer__contact-us__row__info__title">Email</p>
                        <p class="footer__contact-us__row__info__text">alberto.gil.sanjuan@gmail.com</p>
                    </div>
                </div>
                <div class="footer__contact-us__row">
                    <img class="footer__contact-us__row__icon" src="./assets/location_icon.png" />
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