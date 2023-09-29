<!DOCTYPE html>
<html lang="en">
    


    <head>
        <meta charset="utf-8">

        <title>MetaFinX</title>
        {{-- <link rel="shortcut icon" href="{{asset('assets/image/logo.png')}}">
        <link rel="apple-touch-icon" href="{{asset('assets/image/logo.png')}}">
        <link rel="icon" href="{{asset('assets/image/logo.png')}}" type="image/png"> --}}

        <link rel="stylesheet" href="{{ asset('assets/master.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    </head>

    <body class="light-mode dark-mode">

        <div class="container-scroller">
            
            <!--top navigation-->
            
                @include('layouts.topbar')
            

            <!--content-->
            
                @yield('content')
            
            <!--content-->

            <!--footer-->
        
            @include('layouts.footer')
        
            <!--/footer-->

        </div>

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

    </body>
</html>