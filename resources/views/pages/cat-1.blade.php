    
    <div class="text-center">
        <h5>СӨБ-ын цахим гарын авлага</h5>
        <hr class="divider my-0">
    </div>
    <div class="row my-xl-3 my-2 d-flex align-items-stretch">
        <div class="col-md-4 d-flex  align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3 my-2 rounded-lg text-center help-block shadow">
                @include('svg.icon-4')
                <h5 class="mt-xl-3 mt-lg-2"><a href="{{url('cat/390')}}" class="text-primary">Мэргэжилтэн (СӨБ)</a></h5>
                <p class="m-0">{!! \App\Rolemenu::list(6) !!}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex  align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3 my-2 rounded-lg text-center help-block shadow">
                @include('svg.icon-5')
                <h5 class="mt-xl-3 mt-lg-2"><a href="{{url('cat/278')}}" class="text-primary">Арга зүйч</a></h5>
                <p class="m-0">{!! \App\Rolemenu::list(5) !!}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex  align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3 my-2 rounded-lg text-center help-block shadow">
                @include('svg.icon-6')
                <h5 class="mt-xl-3 mt-lg-2"><a href="{{url('cat/312')}}" class="text-primary">Багш</a></h5>
                <p class="m-0">{!! \App\Rolemenu::list(3) !!}</p>
            </div>
        </div>
    </div>