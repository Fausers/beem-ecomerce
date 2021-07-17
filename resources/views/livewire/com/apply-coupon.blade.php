<div id="accordion-02" role="tablist" aria-multiselectable="true">
    <div id="accordion-02-heading-02" role="tab">
      <h5 class="g-font-weight-400 g-font-size-default mb-0">
        <a class="g-color-black g-text-underline--none--hover" href="#accordion-02-body-02" data-toggle="collapse" data-parent="#accordion-02" aria-expanded="false" aria-controls="accordion-02-body-02">
        Apply discount code.
          <span class="ml-3 fa fa-angle-down"></span></a>
      </h5>
    </div>
    <div id="accordion-02-body-02" class="" role="tabpanel" aria-labelledby="accordion-02-heading-02">
      <div class="input-group rounded g-pt-15">
        <input class="form-control g-brd-gray-light-v1 g-brd-right-none g-color-gray-dark-v3 g-placeholder-gray-dark-v3" wire:model.defer="code" type="text" placeholder="Enter discount code">
        <span class="input-group-append g-brd-gray-light-v1 g-bg-white">
          <button class="btn u-btn-primary" type="button" :code="$code" wire:click="apply">Apply</button>
        </span>
      </div>
    </div>
</div>