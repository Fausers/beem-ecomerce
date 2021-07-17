<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/e-commerce/page-checkout-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:28:59 GMT -->
<head>
    <!-- Title -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

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
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-line/css/simple-line-icons.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/chosen/chosen.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/css/custom.css">
    @include('scripts.ga-analytics')

    <link rel='stylesheet' href='https://checkout.beem.africa/dist/0.1_alpha/bpay.min.css'>
    <script> src='https://checkout.beem.africa/dist/0.1_alpha/bpay.min.js' </script>
     @livewireStyles
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
              <a class="u-link-v5 g-color-text" href="#!">Pages</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>Checkout </span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Checkout Form -->
      <div class="container g-pt-100 g-pb-70">
        <form wire:submit.prevent="apply" class="js-validate js-step-form" data-progress-id="#stepFormProgress" data-steps-id="#stepFormSteps">
          <div class="g-mb-100">
            <!-- Step Titles -->
            <ul id="stepFormProgress" class="js-step-progress row justify-content-center list-inline text-center g-font-size-17 mb-0">
              <li data-next-step="#step1" class="col-3 list-inline-item g-mb-20 g-mb-0--sm">
                <span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-primary g-color-primary g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
                  <i class="g-font-style-normal g-font-weight-700 g-hide-check">1</i>
                  <i class="fa fa-check g-show-check"></i>
                </span>
                <h4 class="g-font-size-16 text-uppercase mb-0">Shopping Cart</h4>
              </li>

              <li data-next-step="#step2" class="col-3 list-inline-item g-mb-20 g-mb-0--sm">
                <span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
                  <i class="g-font-style-normal g-font-weight-700 g-hide-check">2</i>
                  <i class="fa fa-check g-show-check"></i>
                </span>
                <h4 class="g-font-size-16 text-uppercase mb-0" >Shipping</h4>
              </li>

              <li class="col-3 list-inline-item">
                <span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
                  <i class="g-font-style-normal g-font-weight-700 g-hide-check">3</i>
                  <i class="fa fa-check g-show-check"></i>
                </span>
                <h4 class="g-font-size-16 text-uppercase mb-0">Payment &amp; Review</h4>
              </li>
            </ul>
            <!-- End Step Titles -->
          </div>

          <div id="stepFormSteps">
            <!-- Shopping Cart -->
            <div id="step1" class="active">
              <div class="row">
                <div class="col-md-8 g-mb-30">
                  <!-- Products Block -->
                  <div class="g-overflow-x-scroll g-overflow-x-visible--lg">
                    <table class="text-center w-100">
                      <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-black text-uppercase">
                        <tr>
                          <th class="g-font-weight-400 text-left g-pb-20">Product</th>
                          <th class="g-font-weight-400 g-width-130 g-pb-20">Price</th>
                          <th class="g-font-weight-400 g-width-50 g-pb-20">Qty</th>
                          <th class="g-font-weight-400 g-width-130 g-pb-20">Total</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                          @foreach($cart->items as $item)
                                <!-- Item-->
                                <tr @if(!$loop->last)  class="g-brd-bottom g-brd-gray-light-v3"@endif>
                                    <td class="text-left g-py-25">
                                        <img class="d-inline-block g-width-100 mr-4" src="{{config('app.sstore').Storage::url($item->product->image->path)}}" alt="Image Description">
                                        <div class="d-inline-block align-middle">
                                            <h4 class="h6 g-color-black">{{($item->product->name)}} TSH</h4>
                                            <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                                                <li>Color: Black</li>
                                                <li>Size: MD</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="g-color-gray-dark-v2 g-font-size-13">{{number_format($item->price)}} TSH</td>
                                    @livewire('com.livecart', ['item_id' => $item->id,'qty' => $item->quantity,'item_price' => $item->price,'total_price' => $item->total_price])

                                    <td class="text-right g-color-black">
                                        <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">
                                            @livewire('com.item-total', ['total_price' => $item->total_price,'item_id' => $item->id])
                                        </span>
                                        <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                                            <i class="mt-auto fa fa-trash"></i>
                                        </span>
                                    </td>



                                </tr>
                                <!-- End Item-->
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- End Products Block -->
                </div>

                <div class="col-md-4 g-mb-30">
                  <!-- Summary -->
                  <div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
                    <h4 class="h6 text-uppercase mb-3">Summary</h4>

                    <!-- Accordion -->
{{--                    <div id="accordion-01" class="mb-4" role="tablist" aria-multiselectable="true">--}}
{{--                      <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v2 py-3" role="tab">--}}
{{--                        <h5 class="g-font-weight-400 g-font-size-default mb-0">--}}
{{--                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Estimate shipping--}}
{{--                            <span class="ml-3 fa fa-angle-down"></span></a>--}}
{{--                        </h5>--}}
{{--                      </div>--}}
{{--                      <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">--}}
{{--                        <div class="g-py-10">--}}
{{--                          <div class="mb-3">--}}
{{--                            <label class="d-block g-color-gray-dark-v2 g-font-size-13">Country</label>--}}
{{--                            <input id="inputGroup1" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="country" type="text" placeholder="United Kingdom" required>--}}
{{--                          </div>--}}
{{--                          <div class="mb-3">--}}
{{--                            <label class="d-block g-color-gray-dark-v2 g-font-size-13">State/Province</label>--}}
{{--                            <input id="inputGroup2" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="stateProvince" type="text" placeholder="London" required>--}}
{{--                          </div>--}}
{{--                          <label class="d-block g-color-gray-dark-v2 g-font-size-13">ZIP/Postal Code</label>--}}
{{--                          <input id="inputGroup3" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="zip" type="text" placeholder="e.g. AB123" required>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
                    <!-- End Accordion -->

                    <div class="d-flex justify-content-between mb-2">
                      <span class="g-color-black">Subtotal</span>
                      @livewire('com.sub-total', ['sub_total' => $cart->sub_total,'cart_id' => $cart->id])
                    </div>

                    @livewire('com.coupon', ['cart_id' => $cart->id])


                    <div class="d-flex justify-content-between">
                      <span class="g-color-black">Order Total</span>
                      @livewire('com.total-price', ['total_price' => $cart->total_price,'cart_id' => $cart->id])
                    </div>
                  </div>
                  <!-- End Summary -->

{{--                  <button class="btn btn-block u-btn-outline-black g-brd-gray-light-v1 g-bg-black--hover g-font-size-13 text-uppercase g-py-15 mb-4" type="button">Update Shopping Cart</button>--}}
                  @if(isset(Auth::user()->id))
                    <button class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-4"
                          type="button" data-next-step="#step2">Proceed to Checkout</button>
                    @else
                      <a class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-4"
                          href="{{route('login')}}" >Proceed to Checkout</a>
                    @endif
                  <a class="d-inline-block g-color-black g-color-primary--hover g-text-underline--none--hover mb-3" href="#!">
                    <i class="mr-2 fa fa-info-circle"></i>Delivery
                  </a>

                  <!-- Accordion -->
                  <livewire:com.apply-coupon />
                  <!-- End Accordion -->
                </div>
              </div>
            </div>
            <!-- End Shopping Cart -->

            <!-- Shipping -->
            <div id="step2">
              <div class="row">
                <div class="col-md-8 g-mb-30">
                      <h2> Shipping Address</h2>
                    <hr>
                    <div class="row">
                        @if(isset(Auth::user()->id))
                   @foreach(Auth::user()->addresses as $address)
                      <div class="col-md-6 g-mb-30 col-md-6">
                        <!-- Addresses -->
                        <div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30">
                          <div class="g-mb-50">
                            <h3 class="h5 mb-3">Address {{$loop->iteration}}
                                @if($address->status == 1)
                                <label class="u-ribbon-v1 g-color-white g-bg-primary rounded ml-3"> Default </label>
                                @endif
                            </h3>
                            <span class="d-block g-color-gray-dark-v3 g-font-weight-600 mb-2">{{$address->name}}</span>

                            <!-- Address -->
                            <address class="media">
                              <div class="d-flex mr-3">
                                <span class="u-icon-v1 g-color-gray-dark-v4"><i class="icon-real-estate-027 u-line-icon-pro"></i></span>
                              </div>

                              <div class="media-body g-color-text">
                                {{$address->region}}
                                <br>
                                {{$address->district}}
                                <br>
                                {{$address->ward}}
                                <br>
                                {{$address->plot}}
                                <br>
                              </div>
                            </address>
                            <!-- End Address -->

                            <!-- Phone -->
                            <div class="media">
                              <div class="d-flex mr-3">
                                <span class="u-icon-v1 g-color-gray-dark-v4"><i class="icon-electronics-005 u-line-icon-pro"></i></span>
                              </div>
                              <div class="media-body g-color-text">
                                {{$address->phone}}
                              </div>
                            </div>
                            <!-- End Phone -->
                          </div>

                          <!-- Edit/Delete -->
                          <ul class="d-flex align-items-center list-inline mb-0">
                            <li class="list-inline-item">
                              <a class="u-icon-v1 g-font-size-16 g-text-underline--none--hover"
                                 href="{{route('default_address',[$address->id])}}" title="Set Default"
                                 data-toggle="tooltip"
                                 data-placement="top">
                                <i class="icon-finance-023 u-line-icon-pro"></i>
                              </a>
                            </li>
                            <li class="list-inline-item g-width-1 g-height-16 g-bg-gray-light-v2 g-pr-1 ml-2 mr-3"></li>
                            <li class="list-inline-item">
                              <a class="u-icon-v1 g-font-size-16 g-text-underline--none--hover"
                                 href="{{route('delete_address',[$address->id])}}" title="Delete"
                                 data-toggle="tooltip"
                                 data-placement="top">
                                <i class="icon-hotel-restaurant-214 u-line-icon-pro"></i>
                              </a>
                            </li>
                          </ul>
                          <!-- End Edit/Delete -->
                        </div>
                        <!-- End Addresses -->
                      </div>
                @endforeach
                        @endif
                    </div>
                    <!-- Contact Form -->
                    @livewire('com.add-address', ['total_price' => $item->total_price,'item_id' => $item->id])




                </div>

                <div class="col-md-4 g-mb-30">
                  <!-- Order Summary -->
                  <div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
                    <h4 class="h6 text-uppercase mb-3">Order summary</h4>

                    <!-- Accordion -->
                    <div id="accordion-03" class="mb-4" role="tablist" aria-multiselectable="true">
                      <div id="accordion-03-heading-03" class="g-brd-y g-brd-gray-light-v2 py-3" role="tab">
                        <h5 class="g-font-weight-400 g-font-size-default mb-0">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#accordion-03-body-03" data-toggle="collapse" data-parent="#accordion-03" aria-expanded="false" aria-controls="accordion-03-body-03">{{count($cart->items)}} items in cart
                            <span class="ml-3 fa fa-angle-down"></span></a>
                        </h5>
                      </div>
                      <div id="accordion-03-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-03-heading-03">
                        <div class="g-py-15">
                          <ul class="list-unstyled mb-3">
                              @foreach($cart->items as $item)
                            <!-- Product -->
                            <li class="d-flex justify-content-start @if(!$loop->first) g-brd-top g-brd-gray-light-v3 pt-4 mt-4   @endif ">
                              <img class="g-width-100 g-height-100 mr-3" src="{{config('app.sstore').Storage::url($item->product->image->path)}}" alt="Image Description">
                              <div class="d-block">
                                <h4 class="h6 g-color-black">{{$item->product->name}}</h4>
                                <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_4 mb-1">
                                  <li>Color: Black</li>
                                  <li>Size: MD</li>
                                  <li>QTY: {{($item->quantity)}}</li>
                                </ul>
                                <span class="d-block g-color-black g-font-weight-400">@livewire('com.item-total', ['total_price' => $item->total_price,'item_id' => $item->id])</span>
                              </div>
                            </li>
                            <!-- End Product -->
                              @endforeach
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Accordion -->

                    <div class="d-flex justify-content-between mb-2">
                      <span class="g-color-black">Subtotal</span>
                      <span class="g-color-black g-font-weight-300">@livewire('com.sub-total', ['total_price' => $cart->total_price,'cart_id' => $cart->id])</span>
                    </div>
                    <div class="d-flex justify-content-between">
                      <span class="g-color-black">Order Total</span>
                      <span class="g-color-black g-font-weight-300">@livewire('com.sub-total', ['total_price' => $cart->total_price,'cart_id' => $cart->id])</span>
                    </div>
                  </div>
                  <!-- End Order Summary -->

                     @if(isset(Auth::user()->address))
                    <button class="btn u-btn-primary g-font-size-13 text-uppercase g-px-40 g-py-15"
                          type="button" data-next-step="#step3">Proceed to Payment</button>
                    @endif
                </div>
              </div>
            </div>
            <!-- End Shipping -->

            <!-- Payment & Review -->
            <div id="step3">
              <div class="row">
                <div class="col-md-8 g-mb-30">
                  <!-- Payment Methods -->
                  <livewire:com.payment-method />
                  <!-- End Payment Methods -->

                  <!-- Alert -->
                  <div class="alert g-brd-around g-brd-gray-dark-v5 rounded-0 g-pa-0 mb-4" role="alert">
                    <div class="media">
                      <div class="d-flex g-brd-right g-brd-gray-dark-v5 g-pa-15">
                        <span class="u-icon-v1 u-icon-size--xs g-color-black">
                          <i class="align-middle icon-media-065 u-line-icon-pro"></i>
                        </span>
                      </div>
                      <div class="media-body g-pa-15">
                        <p class="g-color-black m-0">My billing and shipping address are the correct</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Alert -->

                  <!-- Shipping Details -->
{{--                    Beam Divs--}}
                    <div id='beem-button' data-price='2000' data-reference='SAMPLE-12345' data-mobile='255701000000'></div>
                    <div id='beem-page' class='beem-page'></div>


                  <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-15 g-pl-70 mb-5">
                    <li class="g-my-3">Chester Ryan</li>
                    <li class="g-my-3">chester@gmail.com</li>
                    <li class="g-my-3">Dar es salaam </li>
                    <li class="g-my-3">Kinondoni</li>
                    <li class="g-my-3">+255 765 204 506</li>
                  </ul>
                  <!-- End Shipping Details -->

                  @livewire('com.payment')

                  <!-- Accordion -->
                  <div id="accordion-04" class="g-max-width-300" role="tablist" aria-multiselectable="true">
                    <div id="accordion-04-heading-04" role="tab">
                      <h5 class="h6 text-uppercase mb-0">
                        <a class="g-color-black g-text-underline--none--hover" href="#accordion-04-body-04" data-toggle="collapse" data-parent="#accordion-04" aria-expanded="false" aria-controls="accordion-04-body-04">Apply discount code
                          <span class="ml-3 fa fa-angle-down"></span></a>
                      </h5>
                    </div>
                    <div id="accordion-04-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-04-heading-04">
                      <div class="input-group rounded g-pt-15">
                        <input class="form-control g-brd-gray-light-v1 g-brd-right-none g-color-gray-dark-v3 g-placeholder-gray-dark-v3" type="email" placeholder="Enter discount code">
                        <span class="input-group-append g-brd-gray-light-v1 g-bg-white">
                          <button class="btn u-btn-primary" type="submit">Apply</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion -->
                </div>

                <div class="col-md-4 g-mb-30">
                  <!-- Order Summary -->
                  <div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
                    <div class="g-brd-bottom g-brd-gray-light-v3 g-mb-15">
                      <h4 class="h6 text-uppercase mb-3">Order summary</h4>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                      <span class="g-color-black">Cart Subtotal</span>
                      <span class="g-color-black g-font-weight-300">@livewire('com.sub-total', ['total_price' => $cart->total_price,'cart_id' => $cart->id])</span>
                    </div>
                    <div class="mb-3">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="g-color-black">Shipping</span>
                        <span class="g-color-black g-font-weight-300">00 TSH</span>
                      </div>
                      <p class="g-font-size-13">Tanzania Standard Delivery - 2-3 Working Days</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                      <span class="g-color-black">Order Total</span>
                      <span class="g-color-black g-font-weight-300">@livewire('com.sub-total', ['total_price' => $cart->total_price,'cart_id' => $cart->id])</span>
                    </div>

                    <!-- Accordion -->
                    <div id="accordion-05" class="mb-4" role="tablist" aria-multiselectable="true">
                      <div id="accordion-05-heading-05" class="g-brd-y g-brd-gray-light-v2 py-3" role="tab">
                        <h5 class="g-font-weight-400 g-font-size-default mb-0">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#accordion-05-body-05" data-toggle="collapse" data-parent="#accordion-05" aria-expanded="false" aria-controls="accordion-05-body-05">{{count($cart->items)}} items in cart
                            <span class="ml-3 fa fa-angle-down"></span></a>
                        </h5>
                      </div>
                      <div id="accordion-05-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-05-heading-05">
                        <div class="g-py-15">
                          <ul class="list-unstyled mb-3">
                              @foreach($cart->items as $item)
                            <!-- Product -->
                            <li class="d-flex justify-content-start @if(!$loop->first) g-brd-top g-brd-gray-light-v3 pt-4 mt-4   @endif ">
                              <img class="g-width-100 g-height-100 mr-3" src="{{config('app.sstore').Storage::url($item->product->image->path)}}" alt="Image Description">
                              <div class="d-block">
                                <h4 class="h6 g-color-black">{{$item->product->name}}</h4>
                                <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_4 mb-1">
                                  <li>Color: Black</li>
                                  <li>Size: MD</li>
                                  <li>QTY: {{($item->quantity)}}</li>
                                </ul>
                                <span class="d-block g-color-black g-font-weight-400">@livewire('com.item-total', ['total_price' => $item->total_price,'item_id' => $item->id])</span>
                              </div>
                            </li>
                            <!-- End Product -->
                              @endforeach
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Accordion -->
                  </div>
                  <!-- End Order Summary -->

                  <!-- Ship To -->
                  <div class="g-px-20 mb-5">
                    <div class="d-flex justify-content-between g-brd-bottom g-brd-gray-light-v3 g-mb-15">
                      <h4 class="h6 text-uppercase mb-3">Ship to</h4>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="fa fa-pencil"></i>
                      </span>
                    </div>
                    <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-15">
                                    <a onclick="f('Weeee')" >AA</a>
                        <li class="g-my-3">Chester Ryan</li>
                        <li class="g-my-3">chester@gmail.com</li>
                        <li class="g-my-3">Dar es salaam </li>
                        <li class="g-my-3">Kinondoni</li>
                        <li class="g-my-3">+255 765 204 506</li>
                    </ul>
                  </div>
                  <!-- End Ship To -->

                  <!-- Shipping Method -->
                  <div class="g-px-20 mb-5">
                    <div class="d-flex justify-content-between g-brd-bottom g-brd-gray-light-v3 g-mb-15">
                      <h4 class="h6 text-uppercase mb-3">Shipping Method</h4>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="fa fa-pencil"></i>
                      </span>
                    </div>
                    <p class="g-color-gray-dark-v4 g-font-size-15">UK Standard Delivery - 2-3 Working Days</p>
                  </div>
                  <!-- End Shipping Method -->
                </div>
              </div>
            </div>
            <!-- End Payment & Review -->
          </div>
        </form>
      </div>
      <!-- End Checkout Form -->

      <!-- Call to Action -->
      @include('com.includes.promo_block')
      <!-- End Call to Action -->

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

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('com.includes.notification')
    <script>
            function f(x) {
                Swal.fire({
                    position:"top-right",
                    icon:"success",
                    title: x,
                    showConfirmButton:!1,
                    timer:2000
                    }
                )
            }
    </script>

    <!-- JS Global Compulsory -->
    <script src="{{url('/')}}/main_assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/popper.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/chosen/chosen.jquery.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/image-select/src/ImageSelect.jquery.js"></script>

    <!-- JS Unify -->
    <script src="{{url('/')}}/main_assets/js/hs.core.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.header.js"></script>
    <script src="{{url('/')}}/main_assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.dropdown.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.scrollbar.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.select.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.count-qty.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.step-form.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.validation.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="{{url('/')}}/main_assets/js/custom.js"></script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K5X3Z3PBWC"></script>
{{--    Beem--}}
     <script type='text/javascript'> InitializeBeem(); </script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
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

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of quantity counter
        $.HSCore.components.HSCountQty.init('.js-quantity');

        // initialization of step form
        $.HSCore.components.HSStepForm.init('.js-step-form');
      });
    </script>
  </body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/e-commerce/page-checkout-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:29:01 GMT -->
</html>
