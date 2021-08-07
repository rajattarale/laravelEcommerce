<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GreenyBasket | @yield('title')</title>
    @include('admin.Adminlayout.stylesheet')
    @yield('customcss')
    
  </head>

  <body id="page-top">

  <!-- navbar --> 
    
    @include('admin.Adminlayout.navbar')

    <div id="wrapper">

      <!-- Sidebar -->
      
      @include('admin.Adminlayout.sidebar')

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Add Product</li>
          </ol>

          <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Add Product</div>
                <div id="mydiv" >
                      
            </div>
            
            <form action="{{route('admin.adminRegistration')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                    @csrf
                        <input type="hidden" name="id" value="" />
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required="">
                                </div>                    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="password" required="">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="mobileno">Mobile No</label>
                                <input type="text" class="form-control" id="mobileno" name="mobileno" required="">
                                </div>                    
                            </div>
                            
                            <button type="submit" name="add" class="btn btn-primary">Admin Registration</button>
            </form>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('admin.Adminlayout.footer')

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div> -->

    <!-- script -->
    
    @include('admin.Adminlayout.script')

  </body>

</html>