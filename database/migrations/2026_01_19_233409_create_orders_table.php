<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_orders_table.php

public function up()
{
    // Sipariş Başlığı (Kişi Bilgileri)
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Ad Soyad
        $table->string('title')->nullable(); // Ünvan
        $table->string('company')->nullable(); // Firma İsmi
        $table->string('phone');
        $table->string('email');
        $table->string('country');
        $table->text('message')->nullable(); // Müşteri notu
        $table->string('ip_address')->nullable();
        $table->enum('status', ['new', 'read', 'completed'])->default('new');
        $table->timestamps();
    });

    // Sipariş Kalemleri (Hangi ürün, kaç adet)
    Schema::create('order_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('order_id')->constrained()->onDelete('cascade');
        $table->foreignId('product_id')->constrained(); // Ürün ID
        $table->string('product_name'); // Ürün adı (silinirse diye yedek)
        $table->string('product_code')->nullable(); // GYP Kodu
        $table->integer('quantity'); // Adet
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
