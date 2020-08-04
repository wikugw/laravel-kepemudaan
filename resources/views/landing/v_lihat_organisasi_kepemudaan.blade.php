@extends('landing.master')
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
                                 @if($organisasi_kepemudaan->logo == "")
                                    <img class="img-fluid" src="{{url('storage/logo_organisasi/kosong.png')}}" alt="gambar pembayaran" style="width:100%">
                                @else
                                    <img class="img-fluid" src="{{url($organisasi_kepemudaan->logo)}}" alt="gambar pembayaran" style="width:100%">
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
                                                        <td style="border:0px">{{$organisasi_kepemudaan->nama_organisasi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Telp Organisasi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$organisasi_kepemudaan->no_telp_organisasi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Alamat</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$organisasi_kepemudaan->alamat}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Visi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$organisasi_kepemudaan->visi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:0px"><b>Misi</b></td>
                                                        <td style="border:0px">:</td>
                                                        <td style="border:0px">{{$organisasi_kepemudaan->misi}}</td>
                                                        <td style="border:0px"></td>
                                                    </tr>
                                                </tbody>
                                        </table>
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
