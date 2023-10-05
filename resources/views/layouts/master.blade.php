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
                // var navMenu = document.getElementById('navMenu');
                var navToggle = document.querySelector('.nav-toggle');
                var smallNav = document.querySelector('.small-nav');

                // Check if the smallNav is hidden or visible
                if (smallNav.style.display === 'none' || smallNav.style.display === '') {
                    smallNav.style.display = 'block'; // Show the smallNav
                    // smallNav.style.height = '0px';

                    // Trigger a reflow to apply the 'display' property change immediately
                    // smallNav.offsetHeight;
                    
                    // Set the final height to the full height of the dropdown
                    smallNav.style.height = '0px';

                    setTimeout(function() {
                        smallNav.style.transition = 'height 0.3s ease-in-out';
                        smallNav.style.height = '368px';
                    }, 0);
                    
                } else {
                    // Set the initial height to the full height of the dropdown
                        smallNav.style.height = '368px';

                    // Add a transition for height
                    smallNav.style.transition = 'height 0.3s ease-in-out';

                    // Delay the transition to give time for the height change to take effect
                    setTimeout(function() {
                        smallNav.style.height = '0';
                    }, 0);

                    // After the transition is complete, hide the smallNav
                    setTimeout(function() {
                        smallNav.style.display = 'none';
                    }, 300); // 300ms is the duration of the transition
                }

                // Check if the navMenu has the active class
                // if (navMenu.classList.contains('active')) {
                //     // If it has the active class, remove it to hide the menu
                //     navMenu.classList.remove('active');
                // } else {
                //     // If it doesn't have the active class, add it to show the menu
                //     navMenu.classList.add('active');
                // }
            }

            document.addEventListener('DOMContentLoaded', function () {
                function closeSmallNav() {
                    var smallNav = document.querySelector('.small-nav');
                    if (smallNav.style.display === 'block') {
                        smallNav.style.height = '0'; // Trigger the collapse animation
                        setTimeout(function () {
                            smallNav.style.display = 'none';
                        }, 300); // 300ms is the duration of the transition
                    }
                }

                // Add a scroll event listener to the window
                window.addEventListener('scroll', closeSmallNav);
            });

        </script>
    </body>
</html>
