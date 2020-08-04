@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengelolaan Data Kelurahan</h1>
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
      <a href="{{route('kelurahan.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
      <a href="{{route('sarana_prasarana')}}" class="btn btn-success mb-3 ml-2">Kelola Sarana Prasarana</a>
      <a href="{{route('program_kerja')}}" class="btn btn-info mb-3 ml-2">Kelola Program Kerja</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Kelurahan</th>
            <th>Karang Taruna</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_kelurahan as $key =>  $kelurahan)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$kelurahan->nama_kelurahan}}</td>
              <td>
                @if ($kelurahan->id_kelompok_potensi_pemuda == '')
                 -
                @else
                  {{$kelurahan->organisasi_kepemudaan->nama_organisasi}}
                @endif
              </td>
              <td>{{$kelurahan->kecamatan->nama_kecamatan}}</td>
              <td>
              <div class="row">
              <form action="{{route('kelurahan.destroy',$kelurahan->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                <a href="{{route('kelurahan.edit',$kelurahan->id)}}" class='btn btn-warning btn-sm'>Sunting</a>
                <button class='btn btn-danger btn-sm' type="submit" onclick='return confirm(`Apakah Anda Yakin Akan menghapus data kelurahan yang Dipilih?`)'>Hapus</button>
                <a href="{{route('kelurahan_program',$kelurahan->id)}}" class='btn btn-info btn-sm'>Program Kerja</a>
                <a href="{{route('kelurahan_sarana',$kelurahan->id)}}" class='btn btn-success btn-sm'>Sarana Prasarana</a>
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
    setSideBar('kelurahan');
    });
  </script>
@endsection
