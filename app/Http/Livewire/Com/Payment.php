<?php

namespace App\Http\Livewire\Com;

use Livewire\Component;

class Payment extends Component
{
    public $method;

    protected $listeners = ['paymentMethodType'];

    public function paymentMethodType($method)
    {
        $this->method = $method;
    }


    public function render()
    {
        return view('livewire.com.payment');
    }
}
