<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>{{$product->name}} | {{config('app.name')}}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/css/custom.css">
  </head>

  <body>
    <main>
     <!-- Header -->
      @include('com.includes.header')
      <!-- End Header -->

      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="{{route('grid')}}">Products</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>{{$product->name}}</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Product Description -->
      <div class="container g-py-50">
        <div class="row">
          <div class="col-lg-7">
            <!-- Carousel -->
            <div id="carouselCus1" class="js-carousel g-pt-10 g-mb-10"
                 data-infinite="true"
                 data-fade="true"
                 data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle"
                 data-arrow-left-classes="fa fa-angle-left g-left-40"
                 data-arrow-right-classes="fa fa-angle-right g-right-40"
                 data-nav-for="#carouselCus2">
                @foreach($product->images as $image)
                  <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                    <img class="img-fluid w-100" src="{{config('app.sstore').Storage::url($image->path)}}"
                         alt="{{$product->name}}">
                  </div>
                @endforeach
            </div>

            <div id="carouselCus2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5"
                 data-infinite="true"
                 data-center-mode="true"
                 data-slides-show="3"
                 data-is-thumbs="true"
                 data-nav-for="#carouselCus1">
                @foreach($product->images as $image)
              <div class="js-slide g-cursor-pointer g-px-5">
                <img class="img-fluid" src="{{config('app.sstore').Storage::url($image->wide)}}"
                     alt="{{$product->name}}">
              </div>
                @endforeach
            </div>
            <!-- End Carousel -->
          </div>

          <div class="col-lg-5">
            <div class="g-px-40--lg g-pt-70">
              <!-- Product Info -->
              <div class="g-mb-30">
                <h1 class="g-font-weight-300 mb-4">{{$product->name}}</h1>
                <p>
                    {{$product->details}}
                </p>
              </div>
              <!-- End Product Info -->

              <!-- Price -->
              <div class="g-mb-30">
                <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">Price</h2>
                <span class="g-color-black g-font-weight-500 g-font-size-30 mr-2">{{number_format($product->price->price)}} TSH</span>
{{--                <s class="g-color-gray-dark-v4 g-font-weight-500 g-font-size-16">$101.00</s>--}}
              </div>
              <!-- End Price -->

              <!-- Accordion -->
              <div id="accordion-01" role="tablist" aria-multiselectable="true">
                <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                  <h5 class="g-font-weight-400 g-font-size-default mb-0">
                    <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Details
                      <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span></a>
                  </h5>
                </div>
                <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">
                  <div class="g-py-10">
                    {!! $product->description !!}
                  </div>
                </div>
              </div>
              <!-- End Accordion -->

              <!-- Quantity -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Quantity</h5>

                <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                  <input class="js-result form-control text-center g-font-size-13 rounded-0" type="text" value="1" readonly>

                  <div class="input-group-addon d-flex align-items-center g-brd-gray-light-v2 g-width-30 g-bg-white g-font-size-13 rounded-0 g-pa-5">
                    <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                    <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <!-- End Quantity -->

              <!-- Buttons -->
              <div class="row g-mx-minus-5 g-mb-20">
                <div class="col g-px-5 g-mb-10">
                  <a class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" href="{{route('add_to_cart',[$product->id])}}">
                    Add to Cart <i class="align-middle ml-2 icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </div>
                <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-outline-black g-brd-gray-dark-v5 g-brd-black--hover g-color-gray-dark-v4 g-color-white--hover g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                    Add to Wishlist <i class="align-middle ml-2 icon-medical-022 u-line-icon-pro"></i>
                  </button>
                </div>
              </div>
              <!-- End Buttons -->

              <!-- Nav Tabs -->
              <ul class="nav d-flex justify-content-between g-font-size-12 text-uppercase" role="tablist" data-target="nav-1-1-default-hor-left">
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link active g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--3" role="tab">See User Guide</a>
                </li>
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--1" role="tab">Return Policy</a>
                </li>
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--2" role="tab">Delivery</a>
                </li>
              </ul>
              <!-- End Nav Tabs -->

              <!-- Tab Panes -->
              <div id="nav-1-1-default-hor-left" class="tab-content">
                <div class="tab-pane fade show active g-pt-30" id="nav-1-1-default-hor-left--3" role="tabpanel">
                    <div style="height: 250px">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/P_bgFCmw30A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--1" role="tabpanel">
                    <p class="g-color-gray-dark-v4 g-font-size-13 mb-0">You can return/exchange your orders in {{config('app.name')}}. For more information, contact us
                    <a href="tel:+255753432505"> +255 753 432 505</a>.</p>
                </div>

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--2" role="tabpanel">
                  <!-- Shipping Mehtod -->
                    <p class="align-top g-py-0 g-color-pink">All Deliveries Above 100,000 TZS are free</p>
                  <table>
                    <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-gray-dark-v3 g-font-size-13">
                      <tr>
                        <th class="g-width-100 g-font-weight-500 g-pa-0 g-pb-10">Destination</th>
                        <th class="g-width-140 g-font-weight-400 g-pa-0 g-pb-10">Delivery type</th>
                        <th class="g-width-150 g-font-weight-500 g-pa-0 g-pb-10">Delivery time</th>
                        <th class="g-font-weight-500 text-right g-pa-0 g-pb-10">Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Mlimani</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Ilala</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Kinondoni</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Magomeni</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Sinza</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Mbezi Beach</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Mikocheni</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">Free</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Other Areas in Dar</td>
                        <td class="align-top g-py-10">Fast delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Within One Hour</td>
                        <td class="align-top text-right g-py-10">From 3,000 TZS</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Regional</td>
                        <td class="align-top g-py-10">Standard Delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Order before 12pm monday - thursday and receive it the next day</td>
                        <td class="align-top text-right g-py-10">10,000 TZS</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Standard Delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Saturday delivery for orders placed before 12pm on friday</td>
                        <td class="align-top text-right g-py-10">10,000 TZS</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Shipping Mehtod -->
                </div>
              </div>
              <!-- End Tab Panes -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Product Description -->

      <!-- Products -->
      <div class="g-bg-gray-light-v5">
        <div class="container g-pt-100 g-pb-70">
          <div class="text-center mx-auto g-max-width-600 g-mb-50">
            <h2 class="g-color-black mb-4">Featured Products</h2>
            <p class="lead">embrace the skin your are in.</p>
          </div>

          <div class="row g-mx-minus-10">
              @foreach($product->categories as $category)
                @foreach($category->products as $featured)
                    @if($featured->id != $product->id)
                    <div class="col-sm-6 col-lg-3 g-px-10 g-mb-30">
                      <div class="u-shadow-v21">
                          <a href="{{route('product',[$featured->id,$featured->name])}}">
                        <div class="g-pos-rel">
                          <!-- Product Image -->
                          <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                               data-infinite="true"
                               data-fade="true"
                               data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-30 g-height-30 g-color-white g-color-primary--hover g-font-size-18 g-mb-45"
                               data-arrow-left-classes="fa fa-angle-left g-left-5"
                               data-arrow-right-classes="fa fa-angle-right g-right-5">

                              @foreach($featured->images as $image)
                                <div class="js-slide">
                                  <img class="img-fluid" src="{{config('app.sstore').Storage::url($image->path)}}" alt="Image Description">
                                </div>
                              @endforeach
                          </div>
                          <!-- End Product Image -->

                          <!-- Product Info -->
                          <div class="text-center g-pos-abs g-bottom-20 g-left-0 g-right-0">
                            <h2 class="g-color-white-opacity-0_8 g-font-weight-400 g-font-size-13">
                              <a class="u-link-v5 g-color-white-opacity-0_8 g-color-primary--hover g-cursor-pointer" href="#!">
                                  {{$featured->name}}
                              </a>
                            </h2>
                            <span class="g-color-white g-font-weight-600 g-font-size-20">{{number_format($featured->price->price)}} TZS</span>
                          </div>
                          <!-- End Product Info -->
                        </div>
                          </a>

                        <!-- Product Size -->
                        <div class="g-bg-white g-pa-20">
                          <h4 class="g-font-size-11 text-center text-uppercase">{{$category->name}}</h4>

                          <div class="d-flex justify-content-between align-items-center">
                            <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" title="Add to Wishlist"
                               data-toggle="tooltip"
                               data-placement="top">
                              <i class="icon-medical-022 u-line-icon-pro"></i>
                            </a>

                            <div class="col-7">
                              <!-- Checkbox -->
                              <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                                   data-infinite="true"
                                   data-autoplay="true"
                                   data-slides-show="3">
                                <div class="js-slide mx-auto">
                                  <label class="form-check-inline u-check mb-0 mr-0">
                                    <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                                      Face
                                    </span>
                                  </label>
                                </div>
                                <div class="js-slide mx-auto">
                                  <label class="form-check-inline u-check mb-0 mr-0">
                                    <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                                      Skin
                                    </span>
                                  </label>
                                </div>
                                <div class="js-slide mx-auto">
                                  <label class="form-check-inline u-check mb-0 mr-0">
                                    <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                                      Body
                                    </span>
                                  </label>
                                </div>
                                <div class="js-slide mx-auto">
                                  <label class="form-check-inline u-check mb-0 mr-0">
                                    <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                                      Feet
                                    </span>
                                  </label>
                                </div>
                                <div class="js-slide mx-auto">
                                  <label class="form-check-inline u-check mb-0 mr-0">
                                    <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                                      Care
                                    </span>
                                  </label>
                                </div>
                              </div>
                              <!-- End Checkbox -->
                            </div>

                            <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle"
                               href="{{route('add_to_cart',[$product->id])}}"
                               title="Add to Cart"
                               data-toggle="tooltip"
                               data-placement="top">
                              <i class="icon-finance-100 u-line-icon-pro"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Product Size -->
                      </div>
                    </div>
                      @endif
                @endforeach
            @endforeach
          </div>
        </div>
      </div>
      <!-- End Products -->

      <!-- News -->
      <div class="container g-pt-100 g-pb-70">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Tips & Guide</h2>
          <p class="lead">Keep in touch with the latest tips &amp; guide.</p>
        </div>

        <div class="row g-mx-minus-10">
            @foreach($tips as $tip)
          <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
            <!-- Blog Background Overlay Blocks -->
            <article class="u-block-hover">
                <a href="{{route('tip',[$tip->id,$tip->title])}}">
              <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                <img class="d-flex align-items-end u-block-hover__main--mover-down" src="{{config('app.sstore').Storage::url($tip->image)}}" alt="{{$tip->title}}">
              </div>
              <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                <div class="u-block-hover__visible g-pa-25">
                  <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">{{$tip->category->name}}</span>
                  <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="{{route('tip',[$tip->id,$tip->title])}}">{{$tip->title}}</a>
                  </h2>
                  <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                    By,
                    <a class="g-color-white-opacity-0_7 text-uppercase" href="{{route('tip',[$tip->id,$tip->title])}}">{{$tip->author}}</a>
                  </h4>
                  <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                  <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">{{date('d M Y',strtotime($tip->created_at))}}</span>
                </div>

                <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="{{route('tip',[$tip->id,$tip->title])}}">Read more</a>
              </div>
                </a>
            </article>
            <!-- End Blog Background Overlay Blocks -->
          </div>
            @endforeach
        </div>
      </div>
      <!-- End News -->

      <!-- Footer -->
      @include('com.includes.footer')
      <!-- End Footer -->

      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{url('/')}}/main_assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/popper.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{url('/')}}/main_assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery.countdown.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- JS Unify -->
    <script src="{{url('/')}}/main_assets/js/hs.core.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.header.js"></script>
    <script src="{{url('/')}}/main_assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.dropdown.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.scrollbar.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.countdown.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.carousel.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.tabs.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.count-qty.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="{{url('/')}}/main_assets/js/custom.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K5X3Z3PBWC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-K5X3Z3PBWC');
    </script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu plugin
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

        // initialization of quantity counter
        $.HSCore.components.HSCountQty.init('.js-quantity');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
    </script>
  </body>

</html>
