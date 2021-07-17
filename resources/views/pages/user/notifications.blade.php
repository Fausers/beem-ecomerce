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
              <h1 class="h3 mb-0">Notifications</h1>
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
                  <span>Notifications</span>
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

          <!-- Login & Security -->
          <div class="col-lg-9 g-mb-50">
            <!-- Security Settings -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-30">
              <h3 class="h5 mb-3">Security Settings</h3>

              <!-- Security Settings -->
              <div class="d-flex mb-3">
                <span class="g-color-text g-font-size-13">Free SMS transaction alert service</span>

                <form class="ml-auto">
                  <label class="form-check-inline u-check mb-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup1_1" type="checkbox">
                    <div class="u-check-icon-radio-v7">
                      <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                    </div>
                  </label>
                </form>
              </div>
              <!-- End Security Settings -->

              <!-- Security Settings -->
              <div class="d-flex mb-3">
                <span class="g-color-text g-font-size-13">Email binding for password recovery</span>

                <form class="ml-auto">
                  <label class="form-check-inline u-check mb-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup1_1" type="checkbox" checked>
                    <div class="u-check-icon-radio-v7">
                      <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                    </div>
                  </label>
                </form>
              </div>
              <!-- End Security Settings -->

              <!-- Security Settings -->
              <div class="d-flex mb-3">
                <span class="g-color-text g-font-size-13">Make a payment from your Android Pay wallet</span>

                <form class="ml-auto">
                  <label class="form-check-inline u-check mb-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup1_1" type="checkbox">
                    <div class="u-check-icon-radio-v7">
                      <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                    </div>
                  </label>
                </form>
              </div>
              <!-- End Security Settings -->

              <!-- Security Settings -->
              <div class="d-flex mb-3">
                <span class="g-color-text g-font-size-13">Receive email confirmations of your each order</span>

                <form class="ml-auto">
                  <label class="form-check-inline u-check mb-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup1_1" type="checkbox" checked>
                    <div class="u-check-icon-radio-v7">
                      <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                    </div>
                  </label>
                </form>
              </div>
              <!-- End Security Settings -->

              <!-- Security Settings -->
              <div class="d-flex mb-3">
                <span class="g-color-text g-font-size-13">Receive promotions, news and gifts</span>

                <form class="ml-auto">
                  <label class="form-check-inline u-check mb-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="radGroup1_1" type="checkbox" checked>
                    <div class="u-check-icon-radio-v7">
                      <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                    </div>
                  </label>
                </form>
              </div>
              <!-- End Security Settings -->
            </div>
            <!-- End Security Settings -->

            <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Update</button>
          </div>
          <!-- End Login & Security -->
        </div>
      </div>
@endsection

@section('footer_scripts')
@endsection
