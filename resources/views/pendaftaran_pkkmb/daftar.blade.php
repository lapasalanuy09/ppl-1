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
                                <form action="/pendaftaran_pkkmb/daftar" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{-- data pribadi --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Pendaftaran</label>
                                        <input name='no_pendaftaran' type="text" value="{{ Auth::user()->id }}" disabled
                                            class="form-control @error('no_pendaftaran')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Input No Pendaftaran">
                                        @error('no_pendaftaran')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input name='nama' type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Input Nama" disabled
                                            value="{{ Auth::user()->nama }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NPM</label>
                                        <input name='npm' type="text"
                                            class="form-control @error('npm')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input NPM">
                                        @error('npm')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select name='jenis_kelamin'
                                            class="form-control @error('jenis_kelamin')
                                        is-invalid
                                    @enderror"
                                            id="exampleFormControlSelect1" placeholder="Pilih Jenis Kelamin">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tempat Lahir</label>
                                        <input name='tempat_lahir' type="text"
                                            class="form-control @error('tempat_lahir')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat lahir">
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal lahir</label>
                                        <input name='tanggal_lahir' type="date"
                                            class="form-control @error('tanggal_lahir')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Input Tanggal Lahir">
                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Agama</label>
                                        <select name='agama'
                                            class="form-control @error('agama')
                                        is-invalid
                                    @enderror"
                                            id="exampleFormControlSelect1" placeholder="Pilih Agama">
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        @error('agama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">email</label>
                                        <input name='email' type="email" disabled
                                            class="form-control @error('email')
                                        is-invalid 
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input email"
                                            value="{{ Auth::user()->email }}" readonly>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Angkatan</label>
                                        <input name='angkatan' type="text"
                                            class="form-control @error('angkatan')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="angkatan">
                                        @error('angkatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jurusan</label>
                                        <input name='jurusan' type="text"
                                            class="form-control @error('jurusan')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
                                        @error('jurusan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name='alamat_domisili' type="text"
                                            class="form-control @error('alamat_domisili')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                                        @error('alamat_domisili')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">profil</label>
                                        <input name='profil' type="file"
                                            class="form-control @error('profil')
                                        is-invalid
                                    @enderror">
                                        @error('profil')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- data ortu --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Ibu</label>
                                        <input name='nama_ibu' type="text" class="form-control @error('nama_ibu')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ibu">
                                            @error('nama_ibu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Ayah</label>
                                        <input name='nama_ayah' type="text" class="form-control @error('nama_ayah')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ayah">
                                            @error('nama_ayah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                                        <input name='pekerjaan_ibu' type="text" class="form-control @error('pekerjaan_ibu')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Pekerjaan Ibu">
                                            @error('pekerjaan_ibu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                                        <input name='pekerjaan_ayah' type="text" class="form-control @error('pekerjaan_ayah')
                                        is-invalid
                                    @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Pekerjaan Ayah">
                                            @error('pekerjaan_ayah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- data merchandise --}}
                                    <div class="form-group">
                                        <label for="photo" class="form-label @error('photo')
                                        is-invalid
                                    @enderror">Bukti Pembayaran</label><br>
                                        <input name='bukti_pembayaran' type="file" id="photo" name="photo"
                                            required>
                                            @error('photo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jalur Pendaftaran</label>
                                        <select name='jalur_pendaftaran' class="form-control @error('jalur_pendaftaran')
                                        is-invalid
                                    @enderror"
                                            id="exampleFormControlSelect1">
                                            <option value="SNBT">SNBT</option>
                                            <option value="SNBP">SNBP</option>
                                            <option value="MANDIRI">MANDIRI</option>
                                        </select>
                                        @error('jalur_pendaftaran')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pembelian Merchandise</label>
                                        <select name='pembelian_merchandise' class="form-control @error('pembelian_merchandise')
                                        is-invalid
                                    @enderror"
                                            id="exampleFormControlSelect1">
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                        @error('pembelian_merchandise')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showSuccessMessage() {
            // Menggunakan jQuery
            $('#successMessage').show();

            // Anda juga dapat mereset formulir jika diperlukan
            // document.getElementById('dataForm').reset();

            // Opsional: Anda dapat menyembunyikan pesan keberhasilan setelah beberapa detik
            setTimeout(function () {
                $('#successMessage').hide();
            }, 5000); // 5000 milidetik = 5 detik
        }
    </script>[]
@stop
