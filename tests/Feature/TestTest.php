<?php

// Checks to see that the main page is loading correctly

it('main page loads correctly', function () {
    $response = $this->get(route('home.index'));

    $response -> assertSuccessful();

    //$this -> assertEquals('artisan', $this -> hey);

});

