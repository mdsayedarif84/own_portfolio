@extends('front.master.master')
@section('title')
About
@endsection
@section('body')
<div class="page page--current" id="about">
   <!-- Main Content Starts -->
   <!-- Section Title Starts -->
   <div class="title-section text-left text-sm-center">
      <h2>ABOUT <span>ME</span>
      </h2>
      <span class="title-bg">Resume</span>
   </div>
   <!-- Section Title Ends -->
   <div class="about">
      <div class="main-content">
         <div class="container">
            <div class="row">
               <!-- Personal Info Starts -->
               <div class="col-12 col-lg-5 col-xl-6">
                  <div class="row">
                     <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                     </div>
                     <div class="col-12 d-block d-sm-none">
                        <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture">
                     </div>
                     <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                           <li>
                              <span class="title">first name :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Lucy</span>
                           </li>
                           <li>
                              <span class="title">last name :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Milner</span>
                           </li>
                           <li>
                              <span class="title">Age :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">27 Years</span>
                           </li>
                           <li>
                              <span class="title">Nationality :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Tunisian</span>
                           </li>
                           <li>
                              <span class="title">Freelance :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span>
                           </li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                           <li>
                              <span class="title">Address :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Tunis</span>
                           </li>
                           <li>
                              <span class="title">phone :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+21621184010</span>
                           </li>
                           <li>
                              <span class="title">Email :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">you@mail.com</span>
                           </li>
                           <li>
                              <span class="title">Skype :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">lucy.milner</span>
                           </li>
                           <li>
                              <span class="title">langages :</span>
                              <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">French, English</span>
                           </li>
                        </ul>
                     </div>
                     <div class="col-12 mt-3">
                        <a class="button" href="#">
                           <span class="button-text">Download CV</span>
                           <span class="button-icon fa fa-download"></span>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- Personal Info Ends -->
               <!-- Boxes Starts -->
               <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                  <div class="row">
                     <div class="col-6">
                        <div class="box-stats with-margin">
                           <h3 class="poppins-font position-relative">12</h3>
                           <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span>
                           </p>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="box-stats with-margin">
                           <h3 class="poppins-font position-relative">97</h3>
                           <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span>
                           </p>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="box-stats">
                           <h3 class="poppins-font position-relative">81</h3>
                           <p class="open-sans-font m-0 position-relative text-uppercase">Happy <span class="d-block">customers</span>
                           </p>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="box-stats">
                           <h3 class="poppins-font position-relative">53</h3>
                           <p class="open-sans-font m-0 position-relative text-uppercase">awards <span class="d-block">won</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Skills Starts -->
            <div class="row">
               <div class="col-12">
                  <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p25">
                     <span>25%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p89">
                     <span>89%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p70">
                     <span>70%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p66">
                     <span>66%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p95">
                     <span>95%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p50">
                     <span>50%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p65">
                     <span>65%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">angular</h6>
               </div>
               <div class="col-6 col-md-3 mb-3 mb-sm-5">
                  <div class="c100 p45">
                     <span>45%</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">react</h6>
               </div>
            </div>
            <!-- Skills Ends -->
            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row">
               <div class="col-12">
                  <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education </h3>
               </div>
               <div class="col-lg-6 m-15px-tb">
                  <div class="resume-box">
                     <ul>
                        <li>
                           <div class="icon">
                              <i class="fa fa-briefcase"></i>
                           </div>
                           <span class="time open-sans-font text-uppercase">2018 - Present</span>
                           <h5 class="poppins-font text-uppercase">Web Developer <span class="place open-sans-font">Envato</span>
                           </h5>
                           <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore adipisicing elit, </p>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fa fa-briefcase"></i>
                           </div>
                           <span class="time open-sans-font text-uppercase">2013 - 2018</span>
                           <h5 class="poppins-font text-uppercase">UI/UX Designer <span class="place open-sans-font">Themeforest</span>
                           </h5>
                           <p class="open-sans-font">Lorem incididunt dolor sit amet, consectetur eiusmod dunt doldunt dol elit, tempor incididunt</p>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fa fa-briefcase"></i>
                           </div>
                           <span class="time open-sans-font text-uppercase">2005 - 2013</span>
                           <h5 class="poppins-font text-uppercase">Consultant <span class="place open-sans-font">Videohive</span>
                           </h5>
                           <p class="open-sans-font">Lorem ipsum dolor sit amet, tempor incididunt ut laboreconsectetur elit, sed do eiusmod tempor duntt</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 m-15px-tb">
                  <div class="resume-box">
                     <ul>
                        <li>
                           <div class="icon">
                              <i class="fa fa-graduation-cap"></i>
                           </div>
                           <span class="time open-sans-font text-uppercase">2015</span>
                           <h5 class="poppins-font text-uppercase">Engineering Degree <span class="place open-sans-font">Oxford University</span>
                           </h5>
                           <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore</p>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fa fa-graduation-cap"></i>
                           </div>
                           <span class="time open-sans-font text-uppercase">2012</span>
                           <h5 class="poppins-font text-uppercase">Master Degree <span class="place open-sans-font">Kiev University</span>
                           </h5>
                           <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut adipisicing</p>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fa fa-graduation-cap"></i>
                           </div>
                           <span class="time open-sans-font text-uppercase">2009</span>
                           <h5 class="poppins-font text-uppercase">Bachelor Degree <span class="place open-sans-font">Tunis High School</span>
                           </h5>
                           <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- Experience & Education Ends -->
         </div>
      </div>
   </div>
   <!-- Main Content Ends -->
</div>

@endsection