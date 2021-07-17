<div class="g-brd-bottom g-brd-gray-light-v3 g-pb-30 g-mb-30">
    <div class="text-right">
        <a class="btn u-btn-primary g-font-size-13 text-uppercase g-px-40 g-py-15"
          @if(isset($method))
            href="{{route($method)}}"
            @else
            @endif
        >
            Complete {{$method}} Order
        </a>
    </div>
</div>
