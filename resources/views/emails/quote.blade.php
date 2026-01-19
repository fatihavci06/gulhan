<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { width: 100%; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; }
        .header { background: #1E56A6; color: #fff; padding: 15px; text-align: center; }
        .info-table { width: 100%; margin-bottom: 20px; border-collapse: collapse; }
        .info-table td { padding: 8px; border-bottom: 1px solid #eee; }
        .product-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .product-table th { background: #f4f4f4; text-align: left; padding: 10px; border-bottom: 2px solid #ddd; }
        .product-table td { padding: 10px; border-bottom: 1px solid #ddd; }
        .label { font-weight: bold; width: 120px; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Yeni Teklif Talebi</h2>
            <p>Referans No: #{{ $order->id }}</p>
        </div>

        <h3>Müşteri Bilgileri</h3>
        <table class="info-table">
            <tr><td><span class="label">Ad Soyad:</span> {{ $order->name }}</td></tr>
            <tr><td><span class="label">Firma:</span> {{ $order->company ?? '-' }}</td></tr>
            <tr><td><span class="label">Ünvan:</span> {{ $order->title ?? '-' }}</td></tr>
            <tr><td><span class="label">Telefon:</span> {{ $order->phone }}</td></tr>
            <tr><td><span class="label">E-Posta:</span> {{ $order->email }}</td></tr>
            <tr><td><span class="label">Ülke:</span> {{ $order->country }}</td></tr>
        </table>

        @if($order->message)
            <div style="background: #f9f9f9; padding: 15px; border-left: 4px solid #1E56A6; margin-bottom: 20px;">
                <strong>Müşteri Mesajı:</strong><br>
                {{ $order->message }}
            </div>
        @endif

        <h3>İstenen Ürünler</h3>
        <table class="product-table">
            <thead>
                <tr>
                    <th>Ürün</th>
                    <th>Kod</th>
                    <th style="text-align: center;">Adet</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_code }}</td>
                    <td style="text-align: center;">{{ $item->quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p style="text-align: center; font-size: 12px; color: #999; margin-top: 30px;">
            Bu e-posta {{ date('d.m.Y H:i') }} tarihinde web sitesi üzerinden gönderilmiştir.
        </p>
    </div>
</body>
</html>
