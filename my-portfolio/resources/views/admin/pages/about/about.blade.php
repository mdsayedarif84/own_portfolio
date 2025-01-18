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
            <div class="card-footer">
               <div class="d-grid gap-2 col-4 mx-auto">
                  <h2 class="btn btn-dark" type="">Personal Info</h2>
               </div>
            </div>
            <div class="container mt-5">
               <form action="{{ route('admin.aboutStore') }}" method="post" id="aboutForm" name="aboutForm">
                  @csrf
                  <!-- Full Name -->
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                           <div class="col-sm-9">
                              <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Enter Your first_name">
                              <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                           <div class="col-sm-9">
                              <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control @error('last_name') is-invalid @enderror" id="last_name" placeholder="Enter Your last_name">
                              <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="age" class="col-sm-3 col-form-label">Age</label>
                           <div class="col-sm-9">
                              <input type="text" name="age" value="{{ old('age') }}" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Enter Your age">
                              <span class="text-danger">{{ $errors->has('age') ? $errors->first('age') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="email" class="col-sm-3 col-form-label">Email </label>
                           <div class="col-sm-9">
                              <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your email">
                              <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                           <div class="col-sm-9">
                              <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Enter Your phone_number">
                              <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="social_id" class="col-sm-3 col-form-label">Social Id</label>
                           <div class="col-sm-9">
                              <input type="text" name="social_id" value="{{ old('social_id') }}" class="form-control @error('social_id') is-invalid @enderror" id="social_id" placeholder="Enter Your social_id">
                              <span class="text-danger">{{ $errors->has('social_id') ? $errors->first('social_id') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="nationality" class="col-sm-3 col-form-label">Nationality</label>
                           <div class="col-sm-9">
                              <input type="text" name="nationality" value="{{ old('nationality') }}" class="form-control @error('nationality') is-invalid @enderror" id="nationality" placeholder="Enter Your Nationality">
                              <span class="text-danger">{{ $errors->has('nationality') ? $errors->first('nationality') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="frelance" class="col-sm-3 col-form-label">Frelance</label>
                           <div class="col-sm-9">
                              <input type="text" name="frelance" value="{{ old('frelance') }}" class="form-control @error('frelance') is-invalid @enderror" id="frelance" placeholder="Enter Your Frelance">
                              <span class="text-danger">{{ $errors->has('frelance') ? $errors->first('frelance') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="language" class="col-sm-3 col-form-label">Language</label>
                           <div class="col-sm-9">
                              <input type="text" name="language" value="{{ old('language') }}" class="form-control @error('language') is-invalid @enderror" id="language" placeholder="Enter Your Language">
                              <span class="text-danger">{{ $errors->has('language') ? $errors->first('language') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="address" class="col-sm-3 col-form-label">Address</label>
                           <div class="col-sm-9">
                              <input type="text" name="address" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter Your Address">
                              <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="happy_customers" class="col-sm-3 col-form-label">Happy Customers</label>
                           <div class="col-sm-9">
                              <input type="text" name="happy_customers" value="{{ old('happy_customers') }}" class="form-control @error('happy_customers') is-invalid @enderror" id="happy_customers" placeholder="Happy Customers">
                              <span class="text-danger">{{ $errors->has('happy_customers') ? $errors->first('happy_customers') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="awards_won" class="col-sm-3 col-form-label">Awards Won</label>
                           <div class="col-sm-9">
                              <input type="text" name="awards_won" value="{{ old('awards_won') }}" class="form-control @error('awards_won') is-invalid @enderror" id="awards_won" placeholder="Awards Won">
                              <span class="text-danger">{{ $errors->has('awards_won') ? $errors->first('awards_won') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="input-group mb-3">
                           <label for="year_experience" class="col-sm-4 col-form-label">Years Of Experience</label>
                           <div class="col-sm-8">
                              <input type="text" name="year_experience" value="{{ old('year_experience') }}" class="form-control @error('year_experience') is-invalid @enderror" id="year_experience" placeholder="Only Year">
                              <span class="text-danger">{{ $errors->has('year_experience') ? $errors->first('year_experience') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="input-group mb-3">
                           <label for="project" class="col-sm-4 col-form-label">Completed Project</label>
                           <div class="col-sm-8">
                              <input type="text" name="project" value="{{ old('project') }}" class="form-control @error('project') is-invalid @enderror" id="project" placeholder="Enter Your Completed Project">
                              <span class="text-danger">{{ $errors->has('project') ? $errors->first('project') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <div class="d-grid gap-2 col-4 mx-auto">
                        <h2 class="btn btn-dark" type="">My Skills</h2>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4"></div>
                     <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="html" type="checkbox" id="html" value="HTML">
                           <label class="form-check-label" for="html">HTML</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="css" type="checkbox" id="css" value="CSS">
                           <label class="form-check-label" for="css">CSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="Javascript" type="checkbox" id="Javascript" value="Javascript">
                           <label class="form-check-label" for="Javascript">Javascript</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="php" type="checkbox" id="php" value="PHP">
                           <label class="form-check-label" for="php">PHP</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="wordpress" type="checkbox" id="wordpress" value="wordpress">
                           <label class="form-check-label" for="wordpress">Wordpress</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="jquery" type="checkbox" id="jquery" value="JQuery">
                           <label class="form-check-label" for="jquery">JQuery</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="python" type="checkbox" id="python" value="Python">
                           <label class="form-check-label" for="python">Python</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="angular" type="checkbox" id="angular" value="Angular">
                           <label class="form-check-label" for="angular">Angular</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="react" type="checkbox" id="react" value="React">
                           <label class="form-check-label" for="react">React</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" name="laravel" type="checkbox" id="laravel" value="Laravel">
                           <label class="form-check-label" for="laravel">Laravel</label>
                        </div>
                     </div>
                     <div class="col-sm-4"></div>
                  </div>
                  <div class="card-footer">
                     <div class="d-grid gap-2 col-4 mx-auto">
                        <h2 class="btn btn-dark" type="">Experience & Education</h2>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="year" class="col-sm-4 col-form-label">Years & Experience</label>
                           <div class="col-sm-8">
                              <input type="text" name="year" value="{{ old('year') }}" class="form-control @error('year') is-invalid @enderror" id="year_experience" placeholder="Year To Year">
                              <span class="text-danger">{{ $errors->has('year') ? $errors->first('year') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="designatio" class="col-sm-3 col-form-label">Designation</label>
                           <div class="col-sm-9">
                              <input type="text" name="designatio" value="{{ old('designatio') }}" class="form-control @error('designatio') is-invalid @enderror" id="designatio" placeholder="Enter Your Designation">
                              <span class="text-danger">{{ $errors->has('designatio') ? $errors->first('designatio') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group mb-3">
                           <label for="compnay" class="col-sm-3 col-form-label">Compnay</label>
                           <div class="col-sm-9">
                              <input type="text" name="compnay" value="{{ old('compnay') }}" class="form-control @error('compnay') is-invalid @enderror" id="compnay" placeholder="Enter Your Compnay">
                              <span class="text-danger">{{ $errors->has('compnay') ? $errors->first('compnay') : ' ' }}</span>
                              <p></p>
                           </div>
                        </div>
                     </div>
                     <div class="input-group mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                           <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Enter Your Description"></textarea>
                           <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</span>
                           <p></p>
                        </div>
                     </div>
                  </div>
                  <!-- Submit Button -->
                  <div class="card-footer">
                     <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Add About Info</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection