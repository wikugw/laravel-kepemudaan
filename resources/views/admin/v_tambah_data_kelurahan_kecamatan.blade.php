@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Kecamatan {{$kecamatan->nama_kecamatan}}</h1>
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
          <form class="" action=" {{route('kecamatan_kelurahan.store',$kecamatan->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
              <div class="form-group">
                <label>Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control" required>
              </div>

              <div class="form-group">
                  <label>Karang Taruna</label>
                  <select class="form-control" name="id_kelompok_potensi_pemuda">
                    <option value="">--Pilih Karang Taruna--</option>
                    @foreach($data_organisasi_kepemudaan as $organisasi_kepemudaan)
                      <option value="{{$organisasi_kepemudaan->id}}">{{$organisasi_kepemudaan->nama_organisasi}}</option>
                    @endforeach
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
