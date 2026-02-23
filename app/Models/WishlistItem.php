<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    protected $fillable = [
        'product_id',
        'wishlist_id'
    ];
    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
    // Associate WishlistItems with the products table
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
