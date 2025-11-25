<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
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
            return $item->quantity->price * $item->quantity;
        })
    }
    
    public function totalItems()
    {
        return $this->items->sum('quantity');
    }
}

