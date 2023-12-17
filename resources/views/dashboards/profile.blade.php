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
                                @php
                                    $profileFileName = pathinfo($profil->pendaftaran->profil, PATHINFO_FILENAME);
                                @endphp
                                <p></p> 
                                <img src="{{ asset('storage/' . $profil->pendaftaran->profil) }}" class="img-circle" width="100" height="100" alt="Foto Profil">
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <div class="profile-detail">
                            <div class="profile-info">
                                {{-- @dd($profil) --}}
                                <h4 class="heading"><b>Profil Saya</b></h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Email <span>{{$profil->email}}</span></li>
                                    <li>Nama <span>{{$profil->nama}}</span></li>
                                </ul>
                            </div>
                            <div class="profile-info">
                                <!-- Additional profile info can be added here -->
                            </div>
                            <div class="text-center">
                                <a href="{{ route('editprofil', ['id' => $profil->id]) }}" class="btn btn-primary">Edit Profile</a>
                            </div>
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
