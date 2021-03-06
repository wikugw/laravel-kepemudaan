@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengelolaan Data Program Kerja</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    @if(Session::has('Success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
          {{ Session::get('Success') }}
        </div>
      @endif
      <a href="{{route('program_kerja.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Program Kerja</th>
            <th>Kategori</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_program_kerja as $key => $program_kerja)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$program_kerja->nama_program_kerja}}</td>
              <td>
              @switch ($program_kerja->kategori)
                    @case ('keagamaan')
                      Keagamaan
                      @break;
                    @case ('penyadaran_hukum')
                      Penyadaran Hukum
                      @break;
                    @case ('olahraga')
                      Olahraga
                      @break;
                    @case ('olahraga')
                      Olahraga
                      @break;
                    @case ('pendidikan')
                      Pendidikan
                      @break;
                    @case ('sosial')
                      Sosial
                      @break;
                    @case ('seni')
                      Seni
                      @break;
                    @case ('budaya')
                      Budaya
                      @break;
                    @case ('olahraga')
                      Olahraga
                      @break;
                    @case ('ketahanan_pangan')
                      ketahanan_pangan
                      @break;
                    @case ('lingkungan_hidup')
                      Lingkungan Hidup
                      @break;
                    @case ('sosial_budaya')
                      Sosial Budaya
                      @break;
                    @case ('kepeloporan_pendidikan')
                      kepeloporan_pendidikan
                      @break;
                    @case ('inotek')
                      Inotek
                      @break;
                    @case ('kewirausahaan')
                      kewirausahaan
                      @break;
                  @endswitch
              </td>
              <td>
                @if($program_kerja->kelurahan != null)
                  {{$program_kerja->kelurahan->nama_kelurahan}}
                @else
                  -
                @endif
              </td>
              <td>
                @if($program_kerja->kecamatan != null)
                  {{$program_kerja->kecamatan->kecamatan}}
                @else
                  -
                @endif
              </td>
              <td>
                <a href="{{route('program_kerja.edit',$program_kerja->id)}}" class='btn btn-warning btn-sm'>Sunting</a>
                <form action="{{route('program_kerja.destroy', $program_kerja->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class='btn btn-danger btn-sm'>Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
    setSideBar('kelurahan');
    });
  </script>
@endsection
