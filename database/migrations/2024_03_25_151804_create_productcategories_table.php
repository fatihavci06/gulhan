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
        Schema::create('productcategories', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name_tr', 91);
            $table->string('name_en', 91);
            $table->integer('category_id')->nullable();
            $table->string('slug_tr', 135);
            $table->string('slug_en', 135);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productcategories');
    }
};
