<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Models\Com\Blog;
use App\Models\Com\Category;
use App\Models\Com\Product;
use App\Models\Com\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function grid()
    {
        $products = Product::where('status',1)->paginate(28);
//        return $products->currentPage();
        return view('com.products.grid',compact('products'));
    }

    public function list()
    {
        $products = Product::where('status',1)->paginate(15);
        return view('com.products.list',compact('products'));
    }

    public function contactUs()
    {
        return view('com.contact_us');
    }

    public function stores()
    {
        $stores = Shop::get();
        return view('com.stores',compact('stores'));
    }

    public function product($id,$name)
    {
        $product = Product::findOrFail($id);
        $tips = Blog::limit(3)->get();

        return view('com.products.prod',compact('product','tips'));
    }

    public function category(Request $request,$name , $page = 1, $limit = 19 )
    {
//        $products = Product::where('category_id',$category->id)->paginate(15);
        $cat_name = urldecode($name);
        $category = Category::where('name',$cat_name)->first();

        if (!isset($category->category_id)){
            foreach ($category->categories as $child_category){
                foreach ($child_category->categories as $product_category){
                    if (count($product_category->products) > 0)
                        $productss[] = $product_category->products;
                }

            }
            if (!isset($productss))
                $productss[] = $category->products;
        }else{
            $productss = $category->products;
        }

        if (!isset($request->page))
            $request->page = 1;

        $count = count($productss);
        if (!isset($category->category_id)){
            $sliced_products = (array_slice($productss[0]->all(), ($request->page-1) * $limit, $limit, true));
        }else{
            $sliced_products = (array_slice($productss->all(), ($request->page-1) * $limit, $limit, true));
        }

        $products = new LengthAwarePaginator($sliced_products,  $count, $limit, $request->page, [
            'path'  => $request->url(),
            'query' => $request->query(),
        ]);

        return view('com.products.category',compact('products','category'));
    }

    public function account()
    {
        return view('pages.user.home');
    }

    public function orders()
    {
        return view('pages.user.orders');
    }

    public function openOrders()
    {
        return view('pages.user.open_orders');
    }

    public function closedOrders()
    {
        return view('pages.user.closed_orders');
    }

    public function cancelledOrders()
    {
        return view('pages.user.cancelled_orders');
    }

    public function wishlist()
    {
        return view('pages.user.wishlist');
    }

    public function address()
    {
        $user = Auth::user();
        $addresses = $user->addresses;
        return view('pages.user.addresses',compact('addresses'));
    }

    public function payments()
    {
        return view('pages.user.payment_options');
    }

    public function security()
    {
        return view('pages.user.security');
    }

    public function notifications()
    {
        return view('pages.user.notifications');
    }


    public function checkout()
    {
        return view('com.checkout.checkout');
    }
}
