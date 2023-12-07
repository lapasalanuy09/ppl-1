@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="form-row">
                    <div class="col-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Kegiatan</h3>
                            </div>
                            <div class="panel-body">
                                {{-- <form action="/data-kegiatan/{{$id}}/update" method="POST" enctype="multipart/form-data">
                                     --}}
                                     <form action="/data-kegiatan/{{ $data->id }}/update" method="POST" enctype="multipart/form-data">

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
                                        <label for="exampleInputEmail1">Timeline</label>
                                        <input name='timeline'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Timeline">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pemateri</label>
                                        <input name='pemateri'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Pemateri">
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
