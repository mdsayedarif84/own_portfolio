@extends('dashboard')
@section('title')
Home
@endsection
@section('home')
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid my-2">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Create Profile</h1>
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
            <!-- form start -->
            <form action="{{ route('admin.profileStore') }}" method="post" id="profileForm" name="profileForm" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                  <div class="form-group row">
                     <label for="profile_img" class="col-sm-2 col-form-label"> Porofile Image</label>
                     <div class="col-sm-10">
                        <input type="file" name="profile_img" value="{{ old('profile_img') }}" class="form-control" id="profile_img">
                        <span class="text-danger">{{ $errors->has('profile_img') ? $errors->first('profile_img') : ' ' }}</span>
                        <p></p>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="name" class="col-sm-2 col-form-label">Your Name</label>
                     <div class="col-sm-10">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('category_name') is-invalid @enderror" id="name" placeholder="Enter Your Name">
                        <!-- <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span> -->
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->has('name') ? $errors->first('name') : ' '  }}</strong>
                        </span>
                        @enderror
                        <p></p>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="work_experience" class="col-sm-2 col-form-label">Work Expericence</label>
                     <div class="col-sm-10">
                        <input type="text" name="work_experience" value="{{ old('work_experience') }}" class="form-control" id="work_experience" placeholder="Enter Your Work Expericence">
                        <span class="text-danger">{{ $errors->has('work_experience') ? $errors->first('work_experience') : ' ' }}</span>
                        <p></p>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="description" class="col-sm-2 col-form-label">Description</label>
                     <div class="col-sm-10">
                        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Your Work Expericence"></textarea>
                        <p></p>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="status" class="col-sm-2 col-form-label" value="{{ old('publication_status') }}">Status</label>
                     <div class="col-sm-10">
                        <select name="status" id="status" class="form-control">
                           <option id="ctghide"></option>
                           <option value="1">Active</option>
                           <option value="0">Block</option>
                        </select>
                        <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ' ' }}</span>
                        <p></p>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </section>
</div>
@endsection
@section('customJs')
<script type="text/javascript">
   //  $("#status option[value='2']").hide();
   $(document).ready(function() {
      $("#ctghide").hide();
   });
</script>
<!-- <script>
   $("#profileForm").submit(function(event) {
      event.preventDefault();
      // let formData = new FormData(this);
      var element = $(this);
      // $("button[type=submit)]").prop('disabled',true);
      $.ajax({
         url: '{{route("admin.profileStore")}}',
         type: 'POST',
         data: element.serializeArray(),
         // data: formData,
         // headers: {
         //    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF token is included
         // },
         dataType: 'json',
         success: function(response) {
            // $("button[type=submit)]").prop('disabled',false);
            if (response["status"] == true) {
               window.location.href = '{{ route("admin.home") }}';
               $("#name").removeClass('is-invalid')
                  .siblings('p')
                  .removeClass('invalid-feedback').html("");

               $("#profile_img").removeClass('is-invalid')
                  .siblings('p')
                  .removeClass('invalid-feedback').html("");
               $("#work_experience").removeClass('is-invalid')
                  .siblings('p')
                  .removeClass('invalid-feedback').html("");
               $("#description").removeClass('is-invalid')
                  .siblings('p')
                  .removeClass('invalid-feedback').html("");
               $("#status").removeClass('is-invalid')
                  .siblings('p')
                  .removeClass('invalid-feedback').html("");
            } else {
               var errors = response['errors'];
               if (errors['name']) {
                  $("#name").addClass('is-invalid')
                     .siblings('p')
                     .addClass('invalid-feedback').html(errors['name']);
               } else {
                  $("#name").removeClass('is-invalid')
                     .siblings('p')
                     .removeClass('invalid-feedback').html("");
               }
               if (errors['profile_img']) {
                  $("#profile_img").addClass('is-invalid')
                     .siblings('p')
                     .addClass('invalid-feedback').html(errors['profile_img']);
               } else {
                  $("#profile_img").removeClass('is-invalid')
                     .siblings('p')
                     .removeClass('invalid-feedback').html("");
               }
               if (errors['work_experience']) {
                  $("#work_experience").addClass('is-invalid')
                     .siblings('p')
                     .addClass('invalid-feedback').html(errors['work_experience']);
               } else {
                  $("#work_experience").removeClass('is-invalid')
                     .siblings('p')
                     .removeClass('invalid-feedback').html("");
               }
               if (errors['description']) {
                  $("#description").addClass('is-invalid')
                     .siblings('p')
                     .addClass('invalid-feedback').html(errors['description']);
               } else {
                  description
                  $("#description").removeClass('is-invalid')
                     .siblings('p')
                     .removeClass('invalid-feedback').html("");
               }
               if (errors['status']) {
                  $("#status").addClass('is-invalid')
                     .siblings('p')
                     .addClass('invalid-feedback').html(errors['status']);
               } else {
                  $("#status").removeClass('is-invalid')
                     .siblings('p')
                     .removeClass('invalid-feedback').html("");
               }
            }

         },
         error: function(jqXHR, exception) {
            console.log("Something Went Wrong!");
         }
      })
   });
</script> -->
@endsection