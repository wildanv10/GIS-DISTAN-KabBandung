    @extends('layouts.dashboard')

    @section('content')

<body>
    
@include('layouts.navbar')

<div class="container mt-1 mb-5" >
    <div class="row mt-1">
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

@include('layouts.footer')

@endsection