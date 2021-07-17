@extends('layouts.com')
@section('content')
    <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Our Stores</h1>
            </div>

            <div class="align-self-center ml-auto">
              <ul class="u-list-inline">
                <li class="list-inline-item g-mr-5">
                  <a class="u-link-v5 g-color-text" href="{{url('/')}}">Home</a>
                  <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
                </li>

                <li class="list-inline-item g-color-primary">
                  <span>Our Stores</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Content -->
      <div class="container g-py-100">
        <div class="row">
            @foreach($stores as $store)
              <div class="col-md-6 g-brd-right--md g-brd-bottom--md g-brd-gray-light-v4 g-pr-40--md">
                <!-- Store Info -->
                <h2 class="h4 mb-3">{{$store->name}}</h2>
                <div class="row">
                  <div class="col g-mb-30">
                    <h3 class="h6 g-color-gray-dark-v3">Details:</h3>
                    <address class="g-color-text mb-3">
                        {{$store->location}}
                    </address>
                    <ul class="list-unstyled g-color-text">
                      <li class="g-py-1">Tel: <a href="tel:{{$store->tell}}" {{$store->tell}}</li>
                      <li class="g-py-1">Email: <a target="_blank" href="mailto:{{$store->email}}">{{$store->email}}</a></li>
                      <li class="g-py-1">Instagram: <a target="_blank" href="{{$store->website}}">{{$store->website}}</a></li>
                    </ul>
                  </div>
                  <div class="col g-mb-30">
                    <h3 class="h6 g-color-gray-dark-v3">Business Hours:</h3>
                    <span class="d-block g-color-text mb-4">{{$store->hours}}</span>
                    <img class="img-fluid" src="{{url('/'.$store->image)}}" alt="{{$store->name}}">
                  </div>
                </div>
                <!-- End Store Info -->
              </div>
            @endforeach
        </div>
      </div>
    <!-- End Content -->
@endsection
