@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="form-row">
                    <div class="col-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Mahasiswa</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/update" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{-- data pribadi --}}
                                    <div class="col-md-6">
                                    <div class="form-group float-left">
                                        <label for="exampleInputEmail1">No Pendaftaran</label>
                                        <input name='no_pendaftaran' type="text" class="form-control" id="no_pendaftaran" aria-describedby="emailHelp" placeholder="Input No Pendaftaran" value="{{$pendaftaran->no_pendaftaran}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group ">
                                      <label for="exampleInputEmail1">Nama Lengkap</label>
                                      <input name='nama'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Nama"value="{{$pendaftaran->nama}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group float-left">
                                        <label for="exampleInputEmail1">NPM</label>
                                        <input name='npm'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input NPM"value="{{$pendaftaran->npm}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                        <div class="form-group ">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select name='jenis_kelamin'class="form-control" id="exampleFormControlSelect1" placeholder="Pilih Jenis Kelamin">
                                            <option value="Laki-Laki" {{ $pendaftaran->jenis_kelamin == "Laki-Laki" ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="Perempuan" {{ $pendaftaran->jenis_kelamin == "Perempuan" ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tempat Lahir</label>
                                        <input name='tempat_lahir'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat lahir"value="{{$pendaftaran->tempat_lahir}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal lahir</label>
                                        <input name='tanggal_lahir'type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal lahir"value="{{$pendaftaran->tanggal_lahir}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Agama</label>
                                        <select name='agama'class="form-control" id="exampleFormControlSelect1" placeholder="Pilih Agama">
                                            <option value="Islam" {{ $pendaftaran->agama == "Islam" ? 'selected' : '' }}>Islam</option>
                                            <option value="Protestan" {{ $pendaftaran->agama == "Protestan" ? 'selected' : '' }}>Protestan</option>
                                            <option value="Katolik" {{ $pendaftaran->agama == "Katolik" ? 'selected' : '' }}>Katolik</option>
                                            <option value="Hindu" {{ $pendaftaran->agama == "Hindu" ? 'selected' : '' }}>Hindu</option>
                                            <option value="Buddha" {{ $pendaftaran->agama == "Buddha" ? 'selected' : '' }}>Buddha</option>
                                            <option value="Konghucu" {{ $pendaftaran->agama == "Konghucu" ? 'selected' : '' }}>Konghucu</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">email</label>
                                        <input name='email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input Email"value="{{$pendaftaran->email}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Angkatan</label>
                                        <input name='angkatan'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="angkatan"value="{{$pendaftaran->angkatan}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jurusan</label>
                                        <input name='jurusan'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan"value="{{$pendaftaran->jurusan}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name='alamat_domisili'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat"value="{{$pendaftaran->alamat_domisili}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">profil</label>
                                            <input name='profil'type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Orang Tua</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/update" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    {{-- data ortu --}}
                                    <div class="col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Ibu</label>
                                        <input name='nama_ibu'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ibu"value="{{$pendaftaran->nama_ibu}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Ayah</label>
                                        <input name='nama_ayah'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ayah"value="{{$pendaftaran->nama_ayah}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                                        <input name='pekerjaan_ibu'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ibu"value="{{$pendaftaran->pekerjaan_ibu}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                                        <input name='pekerjaan_ayah'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ayah"value="{{$pendaftaran->pekerjaan_ayah}}">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Merchandise</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/update" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    {{-- data merchandise --}}
                                    <div class="form-group">
                                        <label for="photo" class="form-label">Bukti Pembayaran</label><br>
                                        <input name='bukti_pembayaran' type="file" id="photo" name="photo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jalur Pendaftaran</label>
                                        <select name='jalur_pendaftaran'class="form-control" id="exampleFormControlSelect1">
                                            <option value="SNBT" {{ $pendaftaran->jalur_pendaftaran == "SNBT" ? 'selected' : '' }}>SNBT</option>
                                            <option value="SNBP" {{ $pendaftaran->jalur_pendaftaran == "SNBP" ? 'selected' : '' }}>SNBP</option>
                                            <option value="MANDIRI" {{ $pendaftaran->jalur_pendaftaran == "MANDIRI" ? 'selected' : '' }}>MANDIRI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pembelian Merchandise</label>
                                        <select name='pembelian_merchandise'class="form-control" id="exampleFormControlSelect1">
                                            <option value="YA" {{ $pendaftaran->pembelian_merchandise == "YA" ? 'selected' : '' }}>YA</option>
                                            <option value="TIDAK" {{ $pendaftaran->pembelian_merchandise == "TIDAK" ? 'selected' : '' }}>TIDAK</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

