<?php

namespace App\Http\Livewire\Com;

use Livewire\Component;

class ApplyCoupon extends Component
{
    public $code;

    public function apply()
    {
        $this->emit('applyCoupon', $this->code);

        $this->emit('Notify');
    }

    public function render()
    {
        return view('livewire.com.apply-coupon');
    }
}
