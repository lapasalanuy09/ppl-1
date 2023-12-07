<!doctype html>
<html lang="en">

<head>
	<title>PKKMB UNIB</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('template/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('template/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('template/assets/img/Logo.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('template/assets/img/Logo.png')}}">
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
        @yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright"> by <i class="fa fa-love"></i>Ratna & nanda</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('template/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('template/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('template/assets/scripts/klorofil-common.js')}}"></script>

</body>

</html>
