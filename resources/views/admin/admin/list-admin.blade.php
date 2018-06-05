@extends('layouts/dashboard')

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
            </ol>
            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                <i class="fa fa-user"></i> Daftar Admin</div>
                <div class="card-body">

                <div class="row">
                    <a href=" {{url('admin/list-admin/create')}} "> <button type="button" class="btn btn-primary btn-lg">Tambah Admin</button></a>
                </div>

                <div class="row mt-5">
                    <?php
                    $terakhir = "0000-00-00 00:00:00";
                    ?>

                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="30px">Sunting</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    
                            @foreach($admin as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td class=" text-center">
                                    <a href="{{ url('admin/list-admin/'.$data->id.'/edit') }}"><span class="fa fa-2x fa-pencil"></span></a> 
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

        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © 2018 Dinas Pertanian Kabupaten Bandung</small>
                </div>
            </div>
        </footer>

    </div>

@endsection