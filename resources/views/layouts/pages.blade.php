<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/e-commerce/page-grid-filter-no-sidebar-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:46:23 GMT -->
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
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-line/css/simple-line-icons.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('/')}}/main_assets/css/custom.css">

{{--    Sweet Alerts--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('com.includes.notification')

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

    @include('scripts.ga-analytics')
  </head>

  <body>
    <main>
      <!-- Header -->
      @include('com.includes.header')
      <!-- End Header -->

        @yield('content')

      <!-- Footer -->
      @include('com.includes.footer')
      <!-- End Footer -->

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
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{url('/')}}/main_assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/popper.min.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{url('/')}}/main_assets/vendor/jquery-ui/ui/widget.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/jquery-ui/ui/widgets/slider.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{url('/')}}/main_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- JS Unify -->
    <script src="{{url('/')}}/main_assets/js/hs.core.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.header.js"></script>
    <script src="{{url('/')}}/main_assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.dropdown.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.scrollbar.js"></script>
    <script src="{{url('/')}}/main_assets/js/helpers/hs.rating.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.slider.js"></script>
    <script src="{{url('/')}}/main_assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="{{url('/')}}/main_assets/js/custom.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K5X3Z3PBWC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-K5X3Z3PBWC');
    </script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
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

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of rating
        $.HSCore.helpers.HSRating.init();

        // initialization of range slider
        $.HSCore.components.HSSlider.init('#rangeSlider1');
      });
    </script>

  </body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/e-commerce/page-grid-filter-no-sidebar-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:46:23 GMT -->
</html>
