<ul class="list-unstyled mb-5">
 <li class="g-brd-bottom g-brd-gray-light-v3 pb-3 my-3">
   <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
      <input wire:click="delivery" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
        <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
          <i class="fa" data-check-icon="&#xf00c"></i>
        </span>
        Pay On delivery
      <img class="g-width-70 ml-2" src="{{url('/')}}/images/cash-on-delivery-icon-14.jpg" alt="Image Description">
    </label>
  </li>
  <li class="my-3">
    <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0"
             wire:click="online" name="radInline1_1" type="radio" >
        <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
          <i class="fa" data-check-icon="&#xf00c"></i>
        </span>
        Pay with Credit Card or Mobile Money
      <img class="g-width-50 ml-2" src="{{url('/')}}/assets/img-temp/200x55/img2.jpg" alt="Image Description">
        <img class="g-width-70 ml-2" src="{{url('/')}}/assets/img-temp/200x55/img1.jpg" alt="Image Description">
    </label>
  </li>
</ul>
