@extends('layouts.app')

@section('title', __('messages.catalog'))

@section('content')

@include('includes.breadcrumb', ['title' => __('messages.catalog')])

<div class="container">
    <!-- Button trigger modal -->
    <div class="col-lg-6 mx-auto cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="{{ asset('images/katalog.webp') }}" alt="gülhan katalog" title="gülhan katalog" class="img-fluid">
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Katalog</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe title="gülhan katalog" allowfullscreen="true" allowtransparency="true" frameborder="0" scrolling="no" seamless="seamless" src="https://online.fliphtml5.com/stqn/ithu/#p=1" style="width:100%;height:425px"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
