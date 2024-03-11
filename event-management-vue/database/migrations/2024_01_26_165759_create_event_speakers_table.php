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
        Schema::create('event_speakers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category_id');
            $table->string('speaker_name');
            $table->string('email');
            $table->integer('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('image', 50)->nullable();
            $table->string('title',50);
             $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_speakers');
    }
};
