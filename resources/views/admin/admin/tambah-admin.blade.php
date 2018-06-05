


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
        <li class="breadcrumb-item active">Admin</li>
        <li class="breadcrumb-item active">Tambah Admin</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="col-md-6">
        <div class="card mb-6">
            <div class="card-header">
            <i class="fa fa-pencil"></i> Admin</div>
            <div class="card-body">
                <form action="{{ url('admin/list-admin') }}" method="POST" enctype="multipart/form-data" autocomplete="off" id="form-add-admin">

                    {{ csrf_field() }}
                    
                    <div class="alert alert-danger alert-dismissible text-center" style="display:none;" id="alert-password-admin">
                        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    </div>


                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
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
        document.getElementById("form-add-admin").submit();
    } else {
        if (pass == pass2) {
            document.getElementById("form-add-admin").submit();
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

