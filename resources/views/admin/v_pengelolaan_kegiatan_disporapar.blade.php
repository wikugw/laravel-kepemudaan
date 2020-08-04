@extends('admin.master')
<style>
.a {
  width: 100ch;
  overflow: hidden;
}

.a:hover {
  overflow: visible;
}
</style>
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengelolaan Data Kegiatan Disporapar</h1>
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
      <a href="{{route('kegiatan_disporapar.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data_kegiatan_disporapar as $key => $kegiatan_disporapar)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$kegiatan_disporapar->judul}}</td>
                <td>{{$kegiatan_disporapar->kategori}}</td>
                <td class="a">{{$kegiatan_disporapar->isi}}</td>
                <td><img width="60px" src="{{asset('admin/upload/'.$kegiatan_disporapar->gambar)}}" alt="gambar"></td>
                <td>
                  <div class="row">
                  <a href="{{route('kegiatan_disporapar.edit',$kegiatan_disporapar->id)}}" class='btn btn-warning btn-sm mr-1'>Sunting</a>
                  <form action="{{route('kegiatan_disporapar.destroy',$kegiatan_disporapar->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class='btn btn-danger btn-sm mt-2' onclick='return confirm(`Apakah Anda Yakin Akan menghapus data kegiatan disporapar yang Dipilih?`)'>Hapus</button>
                  </form>
                  </div>
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
    setSideBar('kegiatan_disporapar');
    });
  </script>
@endsection
