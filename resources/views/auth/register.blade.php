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
              <span>Signup</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Signup -->
          <div style="background-image: url('{{url('/images/login.jpg')}}');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: 100% 100%;">
      <section class="container g-pt-100 g-pb-20">
        <div class="row">
          <div class="col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Create New Account</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15"method="POST" action="{{ route('register') }}">
                        @csrf
                  <div class="row">
                      <div class="col g-mb-20 col-md-12">
                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15"
                               type="text" placeholder="User Name" required autofocus name="name" value="{{ old('name') }}">
                      </div>
                      @if ($errors->has('name'))
                          <span style="color: red">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
{{--                <div class="row">--}}
{{--                  <div class="col g-mb-20">--}}
{{--                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15"--}}
{{--                           type="text" placeholder="First name" name="first_name" value="{{ old('first_name') }}" required autofocus>--}}
{{--                  </div><br>--}}
{{--                    @if ($errors->has('first_name'))--}}
{{--                          <span style="color: red">--}}
{{--                              <strong>{{ $errors->first('first_name') }}</strong>--}}
{{--                          </span>--}}
{{--                    @endif--}}

{{--                  <div class="col g-mb-20">--}}
{{--                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15"--}}
{{--                           type="text" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" required autofocus>--}}
{{--                  </div><br>--}}
{{--                    @if ($errors->has('last_name'))--}}
{{--                          <span style="color: red">--}}
{{--                              <strong>{{ $errors->first('last_name') }}</strong>--}}
{{--                          </span>--}}
{{--                    @endif--}}
{{--                </div>--}}


                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15"
                         type="email" placeholder="Email address" name="email" value="{{ old('email') }}" required><br>
                    @if ($errors->has('email'))
                          <span style="color: red">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                    @endif
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15"
                         type="password" placeholder="Password" name="password" required>
                </div>
                  @if ($errors->has('password'))
                      <span style="color: red">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

{{--                <div class="g-mb-20">--}}
{{--                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15"--}}
{{--                         type="password" placeholder="Confirm password" name="password_confirmation">--}}
{{--                </div>--}}




{{--                <div class="mb-1">--}}
{{--                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">--}}
{{--                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">--}}
{{--                    <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">--}}
{{--                      <i class="fa" data-check-icon="&#xf00c"></i>--}}
{{--                    </span>--}}
{{--                    I accept the <a href="#!">Terms and Conditions</a>--}}
{{--                  </label>--}}
{{--                </div>--}}

                <div class="mb-3">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="news_letter">
                    <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Subscribe to our newsletter
                  </label>
                </div>

                  <div class="mb-5">
                <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Signup</button>
                  </div>

                  <div class="d-flex justify-content-center text-center g-mb-30">
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                  <span class="align-self-center g-color-gray-dark-v5 mx-4">Have an Account?</span>
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                </div>

                <div class="row no-gutters">
                  <div class="col-12">
                    <a href="{{route('login')}}" class="btn btn-block u-btn-facebook g-font-size-12 text-uppercase g-py-12 g-px-25 mr-2" type="button">
                      Sign In
                    </a>
                  </div>

                </div>
              </form>
              <!-- End Form -->
            </div>

          </div>

          <div class="col-lg-7 order-lg-1 g-mb-80" style="background: rgba(255, 255, 255, 0.9);">
            <div class="g-pr-20--lg">
              <div class="mb-5 p-3" style="align-items: center">
                <h2 class="h1 g-font-weight-400 mb-3" style="text-align: center">Welcome to {{config('app.name', Lang::get('titles.app'))}}</h2>
                <p class="g-color-gray-dark-v4" style="text-align: center">Simplified Shopping!</p>
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
        </div>
      </section>
          </div>
      <!-- End Signup -->


@endsection

@section('footer_scripts')
    @if(config('settings.reCaptchStatus'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
@endsection
