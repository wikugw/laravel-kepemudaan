@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengelolaan Data Aktor</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    @if(Session::has('Success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
          {{ Session::get('Success') }}
        </div>
      @endif
      <a href="{{route('aktor.create')}}" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
      <table class="table table-hover table-stripped table-bordered" id="tabel">
        <thead>
          <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Aktor</th>
            <th>Status</th>
            <th>Nama Organisasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data_aktor as $key =>$aktor)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$aktor->username}}</td>
              <td>{{$aktor->nama_aktor}}</td>
              <td>
                  @if($aktor->status == 'organisasi_kepemudaan')
                    Organisasi Kepemudaan
                  @elseif($aktor->status == 'admin')
                    Admin
                  @elseif($aktor->status == 'disporapar')
                    Disporapar
                  @endif
              </td>
              <td>
                @if ($aktor->id_kelompok_potensi_pemuda == '') 
                  -
                @else 
                  {{$aktor->organisasi_kepemudaan->nama_organisasi}}
                @endif
              </td>
              <td>
                <div class="row">
                  <a href="{{route('aktor.edit', $aktor->id)}}" class='btn btn-warning btn-sm mr-1'>Sunting</a>
                  <form action="{{route('aktor.destroy', $aktor->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit" onclick='return confirm(`Apakah Anda Yakin Akan menghapus data aktor yang Dipilih?`)'>Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
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
