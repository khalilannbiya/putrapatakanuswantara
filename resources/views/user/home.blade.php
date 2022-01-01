@extends('layouts.user')

@section('header')
<style>
  .full-img {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 180px;
  }

  #hero {
    background: url('{{asset('user/images/background.jpg')}}') top center;
  }

  .image-center {
    display: block;
    margin-left: 6.5px;
    margin-right: 6.5px;
    width: 100%;
  }
</style>
@endsection

@section('hero')
<h1>TOUCHÉ Development Center</h1>
<h2>Touching People</h2>
<a href="#testimonials" class="btn-get-started">
  TESTIMONIALS</a>
@endsection


@section('content')

<!--========================== About Us Section ============================-->
<section id="about">
  <div class="container">
    <div class="row about-container">
      @if(!empty($about))
      <div class="col-lg-7 content order-lg-1 order-2">
        <h2 class="title">About Us</h2>
        <p> {!!$about[0]->caption!!}</p>
      </div>
      <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight"
        style="background: url('{{asset('about_image/'.$about[0]->image)}}') center top no-repeat; background-size: cover;">
      </div>
      @endif
    </div>
  </div>
  </div>
</section>

<!--========================== Services Section ============================-->
<section id="services">
  <div class="container wow fadeIn">
    <div class="section-header">
      <h3 class="section-title">Why Us?</h3>
      <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        doloremque</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="box">
          <div class="icon"><i class="fas fa-shield-alt"></i></div>
          <h4 class="title">100% Confidential</h4>
          <p class="description">TOUCHE dibangun berdasarkan kepercayaan. TOUCHE ingin klien aman dan nyaman untuk
            berbagi bersama kami.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="box">
          <div class="icon"><i class="fa fa-user-md"></i></div>
          <h4 class="title">Qualified Team</h4>
          <p class="description">Klien ditangani hanya oleh profesional berlisensi, baik psikolog, konselor, terapis,
            maupun trainer.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="box">
          <div class="icon"><i class="fa fa-thumbs-up"></i></div>
          <h4 class="title">Individual Approach</h4>
          <p class="description">Klien adalah prioritas utama TOUCHE. Perkembangan menuju diri yang optimal adalah
            tujuan utama TOUCHE berdiri.</p>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- #services -->

<!--========================== Call To Action Section ============================-->
<section id="call-to-action">
  <div class="container wow fadeIn">
    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3 class="cta-title">Bergabung dan Berpetualang Bersama Artikel Kami</h3>
        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
          id est laborum.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="/article">CONTACT</a>
      </div>
    </div>
  </div>
</section>

<!--========================== Goals Section ============================-->
<section id="services">
  <div class="container wow fadeIn">
    <div class="section-header">
      <h3 class="section-title">Goals</h3>
      <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        doloremque</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="box">
          <div class="icon"><i class="ri-hand-heart-fill"></i></div>
          <h4 class="title">To Cure</h4>
          <p class="description">Memberikan layanan psikologi sebagai
            proses healing klien yang sedang
            mengalami permasalahan psikologis.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="box">
          <div class="icon"><i class="fa fa-user-md"></i></div>
          <h4 class="title">To Prevent</h4>
          <p class="description">Memberikan layanan psikologi untuk
            menurunkan risiko atau mencegah
            munculnya permasalahan mental atau
            psikologis.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="box">
          <div class="icon"><i class="fa fa-thumbs-up"></i></div>
          <h4 class="title">To Promote</h4>
          <p class="description">Membangun kesadaran masyarakat,
            terutama anak muda mengenai
            pentingnya kesehatan mental sebagai
            bagian dari kesehatan holistik.</p>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- #Goals -->

<!--========================== Article Section ============================-->
<section id="article">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Our Articles</h3>
      <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        doloremque</p>
    </div>

    <div class="row article-home">

      <div class="row" id="category-wrapper">
        @foreach ($articles as $article)
        <div class="col-md-4 col-sm-12 category-item filter-app">
          <a href="{{route('article.show', $article->slug)}}">
            <img src="{{asset('articles_image/'.$article->image)}}" class="image-center">
            <div class="details">
              <h4>{{$article->title}}</h4>
              <span>{{date('d M Y', strtotime($article->created_at))}}</span>
            </div>
          </a>
        </div>
        @endforeach
      </div>

    </div>

  </div>

</section>

{{-- ========================= TESTIMONIALS =============================== --}}

<section class="testimonials" id="testimonials">
  <div class="container wow fadeIn">
    <div class="section-header">
      <h3 class="section-title">Testimonials</h3>
      <p class="section-description">What Our Custumers Saying About Us</p>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide text-center" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner text-center">
        <div class="carousel-item text-center active">
          <div class="card__testimoni text-center">
            <div class="testimoni-header">
              <img src="{{asset('user/images/boy-2.jpg')}}" alt="Foto Orang Testimoni" class="rounded-circle">
            </div>
            <div class="testimoni-body text-center">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, tempore id nulla suscipit ipsam, eum
                facere ut, ea qui dolores eveniet iusto neque? Fuga modi nihil minus, inventore commodi molestiae!</p>
            </div>
            <div class="testimoni-footer d-md-block text-center">
              <h4>Ramadhan Herdianto</h4>
              <h6>Web Developer</h6>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card__testimoni">
            <div class="testimoni-header">
              <img src="{{asset('user/images/boy.jpg')}}" alt="Foto Orang Testimoni" class="rounded-circle">
            </div>
            <div class="testimoni-body text-center">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, tempore id nulla suscipit ipsam, eum
                facere ut, ea qui dolores eveniet iusto neque? Fuga modi nihil minus, inventore commodi molestiae!</p>
            </div>
            <div class="testimoni-footer text-center">
              <h4>Syeich Khalil Annbiya</h4>
              <h6>Web Developer</h6>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>
</section>

{{-- ========================= TESTIMONIALS =============================== --}}

<!--========================== Gallery Section ============================-->
<section id="category" style="padding-bottom:85px">
  <div class="container wow fadeInUp">
    <div class="section-header text-center">
      <h3 class="section-title">Gallery</h3>
      <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        doloremque</p>
    </div>

    <div class="owl-carousel owl-theme justify-content-center">
      @foreach ($galleries as $gallery)
      <div class="item">
        <div class="cards">
          <div class="card">
            <img src="{{asset('galleries_image/'.$gallery->image)}}" alt="">
            <h5 class="card-desc">{{$gallery->title}}<br>
              <hr>
              <small>{!! Str::limit( strip_tags( $gallery->desc ), 100 ) !!}</small>
            </h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
@endsection