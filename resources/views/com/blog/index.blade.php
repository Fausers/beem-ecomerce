@extends('layouts.com')
@section('content')
<!-- Breadcrumbs -->
    <section class="g-bg-gray-light-v5 g-py-80">
      <div class="container text-center">
        <h2 class="h2 g-color-black g-font-weight-600">{{config('app.name','Our')}} Tips & Guide</h2>

        <ul class="u-list-inline">
          <li class="list-inline-item g-mr-5">
            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="{{url('/')}}">Home</a>
            <i class="g-color-gray-light-v2 g-ml-5">/</i>
          </li>
          <li class="list-inline-item g-color-primary">
            <span>Tips & Guide</span>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Blog Minimal Blocks -->
    <div class="container g-pt-100 g-pb-20">
      <div class="row justify-content-between">
        <div class="col-lg-9 g-mb-80">
          <div class="g-pr-20--lg">

            @foreach($tips as $tip)
                @if($loop->first)
                <!-- Blog Minimal Blocks -->
                <article class="g-mx-15 u-block-hover">
                  <div class="g-px-10--md g-py-30--md">
                    <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                      <li class="list-inline-item mr-0">{{$tip->author}}</li>
                      <li class="list-inline-item mx-2">&#183;</li>
                      <li class="list-inline-item">{{date('d M Y',strtotime($tip->created_at))}}</li>
                    </ul>
                    <h2 class="h2 g-color-black g-font-weight-600 mb-4">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="{{route('tip',[$tip->id,$tip->title])}}">
                            {{$tip->title}}
                        </a>
                      </h2>
                  </div>
                  <div class="g-overflow-hidden">
                    <img class="img-fluid w-100 u-block-hover__main--mover-down" src="{{config('app.sstore').Storage::url($tip->image)}}" alt="Image Description">
                  </div>
                  <div class="g-px-100--md g-py-30--md">
                    <div class="mb-4">
                      <p class="g-font-size-18 g-line-height-2 mb-0">
                          @if (strlen($tip->description) > 200)
                                {!! $tip->description = substr($tip->description, 0, 197) . '...' !!}
                          @else
                                {!! $tip->description !!}
                          @endif
                      </p>
                    </div>
                    <a class="g-color-gray-dark-v2 g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="{{route('tip',[$tip->id,$tip->title])}}">Read more</a>
                  </div>
                </article>
                <!-- End Blog Minimal Blocks -->
                <hr class="g-mb-60 g-mx-15">

                @else
                    <!-- Blog Minimal Blocks -->
                    <article class="row align-items-center u-block-hover">
                      <div class="col-md-6 g-mb-30">
                        <div class="g-overflow-hidden">
                          <img class="img-fluid w-100 u-block-hover__main--mover-down g-mb-minus-6" src="{{config('app.sstore').Storage::url($tip->image)}}" alt="Image Description">
                        </div>
                      </div>
                      <div class="col-md-6 g-mb-30">
                        <div class="g-pa-30--md">
                          <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                            <li class="list-inline-item mr-0">{{$tip->author}}</li>
                            <li class="list-inline-item mx-2">&#183;</li>
                            <li class="list-inline-item">{{date('d M Y',strtotime($tip->created_at))}}</li>
                          </ul>
                          <h2 class="h3 g-color-black g-font-weight-600 mb-4">
                              <a class="u-link-v5 g-color-black g-color-primary--hover" href="{{route('tip',[$tip->id,$tip->title])}}">
                                  {{$tip->title}}
                              </a>
                            </h2>
                            <p class="g-font-size-15 g-line-height-2 mb-0">
                                  @if (strlen($tip->description) > 120)
                                        {!! $tip->description = substr($tip->description, 0, 117) . '...' !!}
                                  @else
                                        {!! $tip->description !!}
                                  @endif
                              </p>
                          <a class="g-color-gray-dark-v2 g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="{{route('tip',[$tip->id,$tip->title])}}">Read more</a>
                        </div>
                      </div>
                    </article>
                    <!-- End Blog Minimal Blocks -->
                    @if(!$loop->last)
                    <hr class="g-mb-60 g-mx-15">
                        @endif
                @endif
            @endforeach






          </div>
        </div>

        <div class="col-lg-3 g-brd-left--lg g-brd-gray-light-v4 g-mb-80">
          <div class="g-pl-20--lg">

            <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-50" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
              <!-- Publications -->
              <div class="g-mb-50">
                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Related Products</h3>
                <ul class="list-unstyled g-font-size-13 mb-0">
                  <li>
                    <article class="media g-mb-35">
                      <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3" src="{{url('/')}}/main_assets/img-temp/100x100/img1.jpg" alt="Image Description">
                      <div class="media-body">
                        <h4 class="h6 g-color-black g-font-weight-600">Htmlstream</h4>
                        <p class="g-color-gray-dark-v4">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25" href="#!">Follow</a>
                      </div>
                    </article>
                  </li>
                  <li>
                    <article class="media g-mb-35">
                      <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3" src="{{url('/')}}/main_assets/img-temp/100x100/img3.jpg" alt="Image Description">
                      <div class="media-body">
                        <h4 class="h6 g-color-black g-font-weight-600">Pixeel</h4>
                        <p class="g-color-gray-dark-v4">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25" href="#!">Follow</a>
                      </div>
                    </article>
                  </li>
                  <li>
                    <article class="media">
                      <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3" src="{{url('/')}}/main_assets/img-temp/100x100/img2.jpg" alt="Image Description">
                      <div class="media-body">
                        <h4 class="h6 g-color-black g-font-weight-600">WrapBootstrap</h4>
                        <p class="g-color-gray-dark-v4">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25" href="#!">Follow</a>
                      </div>
                    </article>
                  </li>
                </ul>
              </div>
              <!-- End Publications -->

              <hr class="g-brd-gray-light-v4 g-my-50">

              <!-- Tags -->
              <div class="g-mb-40">
                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Tags</h3>
                <ul class="u-list-inline mb-0">
                  <li class="list-inline-item g-mb-10">
                    <a class="u-tags-v1 g-color-gray-dark-v4 g-color-white--hover g-bg-gray-light-v5 g-bg-primary--hover g-font-size-12 g-rounded-50 g-py-4 g-px-15" href="#!">Design</a>
                  </li>
                </ul>
              </div>
              <!-- End Tags -->

              <hr class="g-brd-gray-light-v4 g-my-50">

              <!-- Newsletter -->
              <div class="g-mb-50">
                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Newsletter</h3>
                <div class="input-group">
                  <span class="input-group-btn">
                      <button class="btn u-btn-primary g-rounded-left-50 g-py-13 g-px-20">
                        <i class="icon-communication-062 u-line-icon-pro g-pos-rel g-top-1"></i>
                      </button>
                    </span>
                  <input class="form-control g-brd-primary g-placeholder-gray-dark-v5 border-left-0 g-rounded-right-50 g-px-15" type="email" placeholder="Enter your email ...">
                </div>
              </div>
              <!-- End Newsletter -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Minimal Blocks -->
@endsection
