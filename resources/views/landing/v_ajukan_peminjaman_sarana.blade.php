@extends('landing.master')
@section('content')
<section id="blog" class="blog">
    <div class="container">
      <div class="col-md-12">
        <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(Session::has('Error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                    {{ Session::get('Error') }}
                </div>
            @endif
            @if(Session::has('Success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                    {{ Session::get('Success') }}
                </div>
            @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div id="external-events col-md-12">
                <label for=""><b>Jenis Label</b></label>
                <button class="btn btn-success btn-sm col-md-12 mb-2">Sedang Dipesan</button>
                <button class="btn btn-warning btn-sm col-md-12">Sudah selesai</button>
              </div>
              <hr>
              <div class="form-group">
                <button class="col-md-12 btn btn-info" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-plus"></i> Ajukan Peminjaman</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajukan Peminjaman</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="{{route('peminjamans.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for=""><b>Nama Pengaju</b></label>
                @role('organisasi')
                <input type="text" class="form-control input-pengajuan" name="nama_pengaju" required value="{{Auth::User()->nama_aktor}}">
                @else
                <input type="text" class="form-control input-pengajuan" name="nama_pengaju" required>
                @endrole
                </div>
                <div class="form-group">
                <label for=""><b>Status Pengaju</b></label>
                @role('organisasi')
                <select id="selectStatus" name="status_pengaju" class="form-control">
                    <option value="organisasi_kepemudaan">Organisasi Kepemudaan</option>
                </select>
                @else
                <select id="selectStatus" name="status_pengaju" class="form-control">
                    <option value="">--Pilih Status Pengaju--</option>
                    <option value="umum">Umum</option>
                    <option value="organisasi_kepemudaan">Organisasi Kepemudaan</option>
                </select>
                @endrole
                </div>
                <div class="form-group">
                <label for=""><b>NoTelp Pengaju</b></label>
                <input type="number" name="no_telp_pengaju" class="form-control input-pengajuan" required>
                </div>
                <div class="form-group">
                  <label for=""><b>Tanggal Peminjaman</b></label>
                  <input type="date" class="form-control tanggal input-pengajuan" name="tanggal_peminjaman" required>
                </div>
                <div class="form-group">
                  <label for=""><b>Jam mulai</b></label>
                  <input type="time" class="form-control tanggal input-pengajuan" name="jam_peminjaman" required>
                </div>
                <div class="form-group">
                  <label for=""><b>Tanggal Kembali</b></label>
                  <input type="date" class="form-control tanggal input-pengajuan" name="tanggal_kembali" required>
                </div>
                <div class="form-group">
                  <label for=""><b>Jam Kembali</b></label>
                  <input type="time" class="form-control tanggal input-pengajuan" name="jam_kembali" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection
@section('script')
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        data_peminjaman = <?php echo json_encode($data_peminjaman);?>;
        initCalendar(data_peminjaman);
    });
  </script>
@endsection
