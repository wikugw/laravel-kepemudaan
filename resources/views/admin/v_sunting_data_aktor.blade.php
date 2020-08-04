@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sunting Data Aktor</h1>
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
          <form class="" action="{{route('aktor.update', $aktor->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="{{$aktor->username}}" required>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="{{$aktor->password}}" required>
                  </div>

                  <div class="form-group">
                    <label>Nama Aktor</label>
                    <input type="text" name="nama_aktor" class="form-control" value="{{$aktor->nama_aktor}}" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Status Admin</label>
                    <select class="form-control" name="status">
                      <option value="disporapar" @if($aktor->status == 'disporapar')  selected @endif>Disporapar</option>
                      <option value="admin" @if($aktor->status == 'admin')  selected @endif>Admin</option>
                      <option value="organisasi_kepemudaan" @if($aktor->status == 'organisasi_kepemudaan')  selected @endif>Organisasi Kepemudaan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kelompok Potensi Pemuda</label>
                    <select class="form-control" name="id_kelompok_potensi_pemuda">
                      @if ($aktor->id_kelompok_potensi_pemuda == '')
                          <option value="">-</option>
                      @else
                        <option value="$aktor->id_kelompok_potensi_pemuda">{{$aktor->organisasi_kepemudaan->nama_organisasi}}</option>
                      @endif
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
