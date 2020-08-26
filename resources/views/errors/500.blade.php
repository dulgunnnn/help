@extends('layout', ['pageTitle' => 'Сервэрийн алдаа'])

@section('content')

    @include('pages.head')

    <div class="container my-5">
        <div class="text-center">
            <h1 class="display-3 font-weight-bold">Алдаа 500</h1>
            <p>Уучлаарай таны хандалт амжилтгүй боллоо.</p>
            <p>Та хандалтай шинэчилнэ үү. <span class="badge badge-primary">Click F5<span></p>
        </div>
    </div>

    <div class="container mt-5">
        <hr>
        @include('pages.cat-2')
        <div class="p-3"></div>
        @include('pages.cat-1')
    </div>

@stop