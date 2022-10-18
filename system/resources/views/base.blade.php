{{-- @include('assets/theme') --}}

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>{{ $dataheader['data'][0]['nama_website'] }}</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('public/assets') }}/images/favicon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/LineIcons.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/font-awesome.min.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ url('public/assets') }}/css/style.css">

    {{-- map --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
</head>

<body>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="https://i.postimg.cc/vTV2S2Qt/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#beranda">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#tentang">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#nakes">Nakes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#layanan">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#berita">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#kontak">Kontak</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="#pricing">Pendaftaran</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="beranda" class="header-hero bg_cover" style="background-image: url({{ url('public/assets') }}/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Selamat Datang</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">{{ $dataheader['data'][0]['text_utama'] }}</h2>
                            <!-- <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Anda Sakit ya wkwk</p>
                            <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Pendaftaran</a> -->
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                               <img src="http://127.0.0.1:8000/{{ $dataheader['data'][0]['img_background_utama'] }}"  alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    
     <!--====== TENTANG PART START ======-->
    
     <section class="about-area pt-70" id="tentang">
        <div class="about-shape-2">
            <img src="{{ url('public/assets') }}/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <p class="text">Selamat Datang</p>
                        <div class="section-title pb-40">
                            <div class="line"></div>
                            <h3 class="title">Rumah Sakit Umum Daerah  <span>{{ $datacontent['data'][0]['judul'] }}</span></h3>
                        </div> <!-- section title -->
                        <!-- <h4>Rumah Sakit Umum Daerah Sultan Muhamamad Jamaludin I </h4> -->
                        <p class="text">{{ $datacontent['data'][0]['tentang'] }}</p>
                        <!-- <a href="#" class="main-btn">Try it Free</a> -->
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="http://127.0.0.1:8000/{{ $datacontent['data'][0]['selayang'] }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TENTANG PART START ======-->

    <!--====== LAYANAN PART START ======-->
    
    <section id="layanan" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Layanan Kami</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="{{ url('public/assets') }}/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="{{ url('public/assets') }}/images/services-shape-1.svg" alt="shape">
                            <i class="lni-baloon"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">ICU</a></h4>
                            <p class="text">RSUD Sultan Muhammad Jamaludin 1 memilki fasilitas ICU atau Intensive Care Unit. Dengan perlengkapan yang memadai serta pelayanan yang professional dan juga pelayanan yang sepenuh hati..</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="{{ url('public/assets') }}/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="{{ url('public/assets') }}/images/services-shape-2.svg" alt="shape">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Laboratorium</a></h4>
                            <p class="text">RSUD Sultan Muhammad Jamaludin 1memiliki fasilitas labolatorium yang lengkap dan menggunakan perlatan dengan teknologi yang canggih dan terkini. Disertai dengan dokter dan petugas yang professional.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="{{ url('public/assets') }}/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="{{ url('public/assets') }}/images/services-shape-3.svg" alt="shape">
                            <i class="lni-bolt-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">IGD</a></h4>
                            <p class="text">Instalasi Gawat Darurat (IGD) merupakan Instalasi yang melayani pasien dalam kondisi gawat darurat. Pelayanan dibuka 24 jam secara terus menerus.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== LAYANAN PART ENDS ======-->

    <!--====== NAKES PART START ======-->
    
    <section id="nakes" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Tenaga Kesehatan</span><br> Tim Tenaga Kesehatan Kami</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="https://rsudsmjamaludin.kayongutarakab.go.id/public/app/img/team/update_9-1648389255-team-38.png" alt="Team" >
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Isabela Moreira</a></h5>
                            <p class="text">Founder and CEO</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="https://rsudsmjamaludin.kayongutarakab.go.id/public/app/img/team/update_9-1648389255-team-38.png" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Elon Musk</a></h5>
                            <p class="text">Sr. Software Engineer</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="https://rsudsmjamaludin.kayongutarakab.go.id/public/app/img/team/update_9-1648389255-team-38.png" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Fiona Smith</a></h5>
                            <p class="text">Business Development Manager</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="https://rsudsmjamaludin.kayongutarakab.go.id/public/app/img/team/update_9-1648389255-team-38.png" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Fiona Smith</a></h5>
                            <p class="text">Business Development Manager</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== NAKES PART ENDS ======-->
     
    <!--====== LAYANAN PART START ======-->
    
    <section id="layanan" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>BUTUH UNTUK PERIKSA KESEHATAN?</span><br> Gunakan Pendaftaran Online! </h3>
                            <h3 class="title"><span>Hubungi kami:</span><br> +625343031383 </h3>
                        </div> <!-- section title -->
                        <a href="#" class="main-btn">Pendaftaran Online</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ url('public/assets') }}/images/about1.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{ url('public/assets') }}/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== LAYANAN PART ENDS ======-->
    
     <!--====== WORK PART START ======-->

     <section id="work" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-25">
                        <h2 class="title">Galery Kami</h2>
                        <p>Apa sih yang dimaksud dengan kata atau istilah galeri? Glosarium.org mengumpulkan beberapa pengertian atau arti dari kata tersebut pada beberapa kamus dan subjek berikut ini: Malaysia, KBBI, dll.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <?php foreach ($datagambar['data'] as $key => $datagambar) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-work text-center mt-30">
                            <div class="work-image">
                                <img src="http://127.0.0.1:8000/{{ $datagambar['image'] }}" alt="work">
                            </div>
                            <div class="work-overlay">
                                <div class="work-content">
                                    <h3 class="work-title">Product Design</h3>
                                    <ul>
                                        <li><a class="image-popup" href="http://127.0.0.1:8000/{{ $datagambar['image'] }}"><i class="lni-plus"></i></a></li>
                                        <li><a href="#"><i class="lni-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                <?php } ?>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-more text-center mt-50">
                        <a class="main-btn" href="#">more works</a>
                    </div> <!-- work more -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->

    <!--====== BERITA PART START ======-->
    
    <section id="berita" class="blog-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-35">
                        <div class="line"></div>
                        <h3 class="title"><span>BERITA</span><br>Artikel dan Berita terbaru ni</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <?php foreach ($databerita['data'] as $key => $databerita) { ?>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="blog-image">
                                <img src="http://127.0.0.1:8000/{{ $databerita['poto'] }}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li>Posted By: <a href="#">{{ $a }}</a></li>
                                    <li>03 June, 2023</li>
                                </ul>
                                <p class="text">{{ $databerita['judul'] }}</p>
                                <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                            </div>
                        </div> <!-- single blog -->
                    </div> 
                <?php } ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BERITA PART ENDS ======-->
    
    <!--====== BRAMD PART START ======-->
    
    <div class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="{{ url('public/assets') }}/images/brand-1.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{ url('public/assets') }}/images/brand-2.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="{{ url('public/assets') }}/images/brand-3.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="{{ url('public/assets') }}/images/brand-4.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="{{ url('public/assets') }}/images/brand-5.png" alt="brand">
                        </div> <!-- single logo -->
                    </div> <!-- brand logo -->
                </div>
            </div>   <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== BRAMD PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <footer id="kontak" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <label class="title" for="">Koordinat Maps</label>
                    <div id="map" style="height: 50vh; width: 100%"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Subscribe Our Newsletter <span>get reguler updates</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                 </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="https://i.postimg.cc/vTV2S2Qt/logo.png" alt="logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#beranda">Beranda</a></li>
                                    <li><a href="#tentang">Tentang</a></li>
                                    <li><a href="#nakes">Nakes</a></li>
                                    <li><a href="#layanan">Layanan</a></li>
                                    <li><a href="#berita">Berita</a></li>
                                    <li><a href="#kontak">Kontak</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>{{ $datafooter['data'][0]['telepon'] }}</li>
                                <li>{{ $datafooter['data'][0]['email'] }}</li>
                                <li>www.yourweb.com</li>
                                <li>{{ $datafooter['data'][0]['alamat'] }}</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->

    {{-- <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">a</div>
            </div>
        </div>
    </section> --}}
    
    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ url('public/assets') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ url('public/assets') }}/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{ url('public/assets') }}/js/popper.min.js"></script>
    <script src="{{ url('public/assets') }}/js/bootstrap.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="{{ url('public/assets') }}/js/plugins.js"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ url('public/assets') }}/js/slick.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ url('public/assets') }}/js/ajax-contact.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{ url('public/assets') }}/js/waypoints.min.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery.counterup.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ url('public/assets') }}/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{ url('public/assets') }}/js/jquery.easing.min.js"></script>
    <script src="{{ url('public/assets') }}/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="{{ url('public/assets') }}/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="{{ url('public/assets') }}/js/particles.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="{{ url('public/assets') }}/js/main.js"></script>
    {{-- map --}}
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
    integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script>
        var cities = L.layerGroup();

        var mLittleton = L.marker([{{ $datafooter['data'][0]['posisi'] }}]).bindPopup('This is Littleton, C.').addTo(cities);
        // var mDenver = L.marker([-1.8435038, 109.9782028]).bindPopup('This is Denver, CO.').addTo(cities);

        var mbAttr =
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
        var mbUrl =
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var map = L.map('map', {
            center: [{{ $datafooter['data'][0]['posisi'] }}],
            zoom: 5,
            layers: [osm, cities]
        });

        var baseLayers = {
            'OpenStreetMap': osm,
            'Streets': streets
        };

        var overlays = {
            'Cities': cities
        };

        var layerControl = L.control.layers(baseLayers, overlays).addTo(map);
        // var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.');
        // var rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');

        var parks = L.layerGroup([crownHill, rubyHill]);

        var satellite = L.tileLayer(mbUrl, {
            id: 'mapbox/satellite-v9',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });
        layerControl.addBaseLayer(satellite, 'Satellite');
        layerControl.addOverlay(parks, 'Parks');
    </script>
</body>

</html>
