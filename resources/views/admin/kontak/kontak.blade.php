@extends('layouts.dashboard')

@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
@include('include.header')
  
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kontak</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-envelope"></i> Kontak Masuk</div>
                <div class="card-body">

                <div class="row">
                    <?php
                    $terakhir = "0000-00-00 00:00:00";
                    ?>
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Isi Pesan</th>
                                <th>Balasan</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Isi Pesan</th>
                                <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                            
                            @foreach($kontak as $data)
                            <tr>
                                <td>{{ $data->namaKontak }}</td>
                                <td>{{ $data->emailKontak }}</td>
                                <td>{{ $data->isiKontak }}</td>
                                <td>
                                    @if($data->balasan == 1)
                                        {{ $data->isiBalasan }}
                                    @else
                                        <a href="{{ url('admin/kontak/'.$data->id.'/edit') }}"><strong><span class="fa fa-fw fa-envelope"></span>Balas</strong></a> 
                                    @endif
                                </td>
                            </tr>

                            <?php
                            if($terakhir <= $data->updated_at){
                                $terakhir = $data->updated_at;
                            }
                            ?>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card-footer small text-muted">Terakhir Diubah Pada <?php echo date("j F Y", strtotime($terakhir)); ?> Jam <?php echo date("G : i", strtotime($terakhir)); ?> </div>
        </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('assets/js/sb-admin-charts.min.js')}}"></script>

@endsection

