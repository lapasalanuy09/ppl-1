@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="metric">

                            <span class="icon"><i class="fa fa-download"></i></span>
                            <p>
                                <span class="number">{{ $data['jumlah_pendaftar'] }}</span>
                                <span class="title">Pendaftar</span>
                            </p>
                           
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <p>
                                <span class="number">{{ $data['jumlah_user'] }}</span>
                                <span class="title">Users</span>
                            </p>
                        </div>
                    </div>
                </div>
                @if(auth()->user()->role=='user')
                <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PKKMB UNIVERSITAS BENGKULU</h4>
                        <h6 class="card-subtitle text-muted">Hilangkan malu, lepaskan pilu, abadi selalu aksara ulu </h6>
                    </div>
                    <img class="" src="{{ asset('images/info.jpg') }}" width="100%" height="100%">
                    <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                        <span class="float-left">{{ $data['time_ago'] }}</span>
                        <span class="float-right">
                        </span>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PKKMB UNIVERSITAS BENGKULU</h4>
                        <h6 class="card-subtitle text-muted">Muda berkarya, Tua bercerita</h6>
                    </div>
                    <img class="" src="{{ asset('images/baru.jpg') }}" width="100%" height="100%">
                    <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                        <span class="float-left">{{ $data['time_ago'] }}</span>
                        <span class="float-right">
                        </span>
                    </div>
                </div>
                </div>
                @endif
                @if(auth()->user()->role=='admin')
                <div id="chartStatistic"></div>
                @endif
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
        Highcharts.chart('chartStatistic', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Statistik Pendaftaran PKKMB UNIB',
            align: 'center'
        },


        xAxis: {
            categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
            crosshair: true,
            accessibility: {
                description: 'Periode Pendaftaran'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Orang'
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                name: 'Jumlah Pendaftar',
                data: [378, 778, 970, 1924]
            },

        ]
    });
</script>
@stop