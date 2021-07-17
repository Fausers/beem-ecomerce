<?php

namespace App\Http\Livewire\Com;

use App\Http\Controllers\Commerce\CartController;
use Livewire\Component;

class Livecart extends Component
{


    public $item_id;
    public $qty;
    public $total_price;
    public $item_price;

    public function increment()
    {
        $this->qty++;
        $cart = new CartController;
        $cart->increment($this->item_id);
        $this->total_price = $this->item_price * $this->qty;

        $this->emit('postAdded');
        $this->emit('updateCoupon');

    }

    public function decrement()
    {
        $this->qty--;
        $cart = new CartController;
        $cart->decrement($this->item_id);
        $this->total_price = $this->item_price * $this->qty;

        $this->emit('postAdded');
        $this->emit('updateCoupon');

    }


    public function render()
    {

        return view('livewire.com.livecart');
    }
}
