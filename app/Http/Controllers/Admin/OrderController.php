<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // 1. Teklif Listesi
    public function index()
    {
        $orders = Order::latest()->get(); // En yeniden eskiye sırala
        return view('admin.orders.index', compact('orders'));
    }

    // 2. Teklif Detayı
    public function show($id)
    {
        $order = Order::with('items')->findOrFail($id);

        // Eğer teklif "Yeni" durumundaysa, detayına girince "Okundu" yapalım.
        if($order->status == 'new') {
            $order->update(['status' => 'read']);
        }

        return view('admin.orders.show', compact('order'));
    }

    // 3. Durum Güncelleme
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Sipariş durumu güncellendi.');
    }

    // 4. Silme
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(['success' => 'Teklif başarıyla silindi.']);
    }
}
