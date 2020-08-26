@extends('layout')

@section('search')
<script>
        (function() {
          var cx = '000535734843300142401:spy8ljghslc';
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        })();
</script>
@stop

@section('content')
    
    @include('pages.head2')

    <div class="container mt-5" style="padding-top: 75px;">
        <h5>{{$pageTitle}}</h5>
        <hr>
        <gcse:searchresults-only></gcse:searchresults-only>
    </div>

@stop