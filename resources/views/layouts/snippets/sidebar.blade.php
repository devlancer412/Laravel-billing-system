<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('img/logo.png')}}" alt="Company Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">LaraBill</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Item
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('item')}}" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Items List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/item/create" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add Item</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Category
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category')}}" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>View Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('get_create_category')}}" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add New Category</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/table" class="nav-link active">
            <i class="nav-icon fa fa-table"></i>
            <p>Manage Tables</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Report
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Weekly</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Monthly</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/profile" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/setting" class="nav-link">
            <i class="nav-icon fa fa-cog"></i>
            <p>Setting</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
            <i class="nav-icon fa fa-sign-out"></i>
            <p>Logout</p>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    </nav>
  </div>
</aside>