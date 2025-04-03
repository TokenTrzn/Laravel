<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="./scripts/menu.js" defer></script>
    <script src="./scripts/slider.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="header__menu">
            <img src="./assets/menu_icon.png" class="header__menu__icon">
            <img src="./assets/close_menu_icon.png" class="header__menu__close-icon hidden desktop" />
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
            <img src="./assets/account_icon.png" class="header__icons__item">
            <img src="./assets/search_icon.png" class="header__icons__item">
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

        <section class="ultimateHome">
            <p class="ultimateHome__title">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h2 class="ultimateHome__description">The Perfect <br />Base For You</h2>
            <div class="ultimateHome__media">
                <button class="ultimateHome__button" id="fisrtHomeButton">TAKE A TOUR</button>
                <button class="ultimateHome__button" id="learnButton">LEARN MORE</button>
            </div>
        </section>

        <section class="availability">
            <div class="availability__items">
                <label class="availability__items__label" for="arrival-date">Arrival Date</label>
                <input class="availability__items__input" id="arrival-date" type="date">
            </div>
            <div class="availability__items">
                <label class="availability__items__label" for="departure-date">LeDeparture Date</label>
                <input class="availability__items__input" id="departure-date" type="date">
            </div>
            <button class="availability__button">CHECK AVAILABILITY</button>
        </section>

        <section class="about">
            <div class="right">
                <p class="about__title">ABOUT US</p>
                <h2 class="about__subtitle">Discover Our Underground.</h2>
                <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="about__button">BOOK NOW</button>
            </div>
            <div class="left">
                <div class="about__strongTeam">
                    <div>
                        <img class="about__img" src="./assets/habitacion1.jpg" />
                    </div>
                    <div>
                        <img class="about__strongTeam__icon" src="./assets/strong_team_icon.png" />
                        <h3 class="about__strongTeam__title">Strong Team</h3>
                        <p class="about__strongTeam__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="about__luxuryRoom">
                    <div>
                        <img class="about__img" src="./assets/habitacion1.jpg" />
                    </div>
                    <div>
                        <div class="about__luxuryRoom__info">
                            <img class="about__luxuryRoom__info__icon" src="./assets/luxury_room_icon (2).png" />
                            <h3 class="about__luxuryRoom__info__title">Luxury Room</h3>
                            <p class="about__luxuryRoom__info__description">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homeRooms">
            <p class="homeRooms__title">ROOMS</p>
            <p class="homeRooms__subtitle">Hand Picked Rooms</p>
            <div class="swiper homeRooms__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./assets/habitacion1.jpg" class="homeRooms__swiper__img" />
                        <img src="./assets/row_icons.png" class="homeRooms__swiper__icons" />
                        <div class="homeRooms__swiper__info">
                            <div class="desktop-room-desc">
                                <p class="homeRooms__swiper__info__title">Minimal Duplex Room</p>
                                <p class="homeRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adipi sicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <p class="homeRooms__swiper__info__price">$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/habitacion1.jpg" class="homeRooms__swiper__img" />
                        <img src="./assets/row_icons.png" class="homeRooms__swiper__icons" />
                        <div class="homeRooms__swiper__info">
                            <div class="desktop-room-desc">
                                <p class="homeRooms__swiper__info__title">Minimal Duplex Room</p>
                                <p class="homeRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adipi sicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <p class="homeRooms__swiper__info__price">$345/Night</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <section class="introVideo">
            <div class="video-desktop-info">
                <p class="introVideo__title">INTRO VIDEO</p>
                <p class="introVideo__subtitle">Meet With Our Luxury Place.</p>
                <p class="introVideo__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
                <button class="introVideo__button">BOOK NOW</button>
            </div>
            <iframe class="introVideo__video" width="640" height="360"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75&rel=0&autohide=1&loop=1&playlist=Bu3Doe45lcU"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </section>

        <section class="facilitiesHome">
            <p class="facilitiesHome__title">FACILITIES</p>
            <p class="facilitiesHome__subtitle">Core Features</p>
            <div class="swiper facilitiesHome__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">01</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="./assets/rating_icon.png" />
                        <p class="facilitiesHome__swiper__slide__title">Have High Rating</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">02</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="./assets/quiet_hours_icon.png" />
                        <p class="facilitiesHome__swiper__slide__title">Quiet Hours</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">03</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="./assets/best_location_icon.png" />
                        <p class="facilitiesHome__swiper__slide__title">Best Locations</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">04</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="./assets/cancellation_icon.png" />
                        <p class="facilitiesHome__swiper__slide__title">Free Cancellation</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">05</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="./assets/payment_options_icon.png" />
                        <p class="facilitiesHome__swiper__slide__title">Payments Options</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">06</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="./assets/spceial_offers_icon.png" />
                        <p class="facilitiesHome__swiper__slide__title">Special Offers</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="facilitiesHome__desktop">
                <div class="facilitiesHome__desktop__item">
                    <p class="facilitiesHome__desktop__item__background">01</p>
                    <img class="facilitiesHome__desktop__item__icon" src="./assets/rating_icon.png" />
                    <p class="facilitiesHome__desktop__item__title">Have High Rating</p>
                    <p class="facilitiesHome__desktop__item__text">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="facilitiesHome__desktop__item">
                    <p class="facilitiesHome__desktop__item__background">02</p>
                    <img class="facilitiesHome__desktop__item__icon" src="./assets/quiet_hours_icon.png" />
                    <p class="facilitiesHome__desktop__item__title">Quiet Hours</p>
                    <p class="facilitiesHome__desktop__item__text">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="facilitiesHome__desktop__item">
                    <p class="facilitiesHome__desktop__item__background">03</p>
                    <img class="facilitiesHome__desktop__item__icon" src="./assets/best_location_icon.png" />
                    <p class="facilitiesHome__desktop__item__title">Best Locations</p>
                    <p class="facilitiesHome__desktop__item__text">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="facilitiesHome__desktop__item">
                    <p class="facilitiesHome__desktop__item__background">04</p>
                    <img class="facilitiesHome__desktop__item__icon" src="./assets/cancellation_icon.png" />
                    <p class="facilitiesHome__desktop__item__title">Free Cancellation</p>
                    <p class="facilitiesHome__desktop__item__text">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="facilitiesHome__desktop__item">
                    <p class="facilitiesHome__desktop__item__background">05</p>
                    <img class="facilitiesHome__desktop__item__icon" src="./assets/payment_options_icon.png" />
                    <p class="facilitiesHome__desktop__item__title">Payment Options</p>
                    <p class="facilitiesHome__desktop__item__text">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="facilitiesHome__desktop__item">
                    <p class="facilitiesHome__desktop__item__background">06</p>
                    <img class="facilitiesHome__desktop__item__icon" src="./assets/spceial_offers_icon.png" />
                    <p class="facilitiesHome__desktop__item__title">Special Offers</p>
                    <p class="facilitiesHome__desktop__item__text">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </section>

        <div class="banner">
            <img class="banner__icon" src="./assets/donut_icon.png" />
            <img class="banner__icon-desktop" src="./assets/donut_desktop_icon.png" />
        </div>

        <section class="menu">
            <p class="menu__title">MENU</p>
            <p class="menu__subtitle">Our Foods Menu</p>
            <div class="swiper menu__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="menu__swiper__item">
                            <img class="menu__swiper__item__img" src="./assets/eggs_and_bacon.png" />
                            <div class="menu__swiper__item__info">
                                <p class="menu__swiper__item__info__title">Eggs & Bacon</p>
                                <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="menu__swiper__item">
                            <img class="menu__swiper__item__img" src="./assets/tea_and_coffe.png" />
                            <div class="menu__swiper__item__info">
                                <p class="menu__swiper__item__info__title">Tea & Coffe</p>
                                <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="menu__swiper__item" id="last">
                            <img class="menu__swiper__item__img" src="./assets/chia_oatmeal.png" />
                            <div class="menu__swiper__item__info">
                                <p class="menu__swiper__item__info__title">Chia Oatmeal</p>
                                <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="menu__swiper__item">
                            <img class="menu__swiper__item__img" src="./assets/eggs_and_bacon.png" />
                            <div class="menu__swiper__item__info">
                                <p class="menu__swiper__item__info__title">Eggs & Bacon</p>
                                <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="menu__swiper__item">
                            <img class="menu__swiper__item__img" src="./assets/tea_and_coffe.png" />
                            <div class="menu__swiper__item__info">
                                <p class="menu__swiper__item__info__title">Tea & Coffe</p>
                                <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="menu__swiper__item">
                            <img class="menu__swiper__item__img" src="./assets/chia_oatmeal.png" />
                            <div class="menu__swiper__item__info">
                                <p class="menu__swiper__item__info__title">Chia Oatmeal</p>
                                <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper2">
                <div class="swiper menu__swiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide menu__swiper2__slide">
                            <img class="menu__swiper2__slide__img" src="./assets/menu1.png" />
                        </div>
                        <div class="swiper-slide menu__swiper2__slide">
                            <img class="menu__swiper2__slide__img" src="./assets/menu2.png" />
                        </div>
                        <div class="swiper-slide menu__swiper2__slide">
                            <img class="menu__swiper2__slide__img" src="./assets/menu3.png" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="menu__desktop">
                <div class="menu__desktop__item">
                    <img class="menu__desktop__item__image" src="./assets/menu1.png" />
                </div>
                <div class="menu__desktop__item">
                    <img class="menu__desktop__item__image" src="./assets/menu2.png" />
                </div>
                <div class="menu__desktop__item">
                    <img class="menu__desktop__item__image" src="./assets/menu3.png" />
                </div>
            </div>

            </div>
        </section>

        <section class="achievements">
            <div class="achievements__item">
                <img class="achievements__item__img" src="./assets/rocket_icon.png">
                <p class="achievements__item__text">84k<span>+</span></p>
                <p class="achievements__item__description">Projects are Completed</p>
            </div>
            <div class="achievements__item">
                <img class="achievements__item__img" src="./assets/backers_icon.png">
                <p class="achievements__item__text">10M<span>+</span></p>
                <p class="achievements__item__description">Active Backers Around World</p>
            </div>
            <div class="achievements__item">
                <img class="achievements__item__img" src="./assets/benefits_icon.png">
                <p class="achievements__item__text">02k<span>+</span></p>
                <p class="achievements__item__description">Categories Served</p>
            </div>
            <div class="achievements__item">
                <img class="achievements__item__img" src="./assets/book_icon.png">
                <p class="achievements__item__text">100M<span>+</span></p>
                <p class="achievements__item__description">Idea Raised Funds</p>
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