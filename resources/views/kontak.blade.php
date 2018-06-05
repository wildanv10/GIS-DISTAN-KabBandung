    @extends('layouts.dashboard')

    @section('content')

<body>
    
@include('layouts.navbar')

<div class="container bg-light pt-5 pb-5" style="position:relative;">
    <div class="row">
        <div class="col-md-8">
            <h2 class=" mb-4">Kontak Kami</h2>
            <br>

            <blockquote class="blockquote bq-primary">
                <div class="row">
                    <div class="col-sm-6">
                        <p style="font-size:15px !important;">
                        <div style="font-weight:bold;">No. Telepon:</div>
                        (022) 589-1703
                        <br><br>
                        
                        <div style="font-weight:bold;">Email:</div>
                        admin@distan.bandungkab.go.id
                        <br><br>
                        
                        <div style="font-weight:bold;">Alamat:</div>
                        Jl.Raya Soreang KM.17 Bandung
                        </p>
                    </div>
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9765381087775!2d107.52628029694819!3d-7.0203169334856605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88af8c0a0dbf6928!2sKantor+Dinas+Pertanian%2C+Perkebunan+Dan+Kehutanan+Kabupaten+Bandung!5e0!3m2!1sid!2sid!4v1525433358988" width="40%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                </div>


            </blockquote>
            

            <br><br><br>
            <p class="h5 text-center">Jika Anda memiliki saran, kritik ataupun pertanyaan silahkan tinggalkan pesan melalui form dibawah ini.</p>
                <div class="header-section-border col-md-2 col-md-offset-5"></div>
                <div class="md-form">
                    <!-- Material form register -->
                    <form action="{{ url('admin/kontak') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        
                        {{ csrf_field() }}
                            <!-- Material input name -->
                            <div class="md-form form-sm">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="nama" required>
                                <label for="materialFormNameModalEx1">Nama</label>
                            </div>

                            <!-- Material input name -->
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="materialFormNameModalEx1" class="form-control form-control-sm" name="email" required>
                                <label for="materialFormNameModalEx1">Email</label>
                            </div>

                            <!-- Material textarea message -->
                            <div class="md-form form-sm">
                                <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" id="materialFormMessageModalEx1" class="md-textarea form-control" name="isi" required></textarea>
                                <label for="materialFormMessageModalEx1">Tuliskan Saran, Kritik ataupun Pertanyaan</label>
                            </div>

                            <div class="text-right mt-4 mb-2">
                                <button class="btn btn-dark-green">Kirim
                                    <i class="fa fa-send ml-2"></i>
                                </button>
                            </div>
                    </form>
                    <!-- Material form register -->
                </div>

        </div>
        
        @include('layouts.link-terkait')
        
    </div>
</div>


@include('layouts.footer')

@endsection