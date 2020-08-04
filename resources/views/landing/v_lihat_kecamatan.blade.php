@extends('landing.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h2 class="text-dark">Informasi Kecamatan {{$kecamatan->nama_kecamatan}}</h2>
          <div class="row">
            <div class="col-md-6">
              <table class="table table-hover table-stripped table-bordered" id="tabel">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kelurahan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach ($data_kelurahan as $kelurahan): ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $kelurahan->nama_kelurahan ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-6">
              <table class="table table-hover table-stripped table-bordered" id="tabel">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Program Kerja</th>
                    <th>Kategori</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach ($data_program_kerja as $program_kerja): ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $program_kerja->nama_program_kerja ?></td>
                      <td>
                        <?php
                          switch ($program_kerja->kategori){
                            case 'keagamaan':
                              echo "Keagamaan";
                            break;
                            case 'penyadaran_hukum':
                              echo "Penyadaran Hukum";
                            break;
                            case 'olahraga':
                              echo "Olahraga";
                            break;
                            case 'olahraga':
                              echo "Olahraga";
                            break;
                            case 'pendidikan':
                              echo "Pendidikan";
                            break;
                            case 'sosial':
                              echo "Sosial";
                            break;
                            case 'seni':
                              echo "Seni";
                            break;
                            case 'budaya':
                              echo "Budaya";
                            break;
                            case 'olahraga':
                              echo "Olahraga";
                            break;
                            case 'ketahanan_pangan':
                              echo "ketahanan_pangan";
                            break;
                            case 'lingkungan_hidup':
                              echo "Lingkungan Hidup";
                            break;
                            case 'sosial_budaya':
                              echo "Sosial Budaya";
                            break;
                            case 'kepeloporan_pendidikan':
                              echo "kepeloporan_pendidikan";
                            break;
                            case 'inotek':
                              echo "Inotek";
                            break;
                            case 'kewirausahaan':
                              echo "kewirausahaan";
                            break;
                          }
                        ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-hover table-stripped table-bordered" id="tabel">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Sarana Prasarana</th>
                    <th>Kategori</th>
                    <th>Kelurahan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach ($data_sarana_prasarana as $sarana_prasarana): ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $sarana_prasarana->nama_sarana_prasana ?></td>
                      <td>
                        <?php
                          switch ($sarana_prasarana->kategori){
                            case 'pertemuan_olahraga':
                              echo "Pertemuan Olahraga";
                            break;
                            case 'coworking':
                              echo "Co-Working Space";
                            break;
                            case 'kepemudaan':
                              echo "Kepemudaan";
                            break;
                          }
                        ?>
                      </td>
                      <td><?php echo $sarana_prasarana->kelurahan->nama_kelurahan ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


</div>
<!-- /.content-wrapper -->

@endsection
