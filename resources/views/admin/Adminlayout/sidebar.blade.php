
<ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{route('admin.adminlist')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Admin list</span>
          </a>
          <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="adminList.php">Admin List</a>
            <a class="dropdown-item" href="adminRegistration.php">Admin Registration</a>
          </div> -->
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{route('admin.adminRegistration')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Admin Registration</span>
          </a>
          <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="adminList.php">Admin List</a>
            <a class="dropdown-item" href="adminRegistration.php">Admin Registration</a>
          </div> -->
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link" href="{{url('admin/addProduct45')}}"> -->
          <a class="nav-link" href="{{url('admin/addProduct')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Product</span>
          </a>
          <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="">Add Product</a>
          </div> -->
          
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
          <a class="nav-link" href="{{route('admin.addcartlist')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Add Cart list</span>
          </a>
          <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{route('admin.addcartlist')}}">Add Cart list</a>
          </div> -->
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Order Details</span>
          </a>
        </li>
</ul>
