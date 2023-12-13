@extends('auths.layouts.main')
@section('content')

<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="auth-box ">
            <div class="left">
                <div class="content">
                    <div class="header">
                        <div class="logo text-center"><img src="{{ asset('template/assets/img/lo.jpeg') }}" width="300" height="50" alt="Logo"></div>
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
                            <input name="email" type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" id="signin-email" placeholder="Email">
                            @error('email')
                            <div class='invalid-feedback'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input name="password" type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" id="signin-password" placeholder="Password">
                            @error('password')
                            <div class='invalid-feedback'>{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" id="loginBtn">LOGIN</button>
                        <a href="/daftar" class='btn btn-primary'>REGISTER</a>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#loginBtn").click(function() {
            var email = $("#signin-email").val();
            var password = $("#signin-password").val();

            if (email.trim() === "" || password.trim() === "") {
                alert("Harap isi data dengan benar");
                return false; // Mencegah pengiriman formulir
            }

            return true; // Lanjutkan dengan pengiriman formulir
        });
    });
</script>

@endsection
