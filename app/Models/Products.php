<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'category_id', 'stock_level', 'description', 'photo_url', 'price'];

    
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
}
