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

                @foreach ($posts as $post)
                    <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6 d-block">
                        <a href="#"><img class="card-img-top" src="{{ asset($post->image) }}" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{route('categories.edit', $post->category->id)}}">{{$post->category->name}}</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show',$post->id)}}">{{ $post->title }}</a></h5>
                        </div>
                    </div>
                    </div>
                @endforeach

                </div>


                <nav class="flexbox mt-30">
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
                </nav>
            </div>



            <div class="col-md-4 col-xl-3">
                <div class="sidebar px-4 py-md-0">

                <h6 class="sidebar-title">Search</h6>
                <form class="input-group" target="#" method="GET">
                    <input type="text" class="form-control" name="s" placeholder="Search">
                    <div class="input-group-addon">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                    </div>
                </form>

                <hr>

                <h6 class="sidebar-title">Categories</h6>
                <div class="row link-color-default fs-14 lh-24">
                    @foreach ($categories as $category)
                <div class="col-6"><a href="#">{{ $category->name }}</a></div>
                    @endforeach
                </div>

                <hr>

                <!--<h6 class="sidebar-title">Top posts</h6>
                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/4.jpg">
                    <p class="media-body small-2 lh-4 mb-0">Thank to Maryam for joining our team</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/3.jpg">
                    <p class="media-body small-2 lh-4 mb-0">Best practices for minimalist design</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/5.jpg">
                    <p class="media-body small-2 lh-4 mb-0">New published books for product designers</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/2.jpg">
                    <p class="media-body small-2 lh-4 mb-0">Top 5 brilliant content marketing strategies</p>
                </a>

                <hr>-->

                <h6 class="sidebar-title">Tags</h6>
                <div class="gap-multiline-items-1">
                    @foreach ($tags as $tag)
                    <a class="badge badge-secondary" href="#">{{$tag->name}}</a>
                    @endforeach
                </div>

                <hr>

                <h6 class="sidebar-title">About</h6>
                <p class="small-3">This is a responsive, professional, and multipurpose Laravel, Software and WebApp Content Management System built by Opone Chukwuyenum.</p>


                </div>
            </div>

            </div>
        </div>
        </div>
    </main>
@endsection

