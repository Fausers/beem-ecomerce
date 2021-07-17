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
              <a class="u-link-v5 g-color-text" href="#!">Pages</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>Login</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Login -->
          <div style="background-image: url('{{url('/images/login.jpg')}}');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: 100% 100%;">
      <section class="container g-pt-100 g-pb-20">
        <div class="row justify-content-between" >
          <div class="col-md-6 col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Login to Your Account</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15"method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="mb-4">
                  <div class="input-group g-rounded-left-3">
                    <span class="input-group-prepend g-width-45">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                      </span>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="email"
                    name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
                  </div>
                      @if ($errors->has('email'))
                          <span style="color: red">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-prepend g-width-45">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                        <i class="icon-media-094 u-line-icon-pro"></i>
                      </span>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15"
                           type="password" placeholder="Password" name="password">
                  </div>
                    @if ($errors->has('password'))
                        <span style="color: red">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row justify-content-between mb-5">
                  <div class="col align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="remember" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Keep signed in
                    </label>
                  </div>
                  <div class="col align-self-center text-right">
                    <a class="g-font-size-13" href="{{ route('password.request') }}">Forgot password?</a>
                  </div>
                </div>

                <div class="mb-5">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Login</button>
                </div>

                <div class="d-flex justify-content-center text-center g-mb-30">
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                  <span class="align-self-center g-color-gray-dark-v5 mx-4">OR</span>
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                </div>

                <div class="row no-gutters">
                  <div class="col-12">
                    <a href="{{route('register')}}" class="btn btn-block u-btn-facebook g-font-size-12 text-uppercase g-py-12 g-px-25 mr-2" type="button">
                      Sign up
                    </a>
                  </div>

                </div>
              </form>
              <!-- End Form -->
            </div>

          </div>

          <div class="col-md-6 order-lg-1 g-mb-80" style="background: rgba(255, 255, 255, 0.9);">
            <div class="mb-5 p-4">
              <h2 class="h1 g-font-weight-400 mb-3" style="text-align: center">Welcome to {{ config('app.name', Lang::get('titles.app')) }}</h2>
              <p class="g-color-gray-dark-v4" style="text-align: center">Shopping made easy!.</p>
            </div>

            <div class="row">
              <div class="col-lg-9">
                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-168 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Reliable delivery</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Fast and reliable delivery is our number one priority</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-193 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Security</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Secure &amp; integrated Payment methods to ensure security of your money and data</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-122 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Quality</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Only high quality products make it to our site, so our customers never have to worry about quality.</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->
              </div>
            </div>
          </div>
        </div>
      </section>
          </div>
      <!-- End Login -->
@endsection
