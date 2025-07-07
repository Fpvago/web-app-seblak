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
        $table->id();
        $table->string('customer_name');
        $table->string('payment_method');
        $table->json('items'); // we'll store items as JSON
        $table->integer('total_price');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('orders');
}
};
