@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pendaftar</h3>
                                <div class="right">
                                    <button type="button" class=" btn"data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary ">Tambah Data</i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>NO PENDAFTARAN </th>
                                            <th>NAMA </th>
                                            <th>NPM </th>
                                            <th>JK </th>
                                            <th>AGAMA </th>
                                            <th>JURUSAN </th>
                                            <th>ALAMAT </th>
                                            <th>AKSI </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data_pendaftaran as $pendaftaran)
                                        <tr>
                                            <td>{{$pendaftaran ->no_pendaftaran}}</td>
                                            <td>{{$pendaftaran ->nama}}</td>
                                            <td>{{$pendaftaran ->npm}}</td>
                                            <td>{{$pendaftaran ->jenis_kelamin}}</td>
                                            <td>{{$pendaftaran ->agama}}</td>
                                            <td>{{$pendaftaran ->jurusan}}</td>
                                            <td>{{$pendaftaran ->alamat_domisili}}</td>
                                            <td>
                                                <a href="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/profile" class="btn- btn-primary btn-sm">Info</a>
                                                <a href="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/edit" class="btn- btn-warning btn-sm">Edit</a>
                                                <a href="/pendaftaran-mahasiswa/{{$pendaftaran->no_pendaftaran}}/delete" class="btn- btn-danger btn-sm" onclick="return confirm ('Yakin Mau Menghapus Data ?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Pendaftar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/pendaftaran-mahasiswa/create" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- data pribadi --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Pendaftaran</label>
                        <input name='no_pendaftaran'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input No Pendaftaran">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input name='nama'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NPM</label>
                        <input name='npm'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input NPM">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name='jenis_kelamin'class="form-control" id="exampleFormControlSelect1" placeholder="Pilih Jenis Kelamin">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input name='tempat_lahir'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Tempat lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal lahir</label>
                        <input name='tanggal_lahir'type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Tanggal ahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <select name='agama' class="form-control" id="exampleFormControlSelect1" placeholder="Pilih Agama">
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Angkatan</label>
                        <input name='angkatan'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="angkatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name='jurusan'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input name='alamat_domisili'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">profil</label>
                        <input name='profil'type="file" class="form-control">
                    </div>

                    {{-- data ortu --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ibu</label>
                        <input name='nama_ibu'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ibu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah</label>
                        <input name='nama_ayah'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ayah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                        <input name='pekerjaan_ibu'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ibu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                        <input name='pekerjaan_ayah'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ayah">
                    </div>
                    {{-- data merchandise --}}
                    <div class="form-group">
                        <label for="photo" class="form-label">Bukti Pembayaran</label><br>
                        <input name='bukti_pembayaran' type="file" id="photo" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jalur Pendaftaran</label>
                        <select name='jalur_pendaftaran'class="form-control" id="exampleFormControlSelect1">
                          <option value="SNBT">SNBT</option>
                          <option value="SNBP">SNBP</option>
                          <option value="MANDIRI">MANDIRI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pembelian Merchandise</label>
                        <select name='pembelian_merchandise'class="form-control" id="exampleFormControlSelect1">
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                  </form>
            </div>
        </div>
    </div>

@stop