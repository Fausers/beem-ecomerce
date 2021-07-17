@extends('layouts.com')

@section('template_title')
    {{ Auth::user()->name }}'s' Homepage
@endsection

@section('template_fastload_css')
@endsection

@section('content')
<!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Your Orders</h1>
            </div>

            <div class="align-self-center ml-auto">
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
                  <span>Your Orders</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <div class="container g-pt-70 g-pb-30">
        <div class="row">
          <!-- Profile Settings -->
          @include('pages.user.includes.menu')
          <!-- End Profile Settings -->

          <!-- Orders -->
          <div class="col-lg-9 g-mb-50">
            <div class="row justify-content-end g-mb-20 g-mb-0--md">
              <div class="col-md-7 g-mb-30">
                <!-- Search Form -->
                <form class="input-group g-pos-rel">
                  <span class="g-pos-abs g-top-0 g-left-0 g-z-index-3 g-px-13 g-py-10">
                    <i class="g-color-gray-dark-v4 g-font-size-12 icon-education-045 u-line-icon-pro"></i>
                  </span>
                  <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-left-5 g-pl-35 g-pa-0" type="search" placeholder="Search all orders">
                  <div class="input-group-append g-brd-none g-py-0">
                    <button class="btn u-btn-black g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Search Orders</button>
                  </div>
                </form>
                <!-- End Search Form -->
              </div>
            </div>

            <!-- Links -->
            <ul class="list-inline g-brd-bottom--sm g-brd-gray-light-v3 mb-5">
              <li class="list-inline-item g-pb-10 g-pr-10 g-mb-20 g-mb-0--sm">
                <a class="g-brd-bottom g-brd-2 g-brd-primary g-color-main g-color-black g-font-weight-600 g-text-underline--none--hover g-px-10 g-pb-13" href="{{route('orders')}}">Orders</a>
              </li>
              <li class="list-inline-item g-pb-10 g-px-10 g-mb-20 g-mb-0--sm">
                <a class="g-brd-bottom g-brd-2 g-brd-transparent g-color-main g-color-gray-dark-v4 g-color-primary--hover g-text-underline--none--hover g-px-10 g-pb-13" href="{{route('open_orders')}}">Open Orders</a>
              </li>
              <li class="list-inline-item g-pb-10 g-pl-10 g-mb-20 g-mb-0--sm">
                <a class="g-brd-bottom g-brd-2 g-brd-transparent g-color-main g-color-gray-dark-v4 g-color-primary--hover g-text-underline--none--hover g-px-10 g-pb-13" href="{{route('cancelled_orders')}}">Cancelled Orders</a>
              </li>
            </ul>
            <!-- End Links -->

            <div class="mb-5">
              <h3 class="h6 d-inline-block">2 orders <span class="g-color-gray-dark-v4 g-font-weight-400">placed in</span></h3>

              <!-- Secondary Button -->
              <div class="d-inline-block btn-group u-shadow-v19 ml-2">
                <button type="button" class="btn u-btn-black dropdown-toggle h6 align-middle g-brd-none g-color-black g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-weight-300 g-font-size-12 g-py-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  past 6 months
                </button>
                <div class="dropdown-menu rounded-0 g-font-size-12">
                  <a class="dropdown-item g-color-black g-font-weight-300" href="#!">last 30 days</a>
                  <a class="dropdown-item g-color-black g-bg-gray-light-v5 g-font-weight-300" href="#!">past 6 months</a>
                  <a class="dropdown-item g-color-black g-font-weight-300" href="#!">2021</a>
                  <a class="dropdown-item g-color-black g-font-weight-300" href="#!">2020</a>
                </div>
              </div>
              <!-- End Secondary Button -->
            </div>

              @foreach(Auth::user()->orders->reverse() as $order)
            <!-- Order Block -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-mb-30">
              <header class="g-bg-gray-light-v5 g-pa-20">
                <div class="row">
                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Order Placed</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">{{date('M d, Y',strtotime($order->created_at))}}</span>
                  </div>

                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Total</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">{{number_format($order->price)}} TSH</span>
                  </div>

                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Ship to</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">{{$order->name}}</span>
                  </div>

                  <div class="col-sm-3 col-md-4 ml-auto text-sm-right">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">
                        Order # {{$order->company_ref}}</h4>
                    <a class="g-font-weight-300 g-font-size-13" href="#!">Invoice</a>
                  </div>
                </div>
              </header>

                @foreach($order->cart->items as $item)
              <!-- Order Content -->
              <div class="g-pa-20">
                <div class="row">
                  <div class="col-md-8">
                    <div class="mb-4">
                      <h3 class="h5 mb-1">Delivered</h3>
                      <p class="g-color-gray-dark-v4 g-font-size-13">Your package was delivered per the instructions.</p>
                    </div>

                    <div class="row">
                      <div class="col-4 col-sm-3 g-mb-30">
                        <img class="img-fluid" src="{{url('/'.$item->product->image->path)}}" alt="Image Description">
                      </div>

                      <div class="col-8 col-sm-9 g-mb-30">
                        <h4 class="h6 g-font-weight-400"><a href="#!">{{$item->product->name}} x {{$item->quantity}}</a></h4>
                        <span class="d-block g-color-gray-dark-v4 g-font-size-13 mb-2">Sold by: {{$item->product->shop->name}}</span>
                        <span class="d-block g-color-lightred mb-2">{{number_format($item->total_price)}} TSH</span>
                        <a class="btn g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-13 rounded g-px-18 g-py-7"
                           href="{{route('add_to_cart',[$item->product->id])}}">Buy it Again</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <a class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 mb-4" href="#!">Track Package</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Return Item</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Leave Package Feedback</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Write a Product Review</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Archive Order</a>
                  </div>
                </div>
              </div>
              <!-- End Order Content -->
                    @endforeach
            </div>
            <!-- End Order Block -->
              @endforeach



            <!-- Pagination -->
            <nav class="g-mt-100" aria-label="Page Navigation">
              <ul class="list-inline mb-0">
                <li class="list-inline-item hidden-down">
                  <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="#!">1</a>
                </li>
                <li class="list-inline-item hidden-down">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">2</a>
                </li>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="#!" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <li class="list-inline-item float-right">
                  <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of 2</span>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->
          </div>
          <!-- Orders -->
        </div>
      </div>
@endsection

@section('footer_scripts')
@endsection
