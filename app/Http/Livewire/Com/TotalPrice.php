<?php

namespace App\Http\Livewire\Com;

use App\Models\Com\Cart;
use Livewire\Component;

class TotalPrice extends Component
{
    public $total_price;
    public $cart_id;

    protected $listeners = ['postAdded' => 'updateTotal'];

    public function updateTotal()
    {
        $cart = Cart::findOrFail($this->cart_id);
        $this->total_price = $cart->total_price;
    }

    public function render()
    {
        return view('livewire.com.total-price');
    }
}
