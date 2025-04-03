<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room Details</title>
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
                <h2 class="ultimate__description">Ultimate Room</h2>
            </div>
            <div class="ultimate__nav">
                <span class="ultimate__nav__links">
                    <p class="ultimate__nav__links__text"><a href="home">Home | </a>Room Details</p>
                </span>
            </div>
        </section>

        <section class="roomInfo">
            <div class="roomInfo__media">
                <p class="roomInfo__bedType">DOUBLE BED</p>
                <p class="roomInfo__bedTitle">Luxury Double Bed</p>
                <p class="roomInfo__price">$345<span>/Night</span></p>
            </div>
            <img class="roomInfo__img" src="../../assets/habitacion1.jpg" />
        </section>

        <section class="checkAvailability">
            <p class="checkAvailability__title">Check Availability</p>
            <form class="checkAvailability__form">
                <div class="checkAvailability__form__checkIn">
                    <label class="checkAvailability__form__checkIn__title" for="chekIn">Check In</label>
                    <input class="checkAvailability__form__checkIn__input" id="checkIn" type="date"
                        placeholder="07/01/2025" pattern="\d{4}-\d{2}-\d{2}" />
                </div>
                <div class="checkAvailability__form__checkOut">
                    <label class="checkAvailability__form__checkOut__title" for="checkOut">Check Out</label>
                    <input class="checkAvailability__form__checkOut__input" id="checkOut" type="date"
                        placeholder="09/01/2025" pattern="\d{4}-\d{2}-\d{2}" />
                </div>
                <button class="checkAvailability__form__button" type="submit">CHECK AVAILABILITY</button>
            </form>
            <p class="checkAvailability__terms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                aliquam quaerat voluptatem.</p>
        </section>

        <section class="amenities">
            <p class="amenities__title">Amenities</p>
            <div class="amenities__separator"></div>
            <div class="amenities__container">
                <div class="amenities__container__item">
                    <img src="../../assets/air_conditioner_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Air conditioner</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/breakfast_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Breakfast</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/cleaning_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Cleaning</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/grocery_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Grocery</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/shop_near_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Shop near</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/online_support_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">24/7 Online Support</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/smart_security_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Smart Security</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/high_speed_wifi_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">High speed WiFi</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/kitchen_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Kitchen</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/shower_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Shower</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/single_bed_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Single bed</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/towels_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Towels</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/strong_locker_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Strong Locker</p>
                </div>
                <div class="amenities__container__item">
                    <img src="../../assets/expert_team_icon.png" class="amenities__container__item__icon" />
                    <p class="amenities__container__item__text">Expert Team</p>
                </div>
            </div>
            <div class="amenities__person">
                <div class="amenities__person__photo">
                    <img />
                    <div class="amenities__person__photo__tick">
                        <img src="../../assets/ok_icon.png" class="amenities__person__photo__tick__icon" />
                    </div>
                </div>
                <p class="amenities__person__name">Rosalina D. William</p>
                <p class="amenities__person__position">FOUNDER, QUX CO.</p>
                <p class="amenities__person__info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </section>
        <section class="cancellation">
            <p class="cancellation__title">Cancellation</p>
            <div class="cancellation__separator"></div>
            <p class="cancellation__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                tempor.</p>
        </section>
        <section class="relatedRooms">
            <p class="relatedRooms__title">Related Rooms</p>
            <div class="relatedRooms__separator"></div>
            <div class="swiper relatedRooms__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../../assets/habitacion1.jpg" class="relatedRooms__swiper__img" />
                        <img src="../../assets/row_icons.png" class="relatedRooms__swiper__icons" />
                        <div class="relatedRooms__swiper__info">
                            <p class="relatedRooms__swiper__info__title">Minimal Duplex Room</p>
                            <p class="relatedRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                adipi sicing elit, sed do eiusmod tempor.</p>
                            <p class="relatedRooms__swiper__info__price">$345/Night <a
                                    href="roomsDetails">Booking Now</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../../assets/habitacion1.jpg" class="relatedRooms__swiper__img" />
                        <img src="../../assets/row_icons.png" class="relatedRooms__swiper__icons" />
                        <div class="relatedRooms__swiper__info">
                            <p class="relatedRooms__swiper__info__title">Minimal Duplex Room</p>
                            <p class="relatedRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                adipi sicing elit, sed do eiusmod tempor.</p>
                            <p class="relatedRooms__swiper__info__price">$345/Night <a
                                    href="roomsDetails">Booking Now</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../../assets/habitacion1.jpg" class="relatedRooms__swiper__img" />
                        <img src="../../assets/row_icons.png" class="relatedRooms__swiper__icons" />
                        <div class="relatedRooms__swiper__info">
                            <p class="relatedRooms__swiper__info__title">Minimal Duplex Room</p>
                            <p class="relatedRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                                adipi sicing elit, sed do eiusmod tempor.</p>
                            <p class="relatedRooms__swiper__info__price">$345/Night <a
                                    href="roomsDetails">Booking Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <img class="footer__background" src="../../assets/footer_background_pattern.png" />
        <div class="footer__title">
            <div class="footer__title__icon">
                <p class="footer__title__icon__content">H</p>
            </div>
            <div class="footer__title__text">
                <p class="footer__title__text__up">HOTEL</p>
                <p class="footer__title__text__down">MIRANDA</p>
            </div>
        </div>
        <p class="footer__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco
            laboris nisi.</p>
        <div class="footer__social">
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="../../assets/facebook_icon.png" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="../../assets/twitter_icon.png" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="../../assets/behance_icon.png" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="../../assets/linkedin_icon.png" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="../../assets/youtube_icon.png" />
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

        <div class="footer__copyright">
            <p class="footer__copyright__info" id="text-up">Copyright By@Example - 2020</p>
            <p class="footer__copyright__info">Terms of Use <span class="footer__copyright__info__separator">|</span>
                Privacy Environmental Policy</p>
        </div>

    </footer>
</body>

</html>