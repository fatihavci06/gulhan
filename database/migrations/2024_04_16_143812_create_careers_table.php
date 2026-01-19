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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['man', 'woman']);
            $table->string('name');
            $table->string('surname');
            $table->string('nationality');
            $table->string('address');
            $table->string('district');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->string('cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
