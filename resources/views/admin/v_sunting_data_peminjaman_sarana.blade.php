@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sunting Data Peminjaman Sarana</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form class="" action=" {{route('peminjaman_sarana.update',$peminjaman_sarana->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Sarana</label>
                  <select class="form-control" name="status_pengaju">
                    <option value="knpi" @if($peminjaman_sarana->nama_sarana_prasarana == 'knpi')  selected @endif>KNPI</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Pengaju</label>
                  <input type="text" name="nama_pengaju" class="form-control" value="{{$peminjaman_sarana->nama_pengaju}}" required>
                </div>

                <div class="form-group">
                  <label>Status Pengaju</label>
                  <select class="form-control" name="status_pengaju">
                    <option value="umum" @if($peminjaman_sarana->status_pengaju == 'umum')  selected @endif>Umum</option>
                    <option value="organisasi_kepemudaan" @if($peminjaman_sarana->status_pengaju == 'organisasi_kepemudaan')  selected @endif>Organisasi Kepemudaan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>No Telepon Pengaju</label>
                  <input type="text" name="no_telp_pengaju" class="form-control"  value="{{$peminjaman_sarana->no_telp_pengaju}}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal Peminjaman</label>
                  <input type="date" name="tanggal_peminjaman" class="form-control" value="{{$peminjaman_sarana->tanggal_peminjaman}}" required>
                </div>
                <div class="form-group">
                  <label>Jam Peminjaman</label>
                  <input type="time" name="jam_peminjaman" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Kembali</label>
                  <input type="date" name="tanggal_kembali" class="form-control" value="{{$peminjaman_sarana->tanggal_kembali}}" required>
                </div>
                <div class="form-group">
                  <label>Jam Kembali</label>
                  <input type="time" name="jam_kembali" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Status Pengajuan</label>
                  <select class="form-control" name="status_pengajuan">
                    <option value="menunggu" @if($peminjaman_sarana->status_pengajuan == 'menunggu')  selected @endif>Menunggu</option>
                    <option value="verifikasi" @if($peminjaman_sarana->status_pengajuan == 'verifikasi')  selected @endif>Setuju</option>
                    <option value="tolak" @if($peminjaman_sarana->status_pengajuan == 'tolak')  selected @endif>Tolak</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Status Pengajuan</label>
                  <select class="form-control" name="status_peminjaman">
                    <option value="dipesan" @if($peminjaman_sarana->status_peminjaman == 'dipesan')  selected @endif>Dipesan</option>
                    <option value="selesai" @if($peminjaman_sarana->status_peminjaman == 'selesai')  selected @endif>Selesai</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>

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
