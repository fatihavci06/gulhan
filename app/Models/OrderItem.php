<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_id',
        'product_name', // Ürün silinse bile adını tutmak için
        'product_code', // Ürün kodu değişse bile o anki kodu tutmak için
        'quantity',
    ];

    /**
     * İlişki: Bu kalem bir ana siparişe aittir.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * İlişki: Bu kalem gerçek bir ürüne bağlıdır.
     * (Admin panelde resmini veya güncel kategorisini çekmek için kullanılır)
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
