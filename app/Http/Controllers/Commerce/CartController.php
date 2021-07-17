<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Models\Com\Cart;
use App\Models\Com\CartItem;
use App\Models\Com\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function showCart()
    {
        if (isset(Auth::user()->id)) {
            $user_id = Auth::user()->id;
        }

        if (isset($user_id)) {
            $cart = Cart::where('user_id','=',$user_id)
                ->first();

        }else{
            $cart = Cart::where('session_id','=',Session::getId())
                ->first();
        }

        if (!isset($cart))
            return view('com.checkout.cart_empty');

    	return view('com.checkout.checkout',compact('cart'));
    }

    public function addProduct($product_id)
    {
    	$product = Product::findOrFail($product_id);

    	if (isset(Auth::user()->id)) {
    		$user_id = Auth::user()->id;
    	}

    	if (isset($user_id)) {
    		$cart = Cart::
    			where('user_id','=',$user_id)
    			->first();
    	}else{
	    	$cart = Cart::
    			where('session_id','=',Session::getId())
    			->first();
    	}

    	if (!isset($cart)) {
    		$cart = new Cart;
    		if (isset($user_id)) {
		    	$cart->user_id = $user_id;
    		}
		    $cart->session_id = Session::getId();
	    	$cart->save();
    	}
    	// return $cart;

    	$this->addItem($product,$cart->id);

    	$cart = $this->updateCart($cart->id);

        return redirect()->back()->withFlashSuccess('Product Added To Cart');

    }

    public function addItem($product,$cart_id)
    {
    	$cart_item = CartItem::where('product_id','=',$product->id)
    			->where('cart_id','=',$cart_id)
    			->first();

    	if (isset($cart_item)) {
    		$this->updateCart($cart_id);
    		return;
    	}

    	$cart_item = new CartItem;
    	$cart_item->cart_id 	= 	$cart_id;
    	$cart_item->product_id 	= 	$product->id;
    	$cart_item->price 		= 	$product->price->price;
    	$cart_item->total_price = 	$product->price->price;
    	$cart_item->status 		= 	"active";

    	if ($cart_item->save()) {
    		$this->updateCart($cart_id);
    		return;
    	}

    }

    public function increment($item_id)
    {
        $item = CartItem::findOrFail($item_id);
        $cart_id = $item->cart->id;
        $item->quantity++;
        if ($item->save()) {
    		$this->updateCart($cart_id);
    		return $item->total_price;
    	}
    }

    public function decrement($item_id)
    {
        $item = CartItem::findOrFail($item_id);
        $cart_id = $item->cart->id;
        $item->quantity--;
        if ($item->save()) {
    		$this->updateCart($cart_id);
    		return $item->total_price;
    	}
    }

    public function removeItem($item_id)
    {
        $cart_item = CartItem::findOrFail($item_id);

        $cart_id = $cart_item->cart->id;

    	CartItem::destroy($item_id);

    	$this->updateCart($cart_id);

    	return redirect()->back();
    }

    public function updateCart($cart_id)
    {
    	$cart = Cart::findOrFail($cart_id);

    	$total_price = 0;
        $total_items = 0;
    	$sub_total = 0;
    	foreach ($cart->items as $item) {
    	    $item->total_price = $item->quantity * $item->price;
    	    $item->save();
    		$sub_total += $item->total_price;
    		$total_items += 1;
    	}

        if (isset($cart->coupon_id)) {
            if (isset($cart->coupon->amount_off)) {
                $total_price = $sub_total - $cart->coupon->amount_off;
            }else{
                $total_price = $sub_total - ($sub_total * $cart->coupon->percent_off/100);
            }
        }else{
            $total_price = $sub_total;
        }

        $cart->total_price = $total_price;
    	$cart->sub_total = $sub_total;
    	$cart->total_items = $total_items;

    	$cart->save();

    	return $cart;
    }

    public function pay()
    {

    }



}
