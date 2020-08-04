@extends('landing.master')
@section('content')
<section id="blog" class="blog">
    <div class="container">

      <?php foreach ($data_kegiatan_disporapar as $kegiatan_disporapar): ?>
        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img width="100%" src="{{asset('admin/upload/'.$kegiatan_disporapar->gambar)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$kegiatan_disporapar->judul}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$kegiatan_disporapar->created_at}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-listing-box"></i> <a href="blog-single.html">{{$kegiatan_disporapar->kategori}}</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo substr($kegiatan_disporapar->isi, 0, 500) ?>...
                </p>
                <div class="read-more">
                  <a href="{{route('landing_blog.show',$kegiatan_disporapar->id)}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
        </div>
      <?php endforeach; ?>

    </div>
@endsection
