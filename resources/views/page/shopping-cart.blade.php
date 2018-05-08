@extends('master')
@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left"><br>
				<h3 class="wthree_text_info">Shopping <span>Cart</span>
			    			<div class="line-text"></div>
			    			</h3>	
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{url('index')}}">Home</a> / <span>Shopping Cart</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

		<div class="container">
		<div id="content">
			<div id="update">
				<div class="container">
			<div class="table-responsive">
				<!-- Shop Products Table -->
				
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-price">Price</th>
							<th class="product-status">Status</th>
							<th class="product-quantity">Qty.</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					@if(Cart::count()>0)
					<?php $count=1;?>
						@foreach($content as $item)
					<tbody>
					
						<tr class="cart_item">
							<td class="product-name">
								<div class="media">
									<img class="pull-left" src="source/image/product/{{$item->options->has('img')?$item->options->img:''}}" width="100px" alt="">
									<div class="media-body">
										<p class="font-large table-title">{{$item->name}}</p>
										<!-- <p class="table-option">Color: Red</p>
										<p class="table-option">Size: M</p> -->
										<a class="table-edit" href="#">Edit</a>
									</div>
								</div>
							</td>

							<td class="product-price">
								<span class="amount">{{number_format($item->price)}}</span>
							</td>

							<td class="product-status">
								Bánh có sẵn
							</td>

							<td class="product-quantity">
								<input type="hidden" value="{{$item->rowId}}" id="rowID<?php echo $count;?>"> 
								<input type="hidden" value="{{$item->id}}" id="proID<?php echo $count;?>">
								<input type="number" size="2" value="{{$item->qty}}" name="product_qty" id="newQty<?php echo $count; ?>"
								autocomplete="off" style="text-align:center; max-width: 100px; " min="1" max="1000" >
							</td>

							<td class="product-subtotal">
								<span class="amount">{{number_format($item->subtotal)}}</span>
							</td>

							<td class="product-remove">
								<a href="{{url('deleteitemcart/'.$item->rowId)}}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						
					</tbody>
					<?php $count++; ?>
						@endforeach
					@endif

					<tfoot>
						<tr>
							<td colspan="6" class="actions">
								<a type="submit" href="{{url('checkout')}}" class="beta-btn primary" name="proceed">Proceed to Checkout <i class="fa fa-chevron-right"></i></a>

						</tr>
					</tfoot>
				</table>
				<!-- End of Shop Table Products -->
				</div>
			</div>
		</div>


			<div class="table-responsive">
			<!-- Cart Collaterals -->
			<div class="cart-collaterals">

				<div class="cart-totals pull-right">
					<div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>
					<div class="cart-totals-row"><span>Shipping:</span> <span>Next Step</span></div>
					<div class="cart-totals-row"><span>Order Total:</span> <span>Next Step</span></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>
			</div>

		</div> <!-- #content -->
		</div> <!-- .container -->

@endsection

