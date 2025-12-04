<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    protected $fillable = [
        'basket_id',
        'product_id',
        'amount',
    ];

    // A basket item belongs to a basket
    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }

    // A basket item belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Helper method: Get subtotal for this item
    public function subtotal()
    {
        return $this->quantity * $this->product->price;
    }

    
    /** @use HasFactory<\Database\Factories\BasketItemFactory> */
}
