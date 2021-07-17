<?php

namespace App\Http\Controllers;

use App\Models\Com\Blog;
use App\Models\Com\Category;
use App\Models\Com\Product;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $products = Product::where('status',1)->limit(12)->get();
        $tips = Blog::limit(3)->get();
        $categories = Category::where('category_id',null)->get();
        return view('welcome',compact('products','categories','tips'));
    }
}
