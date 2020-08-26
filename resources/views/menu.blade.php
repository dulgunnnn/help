@php( $items = \App\Category::allMenus() )

<div class="row" id="main-nav">
@foreach( $items as $menu1 )
    <div class="{{ ($menu1->id == $active1) ? 'col-11 order-1':'col-1 order-2' }} ">
        <div class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="{{ ($menu1->id == $active1) ? 'navbar-brand':'btn btn-primary btn-block font-weight-bold' }}  " href="{{$menu1->getPermalink()}}">{{ $menu1->title }}</a>
            <div class="collapse navbar-collapse">
            <ul class="{{ ($menu1->id !== $active1) ? 'dropdown-menu':'navbar-nav' }}">
                @foreach( $menu1->getSub as $menu2 )

                <li class="nav-item{{($menu2->id == $active2) ? ' active':'' }} {{( $menu2->role->getCategory->count() > 0) ? 'dropdown':''}}">
                    <a href="{{ $menu2->getPermalink('sub')}}" id="navbarDropdown-{{$menu2->id}}" class="nav-link"> {{$menu2->title}} </a>
                    {{-- @if($menu2->role->getCategory->count() > 0)
                    <ul class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown-{{$menu2->id}}">
                        @foreach( $menu2->role->getCategory as $menu3 )

                        <li class="dropdown-item">
                            <a href="{{ $menu3->getPermalink()}}"> {{$menu3->title}} </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif --}}
                </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
@endforeach
</div>