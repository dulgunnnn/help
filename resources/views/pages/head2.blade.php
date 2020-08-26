@php
    $icon[11] = 'icon-1';
    $icon[10] = 'icon-2';
    $icon[8] = 'icon-3';
    $icon[6] = 'icon-4';
    $icon[5] = 'icon-5';
    $icon[3] = 'icon-6';
@endphp    
    <header>
        <div class="fixed-top bg-white shadow border-bottom">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-5 col-3">
                        <a href="{{url('/')}}" class="logo">
                            @include('svg.logo-esis')
                        </a>
                        <a href="{{url('/')}}" class="d-lg-inline-block d-none ml-3 font-weight-bold text-white bg-primary px-3 py-1">
                            Цахим гарын авлага
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-9">
                    <form action="{{url('search')}}">
                        <div class="input-group my-3 border rounded">
                            <input type="text" name="q" class="form-control border-0" required placeholder="Хайх ...">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text border-0 bg-white">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if( isset($menu) )
    <div class="head-big" style="margin-top: 75px">
        <div class="container py-5 text-white">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 col-11">
                    <div class="head-icon">
                        <table class="bg-white text-dark rounded">
                            <tr>
                                <td class="p-3">
                                    @if( isset($icon[ $menu->getRole->id ]) )
                                        @include('svg.'.$icon[ $menu->getRole->id ])
                                    @endif
                                </td>
                                <td class="pr-5">
                                    <h2 class="m-0">{{ $menu->getRole->title }}</h2>
                                    <p class="m-0">– {{ $menu->getRole->getParent->title }}</p>
                                </td>
                            </tr>
                        </table>
                       
                    </div>
                </div>
                <div class="col-md-3 col-1">
                    <button class="navbar-toggler float-right p-0 d-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars text-white"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container d-none d-lg-block">
            <ul class="nav nav-tabs border-0">
            @foreach($items as $item)
                <li class="nav-item">
                    <a class="nav-link {{ ( in_array($item->id, $active ) ) ? 'active' : 'text-white ' }}" href="{{$item->getPermalink()}}">{{$item->title}}</a>
                </li>
            @endforeach
            </ul>
        </div>
        <div class="container d-block d-lg-none">
            <nav class="navbar navbar-expand-lg mx-0 p-0">
                <div class="collapse navbar-collapse m-0 p-0" id="navbarSupportedContent">
                    <ul class="nav nav-pills flex-column border-0 mb-3">
                        @foreach($items as $item)
                            <li class="nav-item">
                                <a class="nav-link {{ ( in_array($item->id, $active ) ) ? 'active bg-white text-dark' : 'text-white ' }}" href="{{$item->getPermalink()}}">{{$item->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @endif