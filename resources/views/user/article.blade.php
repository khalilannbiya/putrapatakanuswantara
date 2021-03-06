@extends('layouts.user')

@section('header')
<style>
  #hero {
    background: url('{{asset('user/images/blog.png')}}') top center;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
</style>
@endsection

@section('hero')
<h1>Our Articles</h1>
@endsection

@section('content')
<!--========================== Article Section ============================-->
<section id="contact">
  <div class="row justify-content-center wow fadeInUp">
    <div class="col-sm-10">
      <div class="row container">
        <div class="col-sm-9">
          @if (empty(request()->segment(2)) )
          @component('user.component.all_article', ['articles'=> $articles])
          @endcomponent
          @else
          @component('user.component.single_article', ['article'=> $articles])
          @endcomponent
          @endif
        </div>

        <div class="col-sm-3 mt-5">
          <form action="{{route('article')}}" class="mt-5">
            <div class="input-group mb-4 border rounded-pill shadow-lg"
              style="border-radius:10px; box-shadow: 3px 3px 8px grey;">
              <input type="text" name="s" value="{{Request::get('s')}}" placeholder="Search title/topics?"
                class="form-control bg-none border-0"
                style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
              <div class="input-group-append border-0">
                <button type="submit" class="btn text-success"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
          <div class="mb-3 font-weight-bold">Last Posts</div>
          @foreach ($other as $item)
          <div>
            <h6 class="card-title" style="color: #666666 !important;">
              <a href="{{route('article.show', [$item->slug])}}"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                {{$item->title}}
              </a>
            </h6>
            <hr>
          </div>
          @endforeach
        </div>

      </div>
    </div>

  </div>
</section>

{{-- @if (empty(request()->segment(2)) )
@component('user.component.all_article', ['articles'=> $articles])
@endcomponent
@else
@component('user.component.single_article', ['article'=> $articles])
@endcomponent
@endif --}}
@endsection