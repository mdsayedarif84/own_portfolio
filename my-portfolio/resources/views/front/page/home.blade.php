@extends('front.master.master')
@section('title')
Home
@endsection
@section('body')
<div class="page page--current" id="home">
   <div class="home">
      <div class="container-fluid main-container container-home p-0">
         <div class="color-block d-none d-lg-block"></div>
         <div class="row home-details-container align-items-center">
            <img class="col-lg-4 position-fixed d-none d-lg-block" src="{{asset('front/img/light.jpg')}}" alt="">
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
               <div>
                  <img src="{{asset('front/img/img-mobile.jpg')}}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture">
                  @if (Route::has('login'))
                  <nav class="-mx-3 flex flex-1 justify-end">
                     @auth
                     <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                     </a>
                     @else
                     <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                     </a>

                     @if (Route::has('register'))
                     <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Register
                     </a>
                     @endif
                     @endauth
                  </nav>
                  @endif
                  <h1 class="text-uppercase poppins-font">I'm lucy milner. <span>web designer</span>
                  </h1>
                  <p class="open-sans-font">I'm a Tunisian based web designer & front‑end developer focused on crafting clean & user‑friendly experiences, I am passionate about building excellent software that improves the lives of those around me.</p>
                  <a id="link-about" class="button">
                     <span class="button-text">more about me</span>
                     <span class="button-icon fa fa-arrow-right"></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection