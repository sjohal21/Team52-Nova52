<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    protected $fillable = ['user_id', 'product_id'];

    /** @use HasFactory<\Database\Factories\BasketsFactory> */
    use HasFactory;
}
