@extends('layouts.master')
@extends('layouts.masterkegiatan')
@section('content2')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

   
                <div class="page-header">
                    <h2 class="pageheader-title">Timeline Kegiatan PKKMB UNIB</h2>
                     <p class="pageheader-text">Pertemuan Gugus, pertemuan umum dan Hari PKKMB</p>
                     </div>          <!-- ============================================================== -->
                            <!-- timeline  -->
                            <!-- ============================================================== -->

                    <section class="cd-timeline js-cd-timeline">
                        <div class="cd-timeline__container">
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-picture.svg')}}" alt="Picture">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>Pertemuan 1</h3>
                                    <p>Pertemuan ini bertujuan untuk mengenal pk serta sesama gugus dan pemilihan struktur gugus</p>
                                    <a href="#0" class="btn btn-primary btn-lg">selengkapnya</a>
                                    <span class="cd-timeline__date">18 agustus 2023</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img cd-timeline__img--bounce-in">
                                    <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-movie.svg')}}" alt="Movie">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content cd-timeline__content--bounce-in">
                                    <h3>Pertemuan gugus 1</h3>
                                    <p>Membuat yel-yel untuk penampilan gugus pada saat festival aksara ulu</p>
                                <a href="#0" class="btn btn-primary btn-lg">Selengkapnya</a>
                                    <span class="cd-timeline__date">21 agustus, 2023</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img cd-timeline__img--bounce-in">
                                    <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-picture.svg')}}" alt="Picture">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content cd-timeline__content--bounce-in">
                                    <h3>Pertemuan 2</h3>
                                    <p>melatih yel-yel, pembekalan pengetahuan umum kampus dan kode etik mahasiswa dan pemberian tugas pkkmb</p>
                                <a href="#0" class="btn btn-primary btn-lg">Selengkapnya</a>
                                    <span class="cd-timeline__date">24 agustus, 2023</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img cd-is-hidden">
                                    <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-location.svg')}}" alt="Location">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content cd-is-hidden">
                                    <h3>pertemuan gugus 2</h3>
                                    <p>melatih Tari andung untuk rekor MURI dan pengumuman perlengkapan hari H seperti dresscode peserta dan perlengkapan MURI</p>
                                <a href="#0" class="btn btn-primary btn-lg">Selengkapnya</a>
                                    <span class="cd-timeline__date">27 Agustus, 2023</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img cd-is-hidden">
                                    <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-location.svg')}}" alt="Location">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content cd-is-hidden">
                                    <h3>Festival Aksara Ulu</h3>
                                    <p>penampilan yel-yel, talent show dan bazar ukm selingkup unib</p>
                                <a href="#0" class="btn btn-primary btn-lg">selengkapnya</a>

                                    <span class="cd-timeline__date">29 agustus, 2023</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img cd-is-hidden">
                                    <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-movie.svg')}}" alt="Movie">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content cd-is-hidden">
                                    <h3>Hari PKKMB UNIB</h3>
                                    <p>Pembukaan acara pkkmb oleh rektor universitas bengkulu dan penggelaran rekor  MURI</p>
                                    <span class="cd-timeline__date">31 agustus, 2023</span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                        </div>
                    </section>
                    <!-- cd-timeline -->

                <!-- ============================================================== -->
                    <!-- end timeline  -->
                            <!-- ============================================================== -->
            </div>
        </div>
    </div>
</div>
@stop