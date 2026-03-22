<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnedItem extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'user_id',
        'reason',
        'refund_amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
