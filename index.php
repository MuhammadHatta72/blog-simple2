<?php
require 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title>Home - Rania Rahmi Blog</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet">

    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <style>
        #news-slider {
            margin-top: 10px;
        }

        .post-slide {
            background: #fff;
            margin: 20px 15px 20px;
            border-radius: 15px;
            padding-top: 1px;
            box-shadow: 0px 14px 22px -9px #bbcbd8;
        }

        .post-slide .post-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px 10px 0px 0px;
            width: 100%;
        }

        .post-slide .post-img img {
            width: 100%;
            height: auto;
            transform: scale(1, 1);
            transition: transform 0.2s linear;
        }

        .post-slide:hover .post-img img {
            transform: scale(1.1, 1.1);
        }

        .post-slide .over-layer {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            background: linear-gradient(-45deg, rgb(242 223 58) 0%, rgb(58 180 242 / 48%) 100%);
            transition: all 0.50s linear;
        }

        .post-slide:hover .over-layer {
            opacity: 1;
            text-decoration: none;
        }

        .post-slide .over-layer i {
            position: relative;
            top: 45%;
            text-align: center;
            display: block;
            color: #fff;
            font-size: 25px;
        }

        .post-slide .post-content {
            background: #fff;
            padding: 2px 20px 40px;
            border-radius: 15px;
        }

        .post-slide .post-title a {
            font-size: 15px;
            font-weight: bold;
            color: #333;
            display: inline-block;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }

        .post-slide .post-title a:hover {
            text-decoration: none;
            color: #3498db;
        }

        .post-slide .post-description {
            line-height: 24px;
            color: #808080;
            margin-bottom: 25px;
        }

        .post-slide .post-date {
            color: #a9a9a9;
            font-size: 14px;
        }

        .post-slide .post-date i {
            font-size: 20px;
            margin-right: 8px;
            color: #CFDACE;
        }

        .post-slide .read-more {
            padding: 7px 20px;
            float: right;
            font-size: 12px;
            background: #F2DF3A;
            color: #ffffff;
            box-shadow: 0px 10px 20px -10px #1376c5;
            border-radius: 25px;
            text-transform: uppercase;
        }

        .post-slide .read-more:hover {
            background: #3498db;
            text-decoration: none;
            color: #fff;
        }

        .owl-controls .owl-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .owl-controls .owl-buttons .owl-prev {
            background: #fff;
            position: absolute;
            top: -13%;
            left: 15px;
            padding: 0 18px 0 15px;
            border-radius: 50px;
            box-shadow: 3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }

        .owl-controls .owl-buttons .owl-next {
            background: #fff;
            position: absolute;
            top: -13%;
            right: 15px;
            padding: 0 15px 0 18px;
            border-radius: 50px;
            box-shadow: -3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }

        .owl-controls .owl-buttons .owl-prev:after,
        .owl-controls .owl-buttons .owl-next:after {
            content: "\f104";
            font-family: FontAwesome;
            color: #333;
            font-size: 30px;
        }

        .owl-controls .owl-buttons .owl-next:after {
            content: "\f105";
        }

        @media only screen and (max-width:1280px) {
            .post-slide .post-content {
                padding: 0px 15px 25px 15px;
            }
        }
    </style>

</head>

<body id="section_1">

    <header class="site-header">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3 col-md-4 col-7">
                    <p class="text-white mb-0">
                        <i class="bi-envelope-fill site-header-icon me-2"></i>
                        raniaandhita@gmail.com
                    </p>
                </div>

                <div class="col-lg-3 col-md-5 col-5">
                    <p class="text-white mb-0">
                        <i class="bi-telephone site-header-icon me-2"></i>
                        0823-3878-7497
                    </p>
                </div>

                <div class="col-lg-3 col-md-3 col-12 ms-auto">
                    <ul class="social-icon">
                        <li><a href="https://www.youtube.com/@raniarahmi8757" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-white shadow-lg">
        <div class="container">

            <a href="./index.php" class="navbar-brand">Rania <span style="color:#3AB4F2;">Rahmi</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Study</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Contact</a>
                    </li>
                </ul>
                <div>

                </div>
    </nav>

    <main>

        <section class="hero">
            <div class="container-fluid h-100">
                <div class="row h-100">

                    <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container position-relative h-100">
                                    <div class="carousel-caption d-flex flex-column justify-content-center">
                                        <small class="small-title">Introducing Rania Rahmi Blog</small>

                                        <h1>Selamat Datang Di Blog <span style="color: #F2DF3A;">Rania</span><span style="color: #0078AA;"> Rahmi</span></h1>

                                        <div class="d-flex align-items-center mt-4">
                                            <a class="custom-btn btn custom-link" href="#section_2">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-image-wrap">
                                    <img src="images/slide/slider1.jpg" class="img-fluid carousel-image" alt="">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="container position-relative h-100">
                                    <div class="carousel-caption d-flex flex-column justify-content-center">
                                        <small class="small-title">Introducing Rania Rahmi Blog</small>

                                        <h1>Selamat Datang Di Blog <span style="color: #F2DF3A;">Rania</span><span style="color: #0078AA;"> Rahmi</span></h1>

                                        <div class="d-flex align-items-center mt-4">
                                            <a class="custom-btn btn custom-link" href="#section_2">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-image-wrap">
                                    <img src="images/slide/slider2.jpg" class="img-fluid carousel-image" alt="">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <div class="about-image-wrap h-100">
                            <img src="images/girl.jpg" class="img-fluid about-image" alt="">

                            <div class="about-image-info">
                                <h4 class="text-white">Rania Rahmi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 d-flex flex-column">
                        <div class="about-thumb bg-white shadow-lg">

                            <div class="about-info">
                                <small class="small-title">Sekilas</small>

                                <h2 class="mb-3">Tentang Saya</h2>

                                <p>Anak pertama yang dilahirkan di kota Gresik, 22 Maret 2004 dan hanya memiliki 1 saudara laki-laki.</p>

                                <p>Saya saat ini tengah melanjutkan pendidikan S1 dengan Program Studi Hukum, tepatnya di Universitas Muhammadiyah Malang. Saya pribadi pun dikenal orang lain sebagai orang yang perfeksionis namun sering panik ketika tergesa-gesa.</p>
                            </div>
                        </div>

                        <div class="row h-100">
                            <div class="col-lg-6 col-6">
                                <div class="about-thumb d-flex flex-column justify-content-center mb-lg-0 h-100" style="background-color: #3AB4F2;">

                                    <div class="about-info">
                                        <h5 class="text-white mb-4">Pendidikan Saya</h5>

                                        <a class="custom-btn btn custom-bg-primary" href="#section_3">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6">
                                <div class="about-thumb d-flex flex-column justify-content-center mb-lg-0 h-100" style="background-color: #F2DF3A;">

                                    <div class="about-info">
                                        <h5 class="text-white mb-4">Motto Saya</h5>

                                        <p class="text-white mb-0">Diatas Langit masih ada langit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                        <small class="small-title">Pendidikan</small>

                        <h2>Riwayat Pendidikan</h2>

                    </div>

                    <div class="col-lg-6 col-12">
                        <nav>
                            <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="true">
                                    <h3>Sekolah Dasar (SD)</h3>

                                    <span>Pada Tahun 2010-2016.</span>
                                </button>

                                <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab" data-bs-target="#nav-strategy" type="button" role="tab" aria-controls="nav-strategy" aria-selected="false">
                                    <h3>Sekolah Menengah Pertama (SMP)</h3>

                                    <span>Pada Tahun 2017-2019.</span>
                                </button>

                                <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                                    <h3>Sekolah Menengah Atas (SMA)</h3>

                                    <span>Pada Tahun 2020-2022.</span>
                                </button>
                            </div>
                        </nav>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-intro-tab">
                                <img src="images/study/SD.jpg" class="img-fluid" alt="">

                                <h5 class="mt-4 mb-2">Pengalaman Sekolah Dasar</h5>

                                <p>Tepatnya dari tahun 2010-2016 bersekolah di SD Muhammadiyah Plus, Kota Mojokerto.
                                    Pengalaman menyedihkan yang pernah dialami salah satunya adalah takut bertemu orang baru, padahal notabenenya adalah supir dari angkutan sekolah.
                                </p>
                            </div>

                            <div class="tab-pane fade show" id="nav-strategy" role="tabpanel" aria-labelledby="nav-strategy-tab">
                                <img src="images/study/SMP.jpg" class="img-fluid" alt="">

                                <h5 class="mt-4 mb-2"> Sekolah Menengah Pertama</h5>

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <p>Tepatnya di SMPN 2, yang mana menempuh sejak 2017-2019.</p>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <p>Pengalaman menariknya selama bersekolah disini ialah bertemu teman-teman yang kini menjadi seorang sahabat.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                                <img src="images/study/SMA.jpg" class="img-fluid" alt="">

                                <h5 class="mt-4 mb-2">Sekolah Menengah Atas (SMA)</h5>

                                <p>Tepatnya di SMAN 2, sejak 2020-2022.
                                    Pengalaman lucunya selama bersekolah SMA ini adalah saya jatuh karena kecerobohan sendiri sehingga membuat seisi kelas tertawa karena hal ini.</p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="projects section-padding pb-0" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto mb-2">
                        <small class="small-title">Blog</small>

                        <h2>Blog Me</h2>
                    </div>
                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">

                            <?php
                            $queryAllBlogs = mysqli_query($connect, "SELECT * FROM blogs");
                            while ($rowBlog = mysqli_fetch_assoc($queryAllBlogs)) {
                            ?>
                                <div class="post-slide">
                                    <div class="post-img">
                                        <img src="./images/blogs/<?= $rowBlog['picture']; ?>" alt="">
                                        <a href="./detailBlog.php?id=<?= $rowBlog['id_blog']; ?>" class="over-layer"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="./detailBlog.php?id=<?= $rowBlog['id_blog']; ?>"><?= substr($rowBlog['title'], 0, 25); ?>...</a>
                                        </h3>
                                        <p class="post-description"><?= substr($rowBlog['description'], 0, 50); ?>...</p>
                                        <span class="post-date"><i class="fa fa-clock-o"></i><?= $rowBlog['date_update'] ?></span>
                                        <a href="./detailBlog.php?id=<?= $rowBlog['id_blog']; ?>" class="read-more">read more</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="section_5">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#F2DF3A" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>

            <div class="contact-container-wrap">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Rania <span style="color:#3AB4F2;">Rahmi</h2>
                            <p class="text-white mb-3">
                                <i class="bi-map site-header-icon me-2"></i>
                                Jl. Bunga Andong Barat, Jatimulyo, Kec. Lowokwaru, Kota Malang, 65141
                            </p>
                            <p class="text-white mb-3">
                                <i class="bi-envelope-fill site-header-icon me-2"></i>
                                raniaandhita@gmail.com
                            </p>
                            <p class="text-white mb-3">
                                <i class="bi-telephone site-header-icon me-2"></i>
                                0823-3878-7497
                            </p>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="contact-thumb">

                                <div class="contact-info bg-white shadow-lg">
                                    <!-- Copy "embed a map" HTML code from any point on Google Maps -> Share Link  -->

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.483165928258!2d112.61521941415629!3d-7.948918181391157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882764f37e033%3A0x7561f1b928561231!2sJl.%20Bunga%20Andong%20Sel.%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1673423758122!5m2!1sid!2sid" width="460" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <p class="copyright-text mb-0 me-4 text-center">Copyrights© 2022 Rania Rahmi.</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src='js/owl.carousel.min.js'></script>

    <script>
        $(document).ready(function() {
            $("#news-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: false,
                navigationText: ["", ""],
                pagination: false,
                autoPlay: true
            });
        });
    </script>

</body>

</html>