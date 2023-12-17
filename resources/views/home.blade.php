<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PKKMB Universitas Bengkulu</title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('template/assets/img/Logo.png')}}">
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="template/assets/css/stylelandingpage.css" rel="stylesheet">
    <style>
        .d-none {
            display: none;
        }
        
        .invalid-feedback {
            display: none;
        }
        
        .btn.disabled {
            pointer-events: none;
            opacity: 0.65;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="http://127.0.0.1:8000/" style="color: white;">PKKMB UNIB</a> 
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about" style="color: white;">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services" style="color: white;">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio" style="color: white;">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login" style="color: white;">Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)),url('template/assets/img/green.jpg') center center / cover no-repeat;">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">PKKMB Universitas Bengkulu</h1>
                    <hr class="divider">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5 font-weight-bold">Selamat datang di sistem pendaftaran PKKMB Universitas Bengkulu. Daftarkan diri Anda untuk mengikuti program pengenalan kehidupan kampus mahasiswa baru.</p>
                    <a class="btn btn-primary btn-xl" href="#about" style="color: black;">Informasi Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about" style="opacity: 0.7;">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Apa yang Anda butuhkan?</h2>
                    <hr class="divider divider-light">
                    <p class="text-white-75 mb-4">Sistem pendaftaran PKKMB Universitas Bengkulu memiliki segala yang Anda butuhkan untuk memulai perjalanan Anda sebagai mahasiswa baru. Daftarkan diri sekarang!</p>
                    <a class="btn btn-light btn-xl" href="/login">MASUK</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Pelayanan Kami</h2>
            <hr class="divider">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1" style="color: #007bff;"></i></div>
                        <h3 class="h4 mb-2">Tema yang Kokoh</h3>
                        <p class="text-muted mb-0">Tema kami diperbarui secara teratur untuk menjaga kestabilan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1" style="color: #007bff;"></i></div>
                        <h3 class="h4 mb-2">Terbaru</h3>
                        <p class="text-muted mb-0">Semua dependensi diperbarui secara berkala untuk menjaga kekinian.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1" style="color: #007bff;"></i></div>
                        <h3 class="h4 mb-2">Siap untuk Dipublikasikan</h3>
                        <p class="text-muted mb-0">Anda dapat menggunakan desain ini apa adanya atau membuat perubahan!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1" style="color: #007bff;"></i></div>
                        <h3 class="h4 mb-2">Dibuat dengan Cinta</h3>
                        <p class="text-muted mb-0">Apakah benar-benar sumber terbuka jika tidak dibuat dengan cinta?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" style="opacity: 0.7;" href="template/assets/img/2021.jpg" title="Project Name">
                        <img class="img-fluid" src="template/assets/img/thumbnails/2021.jpg" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Kegiatan PKKMB UNIB Tahun 2021</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" style="opacity: 0.7;" href="template/assets/img/2022.jpg" title="Project Name">
                        <img class="img-fluid" src="template/assets/img/thumbnails/2022.jpg" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Kegiatan PKKMB UNIB Tahun 2022</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" style="opacity: 0.7;" href="template/assets/img/2023.jpg" title="Project Name">
                        <img class="img-fluid" src="template/assets/img/thumbnails/2023.jpg" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Kegiatan PKKMB UNIB Tahun 2023</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" style="opacity: 0.7;" href="template/assets/img/11.jpg" title="Project Name">
                        <img class="img-fluid" src="template/assets/img/thumbnails/11.jpg" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">PKKMB UNIB Tahun 2022 Ciptakan Dua Rekor MURI</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" style="opacity: 0.7;" href="template/assets/img/22.jpg" title="Project Name">
                        <img class="img-fluid" src="template/assets/img/thumbnails/22.jpg" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Peserta PKKMB UNIB Tahun 2022</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" style="opacity: 0.7;" href="template/assets/img/33.jpg" title="Project Name">
                        <img class="img-fluid" src="template/assets/img/thumbnails/33.jpg" alt="...">
                        <div class="portfolio-box-caption p-3">
                            <div class="project-name">Najwa Shihab di PKKMB UNIB Tahun 2022</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <section class="page-section" style="background-color: #007bff; color: white; opacity: 0.7;">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">UNIVERSITAS BENGKULU</h2>
            <a class="btn btn-light btn-xl" href="https://unib.ac.id/">Kunjungi Website!</a>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright © 2023 - by Ratna&Nanda</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/landingpage.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>