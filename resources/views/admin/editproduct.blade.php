<!DOCTYPE html>
<html lang="en">

  <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <title>GreenyBasket | @yield('title')</title>
                @include('admin.Adminlayout.stylesheet')
                @yield('customcss')
  </head>

  <body id="page-top">

                @include('admin.Adminlayout.navbar')
          
    <div id="wrapper">

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
            <div class="card-body">
                <div class="container">
                    <div class="row">
                     
                        <form action="{{ route('admin.UpdateProduct', $data->id)}}" method="POST" enctype="multipart/form-data" style="width: 100%;">    
                        @csrf
                        @method('PUT')
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="productName">Product Name</label>
                                      <input type="text" class="form-control" id="productName" name="productName" value="{{$data->productName}}" required="">
                                  </div>
                                  <div class="form-group col-md-6">
                                  <label for="productImg">Update Product Photo</label>
                                      <input type="file" class="form-control" id="productImg" value="" name="productImg">
                                      <img src="{{ asset('productimage/'.$data->productImg) }}" style='width:150px;height: 150px;'/>
                                      <input type="hidden" name="hidden_img" value="{{ $data->productImg }}">
                                  </div>
                              </div>

                              <div class="form-row mt-3">
                                 <div class="form-group col-md-4">
                                <label for="category">category</label>
                                    <select id="category" name="category" class="form-control">
                                        <!-- <option value="">-Select Product-</option> -->
                                        <option value="Fruit vegetable" name="Fruit vegetable" @if($data->category == "Fruit vegetable") Selected @endif>Fruit vegetable</option>
                                        <option value="leafy vegetable" name="leafy vegetable" @if($data->category == "leafy vegetable") Selected @endif>leafy vegetable</option>
                                        <option value="Sprouts"  name="Sprouts" @if($data->category == "Sprouts") Selected @endif>Sprouts</option>
                                        <option value="Fruits" name="Fruits" @if($data->category == "Fruits") Selected @endif>Fruits</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="selectQuantity">Select Quantity</label>
                                    <select id="selectQuantity" name="selectQuantity" class="form-control">
                                        <!-- <option value="">-Select Product-</option> -->
                                        <option value="250 gm-(Sorted)" @if($data->selectQuantity == "250 gm-(Sorted)") Select @endif>250 gm-(Sorted)</option>
                                        <option value="500 gm-(Sorted)" @if($data->selectQuantity == "500 gm-(Sorted)") Select @endif>500 gm-(Sorted)</option>
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="1kg-" @if($data->selectQuantity == "1kg-") Select @endif>1kg-</option>
                                        <option value="2kg-" @if($data->selectQuantity == "2kg-") Select @endif>2kg-</option>
                                        <option value="3kg-" @if($data->selectQuantity == "3kg-") Select @endif>3kg-</option>
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="250 gm-(Sorted + Cut )" @if($data->selectQuantity == "250 gm-(Sorted + Cut )") Select @endif>250 gm-(Sorted + Cut )</option>
                                        <option value="500 gm-(Sorted + Cut )" @if($data->selectQuantity == "500 gm-(Sorted + Cut )") Select @endif>500 gm-(Sorted + Cut )</option>
                                        <option value="100 gm -" @if($data->selectQuantity == "100 gm -") Select @endif>100 gm -</option>
                                        <option value="250 gm -" @if($data->selectQuantity == "250 gm -") Select @endif>250 gm -</option>
                                        <option value="500 gm -" @if($data->selectQuantity == "500 gm -") Select @endif>500 gm -</option>
                                        <option value="1 kg-(Sorted + Cut )" @if($data->selectQuantity == "1 kg-(Sorted + Cut )") Select @endif>1 kg-(Sorted + Cut )</option>
                                        <option value="2 kg-(Sorted + Cut )" @if($data->selectQuantity == "2 kg-(Sorted + Cut )") Select @endif>2 kg-(Sorted + Cut )</option>
                                        <option value="3 kg-(Sorted + Cut )" @if($data->selectQuantity == "3 kg-(Sorted + Cut )") Select @endif>3 kg-(Sorted + Cut )</option>
                                        <option value="4 kg-(Sorted + Cut )" @if($data->selectQuantity == "4 kg-(Sorted + Cut )") Select @endif>4 kg-(Sorted + Cut )</option>
                                        <option value="5 kg-(Sorted + Cut )" @if($data->selectQuantity == "5 kg-(Sorted + Cut )") Select @endif>5 kg-(Sorted + Cut )</option>
                                        <option value="4 Pcs.-" @if($data->selectQuantity == "4 Pcs.-") Select @endif>4 Pcs.-</option>
                                        <option value="6 Pcs.-" @if($data->selectQuantity == "6 Pcs.-") Select @endif>6 Pcs.-</option>
                                        <option value="1 nos.-" @if($data->selectQuantity == "1 nos.-") Select @endif>1 nos.-</option>
                                        <option value="6 nos.-" @if($data->selectQuantity == "6 nos.-") Select @endif>6 nos.-</option>
                                        <option value="12 nos.-" @if($data->selectQuantity == "12 nos.-") Select @endif>12 nos.-</option>
                                        <option value="24 nos.-" @if($data->selectQuantity == "24 nos.-") Select @endif>24 nos.-</option>
                                        <option value="1 bunch-(Sorted)" @if($data->selectQuantity == "1 bunch-(Sorted)") Select @endif>1 bunch-(Sorted)</option>
                                        <option value="2 bunch-(Sorted)" @if($data->selectQuantity == "2 bunch-(Sorted)") Select @endif>2 bunch-(Sorted)</option>
                                        <option value="3 bunch-(Sorted)" @if($data->selectQuantity == "3 bunch-(Sorted)") Select @endif>3 bunch-(Sorted)</option>
                                        <option value="4 bunch-(Sorted)" @if($data->selectQuantity == "4 bunch-(Sorted)") Select @endif>4 bunch-(Sorted)</option>
                                        <option value="5 bunch-(Sorted)" @if($data->selectQuantity == "5 bunch-(Sorted)") Select @endif>5 bunch-(Sorted)</option>
                                    </select>
                                    <select id="selectQuantity" name="selectQuantity2" class="form-control">
                                        <!-- <option value="">-Select Product-</option> -->
                                        <option selected value="500 gm-(Sorted)" @if($data->selectQuantity2 == "500 gm-(Sorted)") Select @endif>500 gm-(Sorted)</option>
                                        <option value="250 gm-(Sorted)" @if($data->selectQuantity2 == "250 gm-(Sorted)") Select @endif>250 gm-(Sorted)</option>
                                        <option value="500 gm-(Sorted)" @if($data->selectQuantity2 == "500 gm-(Sorted)") Select @endif>500 gm-(Sorted)</option>
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity2 == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="1kg-" @if($data->selectQuantity2 == "1kg-") Select @endif>1kg-</option>
                                        <option value="2kg-" @if($data->selectQuantity2 == "2kg-") Select @endif>2kg-</option>
                                        <option value="3kg-" @if($data->selectQuantity2 == "3kg-") Select @endif>3kg-</option>
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity2 == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="250 gm-(Sorted + Cut )" @if($data->selectQuantity2 == "250 gm-(Sorted + Cut )") Select @endif>250 gm-(Sorted + Cut )</option>
                                        <option value="500 gm-(Sorted + Cut )" @if($data->selectQuantity2 == "500 gm-(Sorted + Cut )") Select @endif>500 gm-(Sorted + Cut )</option>
                                        <option value="100 gm -" @if($data->selectQuantity2 == "100 gm -") Select @endif>100 gm -</option>
                                        <option value="250 gm -" @if($data->selectQuantity2 == "250 gm -") Select @endif>250 gm -</option>
                                        <option value="500 gm -" @if($data->selectQuantity2 == "500 gm -") Select @endif>500 gm -</option>
                                        <option value="1 kg-(Sorted + Cut )" @if($data->selectQuantity2 == "1 kg-(Sorted + Cut )") Select @endif>1 kg-(Sorted + Cut )</option>
                                        <option value="2 kg-(Sorted + Cut )" @if($data->selectQuantity2 == "2 kg-(Sorted + Cut )") Select @endif>2 kg-(Sorted + Cut )</option>
                                        <option value="3 kg-(Sorted + Cut )" @if($data->selectQuantity2 == "3 kg-(Sorted + Cut )") Select @endif>3 kg-(Sorted + Cut )</option>
                                        <option value="4 kg-(Sorted + Cut )" @if($data->selectQuantity2 == "4 kg-(Sorted + Cut )") Select @endif>4 kg-(Sorted + Cut )</option>
                                        <option value="5 kg-(Sorted + Cut )" @if($data->selectQuantity2 == "5 kg-(Sorted + Cut )") Select @endif>5 kg-(Sorted + Cut )</option>
                                        <option value="4 Pcs.-" @if($data->selectQuantity2 == "4 Pcs.-") Select @endif>4 Pcs.-</option>
                                        <option value="6 Pcs.-" @if($data->selectQuantity2 == "6 Pcs.-") Select @endif>6 Pcs.-</option>
                                        <option value="1 nos.-" @if($data->selectQuantity2 == "1 nos.-") Select @endif>1 nos.-</option>
                                        <option value="6 nos.-" @if($data->selectQuantity2 == "6 nos.-") Select @endif>6 nos.-</option>
                                        <option value="12 nos.-" @if($data->selectQuantity2 == "12 nos.-") Select @endif>12 nos.-</option>
                                        <option value="24 nos.-" @if($data->selectQuantity2 == "24 nos.-") Select @endif>24 nos.-</option>
                                        <option value="1 bunch-(Sorted)" @if($data->selectQuantity2 == "1 bunch-(Sorted)") Select @endif>1 bunch-(Sorted)</option>
                                        <option value="2 bunch-(Sorted)" @if($data->selectQuantity2 == "2 bunch-(Sorted)") Select @endif>2 bunch-(Sorted)</option>
                                        <option value="3 bunch-(Sorted)" @if($data->selectQuantity2 == "3 bunch-(Sorted)") Select @endif>3 bunch-(Sorted)</option>
                                        <option value="4 bunch-(Sorted)" @if($data->selectQuantity2 == "4 bunch-(Sorted)") Select @endif>4 bunch-(Sorted)</option>
                                        <option value="5 bunch-(Sorted)" @if($data->selectQuantity2 == "5 bunch-(Sorted)") Select @endif>5 bunch-(Sorted)</option>
                                    </select>
                                    <select id="selectQuantity" name="selectQuantity3" class="form-control">
                                        <!-- <option value="">-Select Product-</option> -->
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity3  == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="250 gm-(Sorted)" @if($data->selectQuantity3 == "250 gm-(Sorted)") Select @endif>250 gm-(Sorted)</option>
                                        <option value="500 gm-(Sorted)" @if($data->selectQuantity3 == "500 gm-(Sorted)") Select @endif>500 gm-(Sorted)</option>
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity3 == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="1kg-" @if($data->selectQuantity3 == "1kg-") Select @endif>1kg-</option>
                                        <option value="2kg-" @if($data->selectQuantity3 == "2kg-") Select @endif>2kg-</option>
                                        <option value="3kg-" @if($data->selectQuantity3 == "3kg-") Select @endif>3kg-</option>
                                        <option value="1kg-(Sorted)" @if($data->selectQuantity3 == "1kg-(Sorted)") Select @endif>1kg-(Sorted)</option>
                                        <option value="250 gm-(Sorted + Cut )" @if($data->selectQuantity3 == "250 gm-(Sorted + Cut )") Select @endif>250 gm-(Sorted + Cut )</option>
                                        <option value="500 gm-(Sorted + Cut )" @if($data->selectQuantity3 == "500 gm-(Sorted + Cut )") Select @endif>500 gm-(Sorted + Cut )</option>
                                        <option value="100 gm -" @if($data->selectQuantity3 == "100 gm -") Select @endif>100 gm -</option>
                                        <option value="250 gm -" @if($data->selectQuantity3 == "250 gm -") Select @endif>250 gm -</option>
                                        <option value="500 gm -" @if($data->selectQuantity3 == "500 gm -") Select @endif>500 gm -</option>
                                        <option value="1 kg-(Sorted + Cut )" @if($data->selectQuantity3 == "1 kg-(Sorted + Cut )") Select @endif>1 kg-(Sorted + Cut )</option>
                                        <option value="2 kg-(Sorted + Cut )" @if($data->selectQuantity3 == "2 kg-(Sorted + Cut )") Select @endif>2 kg-(Sorted + Cut )</option>
                                        <option value="3 kg-(Sorted + Cut )" @if($data->selectQuantity3 == "3 kg-(Sorted + Cut )") Select @endif>3 kg-(Sorted + Cut )</option>
                                        <option value="4 kg-(Sorted + Cut )" @if($data->selectQuantity3 == "4 kg-(Sorted + Cut )") Select @endif>4 kg-(Sorted + Cut )</option>
                                        <option value="5 kg-(Sorted + Cut )" @if($data->selectQuantity3 == "5 kg-(Sorted + Cut )") Select @endif>5 kg-(Sorted + Cut )</option>
                                        <option value="4 Pcs.-" @if($data->selectQuantity3 == "4 Pcs.-") Select @endif>4 Pcs.-</option>
                                        <option value="6 Pcs.-" @if($data->selectQuantity3 == "6 Pcs.-") Select @endif>6 Pcs.-</option>
                                        <option value="1 nos.-" @if($data->selectQuantity2 == "1 nos.-") Select @endif>1 nos.-</option>
                                        <option value="6 nos.-" @if($data->selectQuantity3 == "6 nos.-") Select @endif>6 nos.-</option>
                                        <option value="12 nos.-" @if($data->selectQuantity3 == "12 nos.-") Select @endif>12 nos.-</option>
                                        <option value="24 nos.-" @if($data->selectQuantity3 == "5 bunch-(Sorted)") Select @endif>24 nos.-</option>
                                        <option value="1 bunch-(Sorted)" @if($data->selectQuantity3 == "1 bunch-(Sorted)") Select @endif>1 bunch-(Sorted)</option>
                                        <option value="2 bunch-(Sorted)" @if($data->selectQuantity3 == "2 bunch-(Sorted)") Select @endif>2 bunch-(Sorted)</option>
                                        <option value="3 bunch-(Sorted)" @if($data->selectQuantity3 == "3 bunch-(Sorted)") Select @endif>3 bunch-(Sorted)</option>
                                        <option value="4 bunch-(Sorted)" @if($data->selectQuantity3 == "4 bunch-(Sorted)") Select @endif>4 bunch-(Sorted)</option>
                                        <option value="5 bunch-(Sorted)" @if($data->selectQuantity3 == "5 bunch-(Sorted)") Select @endif>5 bunch-(Sorted)</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="price">Price</label>
                                    <input type="number" name="price1" class="form-control" id="price1" value="{{$data->price1}}">
                                    <input type="number" name="price2" class="form-control" id="price2" value="{{$data->price2}}">
                                    <input type="number" name="price3" class="form-control" id="price3" value="{{$data->price3}}">
                                </div>
                            </div>
                                    
                            <button type="submit" name="add" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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