    <!-- Brand Logo --> 
    @if(Auth::check())
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:670px">
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
   
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('admin')}}" class="nav-link active">
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('categories.index')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('posts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('comments.index')}}" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Comments
              </p>
            </a>
          </li>
        </ul>
      </nav>
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>  @endif