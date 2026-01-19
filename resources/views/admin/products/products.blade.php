@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Ürünler</h6>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Ekle</a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table data-table="products" id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="th-image">Resim</th>
                            <th>Adı (tr)</th>
                            <th>Adı (en)</th>
                            <th class="th-2">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr data-index="{{ $product->id }}" data-position="{{ $product->position }}">
                                <td class="p-0"><img src="{{ $product->image }}" alt="" class="img-fluid"></td>
                                <td>{{ $product->name_tr }}</td>
                                <td>{{ $product->name_en }}</td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Düzenle</a>
                                    <button data-route="{{ route('admin.products.destroy', $product->id) }}" class="delete-btn btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Kaldır</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
