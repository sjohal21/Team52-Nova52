<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'NovaBook Lite  14"',
            'description' => 'NovaBook Lite 14 is targeted at users who want simplicity; a laptop that will get the job 
            done. This makes it perfect for students, home use, or light office work. It has smooth 
            performance for browsing, emails, documents, streaming and basic multitasking. Its 
            lightweight design makes it easy to carry, while an efficient battery keeps you productive 
            throughout the day',
            'price' => '349.00',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBook Air 14"',
            'description' => 'The NovaBook Air 14” is designed for users looking for the perfect blend of speed, 
            portability and endurance. With its slim aluminium construction, combined with the 
            powerful 10-core processor, it’s perfect for students, professionals and everyday 
            multitaskers. NovaBook Air 14” performs consistently and reliably, with excellent 
            battery life',
            'price' => '549.00',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);

        Product::create([
            'name' => 'NovaBook Pro 15"',
            'description' => 'The NovaBook Pro 15” is designed for users who need more power than provided by a 
            regular, everyday laptop, with a larger 15.6” display and a high performance 12-core 
            processor, it’s ideal for productivity, creative work, multitasking and running heavier applications.
            
            Precision-tuned cooling system and fast SSD ensure smooth performance under load, 
            while the premium chassis provides durability without extra bulk',

            'price' => '899.00',
            'stock_level' => '100',
            'category_id' => 1,
            'photo_url' => null,
        ]);
    }
}
