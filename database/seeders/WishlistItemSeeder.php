<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use App\Models\WishlistItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistItemSeeder extends Seeder
{
    public function run(): void
    {
        WishlistItem::create([
            'wishlist_id' => 1,
            'product_id' => 1
        ]);
    }
}
