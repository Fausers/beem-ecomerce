<?php

namespace App\Models\Com;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(\App\Models\Com\Product::class,'product_category')->orderBy('id','desc');
    }

    public function categories()
    {
        return $this->hasMany(\App\Models\Com\Category::class);
    }
}
