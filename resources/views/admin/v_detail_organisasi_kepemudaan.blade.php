@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mt-3">
                <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @if($data_organisasi->logo == "")
                                    <img class="img-fluid" src="{{url('storage/logo_organisasi/kosong.png')}}" alt="gambar pembayaran" style="width:100%">
                                @else
                                    <img class="img-fluid" src="{{url($data_organisasi->logo)}}" alt="gambar pembayaran" style="width:100%">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="col-md-12 text-center">
                                <h4>Data Organisasi</h4>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th style="border:0px"></th>
                                                    <th style="border:0px"></th>
                                                    <th style="border:0px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td style="border:0px"><b>Nama Organisasi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->nama_organisasi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Email Organisasi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->email_organisasi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Telp Organisasi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->no_telp_organisasi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Tanggal Berdiri</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->tanggal_berdiri}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>nama Ketua</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->nama_ketua}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Struktur Pengurus</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->struktur_pengurus}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Kepemilikan Sekretariat</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->kepemilikan_sekretariat}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Alamat</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->alamat}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Unit Usaha</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->unit_usaha}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Kepemilikan NPWP</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->kepemilikan_npwp}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Kepemilikan ADART</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->kepemilikan_adart}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Lingkup Organisasi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->lingkup}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Badan Hukum</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->badan_hukum}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Suket Domisili</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->suket_domisili}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Jumlah Anggota</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->jumlah_anggota}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Masa Kepengurusan</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->masa_kepengurusan}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Keanggotaan</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->keanggotaan}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Visi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->visi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Misi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$data_organisasi->misi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Fokus Kerja</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">
                                                            @foreach($data_organisasi->fokus_kerja_organisasi as $data)
                                                                {{$data->nama_fokus}},
                                                            @endforeach
                                                        </td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Kepeloporan</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">
                                                            @foreach($data_organisasi->kegiatan_kepeloporan as $data)
                                                                {{$data->nama_kepeloporan}},
                                                            @endforeach
                                                        </td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Kegiatan</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">
                                                            @foreach($data_organisasi->kegiatan as $data)
                                                                {{$data->nama_kegiatan}},
                                                            @endforeach
                                                        </td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                        <a href="{{route('organisasi_kepemudaan.edit',$data_organisasi->id)}}" style="float: right;" class='btn btn-warning btn-block mt-5'>Sunting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
