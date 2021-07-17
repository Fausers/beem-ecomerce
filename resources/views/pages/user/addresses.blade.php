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
              <h1 class="h3 mb-0">Your Addresses</h1>
            </div>

            <div class="align-self-center ml-auto">
              <ul class="u-list-inline">
                <li class="list-inline-item g-mr-5">
                  <a class="u-link-v5 g-color-text" href="{{url('/')}}">Home</a>
                  <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
                </li>

                <li class="list-inline-item g-color-primary">
                  <span>Addresses</span>
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

          <!-- Addresses -->
          <div class="col-lg-9 g-mb-50">
            <div class="row">
                @foreach($addresses as $address)
              <div class="col-md-6 g-mb-30">
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
            </div>

            <!-- Contact Form -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-30">
              <h3 class="h5 mb-3">Add Address</h3>

              <form method="POST" action="{{route('store_address')}}">
                  @csrf
                <div class="row">
                    <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Full name</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
                           type="text" placeholder="Recipient Name" name="name">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Region/City</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
                           type="text" placeholder="City/Region" name="region">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">District</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
                           type="text" placeholder="City" name="district">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Town/Ward</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
                           type="text" placeholder="District" name="ward">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Plot/House No</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
                           type="text" placeholder="Address" name="plot">
                  </div>

                    <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Phone</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
                           type="text" placeholder="+255 765 204 506" name="phone">
                  </div>
                </div>
            <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Add Address</button>
              </form>
            </div>
            <!-- End Contact Form -->

          </div>
          <!-- Addresses -->
        </div>
      </div>
@endsection

@section('footer_scripts')
@endsection
