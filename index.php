    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apple</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <!-- <link rel="stylesheet" href="reset.css"> buat reset css -->
        <link rel="shortcut icon" type="image/jpg" href="./img/apple-logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
            crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>

    <body>
        <!-- Bagian header-->
        <header>
            <div class="header-wrapper">
                <span class="menu-logo hp-viewport fas fa-ellipsis-h"></span>
                <ul class="header-list">

                    <li class="header-content hp-viewport apple-header"><a href="https://www.apple.com/"><img class="logo"
                                src="./img/apple-logo.png"></a></li>

                    <li class="header-content hp-viewport-hide"><a href="/ThucHanhLTW/shopdetail.html">Mac</a></li>
                    <li class="header-content hp-viewport-hide"><a href="/ThucHanhLTW/shopdetail.html">iPad</a></li>
                    <li class="header-content hp-viewport-hide"><a href="/ThucHanhLTW/shopdetail.html">iPhone</a></li>
                    <li class="header-content hp-viewport-hide"><a href="/ThucHanhLTW/shopdetail.html">Watch</a></li>
                    <li class="header-content hp-viewport-hide"><a href="/ThucHanhLTW/shopdetail.html">TV</a></li>
                    <li class="header-content hp-viewport-hide"><a href="/ThucHanhLTW/shopdetail.html">Music</a></li>
                    <!-- masukkin input search -->
                    <li>
                        <div class="search search-container">
                            <div class="search-icon" id="searchIcon"><i class="fas fa-search"></i></div>
                            <div class="search-dropdown" id="searchDropdown">
                                <input type="text" placeholder="Search...">
                                <button>Search</button>
                            </div>
                        </div>
                    </li>
                    <!-- masukkin input search -->

                    <li class="header-content hp-viewport header-shoping"><a href="https://www.apple.com/us/shop/goto/bag"
                            class="fas fa-shopping-bag"></a></li>
                </ul>
            </div>
        </header>
        <!-- <nav>
            <ul>
                <li><a href="#"><i class="fab fa-apple"></i></a></li>
                <li><a href="#">Mac</a></li>  
                <li><a href="#">iPad</a></li>  
                <li><a href="#">iPhone</a></li>  
                <li><a href="#">Watch</a></li>  
                <li><a href="#">TV</a></li>  
                <li><a href="#">Music</a></li>  
                <li><a href="#">Service</a></li>  
                <li><a href="#"><i class="fas fa-search"></i></a></li>  
                <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>  
            </ul>
        </nav> -->
        <!-- header -->

        <main>

            <!-- Bagian content atas -->


            <div class="container">
                <div class="contents">
                    <div class="image-container" onclick="location.href='https://www.apple.com/iphone-12/';"
                        style="cursor: pointer;">
                        <div class="iphone-12 common-title">
                            <div class="title">
                                <h2>iPhone 15</h2>
                                <p>New camera. New design. Newphoria.</p>
                            </div>
                            <div class="cta-links">
                                <a href="#" class="learn-more-link">Learn more</a>
                                <a href="#" class="buy-link">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="image-container" onclick="location.href='https://www.apple.com/iphone-12-pro/';"
                        style="cursor: pointer;">
                        <div class="iphone-12-pro common-title">
                            <div class="title">
                                <h1>iPhone 12 Pro</h1>
                                <p>It's a leap year.</p>
                            </div>
                            <div class="cta-links">
                                <a href="#" class="learn-more-link">Learn more</a>
                                <a href="#" class="buy-link">Buy</a>
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h1 class="hello">Fitness+</h1>
                        <p class="A">A new fitness experience for everyone.</p>
                        <div class="cta-links">
                            <a href="https://fitness.apple.com/us/subscribe?itscg=10000&itsct=fit-hero-hp_tile-apl-ann-201111"
                                class="learn-more-link">Try it free</a>
                            <a href="https://www.apple.com/apple-fitness-plus/" class="buy-link">Learn more</a>
                        </div>
                        <div class="image-container">
                            <div class="fitness" onclick="location.href='https:https://www.apple.com/apple-fitness-plus/';"
                                style="cursor: pointer;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="flex-list">
                <li class="li1 content">
                    <div class="theme-dark container-main"
                        onclick="location.href='https://www.apple.com/apple-watch-series-6/';" style="cursor: pointer;">
                        <div class="unit-copy-wrapper">
                            <img class="apple-watch-logo" src="./img/apple-watch-logo.png" alt="apple-watch-logo">
                            <h2 class="headline">The future of health is on your wrist.</h2>
                        </div>
                        <div class="cta-links">
                            <a href="https://www.apple.com/apple-watch-series-6/" class="learn-more-link">Learn more</a>
                            <a href="https://www.apple.com/shop/buy-watch/apple-watch" class="buy-link">Buy</a>
                        </div>
                        <div class="unit-image">
                            <figure>
                                <img src="./img/apple-watch-6.png" alt="apple-watch">
                            </figure>
                        </div>
                    </div>
                </li>
                <li class="li2 content">
                    <div class="theme-light container-main" onClick="location.href='https://www.apple.com/ipad-air/';"
                        style="cursor: pointer;">
                        <div class="unit-copy-wrapper">
                            <img class="apple-watch-logo" src="./img/ipad-air-logo.png" alt="">
                            <h2 class="headline">Powerful. Colorful. Wonderful.</h2>
                        </div>
                        <div class="cta-links">
                            <a href="" class="learn-more-link">Learn more</a>
                            <a href="" class="buy-link">Buy</a>
                        </div>
                        <div class="unit-image">
                            <figure>
                                <img src="./img/ipad-air.png" alt="ipad-air" style="width: 70%;">
                            </figure>
                        </div>
                    </div>
                </li>

                <li class="li3 content">

                    <div class="theme-dark container-main" onclick="location.href='https://www.apple.com/macbook-air/';"
                        style="cursor: pointer;">
                        <div class="unit-copy-wrapper">
                            <img class="mackbook-air-logo" src="./img/macbook-air-logo.png" alt=""
                                style="width: 35%; margin-top: 55px; margin-bottom: 40px;">
                            <h2 class="headline">Power. it's in the Air.</h2>
                        </div>
                        <div class="cta-links">
                            <a href="" class="learn-more-link">Learn more</a>
                            <a href="" class="buy-link">Buy</a>
                        </div>
                        <div class="unit-image">
                            <figure>
                                <img src="./img/macbook-air.png" alt="" style="width: 100%; height: 100%;">
                            </figure>
                        </div>
                    </div>
                </li>

                <li class="li4 content">

                    <div class="theme-light container-main" onclick="location.href='https://www.apple.com/apple-one/'"
                        style="cursor: pointer;">
                        <div class="unit-copy-wrapper">
                            <img src="./img/apple-one-logo.png" alt=""
                                style="width: 30%; margin-top: 20px; margin-bottom: 30px;">
                            <h2 class="headline">Bundle up to six Apple services.<br>And enjoy more for less</h2>
                        </div>
                        <div class="cta-links">
                            <a href="" class="learn-more-link">Learn more</a>
                            <a href="" class="buy-link">Buy</a>
                        </div>
                        <div class="unit-image">
                            <figure>
                                <img src="./img/apple-one.png" alt="apple-one" style="width: 80%;">
                            </figure>
                        </div>
                    </div>
                </li>
                <li class="li5 content">

                    <div class="theme-light container-main" onclick="location.href='https://www.apple.com/apple-card/'"
                        style="cursor: pointer;">
                        <div class="unit-copy-wrapper">
                            <img src="./img/apple-card-logo.png" alt="apple-card-logo"
                                style="width: 20%; margin-top: 20px;">
                            <h2 style="margin-bottom: 10px; font-size: 19px; color: #1D1D1F">
                                Get 3% Daily Cash back on<br>
                                purchases from Apple when<br>
                                you use Apple Card
                            </h2>
                        </div>
                        <div class="cta-links">
                            <a href="">Learn more</a>
                        </div>
                        <div class="unit-image">
                            <figure style="margin-top: 0;">
                                <img src="./img/apple-card.png" alt="apple-card" style="width: 80%;">
                            </figure>
                        </div>
                    </div>
                </li>

                <li class="li6 content">

                    <div class="theme-dark container-main dickison" onclick="location.href='https://tv.apple.com/'"
                        style="cursor: pointer;">


                        <div class="unit-copy-wrapper">
                            <img src="./img/apple-tv-logo.png" alt="apple-tv-logo" style="width: 15%; margin-top: 20px;">
                            <h2>You can't hide from greatness.</h2>
                        </div>
                        <div class="cta-links"><a
                                href="https://tv.apple.com/season/umc.cmc.7525wsaxw3oprxq6b307ideiz?showId=umc.cmc.1ogyy5s2agasxa5qztabrlykn&itscg=10000&itsct=atv-0-apl_hp-pmo_wch-dickinson2-201104"
                                style="color: white;">Watch the new season <span class="fas fa-play-circle"
                                    style="float: none; margin: 0;"></span> </a></div>
                        <div class="unit-image">
                            <figure>
                                <img src="./img/dickinson-apple-tv.png" alt="apple-tv" style="width: 80%;">
                            </figure>
                        </div>


                    </div>
                </li>
            </ul>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <button>Stream now</button>
                        <p> From Steven Spielberg, Tom Hanks, and Gary Goetzman.</p>
                        <img src="img/iphone_12.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <button>Stream now</button>
                        <p> From Steven Spielberg, Tom Hanks, and Gary Goetzman.</p>
                        <img src="img/iphone_12.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <button>Stream now</button>
                        <p> From Steven Spielberg, Tom Hanks, and Gary Goetzman.</p>
                        <img src="img/iphone-15.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <button>Stream now</button>
                        <p> From Steven Spielberg, Tom Hanks, and Gary Goetzman.</p><img src="img/macbook-air.png" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </main>

        <!-- Bagian footer-->
        <footer>
            <div class="footer-container">
                <div class="foot-notes">
                    <ul>
                        <li>
                            1. Price includes a $30 AT&T, T-Mobile, Sprint, or Verizon discount. Requires activation with
                            carrier. Monthly pricing: Available to qualified customers and requires 0% APR.
                        </li>

                        <li>
                            2. Monthly pricing: Available to qualified customers and requires 0% APR, 24-month installment
                            loan with Citizens One or Apple Card Monthly Installments.
                        </li>

                        <li>
                            3. $9.99/month after free trial. No commitment. Plan automatically renews after trial until
                            cancelled.
                        </li>

                        <li>
                            4. The Apple One free trial includes only services that you are not currently using through a
                            free trial or a subscription.
                        <li>

                        <li>
                            To access and use all the features of Apple Card, you must add Apple Card to Wallet on an iPhone
                            or iPad with iOS 12.4 or later or iPadOS.
                        </li>

                        <li>
                            Available for qualifying applicants in the United States.
                        </li>

                        <li>
                            Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City Branch.
                        </li>
                        <li>
                            Apple TV+ is $4.99/month after free trial. One subscription per Family Sharing group. Offer good
                            for 3 months after eligible device activation. Plan automatically renews until cancelled.
                            Restrictions and other terms apply.
                        </li>
                    </ul>
                </div>

            </div>
            </div>
            <hr style="width: 70%;">
            <div class="footer-container">
                <div class="footer-list">
                    <h3>Shop and Learn</h3>
                    <p><a href="https://www.apple.com/mac">Mac</a></p>
                    <p><a href="https://www.apple.com/ipad">iPad</a></p>
                    <p><a href="https://www.apple.com/iphone">iPhone</a></p>
                    <p><a href="https://www.apple.com/watch">Watch</a></p>
                    <p><a href="https://www.apple.com/tv">TV</a></p>
                    <p><a href="https://www.apple.com/music">Music</a></p>
                    <p><a href="https://www.apple.com/airpods">AirPods</a></p>
                    <p><a href="https://www.apple.com/homepod">HomePod</a></p>
                    <p><a href="https://www.apple.com/ipad-touch">iPod touch</a></p>
                    <p><a href="https://www.apple.com/shop/accessories/all">Accessories</a></p>
                    <p><a href="https://www.apple.com/shop/gift-cards">Gift Cards</a></p>
                </div>
                <div class="footer-list">
                    <h3>Services</h3>
                    <p><a href="https://www.apple.com/apple-music">Apple Music</a></p>
                    <p><a href="https://www.apple.com/apple-tv-plus">Apple TV+</a></p>
                    <p><a href="https://www.apple.com/apple-fitnes-plus">Apple Fitness+</a></p>
                    <p><a href="https://www.apple.com/apple-news">Apple News+</a></p>
                    <p><a href="https://www.apple.com/apple-arcade">Apple Arcade</a></p>
                    <p><a href="https://www.apple.com/icloud">iCloud</a></p>
                    <p><a href="https://www.apple.com/apple-one">Apple One</a></p>
                    <p><a href="https://www.apple.com/apple-card">Apple Card</a></p>
                    <p><a href="https://www.apple.com/apple-books">Apple Books</a></p>
                    <p><a href="https://www.apple.com/app-store">App Store</a></p>
                </div>
                <div class="footer-list">
                    <h3>Apple Store</h3>
                    <p><a href="https://www.apple.com/retail">Find a Store</a></p>
                    <p><a href="https://www.apple.com/shop">Shop Online</a></p>
                    <p><a href="https://www.apple.com/retail/geniusbar">Genius Bar</a></p>
                    <p><a href="https://www.apple.com/today">Today at Apple</a></p>
                    <p><a href="https://www.apple.com/today/camp">Apple Camp</a></p>
                    <p><a href="https://apps.apple.com/app/apple-store/id375380948">Apple Store App</a></p>
                    <p><a href="https://www.apple.com/shop/refurbished">Refurbished and Clearance</a></p>
                    <p><a href="https://www.apple.com/shop/browse/financing">Financing</a></p>
                    <p><a href="https://www.apple.com/shop/trade-in">Apple Trade In</a></p>
                    <p><a
                            href="https://secure4.store.apple.com/shop/signIn/orders?r=SCKFUHKXACXX7DYHYT9JT7JJTAPAXHFKH&s=aHR0cHM6Ly9zZWN1cmU0LnN0b3JlLmFwcGxlLmNvbS9zaG9wL29yZGVyL2xpc3R8MWFvc2MyMzE1ZDYzNTE4MGIwZTg4MWE3YzIwOWJjMTVkMjNlMzI4ZTBkN2Y">Order
                            Status</a></p>
                    <p><a href="https://www.apple.com/shop/help">Shopping Help</a></p>
                </div>
                <!-- <div class="footer-copyright">
                <img class="logo-footer" src="img/apple-logo.png" alt="footer logo">
                <p class="txt-copy"><a target="_blank" href="https://www.apple.com/id/">appleindonesia</a> &copy; 2021</p>
            </div> -->
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
        <script src="swiper_script.js"></script>
    </body>

    </html>