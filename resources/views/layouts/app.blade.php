<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"> {{-- <- bootstrap css --}}
    <title>@yield('title','Heroes Chef')</title>
</head>
<body>
    {{-- That's how you write a comment in blade --}}
    
    @include('inc.navbar')
    
    <section class="our-webcoderskull padding-lg">
        @yield('content')
    </section>
    @include('inc.footer')
    <script src="{{asset('js/app.js')}}"></script> {{-- <- bootstrap and jquery --}}

    
    <script src="{{asset('js/jquery.bootpag.min.js')}}"></script>
    <script src="{{asset('js/votes.js')}}"></script>
    
</body>
</html>