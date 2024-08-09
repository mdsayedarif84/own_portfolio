<header class="header" id="navbar-collapse-toggle">
   <!-- Fixed Navigation Starts -->
   <ul id="desktop-nav" class="icon-menu d-none d-lg-block">
      <a href="{{route('front.home')}}">
         <li class="icon-box desktop-nav-element ">
            <i class="fa fa-home"></i>
            <div>
               <h2>Home</h2>
            </div>
         </li>
      </a>
      <a href="{{route('front.about')}}">
         <li class="icon-box desktop-nav-element">
            <i class="fa fa-user"></i>
            <div>
               <h2>About</h2>
            </div>
         </li>
      </a>
      <a href="{{route('front.portfolio')}}">
         <li class="icon-box desktop-nav-element">
            <i class="fa fa-briefcase"></i>
            <div>
               <h2>Portfolio</h2>
            </div>
         </li>
      </a>
      <a href="{{route('front.contact')}}">
         <li class="icon-box desktop-nav-element">
            <i class="fa fa-envelope-open"></i>
            <div>
               <h2>Contact</h2>
            </div>
         </li>
      </a>
      <a href="{{route('front.blog')}}">
         <li class="icon-box desktop-nav-element">
            <i class="fa fa-comments"></i>
            <div>
               <h2>Blog</h2>
            </div>
         </li>
      </a>
   </ul>
   <!-- Fixed Navigation Ends -->
   <!-- Mobile Menu Starts -->
   <nav class="d-block d-lg-none">
      <div class="inputmobile" id="inputmobile">
         <div id="trigger-mobile" class="trigger-mobile">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <ul class="list-unstyled" id="mobile-nav">
            <a href="{{route('front.home')}}">
               <li class="mobile-nav-element home-link active">
                  <div>
                     <i class="fa fa-home"></i>
                     <span>Home</span>
                  </div>
               </li>
            </a>
            <a href="{{route('front.about')}}">
               <li class="mobile-nav-element">
                  <div>
                     <i class="fa fa-user"></i>
                     <span>About</span>
                  </div>
               </li>
            </a>
            <a href="{{route('front.portfolio')}}">
               <li class="mobile-nav-element">
                  <div>
                     <i class="fa fa-folder-open"></i>
                     <span>Portfolio</span>
                  </div>
               </li>
            </a>
            <a href="{{route('front.contact')}}">
               <li class="mobile-nav-element">
                  <div>
                     <i class="fa fa-envelope-open"></i>
                     <span>Contact</span>
                  </div>
               </li>
            </a>
            <a href="{{route('front.blog')}}">
               <li class="mobile-nav-element">
                  <div>
                     <i class="fa fa-comments"></i>
                     <span>Blog</span>
                  </div>
               </li>
            </a>
         </ul>
      </div>
   </nav>
   <!-- Mobile Menu Ends -->
</header>