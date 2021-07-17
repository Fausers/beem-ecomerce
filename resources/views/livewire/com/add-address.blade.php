@if($add == 1)
<div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-30">
  <h3 class="h5 mb-3">Add Address</h3>

  <form method="POST" action="{{route('store_address')}}">
      @csrf
    <div class="row">
        <div class="col-sm-6 form-group g-mb-20">
        <label class="g-color-text g-font-size-13">Full name</label>
        <input required class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
               type="text" placeholder="Recipient Name" name="name">
      </div>

      <div class="col-sm-6 form-group g-mb-20">
        <label class="g-color-text g-font-size-13">Region/City</label>
        <input required class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
               type="text" placeholder="City/Region" name="region">
      </div>

      <div class="col-sm-6 form-group g-mb-20">
        <label class="g-color-text g-font-size-13">District</label>
        <input required class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
               type="text" placeholder="City" name="district">
      </div>

      <div class="col-sm-6 form-group g-mb-20">
        <label class="g-color-text g-font-size-13">Town/Ward</label>
        <input required class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
               type="text" placeholder="District" name="ward">
      </div>

      <div class="col-sm-6 form-group g-mb-20">
        <label class="g-color-text g-font-size-13">Plot/House No</label>
        <input required class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
               type="text" placeholder="Address" name="plot">
      </div>

        <div class="col-sm-6 form-group g-mb-20">
        <label class="g-color-text g-font-size-13">Phone</label>
        <input required class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15"
               type="text" placeholder="+255 765 204 506" name="number">
      </div>
    </div>
    <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Save Address</button>
    <span class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 pull-right" wire:click="hidde">Hidde Address</span>
  </form>
</div>
<!-- End Contact Form -->
@else
<span class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" wire:click="show">Add Address</span>
@endif
