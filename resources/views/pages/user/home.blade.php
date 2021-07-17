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
              <h1 class="h3 mb-0">Your Wallet</h1>
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
                  <span>Your Wallet</span>
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

          <!-- Wallet -->
          <div class="col-lg-9 g-mb-50">
            <!-- Balance & Rewards -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-px-30 g-pt-30">
              <h3 class="h5 mb-3">Balance &amp; Rewards</h3>

              <!-- Balance Info -->
              <div class="row justify-content-between">
                <div class="col-sm-4 g-mb-30">
                  <div class="g-bg-gray-dark-v3 text-center rounded g-px-20 g-py-30">
                    <span class="d-block g-color-white g-font-weight-600 g-font-size-25 mb-1">0 TSH</span>
                    <span class="d-block g-color-white-opacity-0_8 g-font-size-18">Available Balance</span>
                  </div>
                </div>

                <div class="col-sm-4 g-mb-30">
                  <div class="g-bg-primary text-center rounded g-px-20 g-py-30">
                    <span class="d-block g-color-white g-font-weight-600 g-font-size-25 mb-1">0 TSH</span>
                    <span class="d-block g-color-white-opacity-0_8 g-font-size-18">Reward Balance</span>
                  </div>
                </div>

                <div class="col-sm-4 g-mb-30">
                  <div class="g-bg-lightred text-center rounded g-px-20 g-py-30">
                    <span class="d-block g-color-white g-font-weight-600 g-font-size-25 mb-1">0 TSH</span>
                    <span class="d-block g-color-white-opacity-0_8 g-font-size-18">Pending Balance</span>
                  </div>
                </div>
              </div>
              <!-- End Balance Info -->

              <!-- Add Balance -->
              <div class="g-mb-50">
                <button class="btn g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-13 rounded g-px-18 g-py-9" type="button">
                  <i class="align-middle g-font-size-16 mr-2 icon-finance-210 u-line-icon-pro"></i>
                  Add Balance
                </button>
              </div>
              <!-- End Add Balance -->

              <div class="row">
                <div class="col-sm-4 g-mb-30">
                  <!-- Payment History -->
                  <h3 class="h5 mb-3">Payment History</h3>
                  <p class="mb-0">Last payment: -- </p>
                  <a class="g-font-size-13" href="#!">View printable receipt</a>
                  <!-- End Payment History -->
                </div>

                <div class="col-sm-8 g-mb-30">
                  <h3 class="h5 mb-3">Prime Members Enjoy</h3>

                  <!-- Media -->
                  <div class="media g-mb-30">
                    <div class="d-flex mr-4">
                      <span class="u-icon-v2 u-icon-size--sm g-brd-gray-dark-v5 g-color-main rounded-circle">
                        <i class="icon-finance-009 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h4 class="h6 mb-1">Prime Rewards</h4>
                      <p class="mb-1">Cardmembers earn 3.2% Back at Unify.com with a Prime Credit Card. Earn 1.7% rewards on your debit spending with Prime Reload.</p>
                      <a class="g-font-size-13" href="#!">Read More</a>
                    </div>
                  </div>
                  <!-- End Media -->

                  <!-- Media -->
                  <div class="media g-mb-30">
                    <div class="d-flex mr-4">
                      <span class="u-icon-v2 u-icon-size--sm g-brd-gray-dark-v5 g-color-main rounded-circle">
                        <i class="icon-real-estate-040 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h4 class="h6 mb-1">Prime Delivery</h4>
                      <p class="mb-1">Get FREE Two-Day Shipping on over 50 million items.</p>
                      <a class="g-font-size-13" href="#!">Read More</a>
                    </div>
                  </div>
                  <!-- End Media -->

                  <!-- Media -->
                  <div class="media g-mb-30">
                    <div class="d-flex mr-4">
                      <span class="u-icon-v2 u-icon-size--sm g-brd-gray-dark-v5 g-color-main rounded-circle">
                        <i class="icon-communication-102 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h4 class="h6 mb-1">Prime Early Access</h4>
                      <p class="mb-1">30-minute early access to Lightning Deals on Amazon.</p>
                      <a class="g-font-size-13" href="#!">Read More</a>
                    </div>
                  </div>
                  <!-- End Media -->
                </div>
              </div>
            </div>
            <!-- End Balance & Rewards -->
          </div>
          <!-- End Wallet -->
        </div>
      </div>
@endsection

@section('footer_scripts')
@endsection
