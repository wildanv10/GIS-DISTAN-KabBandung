


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
      <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-pencil"></i> Galeri</div>
            <div class="card-body">
                <form action="{{ url('admin/galeri') }}" method="POST" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;" />
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" id="inputgambar" name="foto" class="validate form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Gambar</label>
                        <input type="text" name="deskripsi" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>

                </form>
            
                    <a href="{{ url('admin/galeri') }} "> <button class="btn btn-link float-right">Batal</button></a>

            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
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

    
    <script type="text/javascript">

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#showgambar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#inputgambar").change(function () {
            readURL(this);
        });

    </script>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('assets/js/sb-admin-charts.min.js')}}"></script>

@endsection

