@extends('dashboard')
@section('title')
Profile List Page
@endsection
@section('home')
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid my-2">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1> Profile List</h1>
            </div>
            <div class="col-sm-6 text-right">
               <a href="{{route('admin.home')}}" class="btn btn-primary">
                  <i class="far fas fa-user-md nav-icon"></i>
                  Add Profile
               </a>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <section class="content">
      <div class="container-fluid">
         @include('admin.pages.message')
         <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Profile Img</th>
                        <th>Name</th>
                        <th>Work Expericence</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @if($profiles->isNotEmpty())
                     @foreach($profiles as $key=> $item)

                     <tr>
                        <td>
                           @if(!empty($item->profile_img) && file_exists(public_path('upload/admin_images/' . $item->profile_img)))
                           <img src="{{asset('upload/admin_images/' .$item->profile_img)}}" class="img-thumbnail" width="50">
                           @else
                           <img src="{{asset('upload/admin_images/DefaultImg.png')}}" class="img-thumbnail" width="50">
                           @endif
                        </td>
                        <td>{{ $item->name}} </td>
                        <td>{{ $item->work_experience}} </td>
                        <td> {{ $item->description}} </td>
                        <td>
                           @if( $item->status==1)
                           <i class='far fa-check-circle' title="Active" style='color:green'></i>
                           @else
                           <i class='fas fa-exclamation-triangle' title="Inactive" style='color:red'></i>
                           @endif
                        </td>
                        <td>
                           <a href="{{route('admin.profileEdit',$item->id)}}">
                              <i class='fas fa-user-edit' title="Edit"></i>
                           </a>
                           <a href="#" onclick="" class="text-danger w-4 h-4 mr-1">
                              <i class='fas fa-prescription-bottle' title="Delete"></i>
                           </a>
                        </td>
                     </tr>
                     @endforeach
                     @else
                     <tr>
                        <td colspan="5" class="text-center text-danger">
                           <h2>Records Not Found</h2>
                        </td>
                     </tr>
                     @endif
                  </tbody>
                  <tfoot>
                     <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Work Expericence</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
   </section>
</div>
@endsection