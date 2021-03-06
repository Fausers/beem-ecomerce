@extends('layouts.com')

@section('template_title')
    Your Wishlist
@endsection

@section('template_fastload_css')
@endsection

@section('content')
      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Your Wishlist</h1>
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
                  <span>Wishlist</span>
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
            <!-- Products Block -->
            <div class="rounded g-brd-around g-brd-gray-light-v4 g-overflow-x-scroll g-overflow-x-visible--lg g-pa-30">
              <table class="text-center w-100">
                <thead class="h6 g-brd-bottom g-brd-gray-light-v4 g-color-black text-uppercase">
                  <tr>
                    <th class="g-font-weight-500 text-left g-pb-20">Product</th>
                    <th class="g-font-weight-500 g-width-130 g-pb-20">Price</th>
                    <th class="g-font-weight-500 g-width-50 g-pb-20">Qty</th>
                    <th class="g-font-weight-500 g-width-130 g-pb-20">Total</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <!-- Item-->
                  <tr class="g-brd-bottom g-brd-gray-light-v4">
                    <td class="text-left g-py-25">
                      <img class="d-inline-block g-width-100 mr-4" src="{{url('/')}}/assets/img-temp/150x150/img6.jpg" alt="Image Description">
                      <div class="d-inline-block align-middle">
                        <h4 class="h6 g-color-black">Sneaker</h4>
                        <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                          <li>Color: Black</li>
                          <li>Size: MD</li>
                        </ul>
                      </div>
                    </td>
                    <td class="g-color-gray-dark-v2 g-font-size-13">$ 87.00</td>
                    <td>
                      <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="1" readonly>

                        <div class="input-group-addon d-flex align-items-center g-width-30 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
                          <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                          <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                        </div>
                      </div>
                    </td>
                    <td class="text-right g-color-black">
                      <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">$ 87.00</span>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="mt-auto fa fa-trash"></i>
                      </span>
                    </td>
                  </tr>
                  <!-- End Item-->

                  <!-- Item-->
                  <tr class="g-brd-bottom g-brd-gray-light-v4">
                    <td class="text-left g-py-25">
                      <img class="d-inline-block g-width-100 mr-4" src="{{url('/')}}/assets/img-temp/150x150/img3.jpg" alt="Image Description">
                      <div class="d-inline-block align-middle">
                        <h4 class="h6 g-color-black">Chukka Shoes</h4>
                        <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                          <li>Color: Black</li>
                          <li>Size: MD</li>
                        </ul>
                      </div>
                    </td>
                    <td class="g-color-gray-dark-v2 g-font-size-13">$ 160.00</td>
                    <td>
                      <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="2" readonly>

                        <div class="input-group-addon d-flex align-items-center g-width-30 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
                          <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                          <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                        </div>
                      </div>
                    </td>
                    <td class="text-right g-color-black">
                      <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">$ 320.00</span>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="mt-auto fa fa-trash"></i>
                      </span>
                    </td>
                  </tr>
                  <!-- End Item-->

                  <!-- Item-->
                  <tr>
                    <td class="text-left g-pt-25">
                      <img class="d-inline-block g-width-100 mr-4" src="{{url('/')}}/assets/img-temp/150x150/img7.jpg" alt="Image Description">
                      <div class="d-inline-block align-middle">
                        <h4 class="h6 g-color-black">Desk Clock</h4>
                        <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                          <li>Color: Brown Wood</li>
                          <li>Type: Desk</li>
                        </ul>
                      </div>
                    </td>
                    <td class="g-color-gray-dark-v2 g-font-size-13">$ 47.00</td>
                    <td>
                      <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="1" readonly>

                        <div class="input-group-addon d-flex align-items-center g-width-30 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
                          <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                          <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                        </div>
                      </div>
                    </td>
                    <td class="text-right g-color-black">
                      <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">$ 47.00</span>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="mt-auto fa fa-trash"></i>
                      </span>
                    </td>
                  </tr>
                  <!-- End Item -->
                </tbody>
              </table>
            </div>
            <!-- End Products Block -->
          </div>
          <!-- End Payment Options -->
        </div>
      </div>
@endsection

@section('footer_scripts')
@endsection
