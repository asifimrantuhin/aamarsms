
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

  <style>
  .bg-br-primary{
background: #2980b9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #2c3e50, #2980b9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #2c3e50, #2980b9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




  }
    video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%); 
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}
  </style>

  <body>
  @yield('content')  

    <video id="bgvid" playsinline autoplay muted loop>
  <!-- 
- Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  --> 
<source src="{{url('images/videobg.mp4')}}" type="video/mp4"> 

</video>

    <script src="{{url('templates/lib/jquery/jquery.js')}}"></script>
    <script src="{{url('templates/lib/popper.js/popper.js')}}"></script>
    <script src="{{url('templates/lib/bootstrap/bootstrap.js')}}"></script> 
    
     <script src="{{url('js/wow.min.js')}}"></script> 
    <script>
                    $(document).ready(function(){new WOW().init();});
    </script>


    <script type="text/javascript">
      var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})


Resources
    </script>

  </body>
</html>
