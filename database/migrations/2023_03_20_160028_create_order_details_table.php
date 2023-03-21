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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 255)->nullable();
            $table->string('product_code', 255)->nullable();
            $table->string('product_image', 255)->nullable();
            $table->double('price', 12, 2)->nullable();
            $table->integer('quantity')->default(1);
            $table->double('tax', 12, 2)->nullable();
            $table->double('tax_rate', 12, 2)->nullable();
            $table->string('currency_code', 255)->nullable();
            $table->string('point_rate', 255)->nullable();
            $table->timestamps();
            #$table->foreign('order_id')->references('id')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
