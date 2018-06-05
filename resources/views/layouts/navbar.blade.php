
<div class="container-fluid bg-success" data-toggle="affix">

    <nav class="navbar navbar-expand-lg navbar-dark container">
        
        <button class="navbar-toggler  ml-auto collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse align-self-end" id="navbarTogglerDemo03">

            <a class="navbar-brand" href="#">
                <img src="{{ url('images/img/logo.png') }}" class="d-inline-block align-top" alt="">
            </a>

            
            <ul class="navbar-nav ml-auto align-self-end" style="margin-bottom:-8px;">
                <li class="nav-item">
                    <a class="nav-link a-menu" href="{{ url('/beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-menu" href="{{ url('/profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-menu" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-menu" href="{{ url('/galeri') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-menu" href="{{ url('/peta') }}">Peta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-menu" href="{{ url('/kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
