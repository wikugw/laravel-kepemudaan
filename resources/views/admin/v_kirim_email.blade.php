@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Kirim Email Kepada {{$organisasi_kepemudaan->nama_organisasi}}</h1>
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
          <form class="" action=" {{route('kirim_email.update',$organisasi_kepemudaan->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label>Tujuan</label>
                <input type="text" disabled name="email_organisasi" class="form-control" value="{{$organisasi_kepemudaan->email_organisasi}}">
              </div>

              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Isi</label>
                <textarea type="text" name="isi" class="form-control" rows="3" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
