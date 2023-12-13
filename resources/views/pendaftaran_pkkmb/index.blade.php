@extends('layouts.master')
@extends('layouts.masteruser')
@section('content1')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <!-- ======= Hero Section ======= -->
                <section id="hero" class="d-flex align-items-center">

                    <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h1>Pendaftaran peserta PKKMB Universitas Bengkulu</h1>
                        <h2>Tahun Ajaran 2023/2024</h2>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="/pendaftaran_pkkmb/daftar" class="btn btn-primary">DAFTAR PKKMB</a>
                        </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                        <img src="pendaftaran/img/hero-img.png" class="img-fluid animated" width="500" height="300" alt="">
                        </div>
                    </div>
                    </div>

                </section><!-- End Hero -->

                <main id="main">

                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
                </main>
            </div>
        </div>
    </div>
</div>
@stop
