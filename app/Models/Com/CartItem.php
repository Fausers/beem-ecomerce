<?php

namespace App\Models\Com;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo(\App\Models\Com\Product::class)->withTrashed();
    }

    public function cart()
    {
        return $this->belongsTo(\App\Models\Com\Cart::class);
    }
}
