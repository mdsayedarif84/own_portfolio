@extends('dashboard')
@section('title')
About
@endsection
@section('home')
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid my-2">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Create About</h1>
            </div>
            <div class="col-sm-6 text-right">
               <a href="{{route('admin.profileList')}}" class="btn btn-primary">
                  <i class="fas fa-list-ol nav-icon"></i> About List
               </a>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <section class="content">
      <div class="container-fluid">
         @include('admin.pages.message')
         <div class="card card-info">
            <div class="card-header">
               <h3 class="card-title">About Form</h3>
            </div>
            <div class="container mt-5">
               <form action="{{ route('admin.aboutStore') }}" method="post" id="aboutForm" name="aboutForm">
                  @csrf
                  <!-- Full Name -->
                  <div class="mb-3">
                     <label for="fullName" class="form-label ">Full Name</label>
                     <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" id="fullName" placeholder="Enter your full name">
                     <span class="text-danger">{{ $errors->has('fullName') ? $errors->first('fullName') : ' ' }}</span>
                  </div>

                  <!-- Email Address -->
                  <div class="mb-3">
                     <label for="email" class="form-label">Email Address</label>
                     <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your email">
                     <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                  </div>

                  <!-- Phone Number -->
                  <div class="mb-3">
                     <label for="phone" class="form-label">Phone Number</label>
                     <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
                  </div>

                  <!-- Profession -->
                  <div class="mb-3">
                     <label for="profession" class="form-label">Profession</label>
                     <input type="text" class="form-control" name="profession" id="profession" placeholder="Your profession (e.g., Web Developer)">
                  </div>

                  <!-- About Section -->
                  <div class="mb-3">
                     <label for="about" class="form-label">About You</label>
                     <textarea class="form-control" name="about" id="about" rows="5" placeholder="Write a short bio about yourself"></textarea>
                  </div>

                  <!-- Portfolio Website -->
                  <div class="mb-3">
                     <label for="website" class="form-label">Portfolio Website</label>
                     <input type="url" class="form-control" name="website" id="website" placeholder="Enter your portfolio website URL">
                  </div>

                  <!-- Submit Button -->
                  <button type="submit" name="submit" class="btn btn-success">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection