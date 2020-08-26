@extends('layout')

@section('content')

    @include('pages.head2')

    

    <div class="container mt-5">
        @foreach($topic->getSub as $item)
            <h4 class="font-weight-bold clearfix mb-3">
                <a href="{{$item->getPermalink()}}" class="text-primary">
                    {{$item->title}}
                </a>
            </h4>
            @if($item->getSub )
                <div class="row">
                @foreach($item->getSub as $item1)
                    <div class="col-md-6">
                        &nbsp; &bull; {!! $item1->permalink() !!}
                    </div>
                @endforeach
                </div>
            @endif
            <hr class="my-4">
        @endforeach
    </div>

@stop