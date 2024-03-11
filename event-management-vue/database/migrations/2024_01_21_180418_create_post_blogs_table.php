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
        Schema::create('post_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('post_name',50);
            $table->string('image')->nullable();
            $table->tinyInteger('category_id');
            $table->string('location',100);
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
        Schema::dropIfExists('post_blogs');
    }
};
