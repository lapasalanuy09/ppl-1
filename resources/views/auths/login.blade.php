@extends('auths.layouts.main')
@section('content')

<div class="vertical-align-wrap">
	<div class="vertical-align-middle">
		<div class="auth-box ">
			<div class="left">
				<div class="content">
					<div class="header">
						<div class="logo text-center"><img src="{{asset('template/assets/img/lo.jpeg')}}" width="300" height="50" alt="Klorofil Logo"></div>
						<p class="lead" ><h1 style="font-weight:bold;">Login</h1></p>
					</div>
					@if (session('pesan')=='berhasil')
					<div class="alert alert-succes">
						Berhasil Register!!! Silahkan Login
					</div>
					@endif

					<form class="form-auth-small" action="/postlogin" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="signin-email" class="control-label sr-only">Email</label>
							<input name="email"type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" id="signin-email" placeholder="Email">
							@error('email')
							<div class='invalid-feedback'>{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">Password</label>
							<input name="password"type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" id="signin-password" placeholder="Password">
							@error('password')
							<div class='invalid-feedback'>{{ $message }}</div>
							@enderror
						</div>
						<div class="form-check form-group">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="remember">
								Remember Me
							</label>
						</div>
						<div class="form-group clearfix">

						</div>
						<button type="submit" class="btn btn-primary">LOGIN</button>
						<a href="/daftar" class='btn btn-primary'>DAFTAR</a>

					</form>
				</div>
			</div>
			<div class="right">
				<div class="overlay"></div>
				<div class="content text">
					<h1 class="heading">Sistem Pendaftaran PKKMB UNIB</h1>
					<p>by Ratna&Nanda</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
