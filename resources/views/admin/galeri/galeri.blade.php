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
        <li class="breadcrumb-item active">Galeri</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Galeri</div>
        <div class="card-body">
            <div class="row">
                <a href=" {{url('admin/galeri/create')}} "> <button type="button" class="btn btn-primary btn-lg">Tambah Galeri</button></a>
            </div>

            <br><br>

            <div class="row">
                <?php
                $terakhir = "0000-00-00 00:00:00";
                ?>
                @foreach($galeri as $g)
                <div class="card card-admin">
                    <img class="card-img-top" src="{{ asset('images/img-galeri/'.$g->foto)  }}" alt="{{$g->foto}}">
                    <div class="card-body">
                    </div>
                    
                    <a href="{{ url('admin/galeri/'.$g->id.'/edit')}}">
                    <div class="card-footer text-center">
                        <i class="fa fa-pencil fa-lg"></i>
                        Sunting
                    </div>
                    </a>
                </div>

                <?php
                if($terakhir <= $g->updated_at){
                    $terakhir = $g->updated_at;
                }
                ?>

                @endforeach

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
