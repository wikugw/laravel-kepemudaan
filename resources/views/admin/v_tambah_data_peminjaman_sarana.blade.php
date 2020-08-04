@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Peminjaman Sarana</h1>
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
          <form class="" action=" {{route('peminjaman_sarana.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Sarana</label>
                  <select class="form-control" name="status_pengaju">
                    <option value="">--Pilih Sarana--</option>
                    <option value="knpi">KNPI</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Pengaju</label>
                  <input type="text" name="nama_pengaju" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Status Pengaju</label>
                  <select class="form-control" name="status_pengaju">
                    <option value="">--Pilih status--</option>
                    <option value="umum">Umum</option>
                    <option value="organisasi_kepemudaan">Organisasi Kepemudaan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>No Telepon Pengaju</label>
                  <input type="text" name="no_telp_pengaju" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal Peminjaman</label>
                  <input type="date" name="tanggal_peminjaman" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Jam Peminjaman</label>
                  <input type="time" name="jam_peminjaman" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Kembali</label>
                  <input type="date" name="tanggal_kembali" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Jam Peminjaman</label>
                  <input type="time" name="jam_kembali" class="form-control" required>
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
