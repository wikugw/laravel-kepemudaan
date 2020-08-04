@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">Tambah Data Sarana Prasarana Kecamatan {{$kecamatan->nama_kecamatan}}</h1>
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
          <form class="" action=" {{route('kecamatan_sarana.store',$kecamatan->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
              <div class="form-group">
                <label>Nama Sarana Prasarana</label>
                <input type="text" name="nama_sarana_prasana" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="">--Pilih Kategori--</option>
                  <option value="pertemuan_olahraga">Pertemuan dan Olahraga</option>
                  <option value="coworking">Co-Working Space</option>
                  <option value="kepemudaan">Kepemudaan</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kelurahan</label>
                <select class="form-control" name="id_kelurahan">
                  <option value="">--Pilih Kategori--</option>
                  @foreach ($data_kelurahan as $kelurahan)
                    <option value="{{$kelurahan->id}}">{{$kelurahan->nama_kelurahan}}</option>
                  @endforeach
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
