@extends('layouts.master')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                          
                                <img src="{{ asset('storage/' . $user->pendaftaran->profil) }}" class="img-circle"width="100" height="100" alt="Foto Profil">
                                <h3 class="name">{{$user->nama}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading"><b>Data Pribadi</b></h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Email <span>{{$user->email}}</span></li>
                                    <li>NPM <span>{{$user->pendaftaran->npm}}</span></li>
                                    <li>Jenis Kelamin <span>{{$user->pendaftaran->jenis_kelamin}}</span></li>
                                    <li>Tempat, Tanggal Lahir <span>{{ $user->pendaftaran->tempat_lahir }}, {{ $user->pendaftaran->tanggal_lahir }}</span></li>
                                    <li>Agama <span>{{$user->pendaftaran->agama}}</span></li>
                                    <li>Angkatan <span>{{$user->pendaftaran->angkatan}}</span></li>
                                    <li>Jurusan <span>{{$user->pendaftaran->jurusan}}</span></li>
                                    <li>Alamat <span>{{$user->pendaftaran->alamat_domisili}}</span></li>
                                </ul>
                                <h4 class="heading"><b>Data Orang Tua</b></h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Nama Ibu <span>{{$user->pendaftaran->nama_ibu}}</span></li>
                                    <li>Nama Ayah <span>{{$user->pendaftaran->nama_ayah}}</span></li>
                                    <li>Pekerjaan Ibu <span>{{$user->pendaftaran->pekerjaan_ayah}}</span></li>
                                    <li>Pekerjaan Ayah <span>{{$user->pendaftaran->pekerjaan_ibu}}</span></li>
                                </ul>
                            </div>
                            <div class="profile-info">

                            </div>
                            <div class="text-center"><a href="/pendaftaran-mahasiswa/{{$user->pendaftaran->user_id}}/edit" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@stop
