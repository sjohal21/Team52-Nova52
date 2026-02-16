<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = ['user_id'];
    public function items()
    {
        return $this->hasMany(WishlistItem::class);
    }

    /** @use HasFactory<\Database\Factories\WishlistFactory> */
    use HasFactory;
}
