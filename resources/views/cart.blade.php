@extends('Frontview.frontlayout.main')

@section('content')
<div class="container">
	<div class="row" style="margin-top:20px">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div>
				@foreach($cartCollection as $cart)
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="{{ asset('productimage/'.$cart->attributes->image) }}">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name" name="productName" id="productName" ><strong>{{$cart->name}}</strong></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-3 text-right">
							        <h6><strong name="price1" id="price1">{{$cart->price}}<span class="text-muted">x</span></strong></h6>
							</div>
							<form action="{{route('cart.update')}}" method="POST">
							@csrf
								<div class="col-xs-2">
									<input type="number" name="quantity" id="quantity" class="form-control input-sm" value="{{ $cart->quantity }}">
									<input type="hidden" name="id" id="id" value="{{$cart->id}}">
								</div>
								<div class="col-xs-2">
									<button type="submit" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
								</div>
                            </form>
							<div class="col-xs-3 text-right">
							        <h6><strong name="price1" id="price1">{{ \Cart::get($cart->id)->getPriceSum() }}</strong></h6>
							</div>
							
								<div class="col-xs-2">
								<form action="{{route('cart.remove')}}" method="POST">
							    @csrf
									<input type="hidden" name="id" id="id" value="{{ $cart->id }}">
									<button class="btn btn-link btn-xs">
										<span class="glyphicon glyphicon-trash"> </span>
									</button>
                                </form>
								</div>
						</div>
					</div>
			    @endforeach
					<hr>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>&#8377; {{ \Cart::getTotal() }}</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Checkout
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection