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
        Schema::create('sale_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sale_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quentity_sold')->nullable();
            $table->integer('unit_price')->nullable();
            $table->timestamps();

            $table->foreign('sale_id')
            ->references('id')
            ->on('sales')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_items');
    }
};
