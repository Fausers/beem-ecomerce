<?php

namespace App\Http\Livewire\Com;

use App\Models\Com\CartItem;
use Livewire\Component;

class ItemTotal extends Component
{
    public $total_price;
    public $item_id;

    protected $listeners = ['postAdded' => 'updateTotal'];

    public function updateTotal()
    {
        $cart = CartItem::findOrFail($this->item_id);
        $this->total_price = $cart->total_price;
    }

    public function render()
    {
        return view('livewire.com.item-total');
    }
}
