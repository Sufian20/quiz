 <!doctype html>
 <html lang="en">
 <head>
     <title>Hello, world!</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.min.css">
     <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.theme.default.min.css">

     <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">

 </head>
 <body>

     <!----Content- Area----->
     @yield('content')

     <!---Content Area End---->

     <script src="{{ asset('/') }}assets/js/jquery-3.3.1.slim.min.js"></script>
     <script src="{{ asset('/') }}assets/js/popper.min.js"></script>
     <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
 </body>
 </html>
