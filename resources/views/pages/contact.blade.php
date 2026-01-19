@extends('layouts.app')

@section('title', __('messages.contact'))

@section('content')

@include('includes.breadcrumb', ['title' => __('messages.contact')])

<div class="container">
    <div class="row g-3">
        <div class="col-lg-3">
            <div class="list-group">
                @foreach (json_decode($contact->shops) as  $key =>$shop)
                    <a
                        data-key="{{ $key }}"
                        href="javascript:;"
                        class="list-group-item list-group-item-action

                            @if ($key == 0)
                                active
                            @endif
                        "
                        @if ($key === 0)
                            aria-current="true"
                        @endif>
                            {{ $shop->name_tr }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-9">

            @foreach (json_decode($contact->shops) as  $key =>$shop)
            <div
                data-key="{{ $key }}"
                class="contact-detail d-flex bd-highlight flex-wrap text-center gap-3 mb-5
                @if($key!=0) d-none @endif">
                <div class="flex-fill bd-highlight">
                  <div class="border border-secondary rounded-3">
                    <div class="p-3">
                      <label for="" class="text-gray mb-2 fw-bold fs-5"><i class="fa-solid fa-phone me-2 text-primary"></i> {{ __('messages.phone') }}:</label>
                      <p class="mb-0">{{ $shop->phone }}</p>
                    </div>
                  </div>
                </div>

                <div class="flex-fill bd-highlight">
                  <div class="border border-secondary rounded-3">
                    <div class="p-3">
                      <label for="" class="text-gray mb-2 fw-bold fs-5"><i class="fa-regular fa-envelope me-2 text-primary"></i> {{ __('messages.email') }}:</label>
                      <p class="mb-0">{{ $shop->email_tr }}</p>
                    </div>
                  </div>
                </div>

                <div class="flex-fill bd-highlight">
                  <div class="border border-secondary rounded-3">
                    <div class="p-3">
                      <label for="" class="text-gray mb-2 fw-bold fs-5"><i class="fa-solid fa-fax me-2 text-primary"></i> {{ __('messages.fax') }}:</label>
                      <p class="mb-0">{{ $shop->fax }}</p>
                    </div>
                  </div>
                </div>

                <div class="flex-fill bd-highlight">
                  <div class="border border-secondary rounded-3">
                    <div class="p-3">
                      <label for="" class="text-gray mb-2 fw-bold fs-5"><i class="fa-solid fa-location-dot me-2 text-primary"></i> {{ __('messages.address') }}:</label>
                      <p class="mb-0">{{ $shop->address }}</p>
                    </div>
                  </div>
                </div>

                <div class="shadow-lg w-100">
                    {!! $shop->map !!}
                </div>

            </div>
            @endforeach

        </div>
    </div>

    {{-- <div class="col-lg-9 ms-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="h4 fw-bold">{{ __('messages.contact_form') }}</h2>
                <p>{{ __('messages.contact_form_text') }}</p>

                <div class="row g-3 g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">{{ __('messages.name') }}</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">{{ __('messages.surname') }}</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">{{ __('messages.phone') }} </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">{{ __('messages.email') }}</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea style="height: 120px;" class="form-control" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">{{ __('messages.description') }}</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary mt-5">{{ __('messages.submit') }}</button>
            </div>
        </div>
    </div> --}}
</div>

@endsection

@section('script')
<script>

$(function(){
    $('iframe').attr('width', '100%')

    $('.list-group-item').on('click', function(){
        var key = $(this).data('key')

        $('.list-group-item').each(function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active')
            }
        })

        $(this).addClass('active')

        $('.contact-detail').each(function(){
            $(this).addClass('d-none')

            if($(this).data('key') == key){
                $(this).removeClass('d-none')
            }
        })
    })
})

</script>
@endsection
