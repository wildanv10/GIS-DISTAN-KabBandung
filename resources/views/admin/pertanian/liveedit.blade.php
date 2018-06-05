

@extends('layouts/dashboard')

@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
    @include('include.header')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> &nbsp;
                </div>

                
                <div class="card-body">

                <div class="errmsg" class="text-center">   
                    <div id="errmsg" class="text-center"></div>
                </div>

                <div class="row">

                    <div class="table-responsive">
    
                        <input type="hidden" value="{{csrf_token()}}" name="_token" id="update-token">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                <th>Nama Kecamatan</th>
                                <th width="150px">Jumlah Tanam</th>
                                <th width="180px">Tanaman Menghasilkan</th>
                                <th width="150px">Produksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                            @foreach($buah as $data)

                            <tr>
                                <td onblur="update({{$data->id}})" id="namakec-{{ $data->id }}">{{$data->nama_kec}}</td>
                                <td onblur="update({{$data->id}})" id="jt-{{ $data->id }}" class="text-right inputNumber" contenteditable>{{$data->jumlahtanam}}</td>
                                <td onblur="update({{$data->id}})" id="jtm-{{ $data->id }}" class="text-right inputNumber" contenteditable>{{$data->jumlahtanamanmenghasilkan}}</td>
                                <td onblur="update({{$data->id}})" id="produksi-{{ $data->id }}" class="text-right inputNumber" contenteditable>{{$data->produksi}}</td>
                            </tr>

                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>

            <div class="card-footer small text-muted"> &nbsp;</div>
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

<!-- JS input number only -->

<script type="text/javascript">

$(document).ready(function () {
  //called when key is pressed in textbox
  $(".inputNumber").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("<div class='alert alert-danger' role='alert'><b>Perhatian - </b> Hanya Bisa Di Isi Oleh Nomor</div>").slideDown().delay(3000).slideUp();
               return false;
    }
   });
});

</script>

<!-- JS Live Editable Datatables -->

<script type="text/javascript">

$(document).ready(function(){
    $('#dataTable').dataTable({
        paging: false,
        searching: false
    });
});

function update(id){
    var name = $('#namakec-'+id).html();
    var jt = $('#jt-'+id).html();
    var jtm = $('#jtm-'+id).html();
    var produksi = $('#produksi-'+id).html();
    console.log(name);

    $.ajax({
        type: "POST",
        url: '{{URL::to("admin/pertanian/updates")}}',
        data: {
            jt: jt,
            jtm: jtm,
            produksi: produksi,
            id:id,
            _token: $('#update-token').val()
        },
    });
}

</script>

@endsection