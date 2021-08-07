<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">GreenyBasket</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto mr-0 mr-md-5 my-4 my-md-0">
        <li class="nav-item dropdown no-arrow">
        
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h5 style="color:white;">
                Admin
                <i class="fas fa-user-circle fa-fw" style="font-size: 30px"></i>
                </h5>
            </a>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
            <a class="dropdown-item">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="changePassword.php">Change password</a>
            <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
            </div>
        </li>
    </ul>

</nav>