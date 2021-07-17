@extends('layouts.com')
@section('content')
<!-- Blog Single Item Banner -->
  <section class="g-bg-cover g-bg-size-cover g-bg-white-gradient-opacity-v1--after"
            data-bg-img-src="{{config('app.sstore').Storage::url($tip->image)}}">
    <div class="container text-center g-pos-rel g-z-index-1 g-pb-50">
      <div class="row d-flex justify-content-center align-content-end flex-wrap g-min-height-500">
        <div class="col-lg-7 mt-auto">
          <div class="mb-5">
            <h1 class="g-color-white g-font-weight-600 g-mb-30">{{$tip->title}}</h1>
            <p class="lead g-color-white-opacity-0_6">{{$tip->description}}</p>
          </div>
          <span class="g-color-white-opacity-0_7 g-font-weight-300 g-font-size-12">{{$tip->author}}</span>
          <span class="g-color-white-opacity-0_7 g-font-weight-700 mx-3">&#183;</span>
          <span class="g-color-white-opacity-0_7 g-font-weight-300 g-font-size-12">{{date('d M Y',strtotime($tip->created_at))}}</span>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Single Item Banner -->

    <!-- Blog Single Item Info -->
    <section class="container g-pt-100 g-pb-60">
      <div class="row justify-content-center">
        <div class="col-lg-9">
            {!! $tip->content !!}
        </div>
      </div>
    </section>
    <!-- End Blog Single Item Info -->



    <!-- Blog Single Item Author -->
    <section class="container">
      <div class="row justify-content-center">
      </div>
    </section>
    <!-- End Blog Single Item Author -->

    <!-- Related Posts -->
    <section class="g-bg-gray-light-v5">
      <div class="container g-pt-100 g-pb-70">
        <h3 class="h5 g-color-black g-font-weight-600 text-center text-uppercase g-mb-60">Related Posts</h3>
        <div class="row">
            @foreach($tips as $related_tip)
          <div class="col-sm-6 col-lg-4 g-mb-30">
            <!-- Blog Classic Blocks -->
            <article class="u-shadow-v19 g-bg-white">
                <a href="{{route('tip',[$related_tip->id,$related_tip->title])}}">
              <img class="img-fluid w-100" src="{{config('app.sstore').Storage::url($related_tip->image)}}"
                   alt="{{$related_tip->title}}">
                </a>
              <div class="g-bg-white g-pa-30">
                <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">{{date('d M Y',strtotime($related_tip->created_at))}}</span>
                <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer"
                       href="{{route('tip',[$related_tip->id,$related_tip->title])}}">
                        {{$related_tip->title}}
                    </a>
                  </h2>
                <p class="g-color-gray-dark-v4 g-line-height-1_8">
                    @if (strlen($related_tip->description) > 200)
                        {!! $related_tip->description = substr($related_tip->description, 0, 197) . '...' !!}
                    @else
                        {!! $related_tip->description !!}
                    @endif
                </p>
              </div>
            </article>
            <!-- End Blog Classic Blocks -->
          </div>
            @endforeach

        </div>
      </div>
    </section>
    <!-- End Related Posts -->

@endsection
