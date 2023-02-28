<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta charset="UTF-8">
     <title>UPJ SIMBE | Admin @yield('title')</title>

     <!-- APP FAVICON -->
     <link rel="shortcut icon" href="assets/icon/favicon/favicon.ico">

     <!-- APP CSS -->
     {{-- <link rel="stylesheet" href="assets/css-app/bootstrap.min.css" type="text/css" id="bootsrap-stylesheet" /> --}}
     <link rel="stylesheet" href="/assets/css-app/bootstrap.min.css" type="text/css" id="bootsrap-stylesheet" />
     <link rel="stylesheet" href="/assets/css-app/icons.min.css" type="text/css" id="bootsrap-stylesheet" />
     <link rel="stylesheet" href="/assets/css-app/app.min.css" type="text/css" id="bootsrap-stylesheet" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" type="text/css" id="bootsrap-stylesheet" />
     
     @yield('css')
</head>
<body>

     <!-- BEGIN PAGE -->
     <div id="wrapper">

          <!-- TOPBAR START -->
               @yield('header')
          <!-- END TOPBAR START -->

     </div>
     <!-- END BEGIN PAGE -->

</body>
</html>