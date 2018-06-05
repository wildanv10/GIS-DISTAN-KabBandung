<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Distan Kab. Bandung</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    
  <!-- Custom fonts for this template-->
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/kostum.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet">

  <!-- Data Table for this template-->
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Jquery-->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>

  

</head>


@yield('content')


@include('include.jquery')

@include('include.dataTablesJS')


</body>
</html>