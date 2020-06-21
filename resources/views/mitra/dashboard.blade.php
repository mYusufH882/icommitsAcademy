<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Mitra Icommits Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

</head>
<style type="text/css">
        


</style>
<body>

    <!-- Wrapper -->
    <div id="wrapper" class="bg-white">

        <!-- Header Container
        ================================================== -->
        <header class="header header-horizontal header bg-grey uk-light">

            <div class="container">
                <nav uk-navbar>

                    <!-- left Side Content -->
                    <div class="uk-navbar-left">

                        <!-- menu icon -->
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                        <!-- logo -->
                        <a href="dashboard.html" class="logo">
                            <img src="{{ asset('assets/images/') }}" alt="">
                            <span> Icommits Academy</span>
                        </a>

                        <!-- Main Navigation -->

                        <nav id="navigation">
                            <ul id="responsive">
                                <li><a href="#">Home</a> </li>
                                <li><a href="#">Kategori</a>
                                    <ul class="dropdown-nav nav-large nav-courses">

                                        <li><a href="course-card.html#">
                                                <i class="icon-brand-js-square" style="color: #f7df1e;"></i> Pemograman
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!--  Right Side Content   -->
                    <div class="uk-navbar-right">

                        <div class="header-widget">

                            <div class="searchbox uk-visible@s">

                                <input class="uk-search-input" type="search" placeholder="Search...">
                                <button class="btn-searchbox"> </button>

                            </div>
                            <!-- Search box dropdown -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                                class="dropdown-search">
                                <div class="erh BR9 MIw"
                                    style="top: -27px;position: absolute ; left: 24px;fill: currentColor;height: 24px;pointer-events: none;color: #f5f5f5;">
                                    <svg width="22" height="22">
                                        <path d="M0 24 L12 12 L24 24"></path>
                                    </svg></div>
                                <!-- User menu -->
                                <ul class="dropdown-search-list">
                                    <li class="list-title">
                                        Recent Searches
                                    </li>
                                    <li>
                                        <a href="course-intro.html">
                                            Ultimate Web Designer And Developer Course</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- User icons close mobile-->
                            <span class="icon-feather-x icon-small uk-hidden@s"
                                uk-toggle="target: .header-widget ; cls: is-active"> </span>


                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                                <i class="uil-youtube-alt"></i>
                            </a>

                            <!-- courses dropdown List -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications my-courses-dropdown">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Kelas anda</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="{{ asset('assets/images/course/1.png') }}" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all</a>
                                </div>
                            </div>

                            <!-- notificiation icon  -->

                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">
                                <i class="uil-bell"></i>
                                <span>4</span>
                            </a>

                            <!-- notificiation dropdown -->
                            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Notifications </h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-thumbs-up"></i></span>
                                                <span class="notification-text">
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-primary">Javascript Introduction </span>
                                                    <br> <span class="time-ago"> 9 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-share-2"></i></span>
                                                <span class="notification-text">
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                    <span class="text-primary">Css Flex Box </span>
                                                    <br> <span class="time-ago"> Yesterday </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>


                            </div>


                            <!-- Message  -->

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">
                                <i class="uil-envelope-alt"></i>
                                <span>1</span>
                            </a>

                            <!-- Message  notificiation dropdown -->
                            <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Messages</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Message settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Jonathan Madano</strong>
                                                    <p>Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> 2 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                </div>
                            </div>


                            <!-- profile-icon-->

                            <a href="#" class="header-widget-icon profile-icon">
                                <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" alt="" class="header-profile-icon">
                            </a>

                            <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                                <!-- User Name / Avatar -->
                                <a href="profile-1.html">

                                    <div class="dropdown-user-details">
                                        <div class="dropdown-user-avatar">
                                            <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" alt="">
                                        </div>
                                        <div class="dropdown-user-name">
                                            Richard Ali <span>Students</span>
                                        </div>
                                    </div>

                                </a>

                                <!-- User menu -->

                                <ul class="dropdown-user-menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                    </li>
                                    <li><a href="#">
                                            <i class="icon-feather-bookmark"></i> Sertifikat </a>
                                    </li>
                                    <li><a href="profile-edit.html">
                                            <i class="icon-feather-settings"></i> Account </a>
                                    </li>
                                    <li>
                                        <a href="#" id="night-mode" class="btn-night-mode">
                                            <i class="icon-feather-moon"></i> Night mode
                                            <span class="btn-night-mode-switch">
                                                <span class="uk-switch-button"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="page-login.html">
                                            <i class="icon-feather-log-out"></i> Sing Out</a>
                                    </li>
                                </ul>


                            </div>


                        </div>



                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s"
                            uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>

                        <!-- User icons -->
                        <a href="#" class="uil-user icon-small uk-hidden@s"
                            uk-toggle="target: .header-widget ; cls: is-active">
                        </a>

                    </div>
                    <!-- End Right Side Content / End -->
                </nav>

            </div>
            <!-- container  / End -->
        </header>

        <!-- overlay seach on mobile-->
        <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden
            style="z-index: 10000;">
            <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
                href="#"></a>
        </div>



        <div class="page-content">

        <div class="diagonal-hero-bg uk-light" id="main_wrapper">
        <div class="diagonal-hero-innr">
            <div class="stars uk-flex" style="margin-bottom: 5%;">

                <div class="uk-flex-middle uk-width-1-1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <h1> Icommits Academy </h1> 
                        <h1> Belajar Lebih Mudah</h1>
                        <a href="" class="btn btn-danger">Request Demo</a>
                        <a href="" class="btn btn-primary">Whatch Vidio >> </a>
                    </div>
                    <div class="uk-width-2-3@m uk-visible@m hero-slider">
                    </div>

                </div>

                <div class="small"></div>
                <div class="medium"></div>
                <div class="big"></div>

            </div>
        </div>
    </div>

            <!-- Content
        ================================================== -->

            <div class="section">
                <div class="page-content-inner">

                    <div class="section-small text-md-left text-center">
                        <div class="uk-child-width-1-2@m uk-gird-large uk-flex-middle" uk-grid>
                            <div>
                                <img src="{{ asset('assets/images/feature.png') }}" alt="">
                            </div>
                            <div>
                                <h2>Learn to Skill  anytime <br> and everywhere </h1>
                                    <p> Mulai kelas pertama anda dan dapatkan diskon 80% untuk pembelian kelsa pertama anda
                                        <br>                                                                                -- Belahar dulu bayar nanti . </p>
                                    <a href="#" class="btn btn-soft-light"> Get started </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section-small delimiter-top">

                <div class="container-small">

                    <div class="text-center mb-5">
                        <h3> Kelas Favorit </h3>
                        <h5> Kelas yang banyak di pilih dan di rekomdasikan </h5>
                    </div>
                    <div class="course-grid-slider mt-lg-5" uk-slider="finite: true">
                        <div class="uk-slider-container pb-3">
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                <li>
                                    <a href="course-intro.html">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="{{ asset('assets/images/course/2.png') }}">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">Angular</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>
                                                <h4>Learn Angular Fundamentals </h4>
                                                <p> Learn how to build and launch React web applications using .. </p>
                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 12 Lectures </h5>
                                                    <h5> <i class="icon-feather-clock"></i> 64 Hours </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </a>

                                </li>
                                <li>
                                    <a href="course-intro.html">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="{{ asset('assets/images/course/3.png') }}">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">JavaScript</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>
                                                <h4>The Complete JavaScript </h4>
                                                <p> JavaScript is how you build interactivity on the web page... </p>
                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 14 Lectures </h5>
                                                    <h5> <i class="icon-feather-clock"></i> 55 Hours </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </a>

                                </li>
                                <li>
                                    <a href="course-intro.html">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="{{ asset('assets/images/course/1.png') }}">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">HTML</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>

                                                <h4>Ultimate Web Developer Course </h4>
                                                <p> HTML is the building blocks of the web. It gives pages structure ..
                                                </p>

                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                                                    <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="course-intro.html">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="{{ asset('assets/images/course/5.png') }}">
                                                <span class="play-button-trigger"></span>
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info">
                                                    <div>
                                                        <span class="catagroy">HTML</span>
                                                    </div>
                                                    <div>
                                                        <i class="icon-feather-bookmark icon-small"></i>
                                                    </div>
                                                </div>

                                                <h4>Ultimate Web Developer Course </h4>
                                                <p> HTML is the building blocks of the web. It gives pages structure ..
                                                </p>

                                                <div class="course-card-footer">
                                                    <h5> <i class="icon-feather-film"></i> 34 Lectures </h5>
                                                    <h5> <i class="icon-feather-clock"></i> 54 Hours </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                            </ul>


                            <a class="uk-position-center-left uk-position-small uk-hidden-hover slidenav-prev" href="#"
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover slidenav-next" href="#"
                                uk-slider-item="next"></a>

                        </div>
                    </div>

                    <div class="text-center">
                        <a href="#" class="btn btn-soft-light btn-small btn-circle"> View More Courses</a>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <div class="page-content-inner">

                    <h2 class="mb-4"> Dapatkan Demo E-Learning Sekolah Anda. </h2>
                    <img src="{{ asset('assets/images/feature-2.png') }}" alt="" class="my-lg-5">

                </div>
            </div>

            <div class="section bg-white">
                <div class="container-small">
                    <h2 class="text-center my-lg-6"> Request Demo E-Learning Free for 2 Mounth  </h2>
                    <form class="uk-grid-small d-flex align-items-end" uk-grid>
                        <div class="uk-width-1-3@s">
                            <div class="uk-form-label">Email </div>
                            <input class="uk-input" type="text" placeholder="Enter your email address">
                        </div>
                        <div class="uk-width-1-3@s">
                            <div class="uk-form-label">Password </div>
                            <input class="uk-input" type="password" placeholder="******">
                        </div>
                        <div class="uk-width-1-3@s">
                            <button class="btn  btn-danger  btn-lg"> Request Demo </button>
                        </div>
                        <div class="uk-width-1-1@s">
                            <label>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1"> 
                                        <span class="checkmark uk-text-small"> I agree to the </span>
                                <a href="pages-terms.html" target="_blank"
                                    class="uk-text-bold uk-text-small uk-link-reset">
                                    Terms and Conditions </a>

                                    </label>
                                </div>

                                
                            </label>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- footer
        ================================================== -->
        <div class="footer">
            <div class="container">
                <div uk-grid>
                    <div class="uk-width-1-3@m">
                        <a href="home.html" class="uk-logo">
                            <!-- logo icon -->
                            <i class="uil-graduation-hat"> </i>
                            Icommits Academy
                        </a>
                        <p class="footer-description"> Kemudahan Dalam Belajar jarak jauh</p>
                    </div>
                    <div class="uk-width-expand@s uk-width-1-2">
                        <div class="footer-links pl-lg-8">
                            <h5>Tentang kami</h5>
                            <ul>
                                <li><a href="#"> About </a></li>
                                <li><a href="#"> FAQ </a></li>
                                <li><a href="#"> Mitra </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-expand@s uk-width-1-2">
                        <div class="footer-links pl-lg-8">
                            <h5> Sosial </h5>
                            <ul>
                                <li><a href="profile-1.html"> Facebook </a></li>
                                <li><a href="#"> Instagram </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-expand@s uk-width-1-2">
                        <div class="footer-links pl-lg-8">
                            <h5> Lain nya </h5>
                            <ul>
                                <li><a href="#"> Request Demo  </a></li>
                                <li><a href=""> Kelas </a></li>
                                <li><a href=""> Syarat Dan Ketentuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand@s uk-first-column">
                        <p>© 2020 <strong>Mitra Academy</strong>. All Rights Reserved. </p>
                    </div>
                    <div class="uk-width-auto@s">
                        <nadashboardv class="footer-nav-icon">
                            <ul>
                                <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-brand-dribbble"></i></a></li>
                                <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                                <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>


    <!-- javaScripts
                ================================================== -->
    <script src="{{ asset('assets/js/framework.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>