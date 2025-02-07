@extends('front.master.master')
@section('title')
Portfolio
@endsection
@section('body')
<div class="page page--current" id="blog">
   <div class="blog">
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
            <!-- Articles Starts -->
            <div class="row">
               <!-- Article Starts -->
               <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                     <div class="post-thumb">
                        <a href="{{route('front.blog-post')}}" class="d-block position-relative overflow-hidden">
                           <img src="{{('front/img/blog/blog-post-1.jpg')}}" class="img-fluid" alt="Blog Post">
                        </a>
                     </div>
                     <div class="post-content">
                        <div class="entry-header">
                           <h3>
                              <a href="{{route('front.blog-post')}}">How to Own Your Audience by Creating an Email List</a>
                           </h3>
                        </div>
                        <div class="entry-content open-sans-font">
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
                        </div>
                     </div>
                  </article>
               </div>
               <!-- Article Ends -->
               <!-- Article Starts -->
               <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                     <div class="post-thumb">
                        <a href="{{route('front.blog-post')}}" class="d-block position-relative overflow-hidden">
                           <img src="{{('front/img/blog/blog-post-2.jpg')}}" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="post-content">
                        <div class="entry-header">
                           <h3>
                              <a href="{{route('front.blog-post')}}">Top 10 Toolkits for Deep Learning in 2020</a>
                           </h3>
                        </div>
                        <div class="entry-content open-sans-font">
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
                        </div>
                     </div>
                  </article>
               </div>
               <!-- Article Ends -->
               <!-- Article Starts -->
               <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                     <div class="post-thumb">
                        <a href="{{route('front.blog-post')}}" class="d-block position-relative overflow-hidden">
                           <img src="{{('front/img/blog/blog-post-3.jpg')}}" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="post-content">
                        <div class="entry-header">
                           <h3>
                              <a href="{{route('front.blog-post')}}">Everything You Need to Know About Web Accessibility</a>
                           </h3>
                        </div>
                        <div class="entry-content open-sans-font">
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
                        </div>
                     </div>
                  </article>
               </div>
               <!-- Article Ends -->
               <!-- Article Starts -->
               <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                     <div class="post-thumb">
                        <a href="{{route('front.blog-post')}}" class="d-block position-relative overflow-hidden">
                           <img src="{{('front/img/blog/blog-post-4.jpg')}}" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="post-content">
                        <div class="entry-header">
                           <h3>
                              <a href="{{route('front.blog-post')}}">How to Inject Humor & Comedy Into Your Brand</a>
                           </h3>
                        </div>
                        <div class="entry-content open-sans-font">
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
                        </div>
                     </div>
                  </article>
               </div>
               <!-- Article Ends -->
               <!-- Article Starts -->
               <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                     <div class="post-thumb">
                        <a href="{{route('front.blog-post')}}" class="d-block position-relative overflow-hidden">
                           <img src="{{('front/img/blog/blog-post-5.jpg')}}" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="post-content">
                        <div class="entry-header">
                           <h3>
                              <a href="{{route('front.blog-post')}}">Women in Web Design: How To Achieve Success</a>
                           </h3>
                        </div>
                        <div class="entry-content open-sans-font">
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
                        </div>
                     </div>
                  </article>
               </div>
               <!-- Article Ends -->
               <!-- Article Starts -->
               <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                  <article class="post-container">
                     <div class="post-thumb">
                        <a href="{{route('front.blog-post')}}" class="d-block position-relative overflow-hidden">
                           <img src="{{('front/img/blog/blog-post-6.jpg')}}" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="post-content">
                        <div class="entry-header">
                           <h3>
                              <a href="{{route('front.blog-post')}}">Evergreen versus topical content: An overview</a>
                           </h3>
                        </div>
                        <div class="entry-content open-sans-font">
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore... </p>
                        </div>
                     </div>
                  </article>
               </div>
               <!-- Article Ends -->
               <!-- Pagination Starts -->
               <div class="col-12 mt-4">
                  <nav>
                     <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                           <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                           <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="#">4</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <!-- Pagination Ends -->
            </div>
            <!-- Articles Ends -->
         </div>
      </div>
   </div>
</div>
@endsection