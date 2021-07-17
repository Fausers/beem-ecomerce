@extends("layouts.com")

@section('content')
    <!-- Revolution Slider -->
      <div class="g-overflow-hidden">
        <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery" style="background-color:transparent;padding:0px;">
          <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
          <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
              <!-- SLIDE  -->
                @foreach(App\Models\Com\Slider::get() as $slider)
                    @if($loop->first)
                    <li data-index="rs-2800" data-transition="slidingoverlayhorizontal"
                        data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                        data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{config('app.sstore').Storage::url($slider->image)}}" data-rotate="0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                        data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{config('app.sstore').Storage::url($slider->image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper"
                         id="slide-2800-layer-7"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="full"
                         data-height="full"
                         data-whitespace="nowrap"

                         data-type="shape"
                         data-basealign="slide"
                         data-responsive_offset="off"
                         data-responsive="off"
                         data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"speed":5000,"to":"opacity:0;","ease":"Power4.easeInOut"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-2800-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-160','-160','-130','-157']"
                         data-fontsize="['110','110','100','60']"
                         data-lineheight="['110','110','100','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 110px; line-height: 110px; font-weight: 700; color: rgba(255, 255, 255, 1.00);border-width:0px;letter-spacing:-7px;">
                        {{$slider->title}}
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-2800-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['-10','-10','-10','-10']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-8','-32']"
                         data-fontsize="['40','40','30','30']"
                         data-width="['640','640','480','360']"
                         data-height="none"
                         data-whitespace="['nowrap','nowrap','normal','normal']"

                         data-type="text"
                         data-typewriter='{"lines":"{{$slider->text}}","enabled":"on","speed":"70","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; min-width: 640px; max-width: 640px; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-width:0px;"><i class="fa fa-user"></i>
                    </div>
                  </li>
              <!-- END SLIDE  -->
                    @elseif($loop->last)
                <!-- SLIDE  -->
              <li data-index="rs-2802" data-transition="slidingoverlayhorizontal"
                  data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                  data-easein="default" data-easeout="default" data-masterspeed="default"
                  data-thumb="{{config('app.sstore').Storage::url($slider->image)}}" data-rotate="0"
                  data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                  data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                  data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{config('app.sstore').Storage::url($slider->image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                <!-- LAYERS -->

                <!-- LAYER NR. 15 -->
                <div class="tp-caption tp-shape tp-shapewrapper "
                     id="slide-2802-layer-7"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-width="full"
                     data-height="full"
                     data-whitespace="nowrap"

                     data-type="shape"
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off"
                     data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 19;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

                <!-- LAYER NR. 16 -->
                <div class="tp-caption   tp-resizeme"
                     id="slide-2802-layer-1"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-fontsize="['100','100','70','60']"
                     data-lineheight="['100','100','70','50']"
                     data-width="['760','760','none','360']"
                     data-height="none"
                     data-whitespace="['normal','normal','nowrap','normal']"

                     data-type="text"
                     data-typewriter='{"lines":"","enabled":"on","speed":"80","delays":"1%7C100","looped":"off","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"off","hide_cursor":"on","start_delay":"1000","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                     data-textAlign="['center','center','center','center']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 20; min-width: 760px; max-width: 760px; white-space: normal; font-size: 100px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00);border-width:0px;letter-spacing:-5px;">

                  {{$slider->title}}
                </div>
              </li>
              <!-- END SLIDE  -->
                    @else
              <!-- SLIDE  -->
              <li data-index="rs-2801" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/img-temp/1920x1080/img3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{config('app.sstore').Storage::url($slider->image)}}" alt="" data-bgposition="center center"
                     data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                <!-- LAYERS -->

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-shape tp-shapewrapper "
                     id="slide-2801-layer-7"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-width="full"
                     data-height="full"
                     data-whitespace="nowrap"

                     data-type="shape"
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off"
                     data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption   tp-resizeme"
                     id="slide-2801-layer-1"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-160','-160','-130','-157']"
                     data-fontsize="['130','130','100','80']"
                     data-lineheight="['130','130','100','80']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                     data-textAlign="['center','center','center','center']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 13; white-space: nowrap; font-size: 130px; line-height: 130px; font-weight: 700; color: rgba(255, 255, 255, 1.00);background-color:rgba(0, 0, 0, 0);border-width:0px;letter-spacing:-7px;">
                    {{$slider->title}}
                </div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                     id="slide-2801-layer-3"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-54','-89']"
                     data-width="60"
                     data-height="3"
                     data-whitespace="nowrap"

                     data-type="shape"
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 14;background-color:rgba(0, 220, 186, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

                <!-- LAYER NR. 11 -->
                <div class="tp-caption   tp-resizeme"
                     id="slide-2801-layer-2"
                     data-x="['center','center','center','center']" data-hoffset="['-10','-10','-10','-10']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-8','-32']"
                     data-fontsize="['40','40','30','30']"
                     data-width="['640','640','480','360']"
                     data-height="none"
                     data-whitespace="normal"

                     data-type="text"
                     data-typewriter='{"lines":"{{$slider->text}},","enabled":"on","speed":"60","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                     data-responsive_offset="on"

                     data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                     data-textAlign="['center','center','center','center']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 15; min-width: 640px; max-width: 640px; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-width:0px;">{{$slider->title}}
                </div>


              </li>
              <!-- END SLIDE  -->
                        @endif
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
          </div>
        </div>
      </div>
      <!-- End Revolution Slider -->

      <!-- Features -->
      <div class="g-brd-bottom g-brd-gray-light-v4">
        <div class="container g-py-30">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-15">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Country Wide Delivery</span>
                  <span class="d-block g-color-gray-dark-v4">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-gray-light-v3 g-py-15">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free Returns</span>
                  <span class="d-block g-color-gray-dark-v4">No Questions Asked</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <!-- Media -->
            <div class="col-md-4 mx-auto g-py-15">
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free 24</span>
                  <span class="d-block g-color-gray-dark-v4">Days Storage</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Features -->

      <!-- Categories -->
      <div class="container g-pt-100 g-pb-70">
        <div class="row g-mx-minus-10">
          @foreach($categories as $category)
                @if(!$loop->first)
                  <div class="col-6 col-sm-6 col-md-3 g-px-10 g-mb-30">
                    <article class="u-block-hover">
                      <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8"
                           src="{{config('app.sstore').Storage::url($category->image)}}" alt="Image Description">
                      <div class="g-pos-abs g-bottom-30 g-left-30">
                        <span class="d-block g-color-black">
{{--                            Collections--}}
                        </span>
                        <h2 style="color: white;" class="h1 mb-0">{{$category->name}}</h2>
                      </div>
                      <a class="u-link-v2" href="{{route('category',[$category->name])}}"></a>
                    </article>
                  </div>
                @endif
            @endforeach
        </div>

      </div>
      <!-- End Categories -->

      <!-- Products -->
      <div class="container g-pb-100">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Featured Products</h2>
          <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth – but let's you still live life in style.</p>
        </div>

        <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10"
             data-infinite="true"
             data-slides-show="4"
             data-lazy-load="ondemand"
             data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-45 g-height-45 g-color-gray-dark-v5 g-bg-secondary g-color-white--hover g-bg-primary--hover rounded"
             data-arrow-left-classes="fa fa-angle-left g-left-10"
             data-arrow-right-classes="fa fa-angle-right g-right-10"
             data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-20 text-center">
            @foreach($products as $product)
            <div class="js-slide">
            <div class="g-px-10">
              <!-- Product -->
                <a href="{{route('product',[$product->id,$product->name])}}">
              <figure class="g-pos-rel g-mb-20">
                <img class="img-fluid" data-lazy="{{config('app.sstore').Storage::url($product->image->path)}}" alt="Image Description">

                <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                  <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover"
                     href="#!">New Arrival</a>
                </figcaption>
              </figure>
                </a>
              <div class="media">
                <!-- Product Info -->
                <div class="d-flex flex-column">
                  <h4 class="h6 g-color-black mb-1">
                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="{{route('product',[$product->id,$product->name])}}">
                      {{$product->name}}
                    </a>
                  </h4>
                  <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">{{$product->name}}</a>
                  <span class="d-block g-color-black g-font-size-17">{{number_format($product->price->price)}} TSH</span>
                </div>
                <!-- End Product Info -->

                <!-- Products Icons -->
                <ul class="list-inline media-body text-right">
                  <li class="list-inline-item align-middle mx-0">
                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                       href="{{route('add_to_cart',[$product->id])}}"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Add to Cart">
                      <i class="icon-finance-100 u-line-icon-pro"></i>
                    </a>
                  </li>
                  <li class="list-inline-item align-middle mx-0">
                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Add to Wishlist">
                      <i class="icon-medical-022 u-line-icon-pro"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Products Icons -->
              </div>
              <!-- End Product -->
            </div>
          </div>
            @endforeach

        </div>
      </div>
      <!-- End Products -->

    <hr>

      <!-- New Arrivals -->
      <section class="container g-py-80">
        <div class="text-center mx-auto g-max-width-800 g-mb-50">
          <h2 class="g-color-black mb-4">WHO WE ARE?</h2>
          <p class="lead">
              We are Skin Experts,<br> Ready To Help You Achieve A Healthy Glowing Skin (Face and Body) and Smooth Feet.
          </p>
        </div>

{{--        <div class="row g-mx-minus-10 g-mb-50">--}}
{{--            @foreach($products as $product)--}}
{{--              <div class="col-md-6 col-lg-4 g-px-10">--}}
{{--                <!-- Article -->--}}
{{--                <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">--}}
{{--                  <!-- Article Image -->--}}
{{--                  <div class="g-max-width-100 g-mr-15">--}}
{{--                      <a href="{{route('product',[$product->id,$product->name])}}">--}}
{{--                    <img class="d-flex w-100" src="{{config('app.sstore').Storage::url($product->image->path)}}" alt="Image Description">--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--                  <!-- End Article Image -->--}}

{{--                  <!-- Article Info -->--}}
{{--                  <div class="media-body align-self-center">--}}
{{--                    <h4 class="h5 g-mb-7">--}}
{{--                      <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="{{route('product',[$product->id,$product->name])}}">{{$product->name}}</a>--}}
{{--                    </h4>--}}
{{--                    <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">--}}

{{--                    </a>--}}
{{--                    <!-- End Article Info -->--}}

{{--                    <!-- Article Footer -->--}}
{{--                    <footer class="d-flex justify-content-between g-font-size-16">--}}
{{--                      <span class="g-color-black g-line-height-1">{{number_format($product->price->price)}} TSH</span>--}}
{{--                      <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">--}}
{{--                        <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">--}}
{{--                          <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="{{route('add_to_cart',[$product->id])}}" title="Add to Cart"--}}
{{--                             data-toggle="tooltip"--}}
{{--                             data-placement="top">--}}
{{--                            <i class="icon-finance-100 u-line-icon-pro"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item align-middle">--}}
{{--                          <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"--}}
{{--                             data-toggle="tooltip"--}}
{{--                             data-placement="top">--}}
{{--                            <i class="icon-medical-022 u-line-icon-pro"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                      </ul>--}}
{{--                    </footer>--}}
{{--                    <!-- End Article Footer -->--}}
{{--                  </div>--}}
{{--                </article>--}}
{{--                <!-- End Article -->--}}
{{--              </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}

{{--        <div class="text-center">--}}
{{--          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="{{route('grid')}}">All New Arrivals</a>--}}
{{--        </div>--}}
      </section>
      <!-- End New Arrivals -->
    <hr>

      <!-- News -->
      <div class="container g-pt-100 g-pb-70">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Tips & Guide</h2>
          <p class="lead">Keep in touch with the latest tips &amp; guide.</p>
        </div>

        <div class="row g-mx-minus-10">
            @foreach($tips as $tip)
                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <!-- Blog Background Overlay Blocks -->
                    <article class="u-block-hover">
                      <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="d-flex align-items-end u-block-hover__main--mover-down"
                             src="{{config('app.sstore').Storage::url($tip->image)}}" alt="Image Description">
                      </div>
                      <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                        <div class="u-block-hover__visible g-pa-25">
                          <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">{{$tip->category->name}}</span>
                          <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                            <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="{{route('tip',[$tip->id,$tip->title])}}">{{$tip->title}}</a>
                          </h2>
                          <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                            By,
                            <a class="g-color-white-opacity-0_7 text-uppercase" href="{{route('tip',[$tip->id,$tip->title])}}">{{$tip->author}}</a>
                          </h4>
                          <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                          <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">{{date('d M Y',strtotime($tip->created_at))}}</span>
                        </div>

                        <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                           href="{{route('tip',[$tip->id,$tip->title])}}">Read more</a>
                      </div>
                    </article>
                    <!-- End Blog Background Overlay Blocks -->
                  </div>
            @endforeach
        </div>
      </div>
      <!-- End News -->
@endsection
