<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\Null_;
uses(RefreshDatabase::class);
// Checkout, Add to basket, Change quantity

// Checks to see that the main page is loading correctly

beforeEach(function() {
    $this -> user = \App\Models\User::factory()->create([
        'name' => 'Testing User',
        'phone_number' => '0123456789',
        'address' => null,
        'email' => 'testing@email.com',
        'role' => 'Customer',
        'password' => bcrypt('test')
    ]);

    $this -> basket = \App\Models\Basket::factory()->create([
        'user_id ' => $this -> user -> id
    
    ]);

    $this -> category = \App\Models\Category::factory()->create([
        'name' => "TestCategory"
    ]);

    $this -> product = \App\Models\Product::factory()->create([
        'name' => "Test Product",
        'category_id' => $this -> category -> id,
        'stock_level' => 100,
        'description' => null,
        'photo_url' => null,
        'price' => 99.99
    ]); 

    

});

it('main page loads correctly', function () {
    $response = $this->get(route('home.index'));

    $response -> assertSuccessful();

    //$this -> assertEquals('artisan', $this -> hey);

});

it ('User can log in', function() {
    $response = $this -> post(route('login'), [
        'email' => $this -> user -> email,
        'password' => 'test'
    ]);

    $response -> assertRedirect(route('home.index'));
    $this -> assertAuthenticatedAs($this -> user);
});


//TODO: Add Item to Basket
it ('Adds Item to basekt', function() {
    
});


//TODO: Change quantity in Basket
