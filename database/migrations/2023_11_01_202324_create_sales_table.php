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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->date('date_time')->nullable();
            $table->integer('total_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->unsignedBigInteger('staff_id');
            $table->timestamps();

            $table->foreign('customer_id')
            ->references('id')
            ->on('customers')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('staff_id')
            ->references('id')
            ->on('staff')
            ->onUpdate('cascade')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
