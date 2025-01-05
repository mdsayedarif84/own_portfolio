@extends('dashboard')
@section('title')
Profile Edit Page
@endsection
@section('home')
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid my-2">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Profile</h1>
            </div>
            <div class="col-sm-6 text-right">
               <a href="{{route('admin.profileList')}}" class="btn btn-primary">
                  <i class="fas fa-list-ol nav-icon"></i> Profile List
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
               <h3 class="card-title">Profile Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
               @csrf
               <div class="card-body">
                  <div class="form-group row">
                     <label for="profile" class="col-sm-2 col-form-label"> Porofile Image</label>
                     <div class="col-sm-3">
                        <input type="file" name="profile" class="form-control" id="profile" placeholder="Email">
                     </div>
                     <div class="col-sm-7">
                        @if(!empty($profile->profile_img) && file_exists(public_path('upload/admin_images/' . $profile->profile_img)))
                        <img src="{{asset('upload/admin_images/' .$profile->profile_img)}}" class="img-thumbnail" width="50">
                        @else
                        <img src="{{asset('upload/admin_images/DefaultImg.png')}}" class="img-thumbnail" width="50">
                        @endif
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="Name" class="col-sm-2 col-form-label">Your Name</label>
                     <div class="col-sm-10">
                        <input type="text" value="{{$profile->name}}" name="name" class="form-control" id="Name" placeholder="Enter Your Name">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="Name" class="col-sm-2 col-form-label">Work Name</label>
                     <div class="col-sm-10">
                        <input type="text" value="{{$profile->work_experience}}" name="work_experience" class="form-control" id="Name" placeholder="Enter Your Work Expericence">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                     <div class="col-sm-10">
                        <textarea type="text" name="description" class="form-control" id="inputPassword3" placeholder="Enter Your Work Expericence">
                        {{ $profile->description }}
                        </textarea>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="status" class="col-sm-2 col-form-label">Status</label>
                     <div class="col-sm-10">
                        <select name="status" id="status" class="form-control">
                           <option hidden>Select Option Pls!!</option>
                           <option {{ ($profile->status == 1) ?'selected' : '' }} value="1">Active</option>
                           <option {{ ($profile->status == 0) ?'selected' : '' }} value="0">Block</option>
                        </select>
                        <p></p>
                     </div>
                  </div>
               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
               </div>
               <!-- /.card-footer -->
            </form>
         </div>
      </div>
   </section>
</div>
@endsection