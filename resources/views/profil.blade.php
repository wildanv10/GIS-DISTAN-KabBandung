    @extends('layouts.dashboard')

    @section('content')

<body>

@include('layouts.navbar')


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
</div>

<div class="container bg-light pt-5" style="position:relative;">
    <div class="row">
        <div class="col-md-8">
            <div class="col-12 mb-5">
                <h2 class=" mb-4 font-weight-bold">Tugas Pokok Dan Fungsi</h2>

                <p class="p-profil">
                <ol class="p-profil">
                    
                <small>
                Tugas pokok Dinas Pertanian, Perkebunan dan Kehutanan berdasarkan Perda Kabupaten Bandung No. 20 tahun 2007 adalah merumuskan kebijakan teknis operasional di bidang pertanian, perkebunan dan kehutanan yang meliputi pertanian tanaman pangan, hortikultura, perkebunan dan kehutanan serta melaksanakan ketatausahaan Dinas. Menindaklanjuti Perda tersebut, maka pada tanggal 26 Februari 2008 terbentuk Peraturan Bupati Bandung tahun 5 tahun 2008 tentang Rincian Tugas, Fungsi dan Tata Kerja Dinas Daerah Kabupaten Bandung. Berdasarkan Peraturan Bupati tersebut, tugas pokok kepala dinas pertanian, perkebunan dan kehutanan adalah memimpin, merumuskan, mengatur, membina, mengendalikan, mengkoordinasikan dan mempertanggung-jawabkan kebijakan teknis pelaksanaan urusan pemerintahan daerah berdasarkan asas otonomi dan tugas pembantuan sebagian bidang pertanian dan ketahanan pangan serta bidang kehutanan. Tugas Pokok dan Fungsi Bidang-bidang dalam Dinas Pertanian, Perkebunan dan Kehutanan:
                </small>
                <blockquote class="blockquote mt-3 pl-4">
                    <small>
                    <li><strong> Bidang Pertanian Tanaman Pangan </strong></li>
                    Tugas pokok Kepala Bidang Pertanian Tanaman Pangan adalah memimpin, mengkoordinasikan dan mengendalikan tugas-tugas di bidang pengelolaan pertanian tanaman pangan yang meliputi sarana dan prasarana, pengembangan produksi serealia, kacang-kacangan dan umbi-umbian serta pasca panen, pengolahan dan pemasaran hasil.
                    Fungsi Bidang Pertanian Tanaman Pangan adalah :

                    <ol type="a">

                        <li>    menetapkan penyusunan dan program kerja pengelolaan pertanian tanaman pangan</li>
                        <li>	menyelenggarakan pelamkasanaan tugas di bidang pengelolaan pertanian tanaman pangan</li>
                        <li>    mengkoordinasikan perencanaan teknis di bidang pengelolaan tanaman pangan</li>
                        <li>	merumuskan sasaran pelaksanaan tugas di bidang pengelolaan pertanian tanaman pangan</li>
                        <li>	membina dan mengarahkan pelaksanaan tugas di bidang pengelolaan pertanian tanaman pangan</li>
                        <li>	melaporkan pelaksanaan tugas pengelolaan pertanian tanaman pangan</li>
                        <li>	mengevaluasi pelaksanaan tugas pengelolaan pertanian tanaman pangan, melaksanakan tugas kedinasan lain sesuai dengan bidang tugas da fungsinya </li>
                        <li>	melaksanakan koordinasi/kerjasama dan kemitraan dengan unit kerja/instansi/lembaga atau pihak ketiga di bidang pengelolaan pertanian tanaman pangan</li>
                    </ol>
                    </small>
                </blockquote>

                <blockquote class="blockquote mt-3 pl-4">
                    <small>
                    <li><strong> Bidang Hortikultura </strong></li>
                    Tugas pokok Kepala Bidang Hortikultura adalah memimpin, mengkoordinasikan dan mengendalikan tugas-tugas di bidang pengelolaan hortikultura yang meliputi pengemangan produksi sayuran, tanaman hias, buah-buahan dan obat-obatan serta pasca panen, pengolahan dan pemasaran hasil. 
                    Fungsi Bidang Hortikultura adalah :

                    <ol type="a">

                        <li>	menetapkan penyusunan dan program kerja pengelolaan hortikultura</li>
                        <li>	menyelenggarakan pelaksanaan tugas di bidang pengelolaan hortikultura</li>
                        <li>	mengkoordinasikan perencanaan teknis di bidang pengelolaan hortikultura</li>
                        <li>	merumuskan sasaran pelaksanaan tugas di bidang pengelolaan hortikultura</li>
                        <li>	melaporkan pelaksanaan tugas pengelolaan hortikultura</li>
                        <li>	mengevaluasi pelaksanaan tugas pengelolaan hortikultura</li>
                        <li>	melaksanakan tugas kedinasan lain sesuai dengan bidang tugas da fungsinya </li>
                        <li>	melaksanakan koordinasi/kerjasama dan kemitraan dengan unit kerja/instansi/lembaga atau pihak ketiga di bidang pengelolaan hortikultura.</li>
                    </ol>
                    </small>
                </blockquote>

                <blockquote class="blockquote mt-3 pl-4">
                    <small>
                    <li><strong> Bidang Perkebunan </strong></li>
                    Tugas pokok Kepala Bidang Perkebunan adalah memimpin, mengkoordinasikan dan mengendalikan tugas-tugas di bidang pengelolaan perkebunan yang meliputi pengembangan produksi perkebunan, pasca panen, pengolahan dan pemasaran hasil serta pengendalian.
                    Fungsi Bidang Perkebunan adalah :


                    <ol type="a">

                        <li>	menetapkan penyusunan dan program kerja pengelolaan perkebunan</li>
                        <li>	menyelenggarakan pelamkasanaan tugas di bidang pengelolaan perkebunan</li>
                        <li>	mengkoordinasikan perencanaan teknis di bidang pengelolaan perkebunan</li>
                        <li>	merumuskan sasaran pelaksanaan tugas di bidang pengelolaan perkebunan</li>
                        <li>	membina dan mengarahkan pelaksanaan tugas di bidang pengelolaan perkebunan</li>
                        <li>	melaporkan pelaksanaan tugas pengelolaan perkebunan</li>
                        <li>	mengevaluasi pelaksanaan tugas pengelolaan perkebunan</li>
                        <li>	melaksanakan tugas kedinasan lain sesuai dengan bidang tugas da fungsinya serta</li>
                        <li>	melaksanakan koordinasi/kerjasama dan kemitraan dengan unit kerja/instansi/lembaga atau pihak ketiga di bidang pengelolaan perkebunan.</li>
                    </ol>
                    </small>
                </blockquote>

                <blockquote class="blockquote mt-3 pl-4">
                    <small>
                    <li><strong> Bidang Kehutanan </strong></li>
                    Tugas pokok Kepala Bidang Kehutanan adalah memimpin, mengkoordinasikan dan mengendalikan tugas-tugas di bidang pengelolaan kehutanan yang meliputi pengembangan dan pemanfaatan sumberdaya kehutanan, rehabilitasi lahan dan konservasi tanah serta perlindungan dan pengendalian hutan.
                    Fungsi Bidang Kehutanan adalah :


                    <ol type="a">

                        <li>	menetapkan penyusunan dan program kerja pengelolaan kehutanan</li>
                        <li>	menyelenggarakan pelaksanaan tugas di bidang pengelolaan kehutanan</li>
                        <li>	mengkoordinasikan perencanaan teknis di bidang pengelolaan kehutanan</li>
                        <li>	merumuskan sasaran pelaksanaan tugas di bidang pengelolaan kehutanan</li>
                        <li>	membina dan mengarahkan pelaksanaan tugas di bidang pengelolaan kehutanan</li>
                        <li>	melaporkan pelaksanaan tugas pengelolaan kehutanan</li>
                        <li>	mengevaluasi pelaksanaan tugas pengelolaan kehutanan</li>
                        <li>	melaksanakan tugas kedinasan lain sesuai dengan bidang tugas da fungsinya serta</li>
                        <li>	melaksanakan koordinasi/kerjasama dan kemitraan dengan unit kerja/instansi/lembaga atau pihak ketiga di bidang kehutanan. </li>
                        <li>	melaksanakan melaksanakan koordinasi/kerjasama dan kemitraan dengan unit kerja/instansi/lembaga atau pihak ketiga di bidang kehutanan.</li>
                    </ol>
                    </small>
                </blockquote>
                

                </ol>
                </p>

            </div>

            <div class="col-12 mb-5">
                <h2 class=" mb-4 text-center font-weight-bold">Struktur Organisasi</h2>
                <div class="header-section-border col-md-2 col-md-offset-5"></div>

                <img src=" {{ asset('images/img/Struktur-Organisasi.jpg')  }} " width="100%" alt="Struktur Organisasi Dinas Pertanian Kabupaten Bandung distan kab bandung">
                
            </div>


            <div class="col-12 mt-3 mb-5">
                <h2 class=" mb-4 font-weight-bold">Selayang Pandang</h2>
                
                <p class="p-profil">
                <ol class="p-profil" type="A">

                <blockquote class="blockquote mt-3 pl-4">
                    <small>
                    <li><strong> Kondisi Sumber Daya Alam </strong></li>
                    Kabupaten Bandung merupakan bagian dari wilayah pengembangan metropolitan Bandung, yang mempunyai luas 176.239 km2 dengan jumlah penduduk 3.174.499 jiwa terdiri dari 1.617.513 laki-laki dan 1.556.986 perempuan (BPS 2010), yang merupakan hiterland serta daerah penyangga ibukota propinsi Jawa Barat. Hal ini memberikan dampak positif terhadap keleluasan dan peluang pengembangan struktur ekonomi dan aksesibilitas infrastruktur peningkatan kualitas sosial.
                    <br><br>
                    Batas-batas daerah adalah sebelah utara : Kabupaten Bandung Barat, Kota Bandung, Kota Cimahi dan Kabupaten Sumedang; sebelah timur : Kabupaten Sumedang dan Kabupaten Garut; sebelah Selatan : Kabupaten Garut dan Kabupaten Cianjur serta sebelah Barat : Kabupaten Bandung Barat, Kabupaten Cianjur dan Kota Bandung.
                    <br><br>
                    Wilayah Kabupaten Bandung terbagi ke dalam 31 Administratif Kecamatan yang terdiri dari 267 Desa dan 9 Kelurahan.
                    <br><br>
                    Kondisi Geografis
                    <ul type="disc">

                        <li>Koordinat 107? 22' - 108? 5' BT dan 6? 41' - 7?19' LS.</li>
                        <li>Ketinggian 110 - 2.429 m dpl</li>
                        <li>Luas wilayah 176.239 Ha.</li>
                        <li>Kondisi Morfologis</li>
                        <li>Terdiri dari wilayah datar/landai, kaki bukit, dan pegunungan</li>
                        <li>Kemiringan lereng beragam antara 0-8%, 8-15% hingga di atas 45%.</li>
                    </ul>
                    <br>
                    Berdasarkan Rencana Tata Ruang dan Wilayah Kabupaten Bandung Tahun 2007-2027, wilayah Kabupaten Bandung dibagi kedalam 8 Wilayah Pengembangan: (1) WP Baleendah; (2) WP Banjaran; (3) WP Cicalengka; (4) WP Cilengkrang-Cimenyan; (5) WP Cileunyi-Rancakek; (6) Majalaya; (7) Margahayu-Margaasih; (8) Soreang-Kutawaringin-Katapang.
                    <br><br>
                    Potensi sektor pertanian hampir di seluruh Wilayah Pengembangan, sehingga kebijakan pengembangan sistem kota-kota dan wilayah diarahkan pada pengembangan kawasan pertanian, terutama di WP Soreang-Kutawaringin-Katapang, WP Baleendah, WP Banjaran, WP Majalaya, WP Cileunyi-Rancaekek, WP Cicalengka, dan WP Cilengkrang-Cimenyan.
                    </small>
                </blockquote>

                <blockquote class="blockquote mt-3 pl-4">
                    <small>
                    <li><strong> Kondisi Demografi Pertanian </strong></li>
                    Berdasarkan hasil Pencacahan Sensus Penduduk (SP - 2010) BPS, jumlah penduduk Kabupaten Bandung sebesar 3.174.999 jiwa yang terdiri dari laki-laki 1.617.513 jiwa (50,94%) dan perempuan 1.556.986 jiwa (49,06%). Sementara itu, total penduduk usia 10 tahun keatas yang bekerja sebanyak 1.156.663 jiwa, tenaga kerja sektor pertanian menempati peringkat ke-3 (tiga) terbesar yaitu sebanyak 239.004 jiwa (20,66 %).
                    <br><br>
                    Sumberdaya petani yang berkualitas merupakan salah satu faktor penting dalam membangun sektor pertanian yang tangguh. Upaya peningkatan kualitas sumberdaya petani di Kabupaten Bandung selama ini ditempuh melalui pendekatan kelompok tani atau gabungan kelompok tani (Gapoktan) yang berjumlah 214 Gapoktan.
                    <br><br>
                    Saat ini di Kabupaten Bandung terdapat 1.192 Kelompok Tani, yang terdiri dari;
                    <ul type="disc">

                        <li>Kelompok Tani Pemula : 130 Kelompok</li>
                        <li>Kelompok Tani Lanjut : 742 Kelompok</li>
                        <li>Kelompok Tani Madya : 312 Kelompok</li>
                        <li>Kelompok Tani Utama : 8 Kelompok</li>
                        <li>Kelompok Wanita Tani : 65 Kelompok</li>
                    </ul>
                    </small>
                </blockquote>


                </ol>
                </p>
            </div>

        </div>

        @include('layouts.link-terkait')
        
    </div>
</div>
@include('layouts.footer')


@endsection