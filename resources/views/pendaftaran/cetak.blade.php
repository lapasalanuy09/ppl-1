<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
        body {
            font-family: arial;
            background-color: white;
            color: black;
        }
        *,
        h6,
        h5,
        h4 {
            color: black;
        }
        p {
            margin: 0;
        }
        hr {
            height: 5px;
            background-color: black
        }
        @media print {
            
            /* Menghilangkan tampilan scrollbar pada halaman cetak */
            body {
                overflow: visible !important;
            }
            
            /* Menampilkan konten yang tersembunyi di dalam overflow */
            .table-responsive {
                overflow: visible !important;
            }
        }
    </style>
</head>

<body>
    <div class="row ">
        <div class="col-2 text-center">
            <img src="{{ asset('template/assets/img/Logo.png') }}" width="140px">
        </div>
        <div class="col-10 text-center">
            <p>KEMENTRIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</p>
            <p>UNIVERSITAS BENGKULU</p>
            <p>PROGRAM STUDI INFORMATIKA</p>
            <p>Jalan W.R. Supratman Kandang Limun Bengkulu</p>
            <p>Bengkulu 38371 A Telepon : (0736) 344087, 22105 – 227</p>
        </div>
    </div>
    <hr>
    
    <div class="row text-center">
        <h4>Data Pendaftar Peserta PKKMB UNIB</h4>
    </div>
    
    <div class="row text-center mb-4">
        
    </div>
    
    <div class="table-responsive ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Npm</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Pembelian Merchandise</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pendaftaran as $key => $data)
                
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->pendaftaran->npm }}</td>
                    <td>{{ $data->pendaftaran->jenis_kelamin }}</td>
                    <td>{{ $data->pendaftaran->agama }}</td>
                    <td>{{ $data->pendaftaran->jurusan }}</td>
                    <td>{{ $data->pendaftaran->pembelian_merchandise }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.print();
        });
    </script>
</body>
</html>