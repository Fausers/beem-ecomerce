<?php

namespace App\Http\Livewire\Com;

use Livewire\Component;

class PaymentMethod extends Component
{

    public function online()
    {
        $this->emit('paymentMethodType', 'online');
    }

    public function delivery()
    {
        $this->emit('paymentMethodType', 'delivery');
    }

    public function render()
    {
        return view('livewire.com.payment-method');
    }
}
