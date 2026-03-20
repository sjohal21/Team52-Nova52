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
        Schema::create('returned_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('order_id')->references('id')->on('orders');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('reason');
            $table->decimal('refund_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returned_items');
    }
};
