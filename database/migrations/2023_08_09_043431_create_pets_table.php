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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('species');
            $table->string('name');
            $table->string('breed');
            $table->timestamp('birthday');
            $table->text('gender');
            $table->text('size');
            $table->text('description');
            $table->text('availability_status');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('shelter_id');
            $table->timestamps();

            $table->foreign('shelter_id')->references('id')->on('shelters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
