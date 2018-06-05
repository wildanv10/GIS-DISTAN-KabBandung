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
        <li class="breadcrumb-item active">Pertanian</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Pertanian</div>
        <div class="card-body">
            <br><br>

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <p class="h3 font-weight-bold">Tanaman Pangan</p>
                        @foreach($kategoriPangan as $g)
                        
                        <li class="list-group-item">
                            <a href="{{ url('admin/pertanian/'.$g->kodePangan) }}">
                                {{$g->namaPangan}}
                            </a>
                        </li>

                        @endforeach

                    </ul>

                    
                    <ul class="list-group list-group-flush mt-4">
                        <p class="h3 font-weight-bold">Sayuran</p>
                        @foreach($kategoriSayuran as $g)
                        
                        <li class="list-group-item">
                            <a href="{{ url('admin/pertanian/'.$g->kodePangan) }}">
                                {{$g->namaPangan}}
                            </a>
                        </li>

                        @endforeach

                    </ul>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <p class="h3 font-weight-bold">Buah - Buahan</p>
                        @foreach($kategoriBuah as $g)
                        
                        <li class="list-group-item">
                            <a href="{{ url('admin/pertanian/'.$g->kodePangan) }}">
                                {{$g->namaPangan}}
                            </a>
                        </li>

                        @endforeach

                    </ul>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <p class="h3 font-weight-bold">Tanaman Biofarmika</p>
                        @foreach($kategoriBio as $g)
                        
                        <li class="list-group-item">
                            <a href="{{ url('admin/pertanian/'.$g->kodePangan) }}">
                                {{$g->namaPangan}}
                            </a>
                        </li>

                        @endforeach

                    </ul>

                    
                    <ul class="list-group list-group-flush mt-4">
                        <p class="h3 font-weight-bold">Perkebunan</p>
                        @foreach($kategoriKebun as $g)
                        
                        <li class="list-group-item">
                            <a href="{{ url('admin/pertanian/'.$g->kodePangan) }}">
                                {{$g->namaPangan}}
                            </a>
                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted">&nbsp;</div>
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

