@extends('layout')

@section('content')

    @include('pages.head2', ['items' => $leftitems])

    <div class="container mt-5">
        <div class="row">
            {{-- <div class="col-md-3">
                @include('leftitems', ['items' => $leftitems , 'id' => 'leftAcordion'])
            </div> --}}
            <div class="col-md-9">
                <div class="card card-body mb-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Эхлэл</a></li>
                            @foreach( array_reverse($topic->getTree()) as $item )
                                <li class="breadcrumb-item"><a href="{{url('cat/'.$item->id)}}">{{$item->title}}</a></li>
                                @php
                                    $mainId = $item->id;
                                    $mainTitle = $item->title;
                                @endphp
                            @endforeach
                        </ol>
                    </nav>
                    <div class="single-content" id="content">
                        @if($topic->getContent )
                            <div class="row mb-4 d-flex align-items-center">
                                <div class="col-10">
                                    <h4 class="font-weight-bold">{!! $topic->title !!}</h4>
                                </div>
                                <div class="col-2">
                                    <div class="btn-group float-right" id="hidden-print" role="group" aria-label="Хэвлэх, Татах">
                                        <span class="btn btn-outline-dark print-btn" data-toggle="tooltip" data-placement="top" title="Хэвлэх"><i class="fas fa-print"></i></span>
                                        <a href="{{url('pdf/'.$id)}}" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="PDF татах" download><i class="fas fa-file-pdf"></i></a>
                                    </div>
                                </div>
                            </div>
                                <hr>
                                @php
                                    $content = html_entity_decode($topic->getContent->body);
                                    $content = str_replace('samp>','div>',$content);
                                    $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);

                                    $content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);

                                    // $dom = new \DomDocument;
                                    // $dom->loadHTML($content);
                                    // $images = $dom->getElementsByTagName('img');
                                    // foreach ($images as $image) {
                                    //     $src = $image->getAttribute('src');
                                    //     $url = parse_url($src);
                                    //     $image->setAttribute('src', 'https://help.esis.edu.mn/'.$url['path'] );
                                    //     //$image->setAttribute('src', http_build_url( 'http://www.example.com/', $url ) );
                                    // }
                                    // $html = $dom->saveHTML();
                                @endphp
                                
                                {!! $content !!}
                        @else
                            <div class="alert alert-warning">
                                Тусламж бичигдээгүй байна..
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sticky-sidebar">

                    <div class="list-group">
                        @foreach($topic->getParant as $item)
                            <a href="{{$item->getPermalink()}}" class="list-group-item list-group-item-action {{( in_array($item->id, $active) ? 'active':'' )}}">{{$item->title}}</a>
                        @endforeach
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{url('pdfs/'.$mainId)}}" class="btn btn-primary" download> <i class="fas fa-file-pdf mr-2"></i> Гарын авлагыг бүлгээр татах</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop