@extends('layouts.com')
@section('content')
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
      <div class="container g-pt-50 g-pb-100">
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
{{--              <div id="accordion-01" role="tablist" aria-multiselectable="true">--}}
{{--                <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">--}}
{{--                  <h5 class="g-font-weight-400 g-font-size-default mb-0">--}}
{{--                    <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Details--}}
{{--                      <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span></a>--}}
{{--                  </h5>--}}
{{--                </div>--}}
{{--                <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">--}}
{{--                  <div class="g-py-10">--}}
{{--                    <p class="g-font-size-12 mb-2">SHELL: 100% POLYESTER</p>--}}
{{--                    <p class="g-font-size-12 mb-2">Always check the care label instructions.</p>--}}
{{--                    <p class="g-font-size-12 mb-2">Professional dry clean only. Remove all detachable parts before cleaning. Do not iron.</p>--}}
{{--                    <p class="g-font-size-12 mb-2">(Navy: Avoid contact with light coloured fabrics and upholstery especially whilst damp.)</p>--}}
{{--                  </div>--}}
{{--                </div>--}}
              </div>
              <!-- End Accordion -->

{{--              <!-- Colour -->--}}
{{--              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">--}}
{{--                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Colour</h5>--}}

{{--                <!-- Checkbox -->--}}
{{--                <label class="form-check-inline u-check mb-0 ml-auto g-mr-10">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">--}}
{{--                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">--}}
{{--                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-primary rounded-circle"></i>--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-mx-10">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">--}}
{{--                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">--}}
{{--                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-beige rounded-circle"></i>--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-mx-10">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">--}}
{{--                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">--}}
{{--                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-black rounded-circle"></i>--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-ml-10 mr-0">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">--}}
{{--                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">--}}
{{--                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-gray-dark-v4 rounded-circle"></i>--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <!-- End Checkbox -->--}}
{{--              </div>--}}
{{--              <!-- End Colour -->--}}

{{--              <!-- Size -->--}}
{{--              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">--}}
{{--                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Size</h5>--}}

{{--                <!-- Checkbox -->--}}
{{--                <label class="form-check-inline u-check mb-0 ml-auto g-mr-15">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">--}}
{{--                  <span class="d-block g-font-size-12 g-color-primary--checked">--}}
{{--                    S--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-mx-15">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">--}}
{{--                  <span class="d-block g-font-size-12 g-color-primary--checked">--}}
{{--                    M--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-mx-15">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">--}}
{{--                  <span class="d-block g-font-size-12 g-color-primary--checked">--}}
{{--                    L--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-mx-15">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">--}}
{{--                  <span class="d-block g-font-size-12 g-color-primary--checked">--}}
{{--                    XL--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <label class="form-check-inline u-check mb-0 g-ml-15">--}}
{{--                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">--}}
{{--                  <span class="d-block g-font-size-12 g-color-primary--checked">--}}
{{--                    XXL--}}
{{--                  </span>--}}
{{--                </label>--}}
{{--                <!-- End Checkbox -->--}}
{{--              </div>--}}
{{--              <!-- End Size -->--}}

              <!-- Quantity -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Quantity</h5>

                <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                  <input class="js-result form-control text-center g-font-size-13 rounded-0" type="text" value="1" readonly>

                  <div class="input-group-addon d-flex align-items-center g-width-30 g-brd-gray-light-v2 g-bg-white g-font-size-13 rounded-0 g-pa-5">
                    <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                    <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <!-- End Quantity -->

              <!-- Buttons -->
              <div class="row g-mx-minus-5 g-mb-20">
                <div class="col g-px-5 g-mb-10">
                  <a  class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25"
                      href="{{route('add_to_cart',[$product->id])}}">
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
                  <a class="nav-link active g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--3" role="tab">Returns</a>
                </li>
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--1" role="tab">View Size Guide</a>
                </li>
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--2" role="tab">Delivery</a>
                </li>
              </ul>
              <!-- End Nav Tabs -->

              <!-- Tab Panes -->
              <div id="nav-1-1-default-hor-left" class="tab-content">
                <div class="tab-pane fade show active g-pt-30" id="nav-1-1-default-hor-left--3" role="tabpanel">
                  <p class="g-color-gray-dark-v4 g-font-size-13 mb-0">You can return/exchange your orders in Unify E-commerce. For more information, read our
                    <a href="page-help-1.html">Help</a>.</p>
                </div>

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--1" role="tabpanel">
                  <h4 class="g-font-size-15 mb-3">General Clothing Size Guide</h4>

                  <!-- Size -->
                  <table>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Unify Size (UK)</td>
                        <td class="align-top g-width-50 g-py-5">S</td>
                        <td class="align-top g-width-50 g-py-5">M</td>
                        <td class="align-top g-width-50 g-py-5">L</td>
                        <td class="align-top g-width-50 g-py-5">XL</td>
                        <td class="align-top g-width-50 g-py-5">XXL</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">UK</td>
                        <td class="align-top g-width-50 g-py-5">6</td>
                        <td class="align-top g-width-50 g-py-5">8</td>
                        <td class="align-top g-width-50 g-py-5">10</td>
                        <td class="align-top g-width-50 g-py-5">12</td>
                        <td class="align-top g-width-50 g-py-5">14</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Europe</td>
                        <td class="align-top g-width-50 g-py-5">32</td>
                        <td class="align-top g-width-50 g-py-5">34</td>
                        <td class="align-top g-width-50 g-py-5">36</td>
                        <td class="align-top g-width-50 g-py-5">38</td>
                        <td class="align-top g-width-50 g-py-5">40</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">US</td>
                        <td class="align-top g-width-50 g-py-5">2</td>
                        <td class="align-top g-width-50 g-py-5">4</td>
                        <td class="align-top g-width-50 g-py-5">6</td>
                        <td class="align-top g-width-50 g-py-5">8</td>
                        <td class="align-top g-width-50 g-py-5">10</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Australia</td>
                        <td class="align-top g-width-50 g-py-5">6</td>
                        <td class="align-top g-width-50 g-py-5">8</td>
                        <td class="align-top g-width-50 g-py-5">10</td>
                        <td class="align-top g-width-50 g-py-5">12</td>
                        <td class="align-top g-width-50 g-py-5">14</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Japan</td>
                        <td class="align-top g-width-50 g-py-5">7</td>
                        <td class="align-top g-width-50 g-py-5">9</td>
                        <td class="align-top g-width-50 g-py-5">11</td>
                        <td class="align-top g-width-50 g-py-5">13</td>
                        <td class="align-top g-width-50 g-py-5">15</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Size -->
                </div>

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--2" role="tabpanel">
                  <!-- Shipping Mehtod -->
                  <table>
                    <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-gray-dark-v3 g-font-size-13">
                      <tr>
                        <th class="g-width-70 g-font-weight-500 g-pa-0 g-pb-10">Destination</th>
                        <th class="g-width-110 g-font-weight-500 g-pa-0 g-pb-10">Delivery type</th>
                        <th class="g-width-150 g-font-weight-500 g-pa-0 g-pb-10">Delivery time</th>
                        <th class="g-width-70 g-font-weight-500 text-right g-pa-0 g-pb-10">Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-13">
                        <td class="align-top g-py-10">Dar es sallam</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-py-10">2-3 Working days</td>
                        <td class="align-top text-right g-py-10">3,000 TSH</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-13">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Next day</td>
                        <td class="align-top g-py-10">Order before 12pm monday - thursday and receive it the next day</td>
                        <td class="align-top text-right g-py-10">5,000 TSH</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-13">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Saturday delivery</td>
                        <td class="align-top g-py-10">Saturday delivery for orders placed before 12pm on friday</td>
                        <td class="align-top text-right g-py-10">7,000 TSH</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-13">
                        <td class="align-top g-py-10">Mbeya</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-py-10">3-9 Working days</td>
                        <td class="align-top text-right g-py-10">15,000 TSH</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-13">
                        <td class="align-top g-py-10">Mwanza</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-py-10">3-9 Working days</td>
                        <td class="align-top text-right g-py-10">15,000 TSH</td>
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
      <!-- End Product Description -->

      <!-- Description -->
      <div class="container">
        <div class="g-brd-y g-brd-gray-light-v4 g-pt-100 g-pb-70">
          <h2 class="h4 mb-3">Description</h2>

          <div class="row">
            <div class="col-md-4 g-mb-30">
              <p>
                  {!!   $product->description !!}
              </p>
            </div>

              @foreach($product->properties as $property)
                  @php($mid = intdiv($loop->count,2))
                  @if($loop->iteration == 1)
                    <div class="col-md-4 g-mb-0 g-mb-30--md">
                      <!-- List -->
                      <ul class="list-unstyled g-color-text">
                          @endif
                          @if($loop->iteration <= intdiv($loop->count,2))
                            <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                              <span>{{$property->name}}:</span>
                              <span class="float-right g-color-black">{{$property->detail}}</span>
                            </li>
                          @endif

                          @if($loop->iteration == intdiv($loop->count,2)+1)
                      </ul>
                      <!-- End List -->
                    </div>

                    <div class="col-md-4 g-mb-30">
                      <!-- List -->
                      <ul class="list-unstyled g-color-text">
                          @endif
                            @if($loop->iteration > intdiv($loop->count,2))
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                          <span>{{$property->name}}:</span>
                          <span class="float-right g-color-black">{{$property->detail}}</span>
                        </li>
                          @endif
                          @if($loop->iteration == $loop->last)
                      </ul>
                      <!-- End List -->
                    </div>
                  @endif
                      @endforeach

          </div>
        </div>
      </div>
      <!-- End Description -->

      <!-- Products -->
      <div class="container g-pt-100 g-pb-70">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Featured Products</h2>
          <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth – but let's you still live life in style.</p>
        </div>

        <!-- Products -->
        <div class="row">
            @foreach($product->categories as $category)
                @foreach($category->products as $featured)
                    @if($loop->first || $loop->iteration == 2)
                      <div class="col-6 col-lg-3 g-mb-30">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                          <img class="img-fluid" src="{{url('/')}}/assets/img-temp/480x700/img1.jpg" alt="Image Description">

                          <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                            <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
                          </figcaption>
                        </figure>

                        <div class="media">
                          <!-- Product Info -->
                          <div class="d-flex flex-column">
                            <h4 class="h6 g-color-black mb-1">
                              <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                  {{$featured->name}}
                              </a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">
                                {{$category->name}}
                            </a>
                            <span class="d-block g-color-black g-font-size-17">{{number_format($featured->price->price)}} TZS</span>
                          </div>
                          <!-- End Product Info -->

                          <!-- Products Icons -->
                          <ul class="list-inline media-body text-right">
                            <li class="list-inline-item align-middle mx-0">
                              <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                 href="{{route('add_to_cart',[$product->id])}}"
                                 data-toggle="tooltip"
                                 data-placement="top"
                                 title="Add to Cart">
                                <i class="icon-finance-100 u-line-icon-pro"></i>
                              </a>
                            </li>
                            <li class="list-inline-item align-middle mx-0">
                              <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                                 data-toggle="tooltip"
                                 data-placement="top"
                                 title="Add to Wishlist">
                                <i class="icon-medical-022 u-line-icon-pro"></i>
                              </a>
                            </li>
                          </ul>
                          <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                      </div>
                    @endif
                @endforeach
            @endforeach

          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="{{url('/')}}/assets/img-temp/480x700/img2.jpg" alt="Image Description">

              <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Stylish shirt
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                <span class="d-block g-color-black g-font-size-17">$99.00</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Wishlist">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
              <!-- End Products Icons -->
            </div>
            <!-- End Product -->
          </div>

          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="{{url('/')}}/assets/img-temp/480x700/img3.jpg" alt="Image Description">

              <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</a>
              </figcaption>
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Classic jacket
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                <span class="d-block g-color-black g-font-size-17">$49.99</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Wishlist">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
              <!-- End Products Icons -->
            </div>
            <!-- End Product -->
          </div>

          <div class="col-6 col-lg-3 g-mb-30">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" src="{{url('/')}}/assets/img-temp/480x700/img4.jpg" alt="Image Description">
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    Wool lined parka
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                <span class="d-block g-color-black g-font-size-17">$82.37</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Cart">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Add to Wishlist">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
              <!-- End Products Icons -->
            </div>
            <!-- End Product -->
          </div>
        </div>
        <!-- End Products -->
      </div>
      <!-- End Products -->
@endsection
