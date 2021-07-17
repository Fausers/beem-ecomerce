<?php

namespace App\Models\Com;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'region',
        'district',
        'ward',
        'plot',
        'phone',
        'email',
        'status',
    ];

    public function cart()
    {
        return $this->belongsTo(\App\Models\Com\Cart::class);
    }
}
