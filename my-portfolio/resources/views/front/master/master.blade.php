<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from slimhamdi.net/tunis/demos/light.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 18:15:11 GMT -->

<head>
   <meta charset="utf-8">
   <title>My Portfolio</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Template Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
   <!-- Template CSS Files -->
   <link href="{{asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{asset('front/css/component.css') }}" rel="stylesheet">
   <link href="{{asset('front/css/circle.css') }}" rel="stylesheet">
   <link href="{{asset('front/css/font-awesome.min.css') }}" rel="stylesheet">
   <link href="{{asset('front/css/style.css') }}" rel="stylesheet">
   <!-- CSS Skin File -->
   <link href="{{asset('front/css/skins/green.css') }}" rel="stylesheet">
   <!-- Live Style Switcher - demo only -->
   <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('front/css/skins/blue.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('front/css/skins/green.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('front/css/skins/yellow.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('front/css/skins/blueviolet.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('front/css/skins/goldenrod.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('front/css/skins/magenta.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('front/css/skins/orange.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('front/css/skins/purple.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('front/css/skins/red.css') }}">
   <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('front/css/skins/yellowgreen.css') }}">
   <link rel="stylesheet" type="text/css" href="{{asset('front/css/styleswitcher.css') }}">
   <!-- Modernizr JS File -->
   <script src="{{asset('front/js/modernizr.min.js') }}"></script>
</head>

<body class="light home-page">
   <!-- Live Style Switcher Starts - demo only -->
   @include('front.includes.switch-color')
   <!-- PRELOADER ENDS -->
   <!-- Header Starts -->
   @include('front.includes.sidebar')
   <!-- Header Ends -->
   <!-- Main Content Starts -->
   <div class="pages">
      <!-- Home Starts -->
      @yield('body')
      <!-- Home Ends -->
      <!-- About Starts -->

      <!-- About Ends -->
      <!-- Portfolio Starts -->

      <!-- Portfolio Ends -->
      <!-- Contact Starts -->

      <!-- Contact Ends -->
      <!-- Blog Starts -->

      <!-- Blog Ends -->
   </div>
   <!-- Main Content Ends -->
   <!-- Template JS Files -->
   <script src="{{asset('front/js/jquery-3.7.1.min.js') }}"></script>
   <script src="{{asset('front/js/styleswitcher.js') }}"></script>
   <script src="{{asset('front/js/imagesloaded.pkgd.min.js') }}"></script>
   <script src="{{asset('front/js/masonry.pkgd.min.js') }}"></script>
   <script src="{{asset('front/js/classie.js') }}"></script>
   <script src="{{asset('front/js/main.js') }}"></script>
   <script src="{{asset('front/js/cbpGridGallery.js') }}"></script>
   <script src="{{asset('front/js/jquery.hoverdir.js') }}"></script>
   <script src="{{asset('front/js/bootstrap.js') }}"></script>
   <script src="{{asset('front/js/popper.min.js') }}"></script>
   <script src="{{asset('front/js/menu.js') }}"></script>
   <script src="{{asset('front/js/custom.js') }}"></script>
</body>


</html>