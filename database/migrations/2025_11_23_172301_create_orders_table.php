<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {

            // Order Number
            $table->id();

            //Foreign Key
            $table->foreignId('user_id')->references('id')->on('users');

            // Delivery Info
            $table->string('First_Name');
            $table->string('Surname');
            $table->string('Email_Address');
            $table->string('Phone_Number');
            $table->string('Address_Line_1');
            $table->string('Address_Line_2')->nullable(); // Optional
            $table->string('City');
            $table->string('Postcode');
            $table->string('Select_Country');

            // Status
            $table->string('status')->default('pending');

            // Total Price
            $table->decimal('total_price', 10, 2);

            // Time Of Order
            $table->timestamps();
         
            // **Not needed as basket resets after order is placed**
            //   $table->integer('basket_id');
            //   $table->foreign('basket_id')->references('id')->on('baskets');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
