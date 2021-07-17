<td>
    <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="{{$qty}}" readonly>
        <div class="input-group-addon d-flex align-items-center g-width-30 g-brd-gray-light-v2 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
            <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up" wire:click="increment"></i>
            <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down" wire:click="decrement"></i>
        </div>
    </div>
</td>
