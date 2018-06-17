@extends('layouts.dashboard')

@section('content')

<body>

@include('layouts.navbar')
<div class="container">
        <select id='selectPangan'>
        @foreach($pangan as $p)
            @if($p->kodekategori == 'k003')
                <option value='{{$p->kodepangan}}-{{$p->namapangan}}'>{{$p->namapangan}}</option>
            @endif
        @endforeach
        </select>
        

        <button id="tampil">Tampil</button>


		<div id="chart-container">
            <canvas id="mycanvas"></canvas>
		</div>
		<!-- javascript -->
		
		<script type="text/javascript" src="{{asset('assets/js/Chart.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script>
        $(document).ready(function(){
            
            function hapus(){
                $("#mycanvas").remove();
            };
            
            function convertHex(hex,opacity){
                r = parseInt(hex.substring(0,2), 16);
                g = parseInt(hex.substring(2,4), 16);
                b = parseInt(hex.substring(4,6), 16);

                result = 'rgba('+r+','+g+','+b+','+opacity/100+')';
                return result;
            }

            $("#tampil").click(function(){
                
                //AMBIL VALUE DARI SELECT#SELECTPANGAN
                var isi = $("select#selectPangan option:checked").val().split("-");
                var pangan = isi[0];
                var label = isi[1];

                //HAPUS CANVAS
                $("#mycanvas").remove();

                //CREATE CANVAS
                $('#chart-container').append("<canvas id='mycanvas'></canvas>");   

                var ctx = $("#mycanvas");
                var barGraph;
                var url = 'chart/p025';
                
                //AJAX AMBIL DATA DARI DATA.PHP
                $.ajax({

                    url: "chart/"+pangan,
                    method: "GET",
                    success: function(data) {
                        console.log(data);
                        var labelBawah = [];
                        var labelJumlah = [];
                        var warna = [];
                        console.log("");

                        for(var i in data) {
                            labelBawah.push(data[i].nama_kec);
                            labelJumlah.push(data[i].produksi);
                            warna = convertHex(data[i].warna,100);
                            warna2 = convertHex(data[i].warna,70);
                        }

                        var chartdata = {
                            labels: labelBawah,
                            datasets : [
                                {
                                    label: label,
                                    backgroundColor: warna2,
                                    borderColor: warna2,
                                    hoverBackgroundColor: warna,
                                    hoverBorderColor: warna,
                                    data: labelJumlah
                                }
                            ]
                        };

                        //CREATE CHART TO CANVAS
                        barGraph = new Chart(ctx, {
                            type: 'bar',
                            data: chartdata
                        });
                        
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        });
        </script>

</div>
@include('layouts.footer')


@endsection