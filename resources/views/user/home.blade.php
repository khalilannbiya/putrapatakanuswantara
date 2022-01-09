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
    background: url('{{asset('user/images/background.png')}}') top center;
    background-repeat: no-repeat;
    background-size: cover;
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
<h1>putra pataka nuswantara</h1>
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
      <h3 class="section-title">
        Company Values</h3>
    </div>
    <div class="row justify-content-center value__company">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="box">
          <div class="icon"><i class="fa fa-user-md""></i></div>
          <p class=" description">Dynamic and growth-oriented human resource development.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="box">
            <div class="icon"><i class="fa fa-user-md"></i></div>
            <p class="description">Compliance with existing rules</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="box">
            <div class="icon"><i class="fa fa-user-md""></i></div>
          <p class=" description">With honesty and responsibility</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><i class="fa fa-user-md""></i></div>
          <p class=" description">Teamwork and professional</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <div class="box">
                <div class="icon"><i class="fa fa-user-md""></i></div>
          <p class=" description">Always strive to make progress to achieve goals</p>
                </div>
              </div>
            </div>

          </div>
</section>
<!-- #services -->

<!--========================== Article Section ============================-->
<section id="article">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">article collection</h3>
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
<!--========================== Gallery Section ============================-->
<section id="category" style="padding-bottom:85px">
  <div class="container wow fadeInUp">
    <div class="section-header text-center">
      <h3 class="section-title">Gallery</h3>
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