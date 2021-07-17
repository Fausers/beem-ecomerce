<footer class="g-bg-main-light-v1">
        <!-- Content -->
        <div class="g-brd-bottom g-brd-secondary-light-v1">
          <div class="container g-pt-100">
            <div class="row justify-content-start g-mb-30 g-mb-0--md">
              <div class="col-md-5 g-mb-30">
                <h2 class="h5 g-color-gray-light-v3 mb-4">Categories</h2>

                <div class="row">
                  <div class="col-4 g-mb-20">
                    <!-- Links -->
                    <ul class="list-unstyled g-font-size-13 mb-0">
                        @foreach(\App\Models\Com\Category::where('category_id',null)->get() as $category)
                      <li class="g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                           href="{{route('category',$category->name)}}">{{$category->name}}</a>
                      </li>
                        @endforeach

                    </ul>
                    <!-- End Links -->
                  </div>

                </div>
              </div>

              <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                <h2 class="h5 g-color-gray-light-v3 mb-4"></h2>


              </div>

              <div class="col-sm-5 col-md-3 ml-auto g-mb-30 g-mb-0--sm">
                <h2 class="h5 g-color-gray-light-v3 mb-4">Contacts</h2>

                <!-- Links -->
                <ul class="list-unstyled g-color-gray-dark-v5 g-font-size-13">
                  <li class="media my-3">
                    <i class="d-flex mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
                      <a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=-6.775621632676076, 39.230552766566255">
                    <div class="media-body">
                      Shekilango Road,
                      <br>
                      Sinza Mapambano
                    </div>
                      </a>
                  </li>
                  <li class="media my-3">
                    <i class="d-flex mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
                    <div class="media-body">
                      <a href="mailto:diywithnanzy@gmail.com">diywithnanzy@gmail.com</a>
                    </div>
                  </li>
                  <li class="media my-3">
                    <i class="d-flex mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
                    <div class="media-body">
                        <a href="tel:+255753432505"> +255 753 432 505</a>
                    </div>
                  </li>
                </ul>
                <!-- End Links -->
              </div>
            </div>

            <!-- Secondary Content -->
            <div class="row">
              <div class="col-md-4 g-mb-50">
                <h2 class="h5 g-color-gray-light-v3 mb-4">Subscribe</h2>

                <!-- Subscribe Form -->
                <form class="input-group u-shadow-v19 rounded">
                  <input class="form-control g-brd-none g-color-gray-dark-v5 g-bg-main-light-v2 g-bg-main-light-v2--focus g-placeholder-gray-dark-v3 rounded g-px-20 g-py-8" type="email" placeholder="Enter your email">
                  <span class="input-group-addon u-shadow-v19 g-brd-none g-bg-main-light-v2 g-pa-5">
                    <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                      <i class="fa fa-angle-right"></i>
                    </button>
                  </span>
                </form>
                <!-- End Subscribe Form -->
              </div>



              <div class="col-6 col-md-3 ml-auto g-mb-30">
                <h2 class="h5 g-color-gray-light-v3 mb-4">Follow Us On:</h2>

                <!-- Social Icons -->
                <ul class="list-inline mb-50">
                  <li class="list-inline-item g-mr-2">
                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-facebook--hover rounded" target="_blank"
                       href="https://web.facebook.com/Diywithnanzy-102358425305929">
                      <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                      <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                    </a>
                  </li>

                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-instagram--hover rounded"
                    href="https://www.instagram.com/entityskin/" target="_blank">
                      <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-instagram"></i>
                      <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-instagram"></i>
                    </a>
                  </li>

                </ul>
                <!-- End Social Icons -->
              </div>
            </div>
            <!-- End Secondary Content -->
          </div>
        </div>
        <!-- End Content -->

        <!-- Copyright -->
        <div class="container g-pt-30 g-pb-10">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 g-mb-20">
              <p class="g-font-size-13 mb-0">2021 &copy; {{config('app.name')}}. All Rights Reserved.

              </p>
            </div>

            <div class="col-md-6 text-md-right g-mb-20">
                <p>Developed and maintained by <a href="http://luxtechtz.com/" target="_blank">LuxTechTZ</a></p>
            </div>
          </div>
        </div>
        <!-- End Copyright -->
      </footer>
