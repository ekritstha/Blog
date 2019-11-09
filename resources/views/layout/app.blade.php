<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"> --}}
        <title>{{config('app.name','Blog')}}</title>
    </head>
    <body>
    	@include('inc.navbar')
        <div class="container" style="margin-top: 60px;">
            @include('inc.messages')
    		@yield('content')
        </div>
       
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script> 
    </body>
</html>
