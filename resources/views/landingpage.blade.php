<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Icommits') }}</title>

    <!-- Favicon -->
    <link href="{{ asset('assets/images/logo/logo-iadacemy.png') }}" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>

        .hero-slider {
            background-image: url(assets/images/demos/home-labtop.png);
            background-position: bottom;
            padding-top: 0;
            background-size: contain;
            background-repeat: no-repeat;
            height: 60vh;
            margin-top: 4%;
        }


        .hero {
            display: inline-block;
            width: 100%;
            position: relative;
            background: white;
        }

        .diagonal-hero-bg {
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to right, #2b5876, #2f2a44);
            background: -webkit-linear-gradient(to right, #2b5876, #2f2a44);
            z-index: -1;
        }

        .diagonal-hero-innr {
            padding-left: 10%;
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url(assets/images/demos/bg-pricing-page.jpg);

        }
        .rata{
            text-align: justify;
            font-weight: 600px;
            color: #000000;

        }
        .klick{
            text-align: center;
            font-size: 15px;
            color: rgb(0, 128, 255);
        }
    </style>
</head>
<body>
    @guest
        <div class="main-header header-transparent uk-light" uk-sticky="top: 100 ;animation: uk-animation-slide-top ;cls-inactive: header-transparent uk-light" id="faq">
            <div class="page-content-inner pt-0">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <div id="logo"><img src="assets/images/logo/logo-iadacemy.png"></div>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav demo-nav" uk-scrollspy-nav="closest: li; scroll: true">
                            <li class="uk-active"><a href="#main_wrapper">Home</a></li>
                            <li> <a href="#demos">Tentang Kami</a> </li>
                            <li><a href="#faq">FAQ</a> </li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                        <a href="#" class="btn btn-danger transition-3d-hover ml-3"> Request DEMO </a>
                    </div>
                </nav>
            </div>
        </div>
    @else
        <div class="main-header header-transparent uk-light" uk-sticky="top: 100 ;animation: uk-animation-slide-top ;cls-inactive: header-transparent uk-light" id="faq">
            <div class="page-content-inner pt-0">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <div id="logo"><img src="assets/images/logo/logo-iadacemy.png"></div>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav demo-nav" uk-scrollspy-nav="closest: li; scroll: true">
                            <li class="uk-active"><a href="#main_wrapper">Home</a></li>
                            <li><a href="#demos">Tentang Kami</a> </li>
                            <li><a href="#faq">FAQ</a> </li>
                            <li><a href="#">{{ Auth::user()->nama }}</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-danger transition-3d-hover ml-3"> Request DEMO </a>
                    </div>
                </nav>
            </div>
        </div>
    @endguest

    <div class="diagonal-hero-bg uk-light" id="main_wrapper">
        <div class="diagonal-hero-innr">
            <div class="stars uk-flex" style="margin-bottom: 5%;">

                <div class="uk-flex-middle uk-width-1-1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <h1> Icommits Academy </h1> 
                        <h3> Belajar lebih aktif dan asik dengan <b>active participant</b></h3>
                        <a href="" class="btn btn-danger">Request Demo</a>
                        <a href="" class="btn btn-primary">Kursus lainnya</a>
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
 
    <!-- start course  -->
     <div class="page-content">
        <div class="container">
            <h1>Kelas Pemograman</h1>
            <h4> Kelas Web Develover <a href="#">Pemograman</a> </h4>
            <div class="section-small">
                <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid" uk-grid>
                    <div>
                        <a href="/mitra">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/2.png">
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
                                    <p> Belajar Angular Bersama Nazira, Programer smooth  </p>
                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 12 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 32 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/3.png">
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
                                    <h4>Belajar Basic JavaScript </h4>
                                    <p> Belajar JavaScript Besama Isan Hamidan ,Front end developer Icommits  </p>
                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 14 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 7 Hours </h5>
                                    </div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/1.png">
                                    <span class="play-button-trigger"></span>
                                </div>
                                <div class="course-card-body">
                                    <div class="course-card-info">
                                        <div>
                                            <span class="catagroy">CSS</span>
                                        </div>
                                        <div>
                                            <i class="icon-feather-bookmark icon-small"></i>
                                        </div>
                                    </div>

                                    <h4>Belajar Basic CSS</h4>
                                    <p>Belajar CSS  bersama Isan Hamidan, FrontEnd Web Develover Icommits</p>

                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 30 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i>8 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/5.png">
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

                                    <h4>Basic HTML</h4>
                                    <p> Belajar Basic HTML Bersama Rudi, Web Design Pengusahacerdas.com</p>

                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 34 Lectures </h5>
                                        <h5> <i class="icon-feather-clock"></i> 54 Hours </h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-header pb-0 mt-5">
                <div class="section-header-left">
                    <h4> Kelas Rekomendasi <a href="courses.html">Rekomendasi</a> </h4>
                </div>
                <div class="section-header-right">

                    <a href="#" class="btn-filter" uk-tooltip="title: Course Filter ; pos:  top-right"
                        uk-toggle="target: #course-filter">
                        <i class="icon-feather-filter"></i>
                    </a>
                    <div class="display-as">
                        <a href="#" uk-tooltip="title: Course list; pos: top-right">
                            <i class="icon-feather-grid"></i></a>
                        <a href="#" class="active" uk-tooltip="title: Course Grid; pos: top-right">
                            <i class="icon-feather-list"></i></a>
                    </div>

                    <select class="selectpicker ml-3">
                        <option value=""> Rekomendasi </option>
                        <option value="1">Popular</option>
                        <option value="2">FREE</option>
                        <option value="3">Premium</option>
                    </select>

                </div>
            </div>

            <div class="section-small">

                <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid uk-grid-match" uk-grid>

                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/1.png">
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
                                    <p> HTML is the building blocks of the web. It gives pages structure</p>

                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 33 Topoik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 22 jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/3.png">
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
                                    <h4>The Complete JavaScript From </h4>
                                    <p> JavaScript is how you build interactivity on the web...
                                        learn </p>
                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 11 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 7 jam </h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/2.png">
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
                                        <h5> <i class="icon-feather-film"></i> 10 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 3 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/6.png">
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
                                    <h4>Learn Modern HTML & CSS </h4>
                                    <p> HTML is the building blocks of the web. It gives pages structure</p>

                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 10 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 5 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/5.png">
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
                                    <p> HTML is the building blocks of the web. It gives pages structure</p>

                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 30 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 8 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/4.png">
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
                                        <h5> <i class="icon-feather-film"></i> 10  Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 5 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/7.png">
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
                                    <h4>Bootstrap Introduction</h4>
                                    <p> Learn how to build your website using latest Bootstrap Modern ..</p>
                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 20 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 7 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="" style="margin-bottom: 40px">
                            <div class="course-card">
                                <div class="course-card-thumbnail ">
                                    <img src="assets/images/course/1.png">
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
                                    <p> HTML is the building blocks of the web. It gives pages structure</p>

                                    <div class="course-card-footer">
                                        <h5> <i class="icon-feather-film"></i> 13 Topik </h5>
                                        <h5> <i class="icon-feather-clock"></i> 4 Jam </h5>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="course-resume-wrapper topic-1" id="demos">
        <div class="container">
            <div class="uk-grid-large uk-light mt-lg-3" uk-grid>
                <div class="uk-width-1-2@m">     
                    <img src="assets/images/blog/img-8.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <div class="uk-width-1-2@m course-details">
                    <h2> Why Icommits Academy ? </h2>
                        <p style="text-align: justify">Latih karyawan, mitra, dan pelanggan secara efektif dengan LMS generasi berikutnya. Memberikan pengalaman belajar yang ditingkatkan & menyenangkan bagi pelajar Anda. Kurangi kesenjangan keterampilan untuk mengelola ekosistem pelajar yang terlibat, patuh, dan diperbarui. Manfaatkan media pembelajaran  yang bisa diintegrasikan dengan sistem yang lain semuanya untuk mendorong pembelajaran blended learning dalam alur kerja dan memungkinkan rekan kerja untuk saling belajar
                        </p>
                    <br>
                    <h5>
                        Rasakan LMS terbaik  dari Icommits yaitu:
                    </h5>
                    <ul>
                        <li>Diadopsi oleh beberapa instansi multinasional</li>
                        <li>Bisa diintegrasikan dengan Sistem Informasi atau aplikasi yang lainnya</li>
                        <li>Dapat memantau laporan keaktifan peserta didik</li>
                        <li>Terdapat Akun Multi Level User yang memudahkan pembagian tugas</li>
                    </ul>
                    <div class="uk-flex uk-flex-between uk-flex-middle">
                        <a href="#" class="btn-course-start-2 my-lg-4 mt-3"> Request Demo
                            <i class="icon-feather-chevron-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->        
      
    <div class="page-content" style="padding-top: 30px;">
        <div class="page-content-inner">
            <div class="uk-child-width-1-2@m uk-flex-top" uk-grid>
                <div class="rata">
                    <h2>Memperkenalkan participant activities</h2>
                    <strong>Dorong pembelajaran peserta dengan mengetahui keaktifan mereka.  </strong>

                    <p>Menyediakan platform participant activities untuk peserta didik Anda untuk mendukung keaktifan mereka dengan rekan-rekan secara informal dan mendorong budaya pembelajaran yg kolaboratif.</p>
                    <a href="#"><span class="klick">Pelajari lebih lanjut tentang <b>participant activities</b> di Icommits Academy LMS >>> </span></a>
                </div>

                <!-- Intro banner container  -->
                <div style="padding-bottom: 30px">

                    <img src="assets/images/blog/img-8.jpg" class="img-fluid" alt="Responsive image">
                
                </div>

            </div>
        </div>
    </div>

    <div class="page-content" style="padding-top: 30px;">
        <div class="page-content-inner">
        
            <div class="uk-child-width-1-2@m uk-flex-top" uk-grid>

                <div style="padding-bottom: 30px">

                    <img src="assets/images/blog/img-8.jpg" class="img-fluid" alt="Responsive image">
                
                </div>

                <div class="rata">
                    <h2>Multi Level User Account</h2>
                    <strong>Membagi wewenang tugas di akun aplikasi untuk memudahkan mengambil keputusan. </strong>

                    <p>Tingkatkan efektivitas dengan fitur multi level user account  dalam menggunakan LMS dengan memberikan wewenang untuk organisasi, trainer dan peserta yang dapat disesuaikan untuk memenuhi kebutuhan organisasi anda</p>
                    <a href="#"><span class="klick">Pelajari lebih lanjut tentang <b>multi level user account</b> di Icommits Academy LMS >>> </span></a>
                </div>

            </div>
        </div>
    </div>

    <div class="page-content" style="padding-top: 30px; padding-bottom: 20px">
        <div class="page-content-inner">
        
        
        </div>
    </div>

    <div class="page-content" style="padding-top: 30px;">
        <div class="page-content-inner">
            <div class="uk-child-width-1-2@m uk-flex-top" uk-grid>
                <div class="rata">
                    <h2>Memperluas Pembelajaran</h2>
                    <strong>Kelola pelatihan yang komprehensif bagi perusahaan dan mitra organisasi kita.</strong>

                    <p>Tingkatkan keterampilan dan tingkatkan efektivitas mitra anda dengan memperluas  pembelajaran Anda ke ekosistem eksternal Anda. Berilah wewenang dengan fitur multi level user account untuk mereka sendiri dari LMS yang dapat disesuaikan, sambil memiliki pandangan luas tentang inisiatif pembelajaran di seluruh kelompok. Berikan peserta didik akses ke kursus yang dikembangkan sendiri, tersedia di Icommits Acadey LMS atau yang ditawarkan oleh penyedia konten pihak ketiga lainnya.</p>
                    <a href="#"><span class="klick">Pelajari lebih lanjut tentang <b>multi level user account </b> di Icommits Academy LMS >>> </span></a>
                </div>

                <!-- Intro banner container  -->
                <div style="padding-bottom: 30px">

                    <img src="assets/images/blog/img-8.jpg" class="img-fluid" alt="Responsive image">
                
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="container-small" >
    <h2 class="uk-text-center uk-margin-remove-adjacent uk-margin-remove-bottom" uk-scrollspy="cls:uk-animation-fade">REVIWER</h2>
        <div class="uk-child-width-1-4@m uk-visible@m uk-text-center uk-text-bold uk-margin-xlarge-bottom uk-margin-large-top" uk-scrollspy="cls: uk-animation-scale-up; target: > div ; delay: 100;repeat:true" uk-grid>
            <div>
                <div class="uk-card-default uk-card-hover uk-card-body rounded-lg  ">
                    <img src="assets/images/patner/capterra-logo.png" class="scale-up-medium mb-3" width="100" alt="">
                    <p>
                        <div class="star-rating">
                            <span class="avg"> 4.9 </span> 
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                    </div>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card-default uk-card-hover uk-card-body rounded-lg ">
                <img src="assets/images/patner/elarning-industri-logo.png" class="scale-up-medium mb-4" width="100" alt="">
                <p>
                        <div class="star-rating">
                            <span class="avg"> 4.9 </span> 
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                    </div>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card-default uk-card-hover uk-card-body rounded-lg ">
                    <img src="assets/images/patner/g2-crowd-logo.png" class="scale-up-medium mb-3" width="100" alt="">
                    <p>
                        <div class="star-rating">
                            <span class="avg"> 4.9 </span> 
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                    </div>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card-default uk-card-hover uk-card-body rounded-lg ">
                    <img src="assets/images/patner/gutner_peenerinsight-logo.png" class="animate-this mb-3" width="100" alt="">
                    <p>
                        <div class="star-rating">
                            <span class="avg"> 4.9 </span> 
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                    </div>
                    </p>
                </div>
            </div>
        </div>

    </div> -->

    <div class="page-content-inner">
        <h2 class="uk-text-center uk-margin-remove-adjacent uk-margin-remove-bottom" uk-scrollspy="cls:uk-animation-fade">Langganan E-Learning</h2>
        <ul class="uk-subnav pricing-swicher my-4"
            uk-switcher="connect: #change-plan ;animation: uk-animation-slide-top-medium, uk-animation-scale-up">
            <li><a href="#">Bulan</a></li>
            <li><a href="#">Tahun <span>Harga Special</span> </a></li>
        </ul>
        <!-- Pricing Plans Container -->
        <div class="pricing-plans-container">

            <!-- Plan -->
            <div class="pricing-plan">
                <h3>Trial</h3>
                <p>Trial E-Learning Sekolah Selama 3 bulan</p>
                <ul class="uk-switcher" id="change-plan">
                    <li>
                        <div class="pricing-plan-label"><strong>Trial</strong>/ 3 Bulan</div>
                    </li>
                    <li>
                        <div class="pricing-plan-label"><strong>Trial</strong></div>
                    </li>
                </ul>
                <div class="pricing-plan-features">
                    <strong>Benefit</strong>
                    <ul>
                        <li>40 Login Siswa </li>
                        <li>Materi Up to 2 Gb</li>
                        <li>Free Hoting Up to 2 GB</li>
                        <li>Free Subdomain</li>
                    </ul>
                </div>
                <a href="pages-checkout-page.html" class="btns">Pesan</a>
            </div>

            <!-- Plan -->
            <div class="pricing-plan recommended">
                <div class="recommended-badge">Recommended</div>
                <h3>Sekolah</h3>
                <p>Harga Khusus untuk sekolah  .</p>
                <ul class="uk-switcher" id="change-plan">
                    <li>
                        <div class="pricing-plan-label billed-monthly-label"><strong>Rp.60.000</strong>/ Bulan
                        </div>
                    </li>
                    <li>
                        <div class="pricing-plan-label billed-yearly-label"><strong>Rp650.000</strong>/ Tahun
                        </div>
                    </li>
                </ul>
                <div class="pricing-plan-features">
                    <strong>Benefit</strong>
                    <ul>
                        <li>1000 Login Siswa </li>
                        <li>Upload Materi up to 50gb </li>
                        <li>Free Hosting Up to 50gb </li>
                        <li>Free Domain</li>
                        <li>Free Ujian Online</li>
                        <li>Free Penilaian Guru</li>
                        <li>Free Maintenance 1 Tahun</li>
                        <li>Free Course Skill Coding</li>
                        <li>Free Subdomain dan hosting</li>
                        <li>Free landing Page Sekolah</li>
                    </ul>
                </div>
                <a href="pages-checkout-page.html" class="btns">Pesan</a>
            </div>

            <!-- Plan -->
            <div class="pricing-plan">
                <h3>Harga Khusus</h3>
                <p>Harga New Normal Untuk </p>
                <ul class="uk-switcher" id="change-plan">
                    <li>
                        <div class="pricing-plan-label billed-monthly-label"><strong>Rp.30.000</strong>/ Bulan
                        </div>
                    </li>
                    <li>
                        <div class="pricing-plan-label billed-yearly-label"><strong>Rp 320.000</strong>/ Tahun
                        </div>
                    </li>
                </ul>
                <div class="pricing-plan-features">
                    <strong>Features of For Teams</strong>
                    <ul>
                        <li>100 Login Siswa </li>
                        <li>Free Hoting Up To 10gb</li>
                        <li>Free Subdomain</li>
                        <li>Dapat Upload Materi</li>
                        <li>Free Maintenance 3 Tahun</li>
                        <li>Free Subdomain dan hosting</li>
                    </ul>
                </div>
                <a href="pages-checkout-page.html" class="btns">Buy Now</a>
            </div>
        </div>

        <div class="section">
            <div class="text-center mb-lg-5 pb-2 delimiter-bottom">
                <span class=" ">Faq</span>
                <h2 class="mt-3">Frequently asked question :</h2>
            </div>

            <div class="uk-child-width-1-2@s" uk-grid>

                <div>
                    <h4>Bagaimana cara Request Demo</h4>
                    <p></p>
                </div>

                <div>
                    <h4>Apa itu Icommits Academy ?</h4>
                    <p></p>
                </div>

                <div>
                    <h4>Apa itu Mitra Icommits Academy?</h4>
                    <p></p>
                </div>

                <div>
                    <h4>Masalah E-Learning Icommits Academy?</h4>
                    <p></p>
                </div>

                <div>
                    <h4>Metode Pembayaran?</h4>
                    <p></p>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->         
    <div class="uk-container uk-align-center uk-margin-remove-bottom uk-position-relative uk-margin-medium-top">         
        <hr> 
        <p class="uk-postion-absoult uk-margin-remove uk-position-bottom-right" style="bottom: 8px;right: 60px;" uk-tooltip="title: Visit Our Site; pos: top-center"> Powered By <a href="#" class="uk-text-bold uk-link-reset"> Icommits Academy</a></p> 
        <div class="uk-margin-small" uk-grid> 
            <div class="uk-width-1-2@m uk-width-1-2@s uk-first-column">  
            </div>                     
            <div class="uk-width-1-3@m uk-width-1-2@s"> 
                <a href="#" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Youtube Chanal; pos: top-center"><i class="fab fa-youtube" style=" color: #fb7575  !important;"></i></a> 
                <a href="#" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Facebook; pos: top-center"><i class="fab fa-Facebook" style=" color: #9160ec  !important;"></i></a> 
                <a href="#" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Instagram; pos: top-center"><i class="fab fa-Instagram" style=" color: #dc2d2d  !important;"></i></a> 
                <a href="#" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our linkedin; pos: top-center"><i class="fab fa-linkedin " style=" color: #6949a5  !important;"></i></a> 
                <a href="#" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our google-plus; pos: top-center"><i class="fab fa-google-plus" style=" color: #f77070 !important;"></i></a> 
                <a href="#" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Twitter; pos: top-center"><i class="fab fa-twitter" style=" color: #6f23ff !important;"></i></a> 
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
    <script src="{{ asset('assets/js/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
</body>
</html>