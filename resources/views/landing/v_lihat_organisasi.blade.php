@extends('landing.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card" style="min-height: 342px;">
        <div class="card-body">
          <h4 class="text-dark">List Organisasi Kepemudaan</h4>
          <h5 class="text-dark">Subkategori {{$subKategori->nama_subkategori}}</h5>
          <div class="row">
            <div class="col-md-12">
              <ol>
                @foreach($data_organisasi as $organisasi)
                  <li><a href="{{route('landing_organisasi.show',$organisasi->id)}}">{{$organisasi->nama_organisasi}}</a></li>
                @endforeach
              </ol>
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
