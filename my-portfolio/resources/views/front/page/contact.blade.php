@extends('front.master.master')
@section('title')
Contact
@endsection
@section('body')
<div class="page page--current" id="contact">
   <div class="contact">
      <div class="title-section text-left text-sm-center">
         <h2>get in <span>touch</span>
         </h2>
         <span class="title-bg">contact</span>
      </div>
      <div class="main-content">
         <div class="container">
            <div class="row">
               <!-- Left Side Starts -->
               <div class="col-12 col-lg-4">
                  <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                  <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                  <p class="open-sans-font custom-span-contact position-relative">
                     <i class="fa fa-envelope-open position-absolute"></i>
                     <span class="d-block">mail me</span>lucy@mail.com
                  </p>
                  <p class="open-sans-font custom-span-contact position-relative">
                     <i class="fa fa-phone-square position-absolute"></i>
                     <span class="d-block">call me</span>+216 21 184 010
                  </p>
                  <ul class="social list-unstyled pt-1 mb-5">
                     <li class="facebook">
                        <a title="Facebook" href="#">
                           <i class="fa fa-facebook"></i>
                        </a>
                     </li>
                     <li class="twitter">
                        <a title="Twitter" href="#">
                           <i class="fa fa-twitter"></i>
                        </a>
                     </li>
                     <li class="youtube">
                        <a title="Youtube" href="#">
                           <i class="fa fa-youtube"></i>
                        </a>
                     </li>
                     <li class="dribbble">
                        <a title="Dribbble" href="#">
                           <i class="fa fa-dribbble"></i>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- Left Side Ends -->
               <!-- Contact Form Starts -->
               <div class="col-12 col-lg-8">
                  <form class="contactform" method="post" action="https://slimhamdi.net/tunis/demos/php/process-form.php">
                     <div class="contactform">
                        <div class="row">
                           <div class="col-12 col-md-4">
                              <input autocomplete="off" type="text" name="name" placeholder="YOUR NAME">
                           </div>
                           <div class="col-12 col-md-4">
                              <input autocomplete="off" type="email" name="email" placeholder="YOUR EMAIL">
                           </div>
                           <div class="col-12 col-md-4">
                              <input autocomplete="off" type="text" name="subject" placeholder="YOUR SUBJECT">
                           </div>
                           <div class="col-12">
                              <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                              <button type="submit" class="button">
                                 <span class="button-text">Send Message</span>
                                 <span class="button-icon fa fa-send"></span>
                              </button>
                           </div>
                           <div class="col-12 form-message">
                              <span class="output_message text-center font-weight-600 text-uppercase"></span>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <!-- Contact Form Ends -->
            </div>
         </div>
      </div>
   </div>
</div>
@endsection