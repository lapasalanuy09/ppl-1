@extends('layouts.masterkegiatan')
@section('content2')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                   <h2 class="pageheader-title">Timeline </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                              </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
              <!-- ============================================================== -->
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
                            <h3>Title of section 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                            <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">12 July, 2016</span>
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
                            <h3>Title of section 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                         <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">20 July, 2017</span>
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
                            <h3>Title of section 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                          <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">24 July, 2018</span>
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
                            <h3>Title of section 4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                         <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">12 September, 2018</span>
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
                            <h3>Title of section 5</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                         <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                           
                            <span class="cd-timeline__date">20 September, 2018</span>
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
                            <h3>Final Section</h3>
                            <p>This is the content of the last section</p>
                            <span class="cd-timeline__date">1 October, 2018</span>
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
       <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>
@stop
       