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
        Schema::create('basket_items', function (Blueprint $table) { // BasketItems is basket_items
            $table->id();
            $table->foreignId('basket_id')->constrained('baskets')->onDelete('cascade'); //If u delete basket it deltes the basket items from database
             $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Because in thoery if you delete a product it should delete from basket items too
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basketitems');
    }
};
