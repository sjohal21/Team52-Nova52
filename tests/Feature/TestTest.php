<?php

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\Null_;
uses(RefreshDatabase::class);
// Checkout



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
        'email' => $this-> user -> mail,
        'password' => 'test'
    ]);
    $response -> assertRedirect(route('home'));
    $this -> assertAuthenticatedAs($this-> user);
});

it ('Adds Item to basket - Invalid Amount', function() {
    $this -> actingAs($this -> user);

    $response = $this -> post(route('basket'), [
        'product_id' => $this -> product -> id,
        'quantity' => 1000
    ]);
    
    $response -> assertSee('Not enough stock available');
});

it ('Adds Item to basket - Valid Amount', function() {
    $this ->actingAs($this -> user);

    $response = $this -> post(route('basket-add'), [
        'product_id' => $this -> product -> id,
        'quantity' => 1
    ]);

    $response -> assertDontSee('Not enough stock available');

});

//TODO: Change quantity in Basket
it ('Change quantity in basket', function() {
    $this -> actingAs($this -> user);

    $firstResponse = $this -> post(route('basket-add'), [
        'product_id' => $this -> product -> id,
        'amount' => 1
    ]);

    $firstResponse-> assertRedirect();

    $secondResponse = $this -> post(route('basket.update'), [
        'product_id' => $this -> product -> id,
        'amount' => 5
    ]);

    $secondResponse -> assertRedirect(route('basket'));

});

it ('Create a valid order', function() {
    $this -> actingAs($this -> user);

    $response = $this -> post(route())
});
