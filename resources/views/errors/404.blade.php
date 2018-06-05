    @extends('layouts.dashboard')

    @section('content')

    <body>
            <div class="parallax-full" style="text-align: center; padding-top: 40vh;" >
                <div class="title" style="font-size: 62px; color:#eaeaea;">Oops.. Halaman tidak ditemukan.</div>
                <br>
                <a href="{{ url('/beranda') }}"  style="font-size: 52px; color:#eaeaea;" class="blockquote-footer a-404"><div class="title">Kembali Ke Beranda</div></a>
            </div>


    @endsection