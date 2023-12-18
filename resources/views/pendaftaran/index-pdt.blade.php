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
                                    <div style="display: flex; justify-content: center; align-content: center; gap: 1rem">
                                        <a class="btn text-center"data-toggle="modal" style="width: 12rem; height: 4rem;"
                                            data-target="#exampleModal"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z"></path></svg></i></button>
                                            <a href="{{ route('cetak-data') }}" class="btn" style="width: 10rem; height: 4rem;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgb(0, 0, 0);transform: ;msFilter:;">
                                                    <path
                                                        d="M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z">
                                                    </path>
                                                    <path d="M14 10h4v2h-4z"></path>
                                                </svg>
                                            </a>
                                    </div>
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
                                            <th>MERCHANDISE </th>
                                            <th>AKSI </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_pendaftaran as $pendaftaran)
                                            <tr>
                                                <td>{{ $pendaftaran->id }}</td>
                                                <td>{{ $pendaftaran->nama }}</td>
                                                @if ($pendaftaran->pendaftaran == null)
                                                    <td>data belum diisi</td>
                                                    <td>data belum diisi</td>
                                                    <td>data belum diisi</td>
                                                    <td>data belum diisi</td>
                                                    <td>data belum diisi</td>
                                                    <td>
                                                        tidak ada aksi
                                                    </td>
                                                @else
                                                    <td>{{ $pendaftaran->pendaftaran->npm }}</td>
                                                    <td>{{ $pendaftaran->pendaftaran->jenis_kelamin }}</td>
                                                    <td>{{ $pendaftaran->pendaftaran->agama }}</td>
                                                    <td>{{ $pendaftaran->pendaftaran->jurusan }}</td>
                                                    <td>{{ $pendaftaran->pendaftaran->pembelian_merchandise }}</td>
                                                    <td>
                                                        <a href="/pendaftaran-mahasiswa/{{ $pendaftaran->id }}/profile"
                                                            ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(12, 62, 122);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg></a>
                                                        <a href="/pendaftaran-mahasiswa/{{ $pendaftaran->id }}/edit"
                                                            ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(244, 185, 46);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg></a>
                                                        <a href="/pendaftaran-mahasiswa/{{ $pendaftaran->id }}/delete"
                                                            onclick="return confirm('Yakin Mau Menghapus Data ?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg></a>
                                                    </td>
                                                @endif
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input name='nama'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Input Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NPM</label>
                            <input name='npm'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Input NPM">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name='jenis_kelamin'class="form-control" id="exampleFormControlSelect1"
                                placeholder="Pilih Jenis Kelamin">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input name='tempat_lahir'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Input Tempat lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal lahir</label>
                            <input name='tanggal_lahir'type="date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Input Tanggal ahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <select name='agama' class="form-control" id="exampleFormControlSelect1"
                                placeholder="Pilih Agama">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name='email' type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="input email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Angkatan</label>
                            <input name='angkatan'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="angkatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input name='jurusan'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name='alamat_domisili'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Profil</label>
                            <input name='profil'type="file" class="form-control">
                        </div>

                        {{-- data ortu --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input name='nama_ibu'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input name='nama_ayah'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                            <input name='pekerjaan_ibu'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Pekerjaan Ibu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                            <input name='pekerjaan_ayah'type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Pekerjaan Ayah">
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
