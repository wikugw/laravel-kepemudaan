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
          <h1 class="m-0 text-dark">Pengelolaan Data Organisasi Kepemudaan</h1>
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
      <a href="{{route('organisasi_kepemudaan.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Organisasi</th>
            <th>Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_organisasi_kepemudaan as $key => $organisasi_kepemudaan)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$organisasi_kepemudaan->nama_organisasi}}</td>
              <td>{{$organisasi_kepemudaan->subkategori->nama_subkategori}}</td>
              <td>
                <div class="row">
                  <a href="{{route('organisasi_kepemudaan.show',$organisasi_kepemudaan->id)}}" class='btn btn-success btn-sm mr-1' style="height: 30px" >Detail</a>
                  <a href="{{route('organisasi_kepemudaan.edit',$organisasi_kepemudaan->id)}}" class='btn btn-warning btn-sm mr-1' style="height: 30px">Sunting</a>
                  <form action="{{route('organisasi_kepemudaan.destroy',$organisasi_kepemudaan->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class='btn btn-danger btn-sm mr-1' type="submit" onclick='return confirm(`Apakah Anda Yakin Akan menghapus data organisasi yang Dipilih?`)'>Hapus</button>
                  </form>
                  <a href="{{route('kirim_email.edit',$organisasi_kepemudaan->id)}}" class='btn btn-info btn-sm mr-1' style="height: 30px">Email</a>
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
      setSideBar('organisasi_kepemudaan');
    });
  </script>
@endsection
