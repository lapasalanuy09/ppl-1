<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail Kegiatan PKKMB</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('template/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('template/assets/css/demo.css')}}">
    
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('template/assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('kegiatan/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('kegiatan/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
         @include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
        @yield('content2')
		<!-- END MAIN -->
        <div class="clearfix"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>

       <!-- ============================================================== -->
     <!-- Optional JavaScript -->
     <script src="{{asset('kegiatan/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('kegiatan/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
     <script src="{{asset('kegiatan/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
     <script src="{{asset('kegiatan/assets/libs/js/main-js.js')}}"></script>
     <script src="{{asset('kegiatan/assets/vendor/timeline/js/main.js')}}"></script>
</body>

</html>
