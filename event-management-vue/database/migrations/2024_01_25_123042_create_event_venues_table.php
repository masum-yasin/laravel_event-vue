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
        Schema::create('event_venues', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category_id');
            $table->string('event_address', 200);
            $table->string('latitude');
            $table->string('longitude');
            $table->string('image', 50)->nullable();
             $table->tinyInteger('sponsors_id')->nullable();
            $table->string('description',300);
             $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_venues');
    }
};
