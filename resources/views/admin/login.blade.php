<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>GreenyBasket | @yield('title')</title>
    @include('admin.Adminlayout.stylesheet')
    @yield('customcss')

    <style type="text/css">
      .error
      {
        color: red;
      }
      .message
      {
        color: red;
      }
    </style>
  </head>

<body class="bg-dark">

    <div class="container">
    <div class="row">
<div class="col-md-12">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>
</div>

      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Admin Login</div>
          <div class="inner">
              <div class="flash" style="text-align:center;">
                  <p style="text-align:center;">
                                
               </p>
              </div>
          </div>

        <div class="card-body">
          <form method="POST" action="{{route('admin.login.submit')}}">
          @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <Strong>{{ $message }}</Strong>
                    </span>
                @enderror
              </div>
              <div>
                      
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" >
                <label for="password">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <Strong>{{ $message }}</Strong>
                    </span>
                @enderror
              </div>
              <div>
                 
              </div>
            </div>
            <!-- <a class="btn btn-success btn-block" href="dashboard.php">Login</a> -->
            <input type="submit" name="login" class="btn btn-success btn-block" value="Log In"  />
          </form>
          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="register.php">Register an Account</a> -->
            <a class="d-block small  mt-3 text-success" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    @include('admin.Adminlayout.script')

  </body>
</html>
