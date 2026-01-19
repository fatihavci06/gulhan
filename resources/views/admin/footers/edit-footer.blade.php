@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Footer Düzenle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.footers.update') }}" class="row g-3" method="POST">
                @csrf
                @method('PATCH')

                {{-- description --}}
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Açıklama</label>
                    <textarea name="description" id="description" rows="3" class="form-control">{{ old('description', $footer->description) }}</textarea>
                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- shops --}}
                <div class="col-md-12 mb-3">
                    {{-- addNewOffice btn --}}
                    <div class="text-end mb-2">
                        <button id="addNewOffice" type="button" class="btn btn-success">Yeni Ofis Ekle</button>
                    </div>

                    {{-- nav tabs --}}
                    <ul class="nav nav-tabs nav-primary" role="tablist">
                        @foreach (json_decode($footer->shops) as  $key =>$shop)
                            <li class="nav-item nav-item{{ $key }}" role="presentation">
                                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $key }}" role="tab" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon">
                                            <i class='bx bx-home font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">{{ $shop->name_tr }}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    {{-- tab content --}}
                    <div class="tab-content py-3">
                        @foreach (json_decode($footer->shops) as $key => $shop)
                            <div class="tab-pane fade tab-pane{{ $key }} {{ $key == 0 ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel">
                                <div class="row">
                                    {{-- name_tr --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="name_tr" class="form-label">Adı (Tr)</label>
                                        <input value="{{ old('name_tr.'.$key, $shop->name_tr) }}" name="name_tr[]" id="name_tr" class="form-control" />
                                    </div>
                                    
                                    {{-- name_en --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="name_en" class="form-label">Adı (En)</label>
                                        <input value="{{ old('name_en.'.$key, $shop->name_en) }}" name="name_en[]" id="name_en" class="form-control" />
                                    </div>
                                    
                                    {{-- address --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input value="{{ old('address.'.$key, $shop->address) }}" name="address[]" id="address" class="form-control" />
                                    </div>
                                    
                                    {{-- phone --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Telefon</label>
                                        <input value="{{ old('phone.'.$key, $shop->phone) }}" name="phone[]" id="phone" class="form-control" />
                                    </div>
                                    
                                    {{-- fax --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="fax" class="form-label">Faks</label>
                                        <input value="{{ old('fax.'.$key, $shop->fax) }}" name="fax[]" id="fax" class="form-control" />
                                    </div>
                                    
                                    {{-- email_tr --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="email_tr" class="form-label">E-posta (Tr)</label>
                                        <input type="email" value="{{ old('email_tr.'.$key, $shop->email_tr) }}" name="email_tr[]" id="email_tr" class="form-control" />
                                    </div>
                                    
                                    {{-- email_en --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="email_en" class="form-label">E-posta (En)</label>
                                        <input type="email" value="{{ old('email_en.'.$key, $shop->email_en) }}" name="email_en[]" id="email_en" class="form-control" />
                                    </div>

                                    {{-- delete office btn --}}
                                    <div class="col-12">
                                        <button type="button" data-key="{{ $key }}" class="delete-office btn btn-danger">Ofisi Kaldır</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
    $(function(){
        // add new office
        $('#addNewOffice').on('click', function(){
            var tabsNavItems = $('.nav-tabs .nav-item').length
            var tabPanes = $('.tab-pane').length
            var newTabPanesKey = tabPanes++

            let navItemHtml = `
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#${newTabPanesKey}" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon">
                                <i class='bx bx-home font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Yeni Ofis ${newTabPanesKey + 1}</div>
                        </div>
                    </a>
                </li>
            `

            let newTabPanesHtml = `
                <div class="tab-pane fade" id="${newTabPanesKey}" role="tabpanel">
                    <div class="row">
                        {{-- name_tr --}}
                        <div class="col-md-6 mb-3">
                            <label for="name_tr" class="form-label">Adı (Tr)</label>
                            <input name="name_tr[]" id="name_tr" class="form-control" />
                        </div>
                        
                        {{-- name_en --}}
                        <div class="col-md-6 mb-3">
                            <label for="name_en" class="form-label">Adı (En)</label>
                            <input name="name_en[]" id="name_en" class="form-control" />
                        </div>
                        
                        {{-- address --}}
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input name="address[]" id="address" class="form-control" />
                        </div>
                        
                        {{-- phone --}}
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Telefon</label>
                            <input name="phone[]" id="phone" class="form-control" />
                        </div>
                        
                        {{-- fax --}}
                        <div class="col-md-6 mb-3">
                            <label for="fax" class="form-label">Faks</label>
                            <input name="fax[]" id="fax" class="form-control" />
                        </div>
                        
                        {{-- email_tr --}}
                        <div class="col-md-6 mb-3">
                            <label for="email_tr" class="form-label">E-posta (Tr)</label>
                            <input name="email_tr[]" id="email_tr" class="form-control" />
                        </div>
                        
                        {{-- email_en --}}
                        <div class="col-md-6 mb-3">
                            <label for="email_en" class="form-label">E-posta (En)</label>
                            <input name="email_en[]" id="email_en" class="form-control" />
                        </div>

                        {{-- delete office btn --}}
                        <div class="col-12">
                            <button type='button' data-key="{{ $key }}" class="delete-office btn btn-danger">Ofisi Kaldır</button>
                        </div>
                    </div>
                </div>
            `

            $('.nav-tabs').append(navItemHtml)
            $('.tab-content').append(newTabPanesHtml)
        })

        // delete office
        $('.tab-content').on('click', '.delete-office', function(){
            var key = $(this).data('key')

            $(`.nav-tabs .nav-item.nav-item${key}`).remove()
            $(`.tab-content .tab-pane.tab-pane${key}`).remove()

        })
    })
</script>
@endsection