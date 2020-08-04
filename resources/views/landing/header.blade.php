<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <img style="height: 100px; width: 100px;margin-left:-20px; margin-right: 15px;" src="{{asset('admin/assets/dist/img/Logo_Kota_Malang_color.png')}}" class="img-circle elevation-2" alt="User Image">
      <h1 class="logo mr-auto"><a href="/"><span>Sistem Informasi </span>Kepemudaan Kota Malang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Blog</a></li>
          <li><a href="{{route('peminjamans')}}">Peminjaman Sarana</a></li>

          <li class="drop-down"><a href="">Organisasi Kepemudaan</a>
          <ul>
            @foreach($data_subkategori as $subkategori)
            <li><a href="/list_organisasi/{{$subkategori->id}}">{{$subkategori->nama_subkategori}}</a></li>
            @endforeach
          </ul>
        </li>

          <li class="drop-down"><a href="">Kecamatan/kelurahan</a>
          <ul>
            @foreach($data_kecamatan as $kecamatan)
            <li class="drop-down"><a href="">{{$kecamatan->nama_kecamatan}}</a>
              <ul>
                  @foreach($kecamatan->kelurahan as $kelurahan)
                    <li><a href="{{route('landing_kelurahan.show',$kelurahan->id)}}">{{$kelurahan->nama_kelurahan}}</a></li>
                  @endforeach
              </ul>
            </li>
            @endforeach
          </ul>
        </li>
          @role('organisasi')
          <li class="drop-down"><a href="">Halo, {{Auth::User()->username}}</a>
            <ul>
            <li><a href="{{route('organisasi_kepemudaan.show',Auth::User()->id_kelompok_potensi_pemuda)}}">Sunting Organisasi</a></li>
            <li><a href="{{url('logout')}}">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          @endrole
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->