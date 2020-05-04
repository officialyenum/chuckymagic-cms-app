@extends('layouts.blog')

@section('title')
   The ChuckyMagic Portfolio
@endsection

@section('header')
    <!-- Header -->
    <header class="header text-white h-fullscreen overflow-hidden" style="background-color: #24292e">
        <canvas class="constellation" data-color="rgba(255,255,255,0.3)"></canvas>
        <div class="container position-static">
          <div class="row align-items-center h-100">

            <div class="col-lg-7">
              <h1 class="display-4 fw-500">Built For <span class="fw-400 pl-2" data-typing="Developers, Entrepreneurs, Makers, Tutors, Photographers, Creatives" data-type-speed="80"></span></h1>
              <p class="lead mt-5 mb-7 mb-md-9 w-80"><strong>ChuckyMagic</strong> is an elegant, modern and fully customizable Laravel WebApp Developed by Opone Yenum</p>
              <a class="btn btn-xl btn-round btn-success w-200 mr-3 px-6 d-none d-md-inline-block" href="{{ route('register') }}">Sign Up</a>
              <a class="btn btn-xl btn-round btn-outline-light w-200 px-6" href="#section-demo">Create</a>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
            </div>

          </div>

          <div class="d-none d-lg-block sample-blocks">
            <a href="block/cover.html#block-2" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-1.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">
            </a>

            <a href="block/team.html#block-6" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-2.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
            </a>

            <a href="block/cover.html#block-5" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-3.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
            </a>

            <a href="block/blog.html#block-1" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-4.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">
            </a>

            <a href="block/feature.html#block-8" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-5.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="800" data-aos-offset="0">
            </a>

            <a href="block/feature.html#block-13" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-6.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="1000" data-aos-offset="0">
            </a>

            <a href="block/shop.html#block-4" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-7.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="1200" data-aos-offset="0">
            </a>

            <a href="block/feature-text.html#block-3" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-8.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="1400" data-aos-offset="0">
            </a>

            <a href="block/pricing.html#block-6" target="_blank">
              <img class="shadow-6" src="{{asset('/img/preview/block-9.jpg')}}" alt="..." data-aos="fade-up" data-aos-delay="1700" data-aos-offset="0">
            </a>
          </div>

        </div>
      </header><!-- /.header -->
@endsection


@section('content')
    <!-- Main Content -->
    <main class="main-content">
        <div class="section bg-gray">
        <div class="container">
            <div class="row">


            <div class="col-md-8 col-xl-9">
                <div class="row gap-y">
                @forelse ($posts as $post)
                    <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6 d-block">
                        <a href="#"><img class="card-img-top" src="{{ asset($post->image) }}" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{route('categories.edit', $post->category->id)}}">{{$post->category->name}}</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show',$post->id)}}">{{ $post->title }}</a></h5>
                        </div>
                    </div>
                    </div>
                @empty
                    @if ($search)
                        <p class="text-center">
                            No results found for the search " <strong>{{ $search }}</strong> "
                        </p>
                    @else
                        <p class="text-center">
                            No results found"
                        </p>
                    @endif
                @endforelse

                </div>
                {{-- <nav class="flexbox mt-30">
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
                </nav> --}}
                {{ $posts->appends(['search' => request()->query('search')])->links()}}
            </div>

            @include('partials.sidebar')

            </div>
        </div>
        </div>
    </main>
@endsection

