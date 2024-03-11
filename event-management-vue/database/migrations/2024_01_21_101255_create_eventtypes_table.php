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
        Schema::create('eventtypes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('categories_id');
            $table->string('event_name')->nullable();
            $table->string('image', 50)->nullable();
            $table->decimal('price',10);
            $table->string('description',200);
            $table->boolean('availibility')->default(0)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventtypes');
    }
};
