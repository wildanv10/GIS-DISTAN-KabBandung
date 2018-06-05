    @extends('layouts.dashboard')

    @section('content')

<body>

@include('layouts.navbar')

<div class="container bg-light pt-5" style="position:relative;">
    <div class="row">
        <div class="col-md-8">
            <h2 class=" mb-4 text-center font-weight-bold">Berita Terbaru</h2>
            
            <div class="header-section-border col-md-2 col-md-offset-5"></div>
            
            @foreach($berita as $b)

                <!--row berita-->
                <div class="row mb-4">
                    <div class="col-4 border-bottom-costum pb-2">
                        
                        <a href="{{ url('berita-lihat', $b->slug_judul) }}" class="a-berita">
                        <img src=" {{ asset('images/img-berita/'.$b->foto_berita)  }} " width="100%" alt="">
                    </div>
                    <div class="col-6 border-bottom-costum">
                            <p class="text-judul-berita">
                                {{$b->judul}}
                            </p>
                        </a>
                        <p class="text-meta-berita">
                            <i class="fa fa-user"></i> {{$b->pembuat}}
                            &nbsp;
                            <i class="fa fa-calendar"></i> <?php echo date("j F Y", strtotime($b->created_at)); ?> Pukul <?php echo date("G : i", strtotime($b->created_at)); ?>
                        </p>
                    </div>
                </div>
                <!--row berita sampe sini-->

            @endforeach
            
        @include('pagination.default', ['paginator' => $berita])

        </div>

        @include('layouts.link-terkait')
        
    </div>
</div>
@include('layouts.footer')


@endsection