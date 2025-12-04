<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'amount',
        // removed product_id as Basket has many BasketItems
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(BasketItem::class);
    }

    public function totalPrice()
    {
        return $this->items->sum(function ($item) {
            return $item->amount*$item->product->price; // changed quantity to amount
        });
    }

    public function totalItems()
    {
        return $this->items->sum('amount');
    }
}

