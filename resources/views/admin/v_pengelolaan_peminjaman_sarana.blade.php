@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengelolaan Data Peminjaman Sarana</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    @if(Session::has('Error'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
            {{ Session::get('Error') }}
        </div>
    @endif
    @if(Session::has('Success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
            {{ Session::get('Success') }}
        </div>
    @endif
    <div class="container-fluid">
      <a href="{{route('peminjaman_sarana.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
        <a href="{{route('unduh_excel')}}" class="btn btn-success mb-3 ml-2">Unduh Laporan Peminjaman</a>
      <table class="table table-hover table-stripped table-responsive table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Sarana</th>
            <th>Nama Pengaju</th>
            <th>Status Pengaju</th>
            <th>No. Telepon Pengaju</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status Pengajuan</th>
            <th>Status Peminjaman</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_peminjaman_sarana as $key => $peminjaman_sarana)
            <tr>
              <td>{{++$key}}</td>
              <td>
                @if($peminjaman_sarana->nama_sarana_prasarana == 'knpi')
                  KNPI
                @endif
              </td>
              <td>{{$peminjaman_sarana->nama_pengaju}}</td>
              <td>{{$peminjaman_sarana->status_pengaju}}</td>
              <td>{{$peminjaman_sarana->no_telp_pengaju}}</td>
              <td>{{$peminjaman_sarana->tanggal_peminjaman}}</td>
              <td>{{$peminjaman_sarana->tanggal_kembali}}</td>
              <td>{{$peminjaman_sarana->status_pengajuan}}</td>
              <td>{{$peminjaman_sarana->status_peminjaman}}</td>
              <td>
                  <div class="row">
                  @if($peminjaman_sarana->status_pengajuan == 'menunggu')
                        <a href='/peminjaman_sarana/terima/{{$peminjaman_sarana->id}}'
                           class='btn btn-info btn-sm'
                           onclick='return confirm(`Apakah Anda Yakin Akan Menerima Pengajuan Sarana yang Dipilih?`)'>Terima</a>
                        <a href='/peminjaman_sarana/tolak/{{$peminjaman_sarana->id}}'
                           class='btn btn-secondary btn-sm'
                           onclick='return confirm(`Apakah Anda Yakin Akan Menolak Pengajuan Sarana yang Dipilih?`)'>Tolak</a>
                  @endif
                <a href="{{route('peminjaman_sarana.edit',$peminjaman_sarana->id)}}" class='btn btn-warning btn-sm'>Sunting</a>
                <form action="{{route('peminjaman_sarana.destroy',$peminjaman_sarana->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class='btn btn-danger btn-sm' onclick='return confirm(`Apakah Anda Yakin Akan menghapus data peminjaman Sarana yang Dipilih?`)'>Hapus</button>
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
    setSideBar('peminjaman_sarana');
    });
  </script>
@endsection
