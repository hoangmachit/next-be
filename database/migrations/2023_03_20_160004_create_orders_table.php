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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('post_code', 255)->nullable();
            $table->string('message', 255)->nullable();
            $table->date('birth_day')->nullable();
            $table->double('discount', 12, 2)->default(0);
            $table->date('order_date')->nullable();
            $table->double('add_point', 12, 0)->default(0);
            $table->double('use_point', 12, 0)->default(0);
            $table->double('total', 12, 2)->default(0);
            $table->string('note', 255)->nullable();
            $table->timestamps();
            #$table->foreign('order_status_id')->references('id')->on('order_status');
            #$table->foreign('payment_id')->references('id')->on('payment');
            #$table->foreign('device_id')->references('id')->on('device');
            #$table->foreign('customer_id')->references('id')->on('customer');
            #$table->foreign('job_id')->references('id')->on('job');
            #$table->foreign('sex_id')->references('id')->on('sex');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
