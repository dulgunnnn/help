    <!-- <div class="text-center">
        <h5>Эцэг эх</h5>
        <hr class="divider my-0 my-xl-3 my-lg-1">
    </div> -->

    <div class="row my-xl-3 my-2 d-flex align-items-stretch">
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3  my-2 help-block text-center shadow">
                @include('svg.icon-1')
                <h5 class="mt-xl-3 mt-lg-2"><a href="{{url('cat/1085')}}" class="text-primary">Гарын авлага</a></h5>
                <p class="m-0">{!! \App\Rolemenu::list(19) !!}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3  my-2 help-block text-center shadow">
                @include('svg.icon-2')
                <h5 class="mt-xl-3 mt-lg-2"><a href="{{url('cat/1086')}}"  class="text-primary">Нийтлэг асуултууд</a></h5>
                <p class="m-0">{!! \App\Rolemenu::list(20) !!}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3  my-2 help-block text-center shadow">
                @include('svg.icon-3')
                <h5 class="mt-xl-3 mt-lg-2"><a href="{{url('cat/1087')}}" class="text-primary">Хууль журам</a></h5>
                <p class="m-0">{!! \App\Rolemenu::list(21) !!}</p>
            </div>
        </div>
    </div>