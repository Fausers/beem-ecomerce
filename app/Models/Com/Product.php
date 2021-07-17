<?php

namespace App\Models\Com;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(\App\Models\Com\Category::class);
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Com\Category::class,"product_category")->orderBy('id','desc');
    }

    public function price()
    {
        return $this->hasOne(\App\Models\Com\Price::class);
    }

    public function shop()
    {
        return $this->belongsTo(\App\Models\Com\Shop::class);
    }

    public function prices()
    {
        return $this->hasMany(\App\Models\Com\Price::class)->withTrashed();
    }

    public function image()
    {
        return $this->hasOne(\App\Models\Com\ProductImage::class);
    }

    public function images()
    {
        return $this->hasMany(\App\Models\Com\ProductImage::class);
    }

    public function properties()
    {
        return $this->hasMany(\App\Models\Com\Property::class);
    }
}
