@extends("layouts.pages")

@section('template_title')
    All Products
@endsection

@section('content')
      <!-- Promo Block -->
      <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <div class="divimage dzsparallaxer--target w-100 g-bg-pos-top-center g-bg-cover g-bg-black-opacity-0_1--after" style="height: 140%; background-image: url(assets/img-temp/1920x1080/img3.jpg);"></div>

        <div class="container g-color-white g-pt-100 g-pb-40">
          <div class="g-mb-50">
            <span class="d-block g-color-white-opacity-0_8 g-font-weight-300 g-font-size-20">Best Quality</span>
            <h3 class="g-color-white g-font-size-50 g-font-size-90--md g-line-height-1_2 mb-0">Innovative.</h3>
{{--            <p class="g-color-white g-font-weight-600 g-font-size-20 text-uppercase">Trends {{date('M - Y',strtotime(now()))}}</p>--}}
          </div>

          <div class="d-flex justify-content-end">
            <ul class="u-list-inline g-bg-gray-dark-v1 g-font-weight-300 g-rounded-50 g-py-5 g-px-20">
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-white g-color-primary--hover" href="{{url('/')}}">Home</a>
                <i class="g-color-white-opacity-0_5 g-ml-5">/</i>
              </li>

              <li class="list-inline-item g-color-primary g-font-weight-400">
                <span>Products</span>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Promo Block -->

      <!-- Products -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <!-- Filters -->
            <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-40 g-pb-20">
              <!-- Show -->
              <div class="g-mr-60">
                <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Show:</h2>

                <!-- Secondary Button -->
                <div class="d-inline-block btn-group">
                  <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    9
                  </button>
                  <div class="dropdown-menu rounded-0">
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">All</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">5</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">15</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">20</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">25</a>
                  </div>
                </div>
                <!-- End Secondary Button -->
              </div>
              <!-- End Show -->

              <!-- Sort By -->
              <div class="g-mr-60">
                <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Sort by:</h2>

                <!-- Secondary Button -->
                <div class="d-inline-block btn-group">
                  <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bestseller
                  </button>
                  <div class="dropdown-menu rounded-0">
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Bestseller</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Trending</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Price low to high</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">price high to low</a>
                  </div>
                </div>
                <!-- End Secondary Button -->
              </div>
              <!-- End Sort By -->

              <!-- Sort By -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--xs g-brd-primary g-color-primary"
                     href="{{route('list')}}">
                    <i class="icon-list"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v3 g-brd-black--hover g-color-gray-dark-v5 g-color-black--hover"
                     href="{{route('grid')}}">
                    <i class="icon-grid"></i>
                  </a>
                </li>
              </ul>
              <!-- End Sort By -->
            </div>
            <!-- End Filters -->

          @foreach($products as $product)
            <!-- Products -->
            <div class="g-brd-bottom g-brd-gray-light-v4 @if($loop->iteration == $loop->last) g-pb-70 g-mb-60 @endif">
              <div class="row g-pt-30">
                <div class="col-6 col-sm-5 col-lg-4 g-mb-30">
                    <a href="{{route('product',[$product->id,$product->name])}}" >
                  <figure class="g-pos-rel">
                    <img class="img-fluid" src="{{config('app.sstore').Storage::url($product->image->path)}}" alt="Image Description">

                    <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                      <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
                    </figcaption>
                  </figure>
                    </a>
                </div>

                <div class="col-6 col-sm-7 col-lg-8 g-mb-15">
                  <!-- Product Info -->
                  <div class="g-mb-30">
                    <h4 class="h5 g-color-black mb-0 mt-1">
                      <a class="u-link-v5 g-color-black g-color-primary--hover" href="{{route('product',[$product->id,$product->name])}}">
                        {{$product->name}}
                      </a>
                    </h4>
{{--                    @foreach($product->categories as $category)--}}
{{--                        <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13"--}}
{{--                           href="{{route('category',[$category->name])}}">{{$category->name}}@if(!$loop->last), @endif--}}
{{--                        </a>--}}
{{--                      @endforeach--}}
                    <span class="d-block g-color-black g-font-size-20 mb-4">{{number_format($product->price->price)}} TSH</span>
                    <p>
                        {{$product->details}}
                    </p>
                  </div>
                  <!-- End Product Info -->

                  <!-- Products Icons -->
                  <ul class="list-inline g-mb-30">
                    <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v4 g-pr-20 g-mr-20">
                      <a class="d-inline-block g-color-gray-dark-v4 g-color-primary--hover g-text-underline--none--hover rounded-circle" href="#!">
                        <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                        Add to Wishlist
                      </a>
                    </li>

                  </ul>
                  <!-- End Products Icons -->

                  <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-10 g-px-20"
                     href="{{route('add_to_cart',[$product->id])}}">
                    Add to Cart
                    <i class="ml-2 icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Products -->
          @endforeach


            <!-- Pagination -->
            <nav class="g-mb-100" aria-label="Page Navigation">
                {{$products->links()}}

                <span class="float-right">
                  <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page {{$products->currentPage()}} of {{$products->lastPage()}}</span>
                </span>
            </nav>
            <!-- End Pagination -->
          </div>
        </div>
      </div>
      <!-- End Products -->      <!-- End Products -->    @include('com.includes.promo_block')
@endsection
