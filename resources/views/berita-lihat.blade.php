

    @extends('layouts.dashboard')

    @section('content')

<body>
    
@include('layouts.navbar')

<div class="container bg-light pt-5 pb-5" style="position:relative;">
    <div class="row">
        <div class="col-md-8">
            <!--row berita-->
                <div class="row mb-4">
                    <div class="col-12 ">
                        <h2>
                            {{$tampilkan->judul}}
                        </h2>
                    </div>
                    
                    <div class="col-12 pb-2">
                        <img src=" {{ asset('images/img-berita/'.$tampilkan->foto_berita)  }} " width="100%" alt="">
                        
                        <p class="text-meta-berita mt-2">
                            <i class="fa fa-user"></i> {{$tampilkan->pembuat}}
                            &nbsp;
                            <i class="fa fa-calendar"></i> <?php echo date("j F Y", strtotime($tampilkan->created_at)); ?> Pukul <?php echo date("G : i", strtotime($tampilkan->created_at)); ?>
                        </p>
                    </div>

                    <div class="col-12 border-bottom-costum">
                        <p class="text-isi-berita">
                            {{$tampilkan->isi_berita}}
                        </p>
                    </div>
                </div>
                <!--row berita sampe sini-->
        </div>
        
        @include('layouts.link-terkait')
        
    </div>
</div>


@include('layouts.footer')

@endsection