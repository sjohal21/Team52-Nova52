<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
    'name',
    'description',
    'price',
    'stock_level',  // ← Changed
    'category_id',
    'photo_url',  // ← Changed
];

    public function basketItems()
    {
        return $this->hasMany(BasketItem::class);
    }
}
