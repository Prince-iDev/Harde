<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a @if(Session::get('page') == "dashboard") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="ti-home menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @if(Auth::guard('admin')->user()->type == "vendor")
         <li class="nav-item">
        <a @if(Session::get('page') == "sections" || Session::get('page') == "categories" || Session::get('page') == "brands" || Session::get('page') == "products") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#vendor" aria-expanded="false" aria-controls="auth">
          <i class="ti-pencil menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Vendor Details</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="vendor">
          <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
            <li class="nav-item"> <a @if(Session::get('page') == "sections") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Personal Details</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "categories") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Business Details</a></li>
             <li class="nav-item"> <a @if(Session::get('page') == "brands") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Account Details</a></li>
          </ul>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a @if(Session::get('page') == "sections" || Session::get('page') == "super" || Session::get('page') == "admin" || Session::get('page') == "vendor") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="auth">
          <i class="ti-briefcase menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Admin Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="admin">
          <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
            <li class="nav-item"> <a @if(Session::get('page') == "super") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Super Admin Details</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "admin") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Admin Details</a></li>
             <li class="nav-item"> <a @if(Session::get('page') == "vendor") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Vendor Details</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a @if(Session::get('page') == "Users" || Session::get('page') == "subscribers") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="auth">
          <i class="ti-user menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Users Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
            <li class="nav-item"> <a @if(Session::get('page') == "users") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Users</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "subscribers") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#">Subscribers</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a @if(Session::get('page') == "slider_banner" || Session::get('page') == "fixed_banner") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#banners" aria-expanded="false" aria-controls="auth">
          <i class="ti-image menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Banner Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="banners">
          <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
            <li class="nav-item"> <a @if(Session::get('page') == "slider_banner") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/slider-banner') }}">Slider Banners</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "fixed_banner") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/fixed-banner') }}">Fixed Banner</a></li>
          </ul>
        </div>
      </li>
      @endif

 <!-- <li class="nav-item">
        <a @if(Session::get('page') == "delseans") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" href="{{ url('admin/delseans') }}">
          <i class="ti-user menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Delseans</span>
        </a>
      </li> -->

      <li class="nav-item">
        <a @if(Session::get('page') == "sections" || Session::get('page') == "categories" || Session::get('page') == "brands" || Session::get('page') == "products" || Session::get('page') == "filters" || Session::get('page') == "filter_values") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#management" aria-expanded="false" aria-controls="auth">
          <i class="ti-pencil menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Manage Catalogue</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="management">
          <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
            <li class="nav-item"> <a @if(Session::get('page') == "sections") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/section') }}">Sections</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "categories") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/category') }}">Categories</a></li>
             <li class="nav-item"> <a @if(Session::get('page') == "brands") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/brands') }}">Brands</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "products") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/product') }}">Products</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "filters") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/filters') }}">Filters</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a @if(Session::get('page') == "transaction") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" href="{{ url('admin/transactions') }}">
          <i class="ti-receipt menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Transactions</span>
        </a>
      </li>
      <li class="nav-item">
        <a @if(Session::get('page') == "change_password" || Session::get('page') == "update_profile") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="auth">
          <i class="ti-settings menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
            <li class="nav-item"> <a @if(Session::get('page') == "change_password") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/change-password') }}"> Change Password</a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "update_profile") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/update-profile') }}"> Edit profile </a></li>
            <li class="nav-item"> <a @if(Session::get('page') == "notification") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#"> Notification </a></li>
           <li class="nav-item"> <a @if(Session::get('page') == "suspend_account") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="#"> Suspend Account </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a @if(Session::get('page') == "index") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" href="{{ url('index') }}" target="_blank">
          <i class="mdi mdi-cart-outline menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Shopping Home</span>
        </a>
      </li>
    </ul>
  </nav>
