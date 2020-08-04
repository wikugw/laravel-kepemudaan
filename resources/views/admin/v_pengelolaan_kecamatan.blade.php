@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengelolaan Data Kecamatan</h1>
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
      <a href="{{route('kecamatan.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Kecamatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data_kecamatan as $key => $kecamatan)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$kecamatan->nama_kecamatan}}</td>
              <td>
              <form action="{{route('kecamatan.destroy',$kecamatan->id)}}" method="POST">
                  @csrf
                  @method("DELETE")
                <a href="{{route('kecamatan.edit',$kecamatan->id)}}" class='btn btn-warning btn-sm'>Sunting</a>
                <a href="{{route('kecamatan_kelurahan',$kecamatan->id)}}" class='btn btn-primary btn-sm'>Kelurahan</a>
                <a href="{{route('kecamatan_program',$kecamatan->id)}}" class='btn btn-info btn-sm'>Program Kerja</a>
                <a href="{{route('kecamatan_sarana',$kecamatan->id)}}" class='btn btn-success btn-sm'>Sarana Prasarana</a>
                <button type="submit" class='btn btn-danger btn-sm' onclick='return confirm(`Apakah Anda Yakin Akan menghapus data kecamatan yang Dipilih?`)'>Hapus</button>
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
