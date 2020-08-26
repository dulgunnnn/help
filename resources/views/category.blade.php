@extends('layout')

@section('content')

    @include('pages.head2')

    <div class="container my-5" style="padding-top: 75px;">
        @include('pages.cat-'.$id)
    </div>

@stop