<!doctype html>
<html lang="mn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$pageTitle}}</title>

        <!-- Fonts -->

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        @yield('search')
        <!-- Styles -->
        <link href="{{asset('/css/app.css?v=0.001')}}" rel="stylesheet">
    </head>
    <body>
    <div id="top"></div>

    @yield('content')

    <footer class="bg-muted m-0 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    2019 - 2020 © Боловсрол, соёл, шинжлэх ухаан, спортын яам.
                </div>
            </div>
        </div>
    </footer>

    <span class="btn btn-primary toTop"><i class="fas fa-chevron-up"></i></span>

    <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
    </body>
</html>
