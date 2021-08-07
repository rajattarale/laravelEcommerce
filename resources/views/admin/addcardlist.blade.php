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
            
            <!-- <form method="get" action="{{route('admin.addproduct654')}}">
                    <button class="btn btn-success btn-lg float-right mr-5 mt-4" type="submit">Add Product</button>
            </form> -->
            
            <!-- <div class="card-body">
                <div class="container">
                    <div class="row">
                        <form action="{{route('admin.addproduct')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                        @csrf
                        <input type="hidden" name="id" value="" />
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="productName">Product Name</label>
                                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="productImg">Product Photo</label>
                                <input type="file" class="form-control" id="productImg" name="productImg" required="">
                                </div>                    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Market Owner">Owner</label>
                                    <input type="text" class="form-control" id="marketowner" name="marketowner" placeholder="Owner" required="">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="item">Product item</label>
                                <input type="text" class="form-control" id="item" name="item" required="">
                                </div>                    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="business name">Business Name</label>
                                    <input type="text" class="form-control" id="businessname" name="businessname" placeholder="business Name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="item_name">item Name</label>
                                <input type="text" class="form-control" id="item_name" name="item_name" required="">
                                </div>                    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required="">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="discount_amount">Discount Amount</label>
                                <input type="text" class="form-control" id="discount_amount" name="discount_amount" required="">
                                </div>                    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="currency_code">Currency Code</label>
                                    <input type="text" class="form-control" id="currency_code" name="currency_code" placeholder="currency code" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="returnitem">Return Item</label>
                                    <input type="text" class="form-control" id="returnitem" name="returnitem" required="">
                                </div>                    
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cancel_return">Cancel Return</label>
                                    <input type="text" class="form-control" id="cancel_return" name="cancel_return" placeholder="Cancel Return" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    
                                </div>                    
                            </div>
                            
                            <button type="submit" name="add" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Product Name</th>
                      <th>Market owner</th>
                      <th>Product item</th>
                      <th>Business Name</th>
                      <th>Item Name</th>
                      <th>Amount</th>
                      <th>Discount Amount</th>
                      <th>Currency Code</th>
                      <th>Return Item</th>
                      <th>Cancel Return </th>
                      <!-- <th>Edit</th>
                      <th>Delete</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($datas as $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->productName}}</td>
                      <td>{{$data->marketowner}}</td>
                      <td>{{$data->item}}</td>
                      <td>{{$data->businessname}}</td>
                      <td>{{$data->item_name}}</td>
                      <td>{{$data->amount}}</td>
                      <td>{{$data->discount_amount}}</td>
                      <td>{{$data->currency_code}}</td>
                      <td>{{$data->returnitem}}</td>
                      <td>{{$data->cancel_return}}</td>
                      <!-- <td><a class="btn btn-primary" href="" onclick="return confirm('do you want to edit this Record?');" title="edit"><i class="fas fa-edit"></i></a></td>
                      <td><a class="btn btn-danger" href=""  onclick="return confirm('do you want to delete this Record?');" title="delete"><i class="fas fa-trash"></i></a></td> -->
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

          

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