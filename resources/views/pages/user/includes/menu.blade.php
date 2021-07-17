<div class="col-lg-3 g-mb-50">
            <aside class="g-brd-around g-brd-gray-light-v4 rounded g-px-20 g-py-30">
              <!-- Profile Picture -->
              <div class="text-center g-pos-rel g-mb-30">
                <div class="g-width-100 g-height-100 mx-auto mb-3">
                    @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)
                        <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="img-fluid rounded-circle">
                    @else
                        <img class="img-fluid rounded-circle" src="{{url('/')}}/assets/img-temp/100x100/img1.jpg" alt="Image Decor">
                    @endif
                </div>

                <span class="d-block g-font-weight-500">{{ Auth::user()->name }}</span>

                <span class="u-icon-v3 u-icon-size--xs g-color-white--hover g-bg-primary--hover rounded-circle g-pos-abs g-top-0 g-right-15 g-cursor-pointer" title="Change Profile Picture"
                      data-toggle="tooltip"
                      data-placement="top">
                  <i class="icon-finance-067 u-line-icon-pro"></i>
                </span>
              </div>
              <!-- End Profile Picture -->

              <hr class="g-brd-gray-light-v4 g-my-30">

              <!-- Profile Settings List -->
              <ul class="list-unstyled mb-0">
                <li class="g-pb-3">
                  <a class="d-block align-middle @if(Request::is('home','account')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('account')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-059 u-line-icon-pro"></i></span>
                    Your Wallet
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Request::is('account/orders')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('orders')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-114 u-line-icon-pro"></i></span>
                    Your Orders
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Route::is('open_orders')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('open_orders')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-115 u-line-icon-pro"></i></span>
                    Open Orders
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Route::is('cancelled_orders')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('cancelled_orders')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-113 u-line-icon-pro"></i></span>
                    Cancelled Orders
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Route::is('wishlist')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('wishlist')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-medical-022 u-line-icon-pro"></i></span>
                    Wishlist
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Route::is('addresses')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('addresses')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-real-estate-027 u-line-icon-pro"></i></span>
                    Addresses
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Route::is('payments')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('payments')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-110 u-line-icon-pro"></i></span>
                    Payment Options
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle @if(Route::is('security')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('security')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-135 u-line-icon-pro"></i></span>
                    Login &amp; Security
                  </a>
                </li>
                <li class="g-pt-3">
                  <a class="d-block align-middle @if(Route::is('notifications')) active g-color-primary--parent-active g-bg-gray-light-v5--active @endif u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3"
                     href="{{route('notifications')}}">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-education-033 u-line-icon-pro"></i></span>
                    Notifications
                  </a>
                </li>
              </ul>
              <!-- End Profile Settings List -->
            </aside>
          </div>
