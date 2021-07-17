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
              <span>Password Recovery</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Login -->
      <section class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-sm-9 col-md-7 col-lg-5">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <h1 class="h4 g-color-black g-font-weight-400">Forgot Password?</h1>
                <p>Enter your e-mail address to reset your password.</p>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="POST" action="{{ route('password.email') }}">
                        @csrf
                <div class="mb-4">
                  <div class="input-group g-rounded-left-5">
                    <span class="input-group-prepend g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                      </span>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-5 g-py-15 g-px-15"
                           type="email" placeholder="Email Adress" id="email" name="email" value="{{ old('email') }}" required>
                  </div>
                    @if ($errors->has('email'))
                        <span style="color: red">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="submit">Get New Password</button>
              </form>
              <!-- End Form -->
            </div>

            <div class="row justify-content-between mb-5">
              <div class="col align-self-center text-center">
                <p class="g-font-size-13">Have an account? <a href="{{route('login')}}">Click here</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Login -->
@endsection
