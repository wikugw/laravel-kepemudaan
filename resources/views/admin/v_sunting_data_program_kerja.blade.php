@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sunting Data Program Kerja</h1>
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
          <form class="" action=" {{route('program_kerja.update',$program_kerja->id)}}" method="post" enctype="multipart/form-data">
            @csrf
              @method('PUT')
              <div class="form-group">
                <label>Nama Program Kerja</label>
                <input type="text" name="nama_program_kerja" class="form-control" value="{{$program_kerja->nama_program_kerja}}" required>
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="keagamaan" @if($program_kerja->kategori == 'keagamaan')  selected @endif>Keagamaan</option>
                  <option value="penyadaran_hukum" @if($program_kerja->kategori == 'penyadaran_hukum')  selected @endif>Penyadaran Hukum</option>
                  <option value="olahraga" @if($program_kerja->kategori == 'olahraga')  selected @endif>Olahraga</option>
                  <option value="pendidikan" @if($program_kerja->kategori == 'pendidikan')  selected @endif>Pendidikan</option>
                  <option value="sosial" @if($program_kerja->kategori == 'sosial')  selected @endif>Sosial</option>
                  <option value="seni" @if($program_kerja->kategori == 'seni')  selected @endif>Seni</option>
                  <option value="budaya" @if($program_kerja->kategori == 'budaya')  selected @endif>Budaya</option>
                  <option value="ketahanan_pangan" @if($program_kerja->kategori == 'ketahanan_pangan')  selected @endif>ketahanan Pangan</option>
                  <option value="lingkungan_hidup" @if($program_kerja->kategori == 'lingkungan_hidup')  selected @endif>lingkungan Hidup</option>
                  <option value="sosial_budaya" @if($program_kerja->kategori == 'sosial_budaya')  selected @endif>Sosial Budaya</option>
                  <option value="kepeloporan_pendidikan" @if($program_kerja->kategori == 'kepeloporan_pendidikan')  selected @endif>kepeloporan Pendidikan</option>
                  <option value="inotek" @if($program_kerja->kategori == 'inotek')  selected @endif>Inotek</option>
                  <option value="kewirausahaan" @if($program_kerja->kategori == 'kewirausahaan')  selected @endif>kewirausahaan</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kelurahan</label>
                <select class="form-control" name="id_kelurahan">
                  <option value="{{$program_kerja->id_kelurahan}}">{{$program_kerja->kelurahan->nama_kelurahan}}</option>
                  @foreach($data_kelurahan as $kelurahan)
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
    setSideBar('kelurahan');
    });
  </script>
@endsection
