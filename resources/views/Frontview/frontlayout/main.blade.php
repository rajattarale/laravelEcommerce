
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     
    @include('frontview.frontlayout.link')

    @yield('customcss')

<!-- start-smoth-scrolling -->
</head>
	
<body>
    
    @include('frontview.frontlayout.navbar')
	@yield('content')

        @include('frontview.frontlayout.footer')

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        @include('frontview.frontlayout.script')

        @yield('customjs')

</body>
</html>