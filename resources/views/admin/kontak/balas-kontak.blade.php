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
          <a href="#">Kontak</a>
        </li>
        <li class="breadcrumb-item active">Edit Kontak</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="col-md-12 col-lg-8 col-xl-6">
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-pencil"></i> Kontak</div>
            <div class="card-body">
                <form action="{{ url('admin/kontak/'.$kontak->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="{{$kontak->namaKontak}}" class="form-control" readonly>
                    </div>
                        
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{$kontak->emailKontak}}" class="form-control" readonly>
                    </div>
                        
                    <div class="form-group">
                        <label>Isi Pesan</label>
                        <textarea name="isi" class="form-control" readonly>{{$kontak->isiKontak}}</textarea>
                    </div>
                        
                    <div class="form-group">
                        <label>Balasan</label>
                        <input type="hidden" name="balasan" value="1" class="form-control">
                        <textarea name="isiBalasan" class="form-control" required autofocus></textarea>
                    </div>

                        <button type="submit" class="btn btn-outline-primary float-right">Balas</button>
                </form>
            
                        
                        <a href="{{ url('admin/kontak') }} "> <button class="btn btn-link float-right">Batal</button></a>

                <form action=" {{url('admin/kontak/'.$kontak->id) }} " method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                                
                    <!-- Memanggil Modal-->
                    <a data-toggle="modal" data-target="#modalHapus">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="fa fa-trash fa-lg"> Hapus</i>
                        </button>
                    </a>

                    <!-- Hapus Modal-->
                    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:1302;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pesan?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Apakah Anda Yakin Akan Menghapus Pesan Ini?</div>
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

