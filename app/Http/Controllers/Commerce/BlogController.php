<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Models\Com\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $tips = Blog::get();
        return view('com.blog.index',compact('tips'));
    }

    public function post($id,$name)
    {
        $tip = Blog::findOrFail($id);
        $tips = Blog::where('id','!=',$tip->id)->get();
        return view('com.blog.post',compact('tip','tips'));
    }
}
