<nav class="main-header navbar navbar-expand navbar-dark">
 <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user"></i> Username
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <i class="far fa-id-badge mr-2"></i> My Profile
        </a>
         <a href="{{ route('admin.about') }}" class="dropdown-item">
          <i class="fas fa-exclamation-circle mr-2"></i> About
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </a>
      </div>
    </li>

  </ul>
</nav>