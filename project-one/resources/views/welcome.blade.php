<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('img/fav.png')}}"/>
        <meta name="author" content="CodePixar">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="UTF-8">

    <title>PrintfStudio</title>

        <title>Laravel</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} "/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>

        <link rel="stylesheet" href="{{ asset ('css/linearicons.cs') }}s"/>
        <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/nouislider.min.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.skinFlat.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/main.css')}}"/>
    </head>
    <body>
        
        <div id="app">
            <main-app></main-app>
        </div>

        <script src=" {{ asset('js/app.js') }} "></script>
        <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('js/jquery.sticky.js')}}"></script>
        <script src="{{ asset('js/nouislider.min.js')}}"></script>
        <script src="{{ asset('js/countdown.js')}}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset('js/gmaps.min.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
