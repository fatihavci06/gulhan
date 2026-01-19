@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Haber Ekle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.blogs.index') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- image --}}
                <div class="col-md-12">
                    <label for="image" class="form-label">Resim</label>
                    <div id="previewImage" class="my-2"></div>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_tr --}}
                <div class="col-md-6">
                    <label for="name_tr" class="form-label">Adı (tr)</label>
                    <input type="text" name="name_tr" value="{{ old('name_tr') }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" required>
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en') }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" required>
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- categories --}}
                <div class="col-md-12">
                    <label for="categories" class="form-label">Kategoriler</label>
                    <select name="categories[]" class="multiple-select-field form-select" id="categories" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'selected' : '' }}>{{ $category->name_tr }} - {{ $category->name_en }}</option>
                        @endforeach
                    </select>
                    @error('categories') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- description_tr --}}
                <div class="col-md-12">
                    <label for="description_tr" class="form-label">Açıklama (tr)</label>
                    <textarea name="description_tr" id="description_tr" rows="9" class="form-control">{{ old('description_tr') }}</textarea>
                    @error('description_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- description_en --}}
                <div class="col-md-12">
                    <label for="description_en" class="form-label">Açıklama (en)</label>
                    <textarea name="description_en" id="description_en" rows="9" class="form-control">{{ old('description_en') }}</textarea>
                    @error('description_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- multi photos --}}
                <div class="col-md-12">
                    <label for="images">Ek resimler</label>
                    <table id="addMultiPhotoTable" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Resim</th>
                                <th style="width: 139px;">
                                    <button type="button" class="add-multi-photo btn btn-success btn-sm">Ekle</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </td>
                                <td>
                                    <button type="button" class="delete-multi-photo btn btn-danger btn-sm">Kaldır</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center justify-content-end gap-3">
                        <button type="submit" class="btn btn-primary px-4">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')
<script>
    $(document).ready(function(){
        $('.add-multi-photo').on('click', function(){
            let html = `
                <tr>
                    <td>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </td>
                    <td>
                        <button type="button" class="delete-multi-photo btn btn-danger btn-sm">Kaldır</button>
                    </td>
                </tr>
            `

            $('#addMultiPhotoTable tbody').append(html)
        })

        // Delegasyon kullanarak delete-multi-photo butonlarına olay dinleyicisi ekle
        $('#addMultiPhotoTable tbody').on('click', '.delete-multi-photo', function(){
            // Sil düğmesinin üstündeki tr öğesini bul ve sil
            $(this).closest('tr').remove();
        });
    })
</script>
@endsection
