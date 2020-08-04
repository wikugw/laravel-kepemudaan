@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">Tambah Data Program Kerja Kecamatan {{$kecamatan->nama_kecamatan}}</h1>
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
          <form class="" action=" {{route('kecamatan_program.store',$kecamatan->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
              <div class="form-group">
                <label>Nama Program Kerja</label>
                <input type="text" name="nama_program_kerja" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="">--Pilih Kategori--</option>
                  <option value="keagamaan">Keagamaan</option>
                  <option value="penyadaran_hukum">Penyadaran Hukum</option>
                  <option value="olahraga">Olahraga</option>
                  <option value="pendidikan">Pendidikan</option>
                  <option value="sosial">Sosial</option>
                  <option value="seni">Seni</option>
                  <option value="budaya">Budaya</option>
                  <option value="ketahanan_pangan">ketahanan Pangan</option>
                  <option value="lingkungan_hidup">lingkungan Hidup</option>
                  <option value="sosial_budaya">Sosial Budaya</option>
                  <option value="kepeloporan_pendidikan">kepeloporan Pendidikan</option>
                  <option value="inotek">Inotek</option>
                  <option value="kewirausahaan">kewirausahaan</option>
                </select>
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
