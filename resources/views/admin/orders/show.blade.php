@extends('layouts.admin')

@section('content')
<div class="row">
    {{-- Müşteri Bilgileri --}}
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0 text-white">Teklif Detayı (#{{ $order->id }})</h5>
                <span>{{ $order->created_at->format('d.m.Y H:i') }}</span>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-primary">Müşteri Bilgileri</h6>
                        <table class="table table-borderless">
                            <tr>
                                <td width="100" class="fw-bold text-muted">Ad Soyad:</td>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">E-Posta:</td>
                                <td><a href="mailto:{{ $order->email }}">{{ $order->email }}</a></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">Telefon:</td>
                                <td><a href="tel:{{ $order->phone }}">{{ $order->phone }}</a></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">Ülke:</td>
                                <td>{{ $order->country }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold text-primary">Firma Bilgileri</h6>
                        <table class="table table-borderless">
                            <tr>
                                <td width="100" class="fw-bold text-muted">Firma:</td>
                                <td>{{ $order->company ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">Ünvan:</td>
                                <td>{{ $order->title ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">IP Adresi:</td>
                                <td>{{ $order->ip_address }}</td>
                            </tr>
                        </table>
                    </div>
                    @if($order->message)
                    <div class="col-12 mt-3">
                        <div class="alert alert-secondary">
                            <strong>Müşteri Notu:</strong><br>
                            {{ $order->message }}
                        </div>
                    </div>
                    @endif
                </div>

                <h6 class="fw-bold text-primary border-bottom pb-2">İstenen Ürünler</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th>Ürün Adı</th>
                                <th>Kod</th>
                                <th class="text-center">Adet</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                                <tr>
                                    <td>
                                        {{-- Eğer Product modelinde ilişki varsa resim çekilebilir, yoksa sadece isim --}}
                                        {{ $item->product_name }}
                                    </td>
                                    <td>{{ $item->product_code }}</td>
                                    <td class="text-center fw-bold">{{ $item->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Durum Yönetimi Sidebar --}}
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-white">
                <h6 class="mb-0 fw-bold">İşlemler</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Teklif Durumu</label>
                        <select name="status" class="form-select">
                            <option value="new" {{ $order->status == 'new' ? 'selected' : '' }}>Yeni</option>
                            <option value="read" {{ $order->status == 'read' ? 'selected' : '' }}>Okundu / İnceleniyor</option>
                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Tamamlandı / Teklif İletildi</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        <i class="fas fa-save me-1"></i> Durumu Güncelle
                    </button>
                </form>

                <hr>

                <div class="d-grid gap-2">
                    <a href="mailto:{{ $order->email }}" class="btn btn-outline-primary">
                        <i class="fas fa-envelope me-1"></i> Mail Gönder
                    </a>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Listeye Dön
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
