<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Restaurant | Template</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="assets/img/favicon.ico"
        />
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/flaticon.css" />
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
        <link rel="stylesheet" href="assets/css/themify-icons.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
    </head>
    <body>
        <!--? Preloader Start -->
        <div id="preloader-active">
            <div
                class="preloader d-flex align-items-center justify-content-center"
            >
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/logo.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!--? Header Start -->
            <div class="header-area header-transparent">
                <div class="main-header header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-6">
                                <div class="logo">
                                    <a href="index.html"
                                        ><img
                                            src="assets/img/logo/logo.png"
                                            alt=""
                                    /></a>
                                </div>
                            </div>
                            <div
                                class="col-6 col-xl-10 col-lg-10 d-none d-lg-block"
                            >
                                <div
                                    class="menu-main d-flex align-items-center justify-content-end"
                                >
                                    <!-- Main-menu -->
                                    <div
                                        class="main-menu f-right d-none d-lg-block"
                                    >
                                        <nav>
                                            <ul id="navigation">
                                                <li>
                                                    <a
                                                        class="nav-btn-resp"
                                                        href="index.html"
                                                        >Home</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        class="nav-btn-resp"
                                                        href="about.html"
                                                        >About</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        class="nav-btn-resp"
                                                        href="menu.html"
                                                        >Menu</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        class="nav-btn-resp"
                                                        href="blog.html"
                                                        >Blog</a
                                                    >
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="blog.html"
                                                                >Blog</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="blog_details.html"
                                                                >Blog Details</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="elements.html"
                                                                >Element</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a
                                                        class="nav-btn-resp"
                                                        href="contact.html"
                                                        >Contact</a
                                                    >
                                                </li>
                                            </ul>
                                            <button
                                                type="button"
                                                class="menu-close"
                                                id="closeMenu"
                                            >
                                                x
                                            </button>
                                        </nav>
                                    </div>
                                    <div
                                        class="header-right-btn f-right d-none d-lg-block ml-20"
                                    >
                                        <button
                                            class="border-btn header-btn"
                                            id="btn-open"
                                        >
                                            Order Online
                                        </button>
                                    </div>
                                </div>
                                <div id="window-wrapper">
                                    <div id="modal-window">
                                        <div class="wrapper">
                                            <button id="btn-close">
                                                Close
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="section-tittle text-center mb-40"
                                            >
                                                <span
                                                    >Enjoy Our Restaurant</span
                                                >
                                                <h2>Order Online</h2>
                                            </div>
                                            <form
                                                action="mail.php"
                                                class="form-book js-form"
                                                id="form-order"
                                            >
                                                <input
                                                    name="firstName"
                                                    type="text"
                                                    class="form-book__input"
                                                    placeholder="Name"
                                                    required
                                                />
                                                <input
                                                    name="userEmail"
                                                    type="email"
                                                    class="form-book__input"
                                                    placeholder="Email"
                                                    required
                                                />
                                                <input
                                                    name="userPhone"
                                                    type="phone"
                                                    class="form-book__input"
                                                    placeholder="Phone"
                                                    required
                                                />
                                                <button
                                                    type="submit"
                                                    class="btn select-btn"
                                                >
                                                    Book Now
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ml-auto d-lg-none">
                                    <div
                                        class="mobile_menu d-flex d-lg-none justify-content-end"
                                    >
                                        <a
                                            href="#"
                                            aria-haspopup="true"
                                            role="button"
                                            tabindex="0"
                                            class="slicknav_btn slicknav_collapsed ml-auto"
                                            ><span class="slicknav_menutxt"
                                                >MENU</span
                                            ></a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <main>
            <!-- Slider Area Start-->
            <div class="slider-area">
                <div class="slider-active">
                    <!-- One Slide -->
                    <div
                        class="single-slider slider-height d-flex align-items-center"
                    >
                        <div class="container">
                            <!-- FUCKING SLIDER -->
                            <div class="row swiper-container swiper">
                                <div
                                    class="col-xl-9 col-lg-9 col-md-9 swiper-wrapper"
                                >
                                    <div class="hero__caption swiper-slide">
                                        <span
                                            data-animation="fadeInLeft"
                                            data-delay=".2s"
                                            >Discover Your Teste</span
                                        >
                                        <h1
                                            data-animation="fadeInLeft"
                                            data-delay=".4s"
                                        >
                                            We belive good food offer great
                                            smile
                                        </h1>
                                        <p
                                            data-animation="fadeInLeft"
                                            data-delay=".6s"
                                        >
                                            Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo
                                            consequat is aute irure.
                                        </p>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">
                                            <a
                                                href="industries.html"
                                                class="btn hero-btn"
                                                data-animation="fadeInLeft"
                                                data-delay=".8s"
                                                >Resurvation</a
                                            >
                                        </div>
                                    </div>
                                    <div class="hero__caption swiper-slide">
                                        <span
                                            data-animation="fadeInLeft"
                                            data-delay=".2s"
                                            >Discover Your Teste</span
                                        >
                                        <h1
                                            data-animation="fadeInLeft"
                                            data-delay=".4s"
                                        >
                                            We belive good food offer great
                                            smile
                                        </h1>
                                        <p
                                            data-animation="fadeInLeft"
                                            data-delay=".6s"
                                        >
                                            Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo
                                            consequat is aute irure.
                                        </p>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">
                                            <a
                                                href="industries.html"
                                                class="btn hero-btn"
                                                data-animation="fadeInLeft"
                                                data-delay=".8s"
                                                >Resurvation</a
                                            >
                                        </div>
                                    </div>
                                    <div class="hero__caption swiper-slide">
                                        <span
                                            data-animation="fadeInLeft"
                                            data-delay=".2s"
                                            >Discover Your Teste</span
                                        >
                                        <h1
                                            data-animation="fadeInLeft"
                                            data-delay=".4s"
                                        >
                                            We belive good food offer great
                                            smile
                                        </h1>
                                        <p
                                            data-animation="fadeInLeft"
                                            data-delay=".6s"
                                        >
                                            Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo
                                            consequat is aute irure.
                                        </p>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">
                                            <a
                                                href="industries.html"
                                                class="btn hero-btn"
                                                data-animation="fadeInLeft"
                                                data-delay=".8s"
                                                >Resurvation</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FUCKING SLIDER -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Area End-->
            <!--? About Area Start -->
            <div class="about-low-area section-padding30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <span>Discover Your Test</span>
                                    <h2>
                                        We Provide Good Food For Your Family!
                                    </h2>
                                </div>
                                <p>
                                    Ut enim acgsd minim veniam, quxcis nostrud
                                    exercitation ullamco laboris nisi ufsit
                                    aliquip ex ea commodo consequat is aute
                                    irure m, quis nostrud exer.
                                </p>
                            </div>
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-10"
                                >
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span
                                                class="flaticon-restaurant"
                                            ></span>
                                        </div>
                                        <div class="caption">
                                            <p>
                                                Ut enim ad minim veniam, quis
                                                nostrud exer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-10"
                                >
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span
                                                class="flaticon-tools-and-utensils-1"
                                            ></span>
                                        </div>
                                        <div class="caption">
                                            <p>
                                                Ut enim ad minim veniam, quis
                                                nostrud exer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-10"
                                >
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span class="flaticon-hat"></span>
                                        </div>
                                        <div class="caption">
                                            <p>
                                                Ut enim ad minim veniam, quis
                                                nostrud exer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-10"
                                >
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span
                                                class="flaticon-restaurant"
                                            ></span>
                                        </div>
                                        <div class="caption">
                                            <p>
                                                Ut enim ad minim veniam, quis
                                                nostrud exer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- scene -->
                        <div class="col-lg-6 col-md-12 main" id="scene">
                            <!-- about-img -->
                            <div class="about-img iphone layer" data-depth="1">
                                <img
                                    src="assets/img/gallery/about.png"
                                    alt="Cook"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Area End -->
            <!--? gallery Products Start -->
            <section class="gallery-area fix">
                <!-- Gallery Top Start -->
                <div
                    class="gallery-top section-bg pt-90 pb-40"
                    style="
                        background-image: url('assets/img/gallery/section_bg01.png');
                    "
                >
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="cl-xl-7 col-lg-8 col-md-10">
                                <!-- Section Tittle -->
                                <div class="section-tittle text-center mb-70">
                                    <span>Our Offerd Menu</span>
                                    <h2>
                                        Some Trendy And Popular Courses Offerd
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a
                                            class="nav-item nav-link active"
                                            id="nav-home-tab"
                                            href="#nav-home"
                                            >Special</a
                                        >
                                        <a
                                            class="nav-item nav-link"
                                            id="nav-profile-tab"
                                            href="#nav-profile"
                                            >Lunch</a
                                        >
                                        <a
                                            class="nav-item nav-link"
                                            id="nav-contact-tab"
                                            href="#nav-contact"
                                            >Brakefirst</a
                                        >
                                        <a
                                            class="nav-item nav-link"
                                            id="nav-dinner-tab"
                                            href="#nav-dinner"
                                            >Dinner</a
                                        >
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Top End -->
                <!-- Gallery Bottom Start -->
                <div class="container-fluid p-0">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div
                            class="tab-pane fade show active"
                            id="nav-home"
                            role="tabpanel"
                            aria-labelledby="nav-home-tab"
                        >
                            <div class="row no-gutters">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery1.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery2.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="row no-gutters">
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery3.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery4.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card two -->
                        <div
                            class="tab-pane fade"
                            id="nav-profile"
                            role="tabpanel"
                            aria-labelledby="nav-profile-tab"
                        >
                            <div class="row no-gutters">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery2.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery1.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="row no-gutters">
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery3.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery4.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card three -->
                        <div
                            class="tab-pane fade"
                            id="nav-contact"
                            role="tabpanel"
                            aria-labelledby="nav-contact-tab"
                        >
                            <div class="row no-gutters">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery1.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery2.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="row no-gutters">
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery3.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery4.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Four -->
                        <div
                            class="tab-pane fade"
                            id="nav-dinner"
                            role="tabpanel"
                            aria-labelledby="nav-dinner"
                        >
                            <div class="row no-gutters">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery3.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div
                                                class="gallery-img big-img"
                                                style="
                                                    background-image: url(assets/img/gallery/gallery4.png);
                                                "
                                            ></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>
                                                    Ut enim ad minim veniam quis
                                                    nostr.
                                                </p>
                                                <a
                                                    href="#"
                                                    class="btn order-btn"
                                                    >Order Now</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="row no-gutters">
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery1.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-12 col-md-6 col-sm-6"
                                        >
                                            <div class="gallery-box">
                                                <div class="single-gallery">
                                                    <div
                                                        class="gallery-img smoll-img"
                                                        style="
                                                            background-image: url(assets/img/gallery/gallery2.png);
                                                        "
                                                    ></div>
                                                    <div class="g-caption">
                                                        <span>$25</span>
                                                        <h4>Delicious Food</h4>
                                                        <p>
                                                            Ut enim ad minim
                                                            veniam quis nostr.
                                                        </p>
                                                        <a
                                                            href="#"
                                                            class="btn order-btn"
                                                            >Order Now</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
                <!-- Gallery Bottom End -->
            </section>
            <!-- gallery Products End -->
            <!--? About-2 Area Start -->
            <div class="about-area2 section-padding30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img">
                                <img
                                    src="assets/img/gallery/about2.png"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <span>About Our Restaurant</span>
                                    <h2>
                                        We Provide Good Food For Your Family!
                                    </h2>
                                </div>
                                <p class="pera-top">
                                    Ut enim acgsd minim veniam, quxcis nostrud
                                    exercitation ullamco laboris nisi ufsit
                                    aliquip ex ea commodo consequat is aute
                                    irure m, quis nostrud exer
                                </p>

                                <p class="mb-65 pera-bottom">
                                    There are many variations of passages of
                                    Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by
                                    injected our, or randomised words which
                                    don't look even slightly believab If you are
                                    going to use a passage.
                                </p>
                                <a href="about.html" class="border-btn"
                                    >Learn More</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About-2 Area End -->
            <!--? Booking Room Start-->
            <div
                class="booking-area section-bg pt-120 pb-130"
                style="
                    background-image: url('assets/img/gallery/section_bg04.png');
                "
            >
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-40">
                                <span>About Our Restaurant</span>
                                <h2>Book A Table</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <form action="#" class="form-book js-form" id="form-book">
                                <input
                                    name="firstName"
                                    type="text"
                                    class="form-book__input"
                                    placeholder="Name"
                                    required
                                />
                                <input
                                    name="userEmail"
                                    type="email"
                                    class="form-book__input"
                                    placeholder="Email"
                                    required
                                />
                                <input
                                    name="userPhone"
                                    type="number"
                                    class="form-book__input"
                                    placeholder="Phone"
                                    required
                                />
                                <button type="submit" class="btn select-btn">
                                    Book Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Room End-->
            <!--? Our Services Start -->
            <div class="our-services section-padding30">
                <div class="container">
                    <div class="row justify-content-sm-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Servicees We Offer</span>
                                <h2>Our Best Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-restaurant"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="#">Best Chef</a></h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                                class="single-services active text-center mb-30"
                            >
                                <div class="services-ion">
                                    <span
                                        class="flaticon-tools-and-utensils-1"
                                    ></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="#">Quality Food</a></h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-restaurant"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="#">Perfect Cook</a></h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Services End -->
            <!--? About-3 Start -->
            <div
                class="about-area3 pt-180 pb-170 section-bg"
                style="
                    background-image: url('assets/img/gallery/section_bg03.png');
                "
            >
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-6 col-lg-6 col-md-9 col-sm-11">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-40">
                                <span>About Our Restaurant</span>
                                <h2>We Provide Good Food For Your Family!</h2>
                                <p>
                                    Ut enim acgsd minim veniam, quxcis nostrud
                                    exercitation ullamco laboris nisi ufsit
                                    aliquip ex ea commodo consequat is aute
                                    irure m, quis nostrud exer.
                                </p>
                            </div>
                            <!--Hero form -->
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input
                                        type="text"
                                        placeholder="Your Email"
                                    />
                                </div>
                                <div class="search-form">
                                    <button>Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About-3 End -->
            <!--? Blog Area Start -->
            <section class="blogs-area section-padding30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Our New Blog News</span>
                                <h2>Our Recnet News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blogs mb-100">
                                <div class="blog-img">
                                    <img
                                        src="assets/img/gallery/blog1.png"
                                        alt=""
                                    />
                                </div>
                                <div class="blog-cap">
                                    <span class="color1">23 Dec, 2020</span>
                                    <h4>
                                        <a href="blog_details.html"
                                            >Addiction When Food Plate
                                            Becomes</a
                                        >
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blogs mb-100">
                                <div class="blog-img">
                                    <img
                                        src="assets/img/gallery/blog2.png"
                                        alt=""
                                    />
                                </div>
                                <div class="blog-cap">
                                    <span class="color1">23 Dec, 2020</span>
                                    <h4>
                                        <a href="blog_details.html"
                                            >Addiction When Food Plate
                                            Becomes</a
                                        >
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blogs mb-100">
                                <div class="blog-img">
                                    <img
                                        src="assets/img/gallery/blog3.png"
                                        alt=""
                                    />
                                </div>
                                <div class="blog-cap">
                                    <span class="color1">23 Dec, 2020</span>
                                    <h4>
                                        <a href="blog_details.html"
                                            >Addiction When Food Plate
                                            Becomes</a
                                        >
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
        </main>
        <footer>
            <!--? Footer Start-->
            <div
                class="footer-area section-bg"
                style="
                    background-image: url('assets/img/gallery/section_bg02.png');
                "
            >
                <div class="container">
                    <div class="footer-top footer-padding">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"
                                            ><img
                                                src="assets/img/logo/logo2_footer.png"
                                                alt=""
                                        /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Navigation</h4>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Testimonial</a></li>
                                            <li><a href="#">Categories</a></li>
                                            <li><a href="#">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Useful Links</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Registration</a>
                                            </li>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Policy</a></li>
                                            <li>
                                                <a href="#"
                                                    >Terms & Conditions</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Instagram -->
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Instagram Feed</h4>
                                    </div>
                                    <div class="instagram-gellay">
                                        <ul class="insta-feed">
                                            <li>
                                                <a href="#"
                                                    ><img
                                                        src="assets/img/gallery/instagram1.png"
                                                        alt=""
                                                /></a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    ><img
                                                        src="assets/img/gallery/instagram2.png"
                                                        alt=""
                                                /></a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    ><img
                                                        src="assets/img/gallery/instagram3.png"
                                                        alt=""
                                                /></a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    ><img
                                                        src="assets/img/gallery/instagram4.png"
                                                        alt=""
                                                /></a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    ><img
                                                        src="assets/img/gallery/instagram5.png"
                                                        alt=""
                                                /></a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    ><img
                                                        src="assets/img/gallery/instagram6.png"
                                                        alt=""
                                                /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div
                            class="row d-flex justify-content-between align-items-center"
                        >
                            <div class="col-xl-9 col-lg-8">
                                <div class="footer-copy-right">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(
                                                new Date().getFullYear()
                                            );
                                        </script>
                                        All rights reserved | This template is
                                        made with
                                        <i
                                            class="fa fa-heart"
                                            aria-hidden="true"
                                        ></i>
                                        by
                                        <a
                                            href="https://colorlib.com"
                                            target="_blank"
                                            >Colorlib</a
                                        >
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <!-- Footer Social -->
                                <div class="footer-social f-right">
                                    <span>Follow Us</span>
                                    <a href="#"
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a href="https://www.facebook.com/sai4ull"
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#">
                <i class="fas fa-level-up-alt"></i
            ></a>
        </div>

        <!-- JS here -->

        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./assets/js/parallax.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
        <script src="./assets/js/main.js"></script>
    </body>
</html>
