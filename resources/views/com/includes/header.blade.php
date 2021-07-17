<!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-bg-black g-transition-0_3">
          <div class="container">
            <div class="row justify-content-between align-items-center g-mx-0--lg">
              <div class="col-sm-auto g-hidden-sm-down">
                <!-- Social Icons -->
                <ul class="list-inline g-py-14 mb-0">
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3" target="_blank"
                       href="https://web.facebook.com/Diywithnanzy-102358425305929">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>

                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-3"
                       target="_blank" href="https://www.instagram.com/entityskin/">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>

                </ul>
                <!-- End Social Icons -->
              </div>

              <div class="col-sm-auto g-hidden-sm-down g-color-white-opacity-0_6 g-font-weight-400 g-pl-15 g-pl-0--sm g-py-14">
                <i class="icon-communication-163 u-line-icon-pro g-font-size-18 g-valign-middle g-color-white-opacity-0_8 g-mr-10 g-mt-minus-2"></i>
                <a href="tel:+255753432505"> +255 753 432 505</a>
              </div>


              <div class="col-sm-auto g-pos-rel g-py-14">
                <!-- List -->
                <ul class="list-inline g-overflow-hidden g-pt-1 g-mx-minus-4 mb-0">
                  <li class="list-inline-item g-mx-4">
                    <a class=" g-font-weight-400 g-text-underline--none--hover"
                        href="{{route('stores')}}">Our Stores</a>
                  </li>

                  <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                  <li class="list-inline-item g-mx-4">
                    <a class=" g-font-weight-400 g-text-underline--none--hover" href="{{route('terms')}}">Help</a>
                  </li>

                  <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                  <!-- Account -->
                  <li class="list-inline-item">
                    <a id="account-dropdown-invoker-2" class=" g-font-weight-400 g-text-underline--none--hover"
                       href="{{route('account')}}"

                       data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut">
                      Account @if(!isset(Auth::user()->id)) / Login @endif
                    </a>

                  </li>
                    @if(Auth::user())
                    <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                  <li class="list-inline-item g-mx-4">
                    <a class=" g-font-weight-400 g-text-underline--none--hover"
                       href="{{route('logout')}}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
                    @endif
                  <!-- End Account -->
                </ul>
                <!-- End List -->
              </div>

              <div class="col-sm-auto g-pr-15 g-pr-0--sm">
                <!-- Basket -->
                  @php
                      if(isset(App\Models\Com\Cart::where('session_id','=',Session::getId())->first()->id)){
                                $cart = App\Models\Com\Cart::where('session_id','=',Session::getId())->first();
                            }elseif(isset(Auth::user()->id)){
                                $cart = App\Models\Com\Cart::where('user_id','=',Auth::user()->id)->first();
                            }
                        @endphp
                <div class="u-basket d-inline-block g-z-index-3">
                  <div class="g-py-10 g-px-6">
                    <a href="{{route('checkout')}}" id="basket-bar-invoker" class="u-icon-v1 g-color-white-opacity-0_8 g-color-primary--hover g-font-size-17 g-text-underline--none--hover"
                       aria-controls="basket-bar"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-dropdown-event="hover"
                       data-dropdown-target="#basket-bar"
                       data-dropdown-type="css-animation"
                       data-dropdown-duration="300"
                       data-dropdown-hide-on-scroll="false"
                       data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut">
                      <span class="u-badge-v1--sm g-color-white g-bg-primary g-font-size-11 g-line-height-1_4 g-rounded-50x g-pa-4" style="top: 7px !important; right: 3px !important;">
                          @if(isset($cart->id))
                              {{count($cart->items)}}
                          @else
                              0
                          @endif
                      </span>
                      <i class="icon-hotel-restaurant-105 u-line-icon-pro"></i>
                    </a>
                  </div>

                  <div id="basket-bar" class="u-basket__bar u-dropdown--css-animation u-dropdown--hidden g-text-transform-none g-bg-white g-brd-around g-brd-gray-light-v4"
                       aria-labelledby="basket-bar-invoker">
                    <div class="g-brd-bottom g-brd-gray-light-v4 g-pa-15 g-mb-10">
                      <span class="d-block h6 text-center text-uppercase mb-0">Shopping Cart</span>
                    </div>
                        @if(isset($cart->id))
                    <div class="js-scrollbar g-height-200">

                        @foreach($cart->items as $item)
                          <!-- Product -->
                          <div class="u-basket__product g-brd-none g-px-20">
                            <div class="row no-gutters g-pb-5">
                              <div class="col-4 pr-3">
                                <a class="u-basket__product-img" href="{{route('product',[$item->product->id,$item->product->name])}}">
                                  <img class="img-fluid" src="{{config('app.sstore').Storage::url($item->product->image->path)}}" alt="Image Description">
                                </a>
                              </div>

                              <div class="col-8">
                                <h6 class="g-font-weight-400 g-font-size-default">
                                  <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                     href="#!">
                                      {{$item->product->name}}
                                  </a>
                                </h6>
                                <small class="g-color-primary g-font-size-12">{{($item->quantity)}} x {{number_format($item->product->price->price)}} TSH</small>
                              </div>
                            </div>
                            <button type="button" class="u-basket__product-remove">&times;</button>
                          </div>
                          <!-- End Product -->
                        @endforeach

                    </div>

                    <div class="clearfix g-px-15">
                      <div class="row align-items-center text-center g-brd-y g-brd-gray-light-v4 g-font-size-default">
                        <div class="col g-brd-right g-brd-gray-light-v4">
                          <strong class="d-block g-py-10 text-uppercase g-color-main g-font-weight-500 g-py-10">Total</strong>
                        </div>
                        <div class="col">
                          <strong class="d-block g-py-10 g-color-main g-font-weight-500 g-py-10">{{number_format($cart->total_price)}} TSH</strong>
                        </div>
                      </div>
                    </div>
                      @else
                            <div class="js-scrollbar g-height-200">
                      <div class="text-center g-pt-40">
                        <span class="d-block g-color-gray-light-v1 g-font-size-30">
                          <i class="icon-hotel-restaurant-105 u-line-icon-pro"></i>
                        </span>
                        <span class="d-block g-color-text g-font-size-15">Your cart is currently empty</span>
                        <a href="{{route('grid')}}">Continue Shopping</a>
                      </div>
                    </div>

                    <div class="clearfix g-px-15">
                      <div class="row align-items-center text-center g-brd-y g-brd-gray-light-v4 g-font-size-default">
                        <div class="col g-brd-right g-brd-gray-light-v4">
                          <strong class="d-block g-py-10 text-uppercase g-color-main g-font-weight-500 g-py-10">Total</strong>
                        </div>
                        <div class="col">
                          <strong class="d-block g-py-10 g-color-main g-font-weight-500 g-py-10">0 TSH</strong>
                        </div>
                      </div>
                    </div>
                      @endif

                    <div class="g-pa-20">
                      <div class="text-center g-mb-15">
                        <a class="text-uppercase g-color-primary g-color-main--hover g-font-weight-400 g-font-size-13 g-text-underline--none--hover"
                           href="{{route('checkout')}}">
                          View Cart
                          <i class="ml-2 icon-finance-100 u-line-icon-pro"></i>
                        </a>
                      </div>
                      <a class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover g-font-size-12 text-uppercase rounded g-py-10"
                         href="{{route('checkout')}}">Proceed to Checkout</a>
                    </div>
                  </div>
                </div>
                <!-- End Basket -->

                <!-- Search -->
                <div class="d-inline-block g-valign-middle">
                  <div class="g-py-10 g-pl-15">
                    <a href="#!" class="g-color-white-opacity-0_8 g-color-primary--hover g-font-size-17 g-text-underline--none--hover"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-dropdown-event="click"
                       aria-controls="searchform-1"
                       data-dropdown-target="#searchform-1"
                       data-dropdown-type="css-animation"
                       data-dropdown-duration="300"
                       data-dropdown-animation-in="fadeInUp"
                       data-dropdown-animation-out="fadeOutDown">
                      <i class="g-pos-rel g-top-3 icon-education-045 u-line-icon-pro"></i>
                    </a>
                  </div>

                  <!-- Search Form -->
                  <form id="searchform-1" class="u-searchform-v1 u-dropdown--css-animation u-dropdown--hidden u-shadow-v20 g-brd-around g-brd-gray-light-v4 g-bg-white g-right-0 rounded g-pa-10 1g-mt-8">
                    <div class="input-group">
                      <input class="form-control g-font-size-13" type="search" placeholder="Search Here...">
                      <div class="input-group-append p-0">
                        <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-13 g-px-15" type="submit">Go</button>
                      </div>
                    </div>
                  </form>
                  <!-- End Search Form -->
                </div>
                <!-- End Search -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-expand-lg">
            <div class="container">
              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pr-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Logo -->
              <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('/')}}/assets/img/logo/logo-1.png" style="max-height: 60px" alt="Image Description">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row g-pt-15 g-pt-0--lg">
                <ul class="navbar-nav ml-auto">

                @foreach(\App\Models\Com\Category::where('category_id',null)->get() as $category)

                    <!-- Categories - Mega Menu -->
                    <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-3" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20" href="#!" aria-haspopup="true" aria-expanded="false">
                      {{$category->name}}
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                    </a>


                    <!-- Mega Menu -->
                    <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-pa-30 g-mt-17" aria-labelledby="mega-menu-label-3">
                      <div class="row">
                          @foreach($category->categories as $sub_categ)
                            <div class="col-sm-6 col-lg-4 g-mb-30 g-mb-0--md">
                              <!-- Links -->
                              <div class="mb-5">
                                <span class="d-block g-font-weight-500 text-uppercase mb-2">{{$sub_categ->name}}</span>

                                <ul class="list-unstyled">
                                    @foreach($sub_categ->categories as $categ)
                                      <li>
                                        <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                           href="{{route('category',[$categ->name])}}">{!! $categ->name !!}</a>
                                      </li>
                                    @endforeach
                                </ul>
                              </div>
                              <!-- End Links -->

                            </div>
                          @endforeach
                        <div class="col-md-6 col-lg-4 g-mb-30 g-mb-0--md">
                          <article class="g-pos-rel">
                            <img class="img-fluid" src="{{config('app.sstore').Storage::url($category->image)}}" alt="Image Description">


                          </article>
                        </div>

                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                        <!-- End Categories - Mega Menu -->
                    @if($loop->first)
                            <!-- Products - Submenu -->
                    <li class="nav-item g-ml-10--lg g-mx-15--xl">
                        <a class="nav-link text-uppercase g-color-primary--hover g-pl-5 g-pr-0 g-py-20"
                           href="{{route('grid')}}">All Products</a>
                    </li>
                    <!-- End Products - Submenu -->
                    @endif
                @endforeach

                    <!-- Products - Submenu -->
                    <li class="nav-item g-ml-10--lg g-mx-15--xl">
                        <a class="nav-link text-uppercase g-color-primary--hover g-pl-5 g-pr-0 g-py-20"
                           href="{{route('tips')}}">Tips & Guide</a>
                    </li>
                    <!-- End Products - Submenu -->



                </ul>
              </div>
              <!-- End Navigation -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->
