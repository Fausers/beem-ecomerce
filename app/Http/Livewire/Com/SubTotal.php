<?php

namespace App\Http\Livewire\Com;

use App\Models\Com\Cart;
use Livewire\Component;

class SubTotal extends Component
{
    public $sub_total;
    public $cart_id;

    protected $listeners = ['postAdded' => 'updateTotal'];

    public function updateTotal()
    {
        $cart = Cart::findOrFail($this->cart_id);
        $this->sub_total = $cart->sub_total;
    }


    public function render()
    {
        return view('livewire.com.sub-total');
    }
}
