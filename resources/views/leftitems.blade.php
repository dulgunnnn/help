<div id="{{$id}}">
<div class="accordion border border-bottom-0 bg-white">
@foreach($items as $item)
<div class="border-bottom">
    <a href="{{url('cat/'.$item->id)}}" class="d-block p-2 text-dark list-group-colappse"
        @if( ($item->getSub->count() > 0) )
            data-toggle="collapse" data-target="#collapse-{{$item->id}}" 
            @if(in_array( $item->id , [$active3, $active5]) )
                aria-expanded="true" 
            @else
                aria-expanded="false" 
            @endif
            aria-controls="collapse-{{$item->id}}"
        @endif
        >
        {{$item->title}}
        @if(in_array( $item->id , [$active3, $active5]) )
            {!! ($item->getSub->count() > 0) ? '<span class="float-right"><i class="fas fa-minus small text-muted"></i></span>' : '' !!}
        @else
            {!! ($item->getSub->count() > 0) ? '<span class="float-right"><i class="fas fa-plus small text-muted"></i></span>' : '' !!}
        @endif

    </a>
    
    @if($item->getSub->count() > 0)
        <div id="collapse-{{$item->id}}" class="collapse bg-light {{ (in_array( $item->id , [$active3, $active5])) ? 'show':'' }} border-top" aria-labelledby="headingOne" data-parent="#{{$id}}">
            <div class="ps-scroll position-relative">
                <div class="list-group list-group-flush">
                @foreach( $item->getSub as $item1 )
                    <a href="{{$item1->getPermalink()}}" id="menu-{{$item1->id}}" class="list-group-item p-2 text-dark rounded-0 {!! ( in_array( $item1->id , [$active3, $active4, $active5]) ) ? 'bg-light font-weight-bold current':'' !!}">{{$item1->title}} </a>
                @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
@endforeach
</div>
</div>