<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\Null_;
uses(RefreshDatabase::class);
// Checkout, Add to basket, Change quantity

// Checks to see that the main page is loading correctly

beforeEach(function() {
    $user -> user = \App\Models\User::factory()->create([
        'name' => 'Testing User',
        'phone_number' => '0123456789',
        'address' => null,
        'email' => 'testing@email.com',
        'role' => 'Customer',
        'password' => bcrypt('test')
    ]);

    $user -> actingAs($user->user);

});

it('main page loads correctly', function () {
    $response = $this->get(route('home.index'));

    $response -> assertSuccessful();

    //$this -> assertEquals('artisan', $this -> hey);

});

it ('User can log in', function() {
    $response = $this -> post(route('login'), [
        'email' => $user -> email,
        'password' => 'test'
    ]);

    $response -> assertRedirect(route('home.index'));
    $this -> assertAuthenticatedAs($user);
});


//TODO: Add Item to Basket
it ('Adds Item to basekt', function() {
    
});


//TODO: Change quantity in Basket
