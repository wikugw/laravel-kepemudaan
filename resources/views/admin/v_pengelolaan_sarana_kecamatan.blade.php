@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">Pengelolaan Data Sarana Prasarana Kecamatan {{$kecamatan->nama_kecamatan}}</h1>
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
      <a href="{{route('kecamatan_sarana.create',$kecamatan->id)}}" class="btn btn-primary mb-3 ">Tambah Data</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Sarana Prasarana</th>
            <th>Kategori</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_sarana_prasarana as $key => $sarana_prasarana)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$sarana_prasarana->nama_sarana_prasana}}</td>
              <td>
                  @switch ($sarana_prasarana->kategori)
                    @case ('pertemuan_olahraga'):
                      Pertemuan Olahraga
                      @break;
                    @case ('coworking'):
                      Co-Working Space
                      @break;
                    @case ('kepemudaan'):
                      Kepemudaan
                      @break;
                  @endswitch
              </td>
              <td>{{$sarana_prasarana->kelurahan->nama_kelurahan}}</td>
              <td>{{$sarana_prasarana->kelurahan->kecamatan->nama_kecamatan}}</td>
              <td>
                <a href="{{route('kecamatan_sarana.edit',['kecamatan'=>$kecamatan->id,'sarana'=>$sarana_prasarana->id])}}" class='btn btn-warning btn-sm'>Sunting</a>
                <form action="{{route('kecamatan_sarana.destroy',['kecamatan'=>$kecamatan->id,'sarana'=>$sarana_prasarana->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button href="" class='btn btn-danger btn-sm'>Hapus</button>
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
    setSideBar('kecamatan');
    });
  </script>
@endsection
