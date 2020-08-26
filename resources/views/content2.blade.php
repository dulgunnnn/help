@extends('layout')

@section('content')

    @include('pages.head2', ['items' => $leftitems])

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                @include('leftitems', ['items' => $leftitems , 'id' => 'leftAcordion'])
            </div>
            <div class="col-md-9">

                <div>
                    @if($topic->getContent )
                    <div class="bg-white p-3 card">
                        <h3 class="font-weight-bold">{!! $topic->title !!}</h3>
                        {!! html_entity_decode($topic->getContent->body) !!}
                    </div>
                    @else
                        @if(count($items) == 1)
                            <div class="bg-white p-3 card">
                                <h3 class="font-weight-bold">{!! $items[0]->title !!}</h3>
                                @if($items[0]->getContent)
                                {!! html_entity_decode($items[0]->getContent->body) !!}
                                @endif
                            </div>
                        @elseif(count($items) > 0)
                            <div class="accordion" id="content-accordion">
                                @foreach($items as $item)
                                        <a href="{{ url('content/'.$item->parent_id.'#topic-'.$item->id) }}" class="h5 font-weight-bold text-dark" data-toggle="collapse" data-target="#topic-{{$item->id}}" aria-expanded="false" aria-controls="topic-{{$item->id}}">
                                            {{$item->title}}
                                            <span class="float-right"><i class="fas fa-angle-down small text-muted"></i></span>
                                        </a>
                                        <hr class="clearfix">
                                    
                                        <div id="topic-{{$item->id}}" class="collapse {{($item->id == $active4) ? 'show':''}} " aria-labelledby="headingOne" data-parent="#content-accordion">
                                        
                                                @if($item->getContent)
                                                <div class="card card-body mb-3">
                                                    {!! html_entity_decode($item->getContent->body) !!}
                                                </div>
                                                @else
                                                    @if($item->getSub2->count() > 0)
                                                        {{-- @foreach($item->getSub2 as $item1)
                                                            <h5>{{$item1->title}}</h5>
                                                            {!! html_entity_decode($item1->getContent->body) !!}
                                                        @endforeach --}}
                                                    @else
                                                        <div class="alert alert-warning">
                                                            Мэдээлэл алга
                                                        </div>
                                                    @endif
                                                @endif
                                        </div>

                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Мэдээлэл алга...
                            </div>
                        @endif
                    @endif
                </div>

            </div>
        </div>
    </div>
@stop