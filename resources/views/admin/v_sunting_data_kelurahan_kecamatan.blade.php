@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">Sunting Data Kelurahan Kecamatan {{$kecamatan->nama_kecamatan}}</h1>
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
          <form class="" action=" {{route('kecamatan_kelurahan.update',['kecamatan'=>$kecamatan->id,'kelurahan'=>$kelurahan->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control" value="{{$kelurahan->nama_kelurahan}}" required>
              </div>

                <div class="form-group">
                  <label>Karang Taruna</label>
                  <select class="form-control" name="id_kelompok_potensi_pemuda">
                    <option value="{{$kelurahan->id_kelompok_potensi_pemuda}}">{{$kelurahan->id_kelompok_potensi_pemuda}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kecamatan</label>
                  <select class="form-control" name="id_kecamatan">
                    <option value="{{$kecamatan->id}}">{{$kecamatan->nama_kecamatan}}</option>
                  </select>
                </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
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
    setSideBar('kecamatan');
    });
  </script>
@endsection
