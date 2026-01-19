@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Menüler</h6>
        <a href="{{ route('admin.menus.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Ekle</a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table data-table="menus" id="sortable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="th-sortable">#</th>
                            <th>Adı</th>
                            <th>Üst Menü</th>
                            <th class="th-2">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr data-index="{{ $menu->id }}" data-position="{{ $menu->position }}">
                                <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                                <td>{{ $menu->name }}</td>
                                <td>
                                    @if($menu->menu)
                                        {{ $menu->menu->name }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Düzenle</a>
                                    <button data-route="{{ route('admin.menus.destroy', $menu->id) }}" class="delete-btn btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Kaldır</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
