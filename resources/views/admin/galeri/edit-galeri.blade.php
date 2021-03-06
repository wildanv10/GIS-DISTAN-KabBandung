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
        <li class="breadcrumb-item">
          <a href="#">Galeri</a>
        </li>
        <li class="breadcrumb-item active">Edit Galeri</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="col-md-12 col-lg-8 col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
            <i class="fa fa-pencil"></i> Galeri</div>
            <div class="card-body">
                <form action="{{ url('admin/galeri/'.$galeri->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="form-group text-center">
                        <img class="card-img-top col-12" src="{{ asset('images/img-galeri/'.$galeri->foto)  }}" alt="{{$galeri->foto}}">
                        <center>{{$galeri->foto}}</center>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" id="inputgambar" name="foto" class="validate form-control">
                    </div>
                        
                    <div class="form-group">
                        <label>Deskripsi Gambar</label>
                        <input type="text" name="deskripsi" value="{{$galeri->deskripsi}}" class="form-control" required>
                    </div>
                        <button type="submit" class="btn btn-outline-primary float-right">Ubah</button>
                </form>
                        
                        <a href="{{ url('admin/galeri') }} "> <button class="btn btn-link float-right">Batal</button></a>
            

                <form action=" {{url('admin/galeri/'.$galeri->id) }} " method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                                
                    <!-- Memanggil Modal-->
                    <a data-toggle="modal" data-target="#modalHapus">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="fa fa-trash fa-lg"></i>
                            Hapus
                        </button>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Gambar?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Apakah Anda Yakin Akan Menghapus Gambar Ini?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-link" type="button" data-dismiss="modal">Batal</button>
                                        <!-- Button Hapusnya Disini-->
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('assets/js/sb-admin-charts.min.js')}}"></script>

@endsection

