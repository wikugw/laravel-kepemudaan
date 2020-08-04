@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Kegiatan Disporapar</h1>
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
          <form class="" action=" {{route('kegiatan_disporapar.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select type="text" name="kategori" class="form-control" required>
                  <option value="">--Pilih Kategori--</option>
                  <option value="artikel">Artikel</option>
                  <option value="okp">OKP</option>
                  <option value="kewirausahaan">Kewirausahaan</option>
                  <option value="knpi">KNPI</option>
                  <option value="lainnya">Lainnya</option>
                </select>
              </div>

              <div class="form-group">
                <label>Isi</label>
                <textarea type="text" name="isi" class="form-control" rows="3" required></textarea>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" required>
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
    setSideBar('kegiatan_disporapar');
    });
  </script>
@endsection
