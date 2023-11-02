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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('discription')->nullable();
            $table->string('category')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity_stock')->nullable();
            $table->unsignedBigInteger('supplier_id');
            $table->date('date_add')->nullable();
            $table->timestamps();

            $table->foreign('supplier_id')
            ->references('id')
            ->on('suppliers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
