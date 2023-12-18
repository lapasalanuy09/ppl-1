@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Kegiatan</h3>
                                <div class="right">
                                    <button type="button" class=" btn"data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary ">Tambah Data</i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>NAMA KEGIATAN </th>
                                            <th>WAKTU </th>
                                            <th>LOKASI </th>
                                            <th>TIMELINE </th>
                                            <th>PEMATERI</th>
                                            <th>AKSI </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data_kegiatan as $kegiatan)
                                        <tr>
                                            <td>{{$kegiatan ->nama_kegiatan}}</td>
                                            <td>{{$kegiatan ->waktu}}</td>
                                            <td>{{$kegiatan ->lokasi}}</td>
                                            <td>{{$kegiatan ->timeline}}</td>
                                            <td>{{$kegiatan ->pemateri}}</td>
                                            <td>
                                                <a href="/data-kegiatan/{{ $kegiatan->id }}/edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(244, 185, 46);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg></a>
                                                <a href="/data-kegiatan/{{$kegiatan->id}}/delete" onclick="return confirm ('Yakin Mau Menghapus Data ?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg></a>
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
            <h5 class="modal-title" id="exampleModalLabel">Data Kegiatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/data-kegiatan/create" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kegiatan</label>
                        <input name='nama_kegiatan'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input name='waktu'type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input waktu">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Lokasi</label>
                      <input name='lokasi'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="photo" class="form-label">Timeline</label><br>
                        <input name='timeline' type="file" id="photo" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pemateri</label>
                        <input name='pemateri'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Pemateri">
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
