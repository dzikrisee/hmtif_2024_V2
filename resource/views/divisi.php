<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="icon" type="image/png" href="../../resource/img/LOGO HMTIF (1).png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- In your <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap CSS from CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/" />


    <!-- Before closing </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>HMTIF - DIVISI</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css" />
    <link rel="stylesheet" href="../css/templatemo-digimedia-v3.css" />
    <link rel="stylesheet" href="../css/animated.css" />
    <link rel="stylesheet" href="../css/owl.css" />

    <style>
        .content-wrapper {
            padding-top: 100px;
            /* Sesuaikan dengan tinggi header */
        }

        .biro-card {
            background: white;
            border-radius: 25px;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: auto;
        }

        .biro-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40%;
            background: #13223f;
            z-index: 1;

        }

        .logo {

            padding: 15px;
            border-radius: 12px;
        }

        .title {
            color: #13223f;
            font-weight: 700;
            font-size: 2rem;
        }

        .description {
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .stats-container {
            position: relative;
            z-index: 2;
            margin-top: 100px;
        }

        .stats-number {
            color: white;
            font-size: 3.5rem;
            font-weight: 600;
            margin-bottom: 0;
        }

        .stats-label {
            color: #4ad7d1;
            font-size: 1.2rem;
            margin-top: -5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .biro-card {
                margin: 1rem;
                padding: 1.5rem;
            }

            .title {
                font-size: 1.5rem;
            }

            .stats-container .col-md-4 {
                margin-bottom: 2rem;
            }

            .stats-number {
                font-size: 2.5rem;
            }
        }
    </style>

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../../index.php" class="logo d-flex align-items-center justify-content-center mt-3">
                            <!-- Logo HMTIF -->
                            <img src="../img/LOGO HMTIF.png" alt="Logo HMTIF" class="me-3" style="max-height: 50px" />
                            <img src="../img/logo harmoni.png" alt="Logo HMTIF" style="max-height: 50px" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="struktur.php">Struktur</a></li>
                            <li class="scroll-to-section"><a href="#about">Divisi</a></li>
                            <li class="scroll-to-section"><a href="#services">Kegiatan</a></li>
                            <li class="scroll-to-section">
                                <div class="border-first-button"><a href="#contact">Hubungi Kami</a></div>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <div class="content-wrapper">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="kominfo.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="kominfo.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="kominfo.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="card biro-card">
        <div class="card-body text-center">
            <!-- Logo -->
            <img src="../img/LOGO DIVISI KOMINFO NOBG.png" alt="Logo" class="logo mb-4" style="width: 100px; height: 100px;">

            <!-- Judul -->
            <h2 class="title mb-3">Biro Dedikasi Masyarakat</h2>

            <!-- Deskripsi -->
            <p class="description mb-5">
                Hai, kami adalah Biro Dedikasi Masyarakat yang bertugas untuk melakukan analisis kebutuhan masyarakat sekitar Telkom University dan masyarakat Sistem Informasi di bidang sosial dan merealisasikan dalam program kerja pengabdian masyarakat
            </p>

            <!-- Stats -->
            <div class="stats-container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="stats-number">6</h2>
                        <p class="stats-label">Program kerja</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="stats-number">12</h2>
                        <p class="stats-label">Anggota</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="stats-number">1</h2>
                        <p class="stats-label">Komunitas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-banner wow fadeIn z-50 mt-0" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-center">

                    <!-- <div class="right-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="margin-bottom: 30px;">
                    <img src="../img/LOGO HMTIF.png" alt="" class="img-fluid mx-auto d-block mb-5" style="" />
                </div> -->

                    <div class="left-content show-up header-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="text-custom" style="color: #007a3d">KABINET HARMONI</h6>
                                <h2>BPH & DIVISI HMTIF UNPAS</h2>
                                <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">

                        <h4>BADAN PENGURUS HARIAN <em>PERIODE 2024/2025</em></h4>
                        <div class="border-first-button scroll-to-section mb-3">
                            <a href="#contact">Detail</a>
                        </div>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="../img/BPH-Kahim.png" alt="" />
                                    </div>
                                    <div class="down-content">
                                        <h4>KETUA UMUM HMTIF</h4>
                                        <span>Moch. Nizar Al Faltan</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="../img/BPH-Sekjend.png" alt="" />
                                    </div>
                                    <div class="down-content">
                                        <h4>SEKRETARIS JENDRAL</h4>
                                        <span>Moch Riya Putra Suryadi</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="../img/BPH-Bendum@3x.png" alt="" />
                                    </div>
                                    <div class="down-content">
                                        <h4>BENDAHARA UMUM</h4>
                                        <span>Dea Abeliya Casmita</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="../img/BPH-Wabendum.png" alt="" />
                                    </div>
                                    <div class="down-content">
                                        <h4>WAKIL BENDAHARA UMUM</h4>
                                        <span>Dera Triyadi Fatimah</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="../img/BPH-Sekum.png" alt="" />
                                    </div>
                                    <div class="down-content">
                                        <h4>SEKRETARIS UMUM</h4>
                                        <span>Nabila Putri Aisyah Insirawati</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="../img/BPH-Wasekum.png" alt="" />
                                    </div>
                                    <div class="down-content">
                                        <h4>WAKIL SEKRETARIS UMUM</h4>
                                        <span>Ilona Aqila Zahra</span>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>DIVISI HMTIF <span class="text-custom" style="color: #007a3d">PERIODE 2024/2025</span></h4>
                        <div class="line-dec" style="color: #007a3d"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="../img/LOGO DIVISI MB NOBG.png" alt="" /></span>
                                                MINAT BAKAT
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="../img/LOGO DIVISI KOMINFO NOBG.png" alt="" /></span>
                                                KOMINFO
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="../img/LOGO DIVISI SOSPOL NOBG.png" alt="" /></span>
                                                SOSIAL & POLITIK
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="../img/LOGO DIVISI RT NOBG.png" alt="" /></span>
                                                RUMAH TANGGA
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="../img/LOGO DIVISI PSDM NOBG.png" alt="" /></span>
                                                PSDM
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="../img/LOGO DIVISI  EKRAF NOBG.png" alt="" /></span>
                                                EKRAF
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Divisi Minat dan Bakat</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token. dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="../img/LOGO DIVISI MB NOBG.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Divisi Kominfo</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token. dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="../img/LOGO DIVISI KOMINFO NOBG.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Divisi Sosial & Politik</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token. dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="../img/LOGO DIVISI SOSPOL NOBG.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Divisi Rumah Tangga</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token. dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="../img/LOGO DIVISI RT NOBG.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Divisi Pengembangan Sumber Daya Mahasiswa</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token. dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="../img/LOGO DIVISI PSDM NOBG.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Divisi Ekonomi Kreatif</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token. dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="./img/LOGO DIVISI  EKRAF NOBG.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>s
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "component/footer.php" ?>

    <!-- <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Hubungi Kami Sekarang</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                            <div class="col-lg-5">
                                <div id="map">
                                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border: 0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="assets/images/phone-icon.png" alt="" />
                                                    <a href="#">010-020-0340</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="assets/images/email-icon.png" alt="" />
                                                    <a href="#">our@email.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="assets/images/location-icon.png" alt="" />
                                                    <a href="#">123 Rio de Janeiro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required />
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="" />
                                            </fieldset>
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on" />
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->



    <!-- Scripts -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl-carousel.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/imagesloaded.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>