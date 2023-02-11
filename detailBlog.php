<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM blogs WHERE id_blog = $id";
    $result = mysqli_query($connect, $query);
    $blog = mysqli_fetch_assoc($result);
} else {
    echo "
    <script>
        alert('Blog tidak ditemukan!');
        document.location.href = './blogs.php';
    </script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title>Detail Blog - Rania Rahmi Blog</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

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
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                </ul>
                <div>

                </div>
    </nav>

    <main>

        <section class="hero section-hero section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 text-center mx-auto">
                        <div class="section-hero-text">
                            <small class="small-title text-warning">Detail Blog</small>

                            <h1 class="text-white">Judul Blog</h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="projects section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mb-5">
                        <h2 class="mb-3"><?= $blog['title']; ?></h2>
                    </div>

                    <div class="col-lg-8 col-12 mb-5">
                        <img src="./images/blogs/<?= $blog['picture']; ?>" class="img-fluid projects-image" alt="">
                    </div>

                    <div class="col-lg-12 col-12 mb-5">

                        <p><?= $blog['description']; ?>.</p>
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

</body>

</html>