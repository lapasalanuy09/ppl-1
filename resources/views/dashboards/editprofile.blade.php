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
                                {{-- @dd($profil->pendaftaran->id) --}}
                                <form action="{{ route('updateprofil', ['id' => $profil->id,'user_id' => $profil->pendaftaran->id]) }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{-- data pribadi --}}
                                    <div class="col-md-6 float-right">
                                    <div class="form-group ">
                                      <label for="exampleInputEmail1">Nama Lengkap</label>
                                      <input name='nama'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Nama"value="{{$profil->nama}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name='email' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input Email"value="{{$profil->email}}">
                                    </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Profil</label>
                                            <input name='profil'type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
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

