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
                                <img src="{{asset('storage/' . $pendaftaran->profil)}}" class="img-circle"width="100" height="100" alt="Foto Profil">
                                <h3 class="name">{{$pendaftaran->nama}}</h3>
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
                                    <li>NPM <span>{{$pendaftaran->npm}}</span></li>
                                    <li>Jenis Kelamin <span>{{$pendaftaran->jenis_kelamin}}</span></li>
                                    <li>Tempat, Tanggal Lahir <span>{{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir }}</span></li>
                                    <li>Agama <span>{{$pendaftaran->agama}}</span></li>
                                    <li>Angkatan <span>{{$pendaftaran->angkatan}}</span></li>
                                    <li>Jurusan <span>{{$pendaftaran->jurusan}}</span></li>
                                    <li>Alamat <span>{{$pendaftaran->alamat_domisili}}</span></li>
                                </ul>
                                <h4 class="heading"><b>Data Orang Tua</b></h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Nama Ibu <span>{{$pendaftaran->nama_ibu}}</span></li>
                                    <li>Nama Ayah <span>{{$pendaftaran->nama_ayah}}</span></li>
                                    <li>Pekerjaan Ibu <span>{{$pendaftaran->pekerjaan_ayah}}</span></li>
                                    <li>Pekerjaan Ayah <span>{{$pendaftaran->pekerjaan_ibu}}</span></li>
                                </ul>
                            </div>
                            <div class="profile-info">

                            </div>
                            <div class="text-center"><a href="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/edit" class="btn btn-primary">Edit Profile</a></div>
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
