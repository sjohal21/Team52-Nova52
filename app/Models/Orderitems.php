<?php

namespace App\Models;

 //  *********** Import Required Classes ***********
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;
use App\Models\Product;


class Orderitems extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'amount',
        'price',
    ];

    // Relationships
    // Belongs to Order via order_id
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Belongs to Product via product_id
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
