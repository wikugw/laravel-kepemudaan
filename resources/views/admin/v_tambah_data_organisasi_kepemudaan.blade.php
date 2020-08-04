@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Organisasi Kepemudaan</h1>
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
            <div class="row">
              <form action="{{route('organisasi_kepemudaan.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group col-md-6">
                <label for="">Nama Organisasi</label>
                <input type="text" class="form-control input-organisasi" name="nama_organisasi" id="nama_organisasi">
              </div>

              <div class="form-group col-md-6">
                <label for="">Email Organisasi</label>
                <input type="email" class="form-control input-organisasi" name="email_organisasi" id="email_organisasi">
              </div>

              <div class="form-group col-md-6">
                <label for="">No Telp Organisasi</label>
                <input type="number" class="form-control input-organisasi" name="no_telp_organisasi" id="no_telp_organisasi">
              </div>

              <div class="form-group col-md-6">
                <label for="">Struktur Pengurus</label>
                <select class="form-control select-organisasi" name="struktur_pengurus"  id="struktur_pengurus">
                  <option value="struktural">Struktural</option>
                  <option value="non_struktural">Non Struktural</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="">Kepemilikan Sekretariat</label>
                <select class="form-control select-organisasi" name="kepemilikan_sekretariat" id="kepemilikan_sekretariat">
                  <option value="ada">Ada</option>
                  <option value="tidak_ada">Tidak Ada</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="">Unit Usaha</label>
                <select class="form-control select-organisasi" name="unit_usaha" id="unit_usaha">
                  <option value="ada">Ada</option>
                  <option value="tidak_ada">Tidak Ada</option>
                </select>
              </div>

              <div class="form-group col-md-12">
                <label for="">Alamat Organisasi</label>
                <textarea class="form-control input-organisasi" name="alamat" id="alamat" cols="30" rows="3"></textarea>
              </div>

              <div class="form-group col-md-6">
                <label for="">Kepemilikan NPWP</label>
                <select class="form-control select-organisasi" name="kepemilikan_npwp" id="kepemilikan_npwp">
                  <option value="ada">Ada</option>
                  <option value="tidak_ada">Tidak Ada</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="">Kepemilikan Adart</label>
                <select class="form-control select-organisasi" name="kepemilikan_adart" id="kepemilikan_adart">
                  <option value="ada">Ada</option>
                  <option value="tidak_ada">Tidak Ada</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="">Lingkup Organisasi</label>
                <select class="form-control select-organisasi" name="lingkup" id="lingkup">
                  <option value="nasional">Nasional</option>
                  <option value="lokal">Lokal</option>
                  <option value="rw">RW</option>
                  <option value="kelurahan">Kelurahan</option>
                  <option value="perdukuhan">Perdukuhan</option>
                  <option value="umum">Umum</option>
                </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">Badan Hukum</label>
              <select class="form-control select-organisasi" name="badan_hukum" id="badan_hukum">
                <option value="ada">Ada</option>
                <option value="tidak_ada">Tidak Ada</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">Suket Domisili</label>
              <select class="form-control select-organisasi" name="suket_domisili" id="suket_domisili">
                <option value="belum_memiliki">Belum Memiliki</option>
                <option value="sudah_memiliki">Sudah Memiliki</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">Jumlah Anggota</label>
              <input type="number" class="form-control input-organisasi" name="jumlah_anggota" id="jumlah_anggota" placeholder="Jumlah Anggota">
            </div>

            <div class="form-group col-md-6">
              <label for="">Kepengurusan</label>
              <select class="form-control select-organisasi" name="kepengurusan" id="kepengurusan">
                <option value="ada">Ada</option>
                <option value="tidak_ada">Tidak Ada</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">Keanggotaan</label>
              <select class="form-control select-organisasi" name="keanggotaan" id="keanggotaan">
                <option value="anggota/kader">Anggota/Kader</option>
                <option value="non_keanggotaan">Non Keanggotaan</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">Tanggal Berdiri</label>
              <input type="date" class="form-control input-organisasi" name="tanggal_berdiri" id="tanggal_berdiri" placeholder="Tanggal Berdiri">
            </div>

            <div class="form-group col-md-6">
              <label for="">Visi</label>
              <input type="text" class="form-control input-organisasi" name="visi" id="visi">
            </div>

            <div class="form-group col-md-12">
                <label for="">Misi</label>
                <textarea class="form-control input-organisasi" name="misi" id="misi" cols="30" rows="3"></textarea>
            </div>

            <div class="form-group col-md-6">
              <label for="inputFoto">Upload Logo Organisasi</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input form-daftar-file" name="foto" id="inputFoto" accept="image/*"  onchange="loadFile(event)">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="">Nama Ketua</label>
              <input type="text" class="form-control input-organisasi" name="nama_ketua" id="nama_ketua" placeholder="Nama Ketua">
            </div>

            <div class="col-sm-12">
              <div class="col-md-12 text-center">
                <label for="">Sub Kategori</label>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    @foreach($data_subkategori as $subkategori)
                      <div class="form-group col-sm-4">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input radio-subKategori" type="radio" id="subkategori{{$subkategori->id}}" name="subKategori" value="{{$subkategori->id}}">
                          <label for="subkategori{{$subkategori->id}}" class="custom-control-label">{{$subkategori->nama_subkategori}}</label>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="col-md-12 text-center">
                <label for="">Fokus Kerja</label>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    @foreach($data_fokus_kerja as $fokus_kerja)
                      <div class="form-group col-sm-4">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input check-fokus" type="checkbox" name="data_fokus_kerja[]" id="fokus{{$fokus_kerja->id}}" value="{{$fokus_kerja->id}}">
                          <label for="fokus{{$fokus_kerja->id}}" class="custom-control-label">{{$fokus_kerja->nama_fokus}}</label>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="col-md-12 text-center">
                <label for="">Kegiatan Kepeloporan</label>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      @foreach($data_kegiatan_kepeloporan as $kegiatan_kepeloporan)
                        <div class="form-group col-sm-4">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input check-kepeloporan" type="checkbox" name="data_kegiatan_Kepeloporan[]" id="kepeloporan{{$kegiatan_kepeloporan->id}}" value="{{$kegiatan_kepeloporan->id}}">
                            <label for="kepeloporan{{$kegiatan_kepeloporan->id}}" class="custom-control-label">{{$kegiatan_kepeloporan->nama_kepeloporan}}</label>
                          </div>
                        </div>
                      @endforeach
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="col-md-12 text-center">
                <label for="">Kegiatan</label>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      @foreach($data_kegiatan as $kegiatan)
                        <div class="form-group col-sm-4">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input check-kegiatan" type="checkbox" name="data_kegiatan[]" id="kegiatan{{$kegiatan->id}}" value="{{$kegiatan->id}}">
                              <label for="kegiatan{{$kegiatan->id}}" class="custom-control-label">{{$kegiatan->nama_kegiatan}}</label>
                          </div>
                        </div>
                      @endforeach
                  </div>
                </div>
              </div>
            </div>

              <button type="submit" class="btn btn-primary" id="btnSubmit">Simpan</button>
            </form>
          </div>
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
      setSideBar('organisasi_kepemudaan');
    });
  </script>
@endsection
