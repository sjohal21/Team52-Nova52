<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'wishlist_id'
    ];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
}
