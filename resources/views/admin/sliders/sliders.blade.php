@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Sliderlar</h6>
        <a href="{{ route('admin.sliders.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Ekle</a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table data-table="sliders" id="sortable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="th-sortable">#</th>
                            <th class="th-image">Resim</th>
                            <th>Adı (tr)</th>
                            <th>Adı (en)</th>
                            <th class="th-2">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr data-index="{{ $slider->id }}" data-position="{{ $slider->position }}">
                                <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                                <td class="p-0"><img src="{{ $slider->image }}" class="img-fluid"></td>
                                <td>{{ $slider->name_tr }}</td>
                                <td>{{ $slider->name_en }}</td>
                                <td>
                                    <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Düzenle</a>
                                    <button data-route="{{ route('admin.sliders.destroy', $slider->id) }}" class="delete-btn btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Kaldır</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
