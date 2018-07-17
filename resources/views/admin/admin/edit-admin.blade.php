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
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Edit Admin</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="col-md-12 col-lg-8 col-xl-6">
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-pencil"></i> Admin</div>
            <div class="card-body">
                <form action="{{ url('admin/list-admin/'.$admin->id) }}" method="post" enctype="multipart/form-data" id="form-edit-admin">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    
                    
                    <div class="alert alert-danger alert-dismissible text-center" style="display:none;" id="alert-password-admin">
                        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                    </div>

                </form>
                        
                        <button onclick="myFunction()" class="btn btn-primary float-right">Submit</button>

                        <a href="{{ url('admin/list-admin') }} "> <button class="btn btn-link float-right">Batal</button></a>
            

                <form action=" {{url('admin/list-admin/'.$admin->id) }} " method="post">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Admin?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Apakah Anda Yakin Akan Menghapus Data Admin Ini?</div>
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

<script>

function myFunction() {
    var pass, pass2, text = "";

    // Get the value of the input field with id="numb"
    pass = document.getElementById("password").value;
    pass2 = document.getElementById("password_confirmation").value;

    // If x is Not a Number or less than one or greater than 10
    if (pass == null || pass == "") {
        document.getElementById("form-edit-admin").submit();
    } else {
        if (pass == pass2) {
            document.getElementById("form-edit-admin").submit();
        } else {
            $("#alert-password-admin").fadeIn();
            $("#alert-password-admin").show();
            text = "Konfirmasi Password Tidak Sama";
            document.getElementById("alert-password-admin").innerHTML = text;
            document.getElementById("alert-password-admin").style.display = "block";
        }
    }
}
</script>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('assets/js/sb-admin-charts.min.js')}}"></script>

@endsection

