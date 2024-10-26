@extends('front.master.master')
@section('title')
Portfolio
@endsection
@section('body')
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
   <div class="content-switcher">
      <h4>COLOR SWITCHER</h4>
      <ul>
         <li>
            <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color">
               <img src="{{asset('front/img/styleswitcher/purple.png')}}" alt="purple">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color">
               <img src="{{asset('front/img/styleswitcher/red.png')}}" alt="red">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color">
               <img src="{{asset('front/img/styleswitcher/blueviolet.png')}}" alt="blueviolet">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color">
               <img src="{{asset('front/img/styleswitcher/blue.png')}}" alt="blue">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color">
               <img src="{{asset('front/img/styleswitcher/goldenrod.png')}}" alt="goldenrod">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color">
               <img src="{{asset('front/img/styleswitcher/magenta.png')}}" alt="magenta">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color">
               <img src="{{asset('front/img/styleswitcher/yellowgreen.png')}}" alt="yellowgreen">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color">
               <img src="{{asset('front/img/styleswitcher/orange.png')}}" alt="orange">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color">
               <img src="{{asset('front/img/styleswitcher/green.png')}}" alt="green">
            </a>
         </li>
         <li>
            <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color">
               <img src="{{asset('front/img/styleswitcher/yellow.png')}}" alt="yellow">
            </a>
         </li>
      </ul>
      <div id="hideSwitcher">&times;</div>
   </div>
</div>
<div id="showSwitcher" class="styleSecondColor">
   <i class="fa fa-cog fa-spin"></i>
</div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Page Title Starts -->
<div class="title-section text-left text-sm-center">
   <h2>my <span>blog</span>
   </h2>
   <span class="title-bg">posts</span>
</div>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<div class="main-content">
   <div class="container">
      <div class="row">
         <!-- Article Starts -->
         <article class="col-12">
            <!-- Meta Starts -->
            <div class="meta open-sans-font">
               <span>
                  <i class="fa fa-user"></i> steve </span>
               <span class="date">
                  <i class="fa fa-calendar"></i> 9 January 2017 </span>
               <span>
                  <i class="fa fa-tags"></i> wordpress, business, economy, design </span>
            </div>
            <!-- Meta Ends -->
            <!-- Article Content Starts -->
            <h1 class="text-uppercase text-capitalize">Everything You Need to Know About Web Accessibility</h1>
            <img src="{{asset('front/img/blog/blog-post-1.jpg')}}" class="img-fluid" alt="Blog image" />
            <div class="blog-excerpt open-sans-font pb-5">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!-- Article Content Ends -->
         </article>
         <!-- Article Ends -->
      </div>
   </div>
</div>
<!-- Template JS Files -->
@endsection