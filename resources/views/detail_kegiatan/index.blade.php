@extends('layouts.master')
@extends('layouts.masterkegiatan')

@section('content2')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                
                
                <div class="page-header">
                    <h2 class="pageheader-title">Timeline Kegiatan PKKMB UNIB</h2>
                    <p class="pageheader-text">Pertemuan Gugus, pertemuan umum dan Hari PKKMB</p>
                </div>          <!-- ============================================================== -->
                <!-- timeline  -->
                <!-- ============================================================== -->
                
                <section class="cd-timeline js-cd-timeline">
                    <div class="cd-timeline__container">
                        
                        @foreach($kegiatans as $kegiatan)
                        <div class="cd-timeline__block js-cd-block">
                            <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                <img src="{{asset('kegiatan/assets/vendor/timeline/img/cd-icon-picture.svg')}}" alt="Picture">
                            </div>
                            <!-- cd-timeline__img -->
                            <div class="cd-timeline__content js-cd-content">
                                <h3>{{ $kegiatan->nama_kegiatan }}</h3>
                                <p>Lokasi: {{ $kegiatan->lokasi }} - Pemateri: {{ $kegiatan->pemateri }}</p>
                                <a href="#0" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-{{ $kegiatan->id }}">Selengkapnya</a>
                                <span class="cd-timeline__date">{{ $kegiatan->waktu }}</span>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-{{ $kegiatan->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel-{{ $kegiatan->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{ $kegiatan->id }}">{{ $kegiatan->nama_kegiatan }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Tambahkan konten modal sesuai kebutuhan, termasuk foto -->
                                            <p>Lokasi: {{ $kegiatan->lokasi }}</p>
                                            <p>Pemateri: {{ $kegiatan->pemateri }}</p>
                                            <p>Waktu: {{ $kegiatan->waktu }}</p>
                                            
                                            <style>
                                                .modal-body img {
                                                    max-width: 100%;
                                                    height: auto;
                                                    display: block;
                                                    margin: 0 auto;
                                                }
                                            </style>
                                        
                                            <img src="{{ asset('storage/timeline_images/' . $kegiatan->timeline) }}" alt="Timeline Image">
                                        </div>                                        
                                        <div class="modal-footer">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </section>
                <!-- cd-timeline -->
                
                <!-- ============================================================== -->
                <!-- end timeline  -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
</div>
@stop
