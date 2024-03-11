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
        Schema::create('evtemplys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id');
            $table->string('emply_name',50);
            $table->integer('phone');
            $table->string('email',60);
            $table->string('working_location',150);
            $table->date('joining_date')->nullable();
            $table->date('regained_date')->nullable();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evtemplys');
    }
};
