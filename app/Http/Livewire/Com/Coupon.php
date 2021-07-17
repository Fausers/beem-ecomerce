<?php

namespace App\Http\Livewire\Com;

use App\Http\Controllers\Commerce\CartController;
use App\Models\Com\Coupon as Discount;
use App\Models\Com\Cart;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Coupon extends Component
{
    public $status;
    public $cart_id;
    public $percent;

    protected $listeners = ['applyCoupon','updateCoupon'];


    public function applyCoupon($sta)
    {
        $discount = Discount::where('code',$sta)->first();
        $cart = Cart::findOrFail($this->cart_id);
        if (isset($discount)){
            $cart->coupon_id = $discount->id;
            $cart->save();

            $cart_control = new CartController;
            $cart_control->updateCart($this->cart_id);


            session()->flash('flash_danger', 'Discount Added!');
            $this->emit('postAdded');
            $this->emit('Notify');

        }


        // $this->total_price = $cart->total_price;

    }

    public function updateCoupon()
    {
        // code...
    }


    public function render()
    {
        $cart = Cart::findOrFail($this->cart_id);
        $this->status = $cart->total_price - $cart->sub_total;
        $this->percent = round(($this->status / $cart->sub_total) * -100);

        session()->flash('flash_success', 'Discount Added!');

        return view('livewire.com.coupon');
    }
}
