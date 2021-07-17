@extends('layouts.com')

@section('template_title')
    Open Orders
@endsection

@section('template_fastload_css')
@endsection

@section('content')
      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Open Orders</h1>
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
                  <span>Open Orders</span>
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
                    <button class="btn u-btn-black g-font-size-13 g-px-18 g-py-10" type="submit">Search Orders</button>
                  </div>
                </form>
                <!-- End Search Form -->
              </div>
            </div>

            <!-- Links -->
            <ul class="list-inline g-brd-bottom--sm g-brd-gray-light-v3 mb-5">
              <li class="list-inline-item g-pb-10 g-pr-10 g-mb-20 g-mb-0--sm">
                <a class="g-brd-bottom g-brd-2 g-brd-transparent g-color-main g-color-gray-dark-v4 g-color-primary--hover g-text-underline--none--hover g-px-10 g-pb-13" href="{{route('orders')}}">Orders</a>
              </li>
              <li class="list-inline-item g-pb-10 g-px-10 g-mb-20 g-mb-0--sm">
                <a class="g-brd-bottom g-brd-2 g-brd-primary g-color-main g-color-black g-font-weight-600 g-text-underline--none--hover g-px-10 g-pb-13" href="{{route('open_orders')}}">Open Orders</a>
              </li>
              <li class="list-inline-item g-pb-10 g-pl-10 g-mb-20 g-mb-0--sm">
                <a class="g-brd-bottom g-brd-2 g-brd-transparent g-color-main g-color-gray-dark-v4 g-color-primary--hover g-text-underline--none--hover g-px-10 g-pb-13" href="{{route('cancelled_orders')}}">Cancelled Orders</a>
              </li>
            </ul>
            <!-- End Links -->

            <div class="text-center">
              <p>Looking for an order? All of your orders have shipped. <a href="#!">View all orders</a></p>
            </div>
          </div>
          <!-- End Orders -->
        </div>
      </div>

@endsection

@section('footer_scripts')
@endsection
