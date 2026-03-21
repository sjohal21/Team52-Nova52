<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\Null_;
uses(RefreshDatabase::class);
// Checkout, Add to basket, Change quantity

// Checks to see that the main page is loading correctly

beforeEach(function() {
    $this->user = User::factory()->create([
        'name' => 'Testing User',
        'phone_number' => '0123456789',
        'address' => null,
        'email' => 'testing@email.com',
        'role' => 'Customer',
        'password' => bcrypt('test')
    ]);

    $this -> category = \App\Models\Category::factory()->create([
        'name' => "TestCategory"
    ]);

    $this -> basket = \App\Models\Basket::factory() -> create([
        'user_id' => $this -> user -> id
    ]);

    $this -> product = Product::factory()->create([
        'name' => "Test Product",
        'category_id' => $this->category->id,
        'stock_level' => 100,
        'description' => null,
        'photo_url' => null,
        'price' => 99.99
    ]); 

});

it('main page loads correctly', function () {
    $response = $this->get(route('home'));

    $response -> assertSuccessful();

    //$this -> assertEquals('artisan', $this -> hey);

});

it ('User can log in', function() {

    $this->actingAs($this-> user);

    $response = $this -> post(route('login.submit'), [
        'email' => $this-> user->email,
        'password' => 'test'
    ]);
    $response -> assertRedirect(route('home'));
    $this -> assertAuthenticatedAs($this-> user);
});


//TODO: Add Item to Basket
/*
it ('Adds Item to basket', function() {

});
*/

//TODO: Change quantity in Basket
