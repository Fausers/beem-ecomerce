<?php

namespace App\Models\Com;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function items()
    {
        return $this->hasMany(\App\Models\Com\CartItem::class);
    }

    public function coupon()
    {
        return $this->belongsTo(\App\Models\Com\Coupon::class);
    }
}
