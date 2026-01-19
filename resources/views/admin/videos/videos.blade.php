@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Videolar</h6>
        <a href="{{ route('admin.videos.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Ekle</a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="th-image">Resim</th>
                            <th>Adı (tr)</th>
                            <th>Adı (en)</th>
                            <th class="th-2">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr data-index="{{ $video->id }}" data-position="{{ $video->position }}">
                                <td class="p-0"><img src="{{ $video->image }}" alt="" class="img-fluid"></td>
                                <td>{{ $video->name_tr }}</td>
                                <td>{{ $video->name_en }}</td>
                                <td>
                                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Düzenle</a>
                                    <button data-route="{{ route('admin.videos.destroy', $video->id) }}" class="delete-btn btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Kaldır</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
