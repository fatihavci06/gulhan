<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'name',
        'title',
        'company',
        'phone',
        'email',
        'country',
        'message',
        'ip_address',
        'status', // 'new', 'read', 'completed'
    ];

    /**
     * İlişki: Bir Siparişin (Teklifin) birden fazla kalemi (ürünü) vardır.
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
