<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
         </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
               </button>
            </div>
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
               <a href="{{route('dashboard')}}" class="nav-link active">
                  <i class="nav-icon fab fa-artstation"></i>
                  <p>
                     Dashboard
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>

            </li>
            <li class="nav-item ">
               <a href="" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                     Home
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('admin.home')}}" class="nav-link">
                        <i class="far fas fa-user-md nav-icon"></i>
                        <p>Profile</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('admin.profileList')}}" class="nav-link">
                        <i class="fas fa-list-ol nav-icon"></i>
                        <p>Profile List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>jsGrid</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="{{route('admin.about')}}" class="nav-link">
                  <i class="nav-icon fas fa-info-circle"></i>
                  <p>
                     About
                     <span class="right badge badge-danger">New</span>
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('admin.portfolio')}}" class="nav-link">
                  <i class="nav-icon fas fa-briefcase"></i>
                  <p>
                     Portfolio
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('admin.contact')}}" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>
                     Contact
                     <i class="fas fa-angle-left right"></i>
                     <span class="badge badge-info right">6</span>
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('admin.blog')}}" class="nav-link">
                  <i class="nav-icon 	fas fa-blog"></i>
                  <p>
                     Blog
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
            </li>

            <li class="nav-item">
               <a href="{{route('admin.logout')}}" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                     Logout
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                     Tables
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="pages/tables/simple.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Simple Tables</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/tables/data.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>DataTables</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>jsGrid</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>