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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name_tr');
            $table->string('name_en');
            $table->string('short_description_tr');
            $table->string('short_description_en');
            $table->text('video_tr');
            $table->text('video_en');
            $table->string('slug_tr');
            $table->string('slug_en');
            $table->integer('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
