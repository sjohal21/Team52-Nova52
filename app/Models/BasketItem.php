<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    protected $fillable = ['basket_id', 'product_id', 'amount'];
    
    /** @use HasFactory<\Database\Factories\BasketItemFactory> */
    use HasFactory;
}
