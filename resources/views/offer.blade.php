<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offers</title>
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
                <h2 class="ultimate__description">Our Offers</h2>
            </div>
            <div class="ultimate__nav">
                <span class="ultimate__nav__links">
                    <p class="ultimate__nav__links__text"><a href="home">Home | </a>Offers</p>
                </span>
            </div>
        </section>

        <section class="offers">
            <article class="offers__article">
                <div class="offers__article__photo">
                    <img src="../../assets/habitacion1.jpg" class="offers__article__photo__img" />
                    <div class="offers__article__photo__prices">
                        <p class="offers__article__photo__prices__old">$500<span>/Night</span></p>
                        <p class="offers__article__photo__prices__new">$345<span>/Night</span></p>
                    </div>
                </div>
                <p class="offers__article__bedType">DOUBLE BED</p>
                <p class="offers__article__bedTitle">Luxury Double Bed</p>
                <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="offers__article__container">
                    <div class="offers__article__container__item">
                        <img src="../../assets/air_conditioner_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Air conditioner</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/breakfast_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Breakfast</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/cleaning_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Cleaning</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/grocery_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Grocery</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shop_near_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shop near</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/high_speed_wifi_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">High speed WiFi</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/kitchen_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Kitchen</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shower_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shower</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/single_bed_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Single bed</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/towels_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Towels</p>
                    </div>
                </div>
                <button type="submit" class="offers__article__button">BOOK NOW</button>
            </article>
            <article class="offers__article">
                <div class="offers__article__photo">
                    <img src="../../assets/habitacion1.jpg" class="offers__article__photo__img" />
                    <div class="offers__article__photo__prices">
                        <p class="offers__article__photo__prices__old">$500<span>/Night</span></p>
                        <p class="offers__article__photo__prices__new">$345<span>/Night</span></p>
                    </div>
                </div>
                <p class="offers__article__bedType">DOUBLE BED</p>
                <p class="offers__article__bedTitle">Luxury Double Bed</p>
                <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="offers__article__container">
                    <div class="offers__article__container__item">
                        <img src="../../assets/air_conditioner_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Air conditioner</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/breakfast_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Breakfast</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/cleaning_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Cleaning</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/grocery_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Grocery</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shop_near_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shop near</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/high_speed_wifi_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">High speed WiFi</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/kitchen_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Kitchen</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shower_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shower</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/single_bed_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Single bed</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/towels_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Towels</p>
                    </div>
                </div>
                <button type="submit" class="offers__article__button">BOOK NOW</button>
            </article>
            <article class="offers__article">
                <div class="offers__article__photo">
                    <img src="../../assets/habitacion1.jpg" class="offers__article__photo__img" />
                    <div class="offers__article__photo__prices">
                        <p class="offers__article__photo__prices__old">$500<span>/Night</span></p>
                        <p class="offers__article__photo__prices__new">$345<span>/Night</span></p>
                    </div>
                </div>
                <p class="offers__article__bedType">DOUBLE BED</p>
                <p class="offers__article__bedTitle">Luxury Double Bed</p>
                <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="offers__article__container">
                    <div class="offers__article__container__item">
                        <img src="../../assets/air_conditioner_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Air conditioner</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/breakfast_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Breakfast</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/cleaning_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Cleaning</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/grocery_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Grocery</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shop_near_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shop near</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/high_speed_wifi_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">High speed WiFi</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/kitchen_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Kitchen</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shower_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shower</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/single_bed_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Single bed</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/towels_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Towels</p>
                    </div>
                </div>
                <button type="submit" class="offers__article__button">BOOK NOW</button>
            </article>
            <article class="offers__article">
                <div class="offers__article__photo">
                    <img src="../../assets/habitacion1.jpg" class="offers__article__photo__img" />
                    <div class="offers__article__photo__prices">
                        <p class="offers__article__photo__prices__old">$500<span>/Night</span></p>
                        <p class="offers__article__photo__prices__new">$345<span>/Night</span></p>
                    </div>
                </div>
                <p class="offers__article__bedType">DOUBLE BED</p>
                <p class="offers__article__bedTitle">Luxury Double Bed</p>
                <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="offers__article__container">
                    <div class="offers__article__container__item">
                        <img src="../../assets/air_conditioner_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Air conditioner</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/breakfast_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Breakfast</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/cleaning_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Cleaning</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/grocery_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Grocery</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shop_near_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shop near</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/high_speed_wifi_icon.png"
                            class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">High speed WiFi</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/kitchen_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Kitchen</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/shower_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Shower</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/single_bed_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Single bed</p>
                    </div>
                    <div class="offers__article__container__item">
                        <img src="../../assets/towels_icon.png" class="offers__article__container__item__icon" />
                        <p class="offers__article__container__item__text">Towels</p>
                    </div>
                </div>
                <button type="submit" class="offers__article__button">BOOK NOW</button>
            </article>
        </section>

        <section class="popularList">
            <p class="popularList__title">POPULAR LIST</p>
            <p class="popularList__subtitle">Popular Rooms</p>
            <div class="swiper popularList__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../../assets/habitacion1.jpg" class="popularList__swiper__img" />
                        <img src="../../assets/row_icons.png" class="popularList__swiper__icons" />
                        <div class="popularList__swiper__info">
                            <p class="popularList__swiper__info__title">Minimal Duplex Room</p>
                            <p class="popularList__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                adipi sicing elit, sed do eiusmod tempor.</p>
                            <p class="popularList__swiper__info__price">$345/Night <a
                                    href="roomDetails">Booking Now</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../../assets/habitacion1.jpg" class="popularList__swiper__img" />
                        <img src="../../assets/row_icons.png" class="popularList__swiper__icons" />
                        <div class="popularList__swiper__info">
                            <p class="popularList__swiper__info__title">Minimal Duplex Room</p>
                            <p class="popularList__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                adipi sicing elit, sed do eiusmod tempor.</p>
                            <p class="popularList__swiper__info__price">$345/Night <a
                                    href="roomsDetails">Booking Now</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../../assets/habitacion1.jpg" class="popularList__swiper__img" />
                        <img src="../../assets/row_icons.png" class="popularList__swiper__icons" />
                        <div class="popularList__swiper__info">
                            <p class="popularList__swiper__info__title">Minimal Duplex Room</p>
                            <p class="popularList__swiper__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <p class="popularList__swiper__info__price">$345/Night <a href="roomDetails">Booking Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
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