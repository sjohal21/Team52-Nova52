<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        //
        Category::create(attributes: [
            'name' => 'Laptop',
        ]);

        Category::create([
            'name' => 'Smartphone',
        ]);

        Category::create([
            'name'=> 'Tablet',
        ]);

        Category::create([
            'name'=> 'Desktop',
        ]);

        Category::create([
            'name'=> 'Audio',
        ]);
    }
}
