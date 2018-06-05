    @extends('layouts.dashboard')

    @section('content')

<body>
    
<div class="parallax-slideshow bg-dark"></div>

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

        </div>

        @include('layouts.link-terkait')
        
    </div>
</div>

<div class="parallax" >
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <img src=" {{ url('images/img/kepaladinas.JPG') }} " width="250px" height="250px" alt=""  class="rounded-circle mx-auto d-block" style="margin-top:50px;">
        </div>
        <div class="col-sm-4 bg-dark-costum">
            <h4 class="mt-5">Visi</h4>
            <p>
                Memantapkan Kabupaten Bandung yang Maju, Mandiri dan Berdaya Saing, melalui Tata Kelola Pemerintahan yang Baik dan Sinergi Pembangunan Perdesaan, Berlandaskan Religius, Kultural dan Berwawasan Lingkungan.
            </p>

            <h4>Misi</h4>
            <ul>
                <li>Meningkatkan kualitas dan cakupan layanan pendidikan;</li>
                <li>Mengoptimalkan kuantitas dan kualitas pelayanan kesehatan;</li>
                <li>Mewujudkan pembangunan infrastruktur yang terpadu tata ruang wilayah dengan memperhatikan aspek kebencanaan;</li>
                <li>Meningkatkan kesejahteraan sosial masyarakat;</li>
                <li>Menciptakan pembangunan ekonomi yang memiliki keunggulan kompetitif;</li>
                <li>Meningkatkan kelestarian lingkungan hidup;</li>
                <li>Meningkatkan kemandirian desa;</li>
                <li>Meningkatkan reformasi birokrasi ;</li>
                <li>Meningkatkan kemanan dan ketertiban wilayah;</li>
            </ul>
        </div>
</div>


<div class="container mt-5 mb-5" >
    <div class="row mt-5">
        <div class="col-sm-12">
            <br><br>
            <div class="text-center galeri-beranda shadow-sm pb-5">
                <h2 class="mt-5 mb-4 pt-5">Galeri</h2>
                <div class="header-section-border col-md-2 col-md-offset-5"></div>
                @foreach($galeri as $g)

                    <img id="myImg{{ $g->id }}" src=" {{ asset('images/img-galeri/'.$g->foto)  }} " class="imageGaleri" alt="{{ $g->deskripsi }}" onclick="showImage(this,{{$g->id}})">    

                @endforeach
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal">

    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

    <img class="modal-content" id="img">
        
    <div id="caption"></div>
</div>


@include('layouts.footer')

<script>

    var gambar = 2;
    setInterval(function() {
        $('.parallax-slideshow').css('background-image', 'url(images/img/'+gambar+'.jpg)');
        gambar++;
        if(gambar > 3){
            gambar = 1;
        }
    }, 3000);


    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
    $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 3000);
</script>
<script>
$(document).ready(function() {

  var toggleAffix = function(affixElement, scrollElement, wrapper) {
  
    var height = affixElement.outerHeight(),
        top = wrapper.offset().top;
    
    if (scrollElement.scrollTop() >= top){
        wrapper.height(height);
        affixElement.addClass("affix");
    }
    else {
        affixElement.removeClass("affix");
        wrapper.height('auto');
    }
      
  };
  

  $('[data-toggle="affix"]').each(function() {
    var ele = $(this),
        wrapper = $('<div class="container"></div>');
    
    ele.before(wrapper);
    $(window).on('scroll resize', function() {
        toggleAffix(ele, $(this), wrapper);
    });
    
    // init
    toggleAffix(ele, $(window), wrapper);
  });
  
});
</script>

<script>
     function showImage(element,i){
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg'+i);
    var modalImg = document.getElementById("img");
    var captionText = document.getElementById("caption");
        modal.style.display = "block";
        modalImg.src = element.src;
        captionText.innerHTML = element.alt;
   }
</script>

@endsection