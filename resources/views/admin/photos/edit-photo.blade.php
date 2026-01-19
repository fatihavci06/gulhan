@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Foto Galeri Ekle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.photos.update', $photo->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
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
                    <input type="text" name="name_tr" value="{{ old('name_tr', $photo->name_tr) }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" required>
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en', $photo->name_en) }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" required>
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- short_description_tr --}}
                <div class="col-md-6">
                    <label for="short_description_tr" class="form-label">Kısa Açıklama (tr)</label>
                    <input type="text" name="short_description_tr" value="{{ old('short_description_tr', $photo->short_description_tr) }}" class="form-control @error('short_description_tr') is-invalid @enderror" id="short_description_tr" required>
                    @error('short_description_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- short_description_en --}}
                <div class="col-md-6">
                    <label for="short_description_en" class="form-label">Kısa Açıklama (en)</label>
                    <input type="text" name="short_description_en" value="{{ old('short_description_en', $photo->short_description_en) }}" class="form-control @error('short_description_en') is-invalid @enderror" id="short_description_en" required>
                    @error('short_description_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- multi photos --}}
                <div class="col-md-12">
                    <label for="images">Ek resimler</label>
                    <table data-table="multi_photos" id="sortable" class="table table-striped table-hover table-bordered">
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
                            @foreach ($photo->multiPhotos as $multiPhoto)
                                <tr data-index="{{ $multiPhoto->id }}" data-position="{{ $multiPhoto->position }}">
                                    <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                                    <td>
                                        <img width="90" src="{{ $multiPhoto->image }}" alt="" class="img-fluid">
                                    </td>
                                    <td>
                                        <button data-id="{{ $multiPhoto->id }}" type="button" class="destroy-multi-photo btn btn-danger btn-sm">Kaldır</button>
                                    </td>
                                </tr>
                            @endforeach

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
    $('#previewImage').html(`<img src='{{ $photo->image }}' class='img-fluid'>`).show();

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

        $('#sortable tbody').append(html)
    })

    $('#sortable tbody').on('click', '.destroy-multi-photo', function(){
        if(confirm('Ek resim silinsin mi?')){
            var id = $(this).data('id')
            $.ajax({
                url: "{{ route('ajax.destroyMultiPhoto') }}",
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
