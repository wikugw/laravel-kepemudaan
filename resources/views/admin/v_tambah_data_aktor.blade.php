@extends('admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Aktor</h1>
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
          <form class="" action=" {{route('aktor.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Nama Aktor</label>
                    <input type="text" name="nama_aktor" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Status Admin</label>
                    <select class="form-control" name="status">
                      <option value="">--Pilih Status--</option>
                      <option value="disporapar">Disporapar</option>
                      <option value="admin">Admin</option>
                      <option value="organisasi">Organisasi Kepemudaan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kelompok Potensi Pemuda</label>
                    <select class="form-control" name="id_kelompok_potensi_pemuda">
                      <option value="">--Pilih Kelompok Potensi Pemuda--</option>
                      <option value="">-</option>
                      @foreach($data_organisasi_kepemudaan as $organisasi_kepemudaan)
                        <option value="{{$organisasi_kepemudaan->id}}">{{$organisasi_kepemudaan->nama_organisasi}}</option>
                      @endforeach
                    </select>
                    <small class="form-text text-muted ml-2">Pilih (-) Jika Aktor Admin/Disporapar</small>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
    setSideBar('aktor');
    });
  </script>
@endsection
