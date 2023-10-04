<!DOCTYPE html>
<html lang="en">
    


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>MetaFinX</title>
        <link rel="shortcut icon" href="{{asset('assets/images/logo-x.svg')}}">
        <link rel="apple-touch-icon" href="{{asset('assets/images/logo-x.svg')}}">
        <link rel="icon" href="{{asset('assets/images/logo-x.svg')}}">

        <link rel="stylesheet" href="{{ asset('assets/master.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    </head>

    <body>

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

        <script>
           function toggleNav() {
                var navMenu = document.getElementById('navMenu');
                var navToggle = document.querySelector('.nav-toggle');
                
                // Check if the navMenu has the active class
                if (navMenu.classList.contains('active')) {
                    // If it has the active class, remove it to hide the menu
                    navMenu.classList.remove('active');
                } else {
                    // If it doesn't have the active class, add it to show the menu
                    navMenu.classList.add('active');
                }
            }

            function toggleNav() {
                var smallNav = document.querySelector('.small-nav');
                smallNav.style.display = smallNav.style.display === 'none' ? 'block' : 'none';
            }


        </script>
    </body>
</html>
