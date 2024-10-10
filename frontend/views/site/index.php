<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this); // Mendaftarkan asset bundle
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Arsha Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="<?= \yii\helpers\Url::to('@web/template/main.css') ?>" rel="stylesheet">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">GOR KAMPUS</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Menu Pilihan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= \yii\helpers\Url::to('sewa-lapangan/index')?>">Sewa Lapangan</a></li>
                        <li><a href="<?= \yii\helpers\Url::to('site/admin')?>">Informasi Admin</a></li>
                        <li><a href="<?= \yii\helpers\Url::to('event/index')?>">Event</a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <?php if (Yii::$app->user->isGuest): ?>
        <a class="btn-getstarted" href="site/login">Login</a>
        <?php else: ?>
            <!-- Jika sudah login -->
            <a class="btn-getstarted" href="#"><?= Yii::$app->user->identity->username ?></a>
            <?= Html::beginForm(['site/logout'], 'post')
            . Html::submitButton('Logout', ['class' => 'btn-getstarted'])
            . Html::endForm() ?>
        <?php endif; ?>

    </div>
</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Temukan Pengalaman Badminton Terbaik di GOR Kampus!</h1>
                    <p>Kami adalah tim yang berdedikasi untuk menyediakan fasilitas dan dukungan terbaik
                        bagi para penggemar badminton di kampus.</p>
                    <div class="d-flex">
                        <a href="site/login" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="template/img/pinguin badminton.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

        <div class="container" data-aos="zoom-in">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "480": {
                                "slidesPerView": 3,
                                "spaceBetween": 60
                            },
                            "640": {
                                "slidesPerView": 4,
                                "spaceBetween": 80
                            },
                            "992": {
                                "slidesPerView": 5,
                                "spaceBetween": 120
                            },
                            "1200": {
                                "slidesPerView": 6,
                                "spaceBetween": 120
                            }
                        }
                    }
                </script>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Us</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        GOR Badminton Kampus adalah fasilitas olahraga yang didedikasikan untuk para mahasiswa dan penggemar badminton di kampus.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Kami percaya bahwa olahraga tidak hanya memberikan kebugaran fisik, tetapi juga membangun kebersamaan dan semangat tim.
                        Dengan fasilitas yang lengkap dan pelatihan profesional,.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span> kami berkomitmen untuk menciptakan lingkungan yang mendukung perkembangan atletik dan rekreasi.</span></li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>Kami juga mempunyai visi dan misi yang jelas untuk mengarahkan setiap langkah dan kegiatan kami.</p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    <div id="visi-misi" style="display: none; margin-top: 20px;">
                        <h3>Visi dan Misi</h3>
                        <p id="visi"></p>
                        <p id="misi"></p>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('.read-more').on('click', function(e) {
                                e.preventDefault(); // Mencegah link untuk melakukan aksi default (scroll ke atas)

                                $.ajax({
                                    url: '<?= \yii\helpers\Url::to(['visi-misi/index']) ?>', // URL ke action yang kita buat
                                    method: 'GET',
                                    dataType: 'json',
                                    success: function(data) {
                                        // Tampilkan data visi dan misi
                                        $('#visi').text(data.visi);
                                        $('#misi').text(data.misi);
                                        $('#visi-misi').show(); // Menampilkan div setelah data dimuat
                                    },
                                    error: function() {
                                        alert('Error loading data.');
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3>Fasilitas modern yang memberikan pengalaman bermain yang optimal</strong></h3>
                        <p>
                            Dengan suasana tenang dan nyaman, lapangan ini dilengkapi pencahayaan yang baik dan lantai bersih, memastikan keamanan dan kenyamanan bagi para pemain.
                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-item faq-active">

                            <h3><span>01</span>Bagaimana suasana saat bermain di lapangan?</h3>
                            <div class="faq-content">
                                <p>Pengunjung sering menyatakan bahwa suasana di lapangan sangat mendukung, dengan kebersihan yang terjaga dan pengaturan yang rapi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item faq-active">
                            <h3><span>02</span>Apa keunggulan dari fasilitas yang kami tawarkan?</h3>
                            <div class="faq-content">
                                <p>Fasilitas kami dilengkapi dengan peralatan badminton berkualitas tinggi dan area tunggu yang nyaman. Kami juga memiliki sistem ventilasi yang baik untuk menjaga sirkulasi udara tetap segar, membuat pengalaman bermain semakin menyenangkan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item faq-active">
                            <h3><span>03</span>Mengapa memilih lapangan badminton kami?</h3>
                            <div class="faq-content">
                                <p>Lapangan kami tidak hanya menawarkan tempat bermain, tetapi juga komunitas yang ramah dan suportif.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                    <img src="template/img/Gor badminton.jpeg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                </div>
            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="template/img/suasana gor.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content">

                    <h3>Rata-rata Keramaian GOR Setiap Hari</h3>
                    <p class="fst-italic">
                        Lapangan badminton kami selalu ramai dengan pemain yang antusias setiap harinya. Berikut adalah rata-rata keramaian GOR dari hari Senin hingga Minggu:
                    </p>

                    <div class="skills-content skills-animation">

                        <div class="progress">
                            <span class="skill"><span>Senin</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Selasa</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Rabu</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Kamis</span> <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Jumat</span> <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Sabtu</span> <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Minggu</span> <i class="val">45%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Kami menyediakan berbagai layanan untuk mendukung kebutuhan Anda di GOR Badminton Kampus.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="" class="stretched-link">Penyewaan Lapangan Badminton</a></h4>
                        <p>Nikmati fasilitas lapangan badminton berstandar internasional dengan pencahayaan optimal
                            dan lantai berkualitas. Pemesanan lapangan dapat dilakukan secara online atau langsung di lokasi.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="" class="stretched-link">Penyewaan Peralatan Badminton</a></h4>
                        <p>Tidak membawa raket atau shuttlecock? Kami menyediakan penyewaan peralatan
                            badminton berkualitas tinggi untuk memastikan Anda bisa bermain dengan nyaman tanpa hambatan.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                        <h4><a href="" class="stretched-link">Pelatihan dan Bimbingan</a></h4>
                        <p>agi yang ingin meningkatkan kemampuan bermain, kami menawarkan pelatihan
                            dengan pelatih profesional yang siap membantu mengasah keterampilan Anda.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4><a href="" class="stretched-link">Turnamen dan Acara Khusus</a></h4>
                        <p>GOR kami rutin menyelenggarakan turnamen badminton untuk berbagai level,
                            mulai dari amatir hingga profesional. Kami juga membuka kesempatan untuk menyelenggarakan
                            acara-acara khusus seperti pertandingan persahabatan antar komunitas.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>Bergabunglah kami di GOR Badminton Kampus!</h3>
                    <p>Apakah Anda siap untuk meningkatkan keterampilan badminton Anda dan bersenang-senang
                        bersama teman-teman? GOR Badminton kampus menyediakan fasilitas terbaik untuk Anda!</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="sewa-lapangan/index">Pesan Lapangan Sekarang</a>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Kami telah mengadakan berbagai acara dan turnamen badminton,
                serta menyediakan fasilitas berkualitas yang mendukung kegiatan olahraga di kampus.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="template/img/juara1.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Sahabat kita yang meraih juara</p>
                            <a href="template/img/juara 2.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="template/img/juara 2.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Juara 2 antar negara</h4>
                            <p>mewakilkan negara indonesia dalam seagames 2016</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="template/img/batman.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Batman</h4>
                            <p>Bahkan batman juga ikut bermain Badminton disini</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="template/img/gor.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gor</h4>
                            <p>Suasana Gor Badminton kami</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="template/img/sewa raket.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Fasilitas GOR</h4>
                            <p>Fasilitas yang kami sediakan untuk pengunjung</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="template/img/clint.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Bermain badminton</h4>
                            <p>Penjahatpun menyempatkan untuk bermain badminton di GOR!</p>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="template/img/badminton anime.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Anime Badminton</h4>
                            <p>Yang suka anime, ini ada anime yang pernah main badminton</p>
                        </div>
                    </div><!-- End Portfolio Item -->
                </div>

            </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Ini Team Kami yang bertanggungjawab untuk mengurus GOR.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="template/img/Kepala Operasional.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Joko Alexander</h4>
                            <span>Kepala Operasional</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="template/img/Wakil Ketua Pengelola.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Budi William</h4>
                            <span>Wakil Ketua Pengelola</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="template/img/Koordinator Fasilitas dan Kebersihan.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Agus Anderson</h4>
                            <span>Koordinator Fasilitas dan Kebersihan</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="template/img/Ketua Pengelola GOR.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Yanto Jepson</h4>
                            <span>Ketua Pengelola GOR</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    }
                }
            </script>
        </div>
    </div>
</main>
<footer id="footer" class="footer">
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>