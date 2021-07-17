<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/logo.png">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/animate.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/css/settings.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/css/layers.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/css/navigation.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/revolution-slider/revolution-addons/typewriter/css/typewriter.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/css/custom.css">
    @include('scripts.ga-analytics')
  </head>

  <body>
    <main>
      <!-- Header -->
      @include('com.includes.header')
      <!-- End Header -->

      @yield('content')

        <!-- Call to Action -->
      <div class="g-bg-primary">
        <div class="container g-py-20">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Country Wide Delivery</span>
                  <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Returns</span>
                  <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free 24</span>
                  <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Call to Action -->

      <!-- Footer -->
      @include('com.includes.footer')
      <!-- End Footer -->

      <!-- Go To Top -->
      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go To Top -->

      <!-- Modal Window -->
      <div id="modal-type-onscroll" class="js-autonomous-popup text-left g-bg-white g-pos-rel g-rounded-5" style="display: none;"
           data-modal-type="onscroll"
           data-open-effect="fadeIn"
           data-close-effect="fadeIn"
           data-breakpoint="1000"
           data-speed="500">
        <button type="button" class="close g-color-main-light-v3 g-color-primary--hover g-font-size-13 g-pos-abs g-top-15 g-right-15 g-opacity-1" onclick="Custombox.modal.close();">
          <i class="hs-icon hs-icon-close"></i>
        </button>

        <!-- Modal Window - Content -->
        <div class="g-width-720">
          <div class="row align-items-center">
            <div class="col-sm-6 g-height-350--sm g-bg-size-cover g-bg-pos-top-center g-rounded-left-5" data-bg-img-src="assets/img-temp/300x300/img1.jpg"></div>

            <div class="col-sm-6">
              <div class="g-pl-30 g-pl-20--sm g-pr-30 g-py-20">
                <!-- Info -->
                <div class="g-mb-35">
                  <h3 class="h1 g-color-primary">Subscribe</h3>
                  <p class="g-font-weight-300 g-font-size-16">Get free promotions every month!</p>
                </div>
                <!-- End Info -->

                <!-- Subscribe Form -->
                <form class="input-group u-shadow-v19 rounded g-mb-20">
                  <input class="form-control g-brd-right-none g-brd-gray-light-v4 g-color-white g-bg-main-light-v3 g-rounded-left-5 g-px-20 g-py-8" type="email" placeholder="Enter your email">
                  <span class="input-group-addon u-shadow-v19 g-brd-left-none g-brd-gray-light-v4 g-bg-main-light-v3 g-rounded-right-5 g-pa-5">
                    <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                      <i class="fa fa-angle-right"></i>
                    </button>
                  </span>
                </form>
                <!-- End Subscribe Form -->

                <!-- Social Icons -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mx-0">
                    <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-0">
                    <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-0">
                    <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#!">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-0">
                    <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-0">
                    <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Social Icons -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Window - Content -->
      </div>
      <!-- End Modal Window -->
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{url('/')}}/main_assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/popper.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{url('/')}}/main_assets/vendor/jquery.countdown.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/appear.js"></script>

    <!-- JS Revolution Slider -->
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js"></script>

    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- JS Unify -->
    <script src="{{url('/')}}/main_assets/js/hs.core.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.header.js"></script>
    <script src="{{url('/')}}/main_assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.dropdown.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.scrollbar.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.countdown.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.carousel.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.go-to.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.count-qty.js"></script>

    <!-- JS Customization -->
    <script src="{{url('/')}}/main_assets/js/custom.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('com.includes.notification')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K5X3Z3PBWC"></script>
    <script>
            function f(x) {
                Swal.fire({
                    position:"top-right",
                    icon:"success",
                    title: x,
                    showConfirmButton:!1,
                    timer:2000
                    }
                )
            }
    </script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-K5X3Z3PBWC');
    </script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        $('#carouselCus1').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }], true);
      });

      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

      // initialization of countdowns
      var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
        yearsElSelector: '.js-cd-years',
        monthElSelector: '.js-cd-month',
        daysElSelector: '.js-cd-days',
        hoursElSelector: '.js-cd-hours',
        minutesElSelector: '.js-cd-minutes',
        secondsElSelector: '.js-cd-seconds'
      });

      // initialization of quantity counter
      $.HSCore.components.HSCountQty.init('.js-quantity');

      $(window).on('load', function () {
        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
      });

      // initialization of revolution slider
      var tpj = jQuery;

      var revapi1014;
      tpj(document).ready(function () {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
          revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style: "uranus",
                enable: true,
                hide_onmobile: true,
                hide_under: 768,
                hide_onleave: false,
                tmp: '',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 20,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 20,
                  v_offset: 0
                }
              }
            },
            parallax: {
              type: "mouse",
              origo: "slidercenter",
              speed: 2000,
              levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
              disable_onmobile: "on"
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 600],
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "#js-header",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false
            }
          });
        }

        RsTypewriterAddOn(tpj, revapi1014);
      });
    </script>

  </body>

</html>
