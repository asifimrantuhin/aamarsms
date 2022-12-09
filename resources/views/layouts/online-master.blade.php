
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AamarSMS">
    
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta --> 
    <meta name="author" content="ThemePixels">

    <title>AamarSMS</title>

    <!-- vendor css -->
    <link href="{{url('templates/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('templates/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

     <link href="{{url('css/animate.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{url('templates/css/bracket.css')}}"> 
  </head>


  <body>
  @yield('content')  


    <script src="{{url('templates/lib/jquery/jquery.js')}}"></script>
    <script src="{{url('templates/lib/popper.js/popper.js')}}"></script>
    <script src="{{url('templates/lib/bootstrap/bootstrap.js')}}"></script> 
    
     <script src="{{url('js/wow.min.js')}}"></script> 
    <script>
      $(document).ready(function(){new WOW().init();});
    </script>


  </body>
</html>
