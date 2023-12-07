@extends('auths.layouts.main')
@section('content')

<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="auth-box ">
            <div class="left">
                <div class="content">
                    <div class="header">
                        <div class="logo text-center"><img src="{{ asset('template/assets/img/lo.jpeg') }}" width="300"
                                height="50" alt="Klorofil Logo"></div>
                        <p class="lead">
                        <h1 style="font-weight:bold;">Register</h1>
                        </p>
                    </div>

                    <form class="form-auth-small" action="/daftar" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="signin-nama" class="control-label sr-only">Nama</label>
                            <input name="nama"type="nama"
                                class="form-control{{ $errors->has('nama') ? 'is-invalid' : '' }}" id="signin-nama"
                                placeholder="Nama Lengkap">
                            @error('nama')
                                <div class='invalid-feedback'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input name="email"type="email"
                                class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" id="signin-email"
                                placeholder="Email">
                            @error('email')
                                <div class='invalid-feedback'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input name="password"type="password"
                                class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                id="signin-password" placeholder="Password">
                            @error('password')
                                <div class='invalid-feedback'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password Confirmation</label>
                            <input name="password_confirmation"type="password"
                                class="form-control{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                id="signin-password" placeholder="Konfirmasi Password">
                            @error('password_confirmation')
                                <div class='invalid-feedback'>{{ $message }}</div>
                            @enderror
                        </div>
                        <button style="margin-top: 10px;" class="btn btn-primary">REGISTER</button>
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
