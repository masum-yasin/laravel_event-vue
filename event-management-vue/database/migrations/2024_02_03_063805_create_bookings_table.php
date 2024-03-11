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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
             $table->string('customer_name',60);
            $table->string('email',100)->nullable();
            $table->integer('phone_number');
            // $table->string('event_catalog',100)->nullable();
            $table->string('description',500);
            $table->string('member');
            $table->string('booking_price');
            $table->string('payment_method');
            $table->string('t_id');
            $table->string('event_category',100);
            $table->text('address',200);
            $table->tinyInteger('eventtype_id')->nullable();
            $table->tinyInteger('customer_id')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
