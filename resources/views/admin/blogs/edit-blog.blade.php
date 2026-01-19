@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Haber Düzenle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.blogs.update', $blog->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

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
                    <input type="text" name="name_tr" value="{{ old('name_tr', $blog->name_tr) }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" required>
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en', $blog->name_en) }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" required>
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- categories --}}
                <div class="col-md-12">
                    <label for="categories" class="form-label">Kategoriler</label>
                    <select name="categories[]" class="multiple-select-field form-select" id="categories" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', $blog->categories->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $category->name_tr }} - {{ $category->name_en }}</option>
                        @endforeach
                    </select>
                    @error('categories') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- description_tr --}}
                <div class="col-md-12">
                    <label for="description_tr" class="form-label">Açıklama (tr)</label>
                    <textarea name="description_tr" id="description_tr" rows="9" class="form-control">{{ old('description_tr', $blog->description_tr) }}</textarea>
                    @error('description_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- description_en --}}
                <div class="col-md-12">
                    <label for="description_en" class="form-label">Açıklama (en)</label>
                    <textarea name="description_en" id="description_en" rows="9" class="form-control">{{ old('description_en', $blog->description_en) }}</textarea>
                    @error('description_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- multi photos --}}
                <div class="col-md-12">
                    <label for="images">Ek resimler</label>
                    <table data-table="blogphotos" id="sortable" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="th-sortable">#</th>
                                <th>Resim</th>
                                <th style="width: 139px;">
                                    <button type="button" class="add-multi-photo btn btn-success btn-sm">Ekle</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $blogPhotos = App\Models\Blog::with('photos')->where('id', $blog->id)->first();
                            @endphp

                            @if(!empty($blogPhotos))
                                @foreach ($blogPhotos->photos as $blogPhoto)
                                    <tr data-index="{{ $blogPhoto->id }}" data-position="{{ $blogPhoto->position }}">
                                        <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                                        <td>
                                            <img width="90" src="{{ $blogPhoto->image }}" alt="" class="img-fluid">
                                        </td>
                                        <td>
                                            <button data-id="{{ $blogPhoto->id }}" type="button" class="destroy-multi-photo btn btn-danger btn-sm">Kaldır</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            <tr>
                                <td></td>
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
    $('#previewImage').html(`<img src='{{ $blog->image }}' class='img-fluid'>`).show();


    $('#sortable tbody').on('click', '.destroy-multi-photo', function(){
        if(confirm('Ek resim silinsin mi?')){
            var id = $(this).data('id')
            $.ajax({
                url: "{{ route('ajax.destroyBlogPhoto') }}",
                type: 'POST',
                data: { id: id },
                success: function(res){
                    $('#sortable tbody tr button').each(function(item){
                        if($(this).data('id') == id){
                            $(this).closest('tr').remove()

                            toastr.success('Ek resim kaldırıldı')
                        }
                    })
                },
                error: function(err){
                    alert('Bilinmeyen hata')
                }
            })
        }
    });
</script>
@endsection
