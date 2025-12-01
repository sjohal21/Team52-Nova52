<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['status', 'user_id', 'basket_id'];

    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;
}
