@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Gelen Teklifler</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>Firma</th>
                            <th>Durum</th>
                            <th>Tarih</th>
                            <th class="th-2">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">{{ $order->name }}</span>
                                        <small class="text-muted">{{ $order->email }}</small>
                                    </div>
                                </td>
                                <td>{{ $order->company ?? '-' }}</td>
                                <td>
                                    @if($order->status == 'new')
                                        <span class="badge bg-danger">Yeni</span>
                                    @elseif($order->status == 'read')
                                        <span class="badge bg-warning text-dark">Okundu</span>
                                    @elseif($order->status == 'completed')
                                        <span class="badge bg-success">Tamamlandı</span>
                                    @endif
                                </td>
                                <td>{{ $order->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i> Detay
                                    </a>
                                    <button data-route="{{ route('admin.orders.destroy', $order->id) }}" class="delete-btn btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Sil
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
