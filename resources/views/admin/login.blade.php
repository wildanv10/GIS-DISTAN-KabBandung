    @extends('layouts.dashboard')

    @section('content')

    <body class="bg-dark  bg-opacity bg-body-login">
    <div class="container-fluid">
        <div class="card card-login mx-auto text-center" style="margin-top: 150px;" >
        <div style="position:relative; margin-top: -35px;">
            <div class="avatar img-responsive">
            <center>
                <img src="{{url('images/img/avatar.png')}}" width="70px" height="70px" class="rounded-circle bg-info p-3" style="margin-left: 160px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1); ">
            </center>
            </div>
        </div>
        <div class="card-body">
            <h3>Masuk Admin</h3>
            <br>

        <!-- MUNCULKAN PESAN EROR -->
            @if ($errors->has('email'))
            <div class="alert alert-danger alert-dismissible fade show text-left" role="alert">
                <strong>Login Failed!</strong> {{ $errors->first('email') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if ($errors->has('password'))
            <div class="alert alert-danger alert-dismissible fade show text-left" role="alert">
                <strong>Login Failed!</strong> {{ $errors->first('password') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

        <!-- SAMPE SINI -->

            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email">

                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password">

                </div>
                    <input type="submit" class="btn btn-info btn-block" value="Masuk">
            </form>
        </div>

        <div class="card-footer">
            Dinas Pertanian Kabupaten Bandung
        </div>
        </div>
    </div>
    @endsection
