<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('admin/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin/assets/dist/img/avatar-1.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::User()->nama_aktor}} - {{Auth::User()->status}}</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @role('organisasi')
          <li class="nav-item">
            <a href="{{route('organisasi_kepemudaan.show', auth::User()->id_kelompok_potensi_pemuda)}}" class="nav-link" id="organisasi_kepemudaan">
              <i class="fas fa-users"></i>
              <p>
                 Kelompok Potensi Pemuda <br>
              </p>
            </a>
          </li>
        @else
          <li class="nav-item">
            <a href="{{route('organisasi_kepemudaan')}}" class="nav-link" id="organisasi_kepemudaan">
              <i class="fas fa-users"></i>
              <p>
                 Kelompok Potensi Pemuda <br>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('peminjaman_sarana')}}" class="nav-link" id="peminjaman_sarana">
              <i class="fas fa-school"></i>
              <p>
                 Peminjaman Sarana
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kegiatan_disporapar')}}" class="nav-link" id="kegiatan_disporapar">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kegiatan Disporapar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kecamatan')}}" class="nav-link" id="kecamatan">
              <i class="fas fa-map-marked-alt"></i>
              <p>
                 Kecamatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kelurahan')}}" class="nav-link" id="kelurahan">
              <i class="fas fa-map"></i>
              <p>
                 Kelurahan
              </p>
            </a>
          </li>
            @role('admin')
            <li class="nav-item">
                <a href="{{route('aktor')}}" class="nav-link" id="aktor">
                  <i class="fas fa-user"></i>
                  <p>
                    Aktor
                  </p>
                </a>
              </li>
            @endrole
        @endrole
        <li class="nav-item">
          <a href="{{url('logout')}}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <p>
               Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
