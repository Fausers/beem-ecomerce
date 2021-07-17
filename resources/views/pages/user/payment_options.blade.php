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
              <h1 class="h3 mb-0">Your Credit and Debit Card Options</h1>
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
                  <span>Payment Options</span>
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

          <!-- Payment Options -->
          <div class="col-lg-9 g-mb-50">
            <div class="row justify-content-between">
              <div class="col-md-8 col-lg-6 g-mb-70 g-mb-0--md">
                <div class="mb-4">
                  <h3 class="h5 mb-3">Payment Details</h3>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <img class="g-width-40" src="{{url('/')}}/assets/img-temp/50x35/img1.jpg" alt="Image Description">
                    <span class="g-font-size-13">**** **** **** 5021</span>

                    <div class="ml-auto">
                      <!-- Delete -->
                      <a class="u-icon-v1 u-icon-size--xs g-color-gray-dark-v5 g-color-primary--hover g-font-size-16 g-text-underline--none--hover" href="#!" title="Delete"
                         data-toggle="tooltip"
                         data-placement="top">
                        <i class="icon-hotel-restaurant-214 u-line-icon-pro"></i>
                      </a>
                      <!-- End Delete -->
                    </div>
                  </div>
                </div>

                <!-- Payment Details -->
                <div class="g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-pa-30">
                  <form class="row justify-content-between g-mb-30">
                    <!-- Payment Method -->
                    <div class="col-6">
                      <h4 class="h6 g-color-black g-font-weight-400 mb-3">Payment Method</h4>
                      <img class="g-width-40" src="{{url('/')}}/assets/img-temp/50x35/img1.jpg" alt="Image Description">
                      <span class="g-font-size-13">Ending in 5021</span>
                    </div>
                    <!-- End Payment Method -->

                    <!-- Name on Card -->
                    <div class="col-6">
                      <h4 class="h6 g-color-black g-font-weight-400 mb-3">Name on Card</h4>
                      <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3" type="tel" placeholder="Payoneer">
                    </div>
                    <!-- End Name on Card -->
                  </form>

                  <!-- Card Number -->
                  <div class="g-mb-30">
                    <h4 class="h6 g-color-black g-font-weight-400 mb-3">Card Number</h4>
                    <form>
                      <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3" type="tel" placeholder="1234 5678 9012 3456">
                    </form>
                  </div>
                  <!-- End Card Number -->

                  <form class="row justify-content-between g-mb-30">
                    <!-- Expiration Date -->
                    <div class="col-7 col-sm-5">
                      <h4 class="h6 g-color-black g-font-weight-400 mb-3">Expiration Date</h4>
                      <div class="row g-mx-minus-2">
                        <div class="col g-px-2">
                          <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-rounded-right-0 g-pr-10" type="tel" placeholder="MM">
                        </div>
                        <div class="col g-px-2">
                          <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-pr-10" type="tel" placeholder="YYYY">
                        </div>
                      </div>
                    </div>
                    <!-- End Expiration Date -->

                    <!-- Security Code -->
                    <div class="col-5 col-sm-4">
                      <h4 class="h6 g-color-black g-font-weight-400 mb-3">Security Code</h4>
                      <div class="input-group g-pos-rel">
                        <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-rounded-left-0 g-pr-40 g-ml-minus-1" type="tel" placeholder="123">
                        <div class="g-brd-gray-light-v3 g-absolute-centered--y g-right-5 g-z-index-3 p-0">
                          <img class="g-width-30" src="{{url('/')}}/assets/img-temp/50x25/img1.jpg" alt="Image Description">
                        </div>
                      </div>
                    </div>
                    <!-- End Security Code -->
                  </form>

                  <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Update</button>
                </div>
                <!-- End Payment Details -->
              </div>

              <div class="col-md-4 col-lg-6">
                <div class="g-mb-25">
                  <h3 class="h5 mb-3">Add a New Payment Method</h3>
                  <p>Unify accepts all major credit and debit cards.</p>
                </div>

                <!-- Accordion -->
                <div id="accordion-12" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <!-- Card -->
                  <div class="card g-brd-none rounded-0 g-mb-15">
                    <div id="accordion-12-heading-01" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0">
                        <a class="d-block g-font-size-13 g-text-underline--none--hover p-0" href="#accordion-12-body-01" data-toggle="collapse" data-parent="#accordion-12" aria-expanded="false" aria-controls="accordion-12-body-01">
                          <span class="u-accordion__control-icon g-mr-10">
                            <i class="fa fa-caret-down"></i>
                            <i class="fa fa-caret-up"></i>
                          </span>
                          Add a Card
                        </a>
                      </h5>
                    </div>
                    <div id="accordion-12-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-12-heading-01">
                      <div class="u-accordion__body g-color-gray-dark-v5 g-pl-20 g-pr-0 g-pt-2 g-pb-0">
                        <p class="g-font-size-13">Enter your card information:</p>

                        <div class="row g-mx-minus-5 mb-3">
                          <!-- Card Name -->
                          <div class="col-3 col-md-12 col-lg-3 g-px-5 g-mb-20">
                            <h4 class="h6 g-color-black g-font-weight-400 mb-3">Card Name</h4>
                            <div class="input-group g-pos-rel">
                              <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-rounded-left-0 g-pr-40 g-ml-minus-1" type="tel">
                            </div>
                          </div>
                          <!-- End Card Name -->

                          <!-- Card Number -->
                          <div class="col-4 col-md-12 col-lg-4 g-px-5 g-mb-20">
                            <h4 class="h6 g-color-black g-font-weight-400 mb-3">Card Number</h4>
                            <div class="input-group g-pos-rel">
                              <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-rounded-left-0 g-pr-40 g-ml-minus-1" type="tel">
                            </div>
                          </div>
                          <!-- End Card Number -->

                          <!-- Expiration Date -->
                          <div class="col-5 col-md-12 col-lg-5 g-px-5 g-mb-20">
                            <h4 class="h6 g-color-black g-font-weight-400 mb-3">Expiration Date</h4>
                            <div class="row g-mx-minus-2">
                              <div class="col g-px-2">
                                <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3 g-rounded-right-0" type="tel" placeholder="MM">
                              </div>
                              <div class="col g-px-2">
                                <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-3" type="tel" placeholder="YYYY">
                              </div>
                            </div>
                          </div>
                          <!-- End Expiration Date -->
                        </div>
                      </div>

                      <div class="g-pl-20">
                        <button class="btn u-btn-primary g-font-size-13 rounded g-px-18 g-py-10" type="submit">Add Card</button>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Accordion -->
              </div>
            </div>
          </div>
          <!-- End Payment Options -->
        </div>
      </div>
@endsection

@section('footer_scripts')
@endsection
