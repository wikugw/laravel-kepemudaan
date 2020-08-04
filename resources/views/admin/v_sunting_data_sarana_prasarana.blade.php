@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sunting Data Sarana Prasarana</h1>
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
          <form class="" action=" {{route('sarana_prasarana.update',$sarana_prasarana->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label>Nama Sarana Prasarana</label>
                <input type="text" name="nama_sarana_prasana" class="form-control" value="{{$sarana_prasarana->nama_sarana_prasana}}"required>
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select type="text" name="kategori" class="form-control" required>
                  <option value="pertemuan_olahraga" @if($sarana_prasarana->kategori == 'pertemuan_olahraga')  selected @endif>Pertemuan dan Olahraga</option>
                  <option value="coworking" @if($sarana_prasarana->kategori == 'coworking')  selected @endif>Co-Working Space</option>
                  <option value="kepemudaan" @if($sarana_prasarana->kategori == 'kepemudaan')  selected @endif>Kepemudaan</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kelurahan</label>
                <select class="form-control" name="id_kelurahan">
                  <option value="{{$sarana_prasarana->id_kelurahan}}">{{$sarana_prasarana->kelurahan->nama_kelurahan}}</option>
                  @foreach($data_kelurahan as $kelurahan)
                    <option value="{{$kelurahan->id}}">{{$kelurahan->nama_kelurahan}}</option>
                  @endforeach
                </select>
              </div>

              <button type="submit" class="btn btn-primary mt-4">Simpan</button>
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
    setSideBar('kelurahan');
    });
  </script>
@endsection
