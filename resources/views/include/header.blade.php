<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand text-light">Panel Admin DISTAN Kab. Bandung</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          
            &nbsp;
          
        </li>
      
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="{{ url('admin/kategori') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Pertanian</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="{{ url('admin/list-admin') }}">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Admin</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="{{ url('admin/berita') }}">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">Berita</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="{{ url('admin/galeri') }}">
            <i class="fa fa-fw fa-image"></i>
            <span class="nav-link-text">Galeri</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="{{ url('admin/kontak') }}">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Kontak</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

    <!-- HEADER -->

      <ul class="navbar-nav ml-auto">
          
        <li class="nav-item">
            <a class="nav-link" href="{{ url('../public/') }}" target="_blank">
                <i class="fa fa-fw fa-eye"></i>
                <i class="fa fa-fw fa-angle-right"></i>
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Jika memilih "Keluar" maka anda akan keluar dari halaman Admin ini.</div>
          <div class="modal-footer">
            <a data-dismiss="modal">Batal</a> &nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="{{ url('/admin/logout') }}">Keluar</a>
          </div>
        </div>
      </div>
    </div>