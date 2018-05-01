@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$product->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-top-in">
							<div class="span_2_of_a1 ">
								<h3>{{$product->name}}</h3>
								<p class="in-para">Bánh có thể sử dùng liền không cần sơ chế lại</p>
			    				<div class="price_single">
				  				<span class="reducedfrom item_price">@if($product->promotion_price ==0)
				  				{{number_format($product->unit_price)}} @else {{number_format($product->promotion_price)}}@endif</span>
				 				<div class="clearfix"></div>
								</div>
								<h4 class="quick">Mô tả:</h4>
								<p class="quick_desc"> {{$product->description}}</p>
			    
								<form action="{{url('additemcartqty/'.$product->id)}}" method="get" id="qtyform">
								<div class="quantity"> 
												<div class="quantity-select">                           
													<div class="entry value-minus">&nbsp;</div>
													<input type="hidden" value="valtg" id="valtg" name ="val">
													<!-- <input type="hidden" value="{{$product->id}}" name ="id"> -->
													<div class="entry value" id="value2"><span>1</span></div>
													<div class="entry value-plus active">&nbsp;</div>
												</div>
								</div>
											<button type="submit" class="add-to item_add hvr-skew-backward">Add to cart</button>
								</form>
				 				</div>
						</div>	
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
							<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>

						<div class="row">
							@foreach($product_copy as $product_cp)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/product/{{$product_cp->image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$product_cp->name}}</p>
										<p class="single-item-price">
											@if($product_cp->promotion_price != 0)
												<span class="flash-del">{{number_format($product_cp->unit_price)}}</span>
												<span class="flash-sale">{{number_format($product_cp->promotion_price)}}</span>
												@else
												<span class="flash-sale">{{number_format($product_cp->unit_price)}}</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{url('additemcart/'.$product_cp->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{url('categories/product/'.$product_cp->id)}}">Details<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
							

						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($product_top as $product_t)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{url('categories/product/'.$product_t->id)}}"><img src="source/image/product/{{$product_t->image}}" alt=""></a>
									<div class="media-body">
										{{$product_t->name}}
										<span class="beta-sales-price">
											@if($product_t->promotion_price != 0 || $product_t->promotion_price >0 )
												{{number_format($product_t->promotion_price)}}
												@else
												{{number_format($product_t->unit_price)}}
											@endif</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($product_new as $product_n)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{url('categories/product/'.$product_n->id)}}"><img src="source/image/product/{{$product_n->image}}" alt=""></a>
									<div class="media-body">
										{{$product_n->name}}
										<span class="beta-sales-price">
											@if($product_n->promotion_price != 0 || $product_n->promotion_price >0 )
												{{number_format($product_n->promotion_price)}}
												@else
												{{number_format($product_n->unit_price)}}
											@endif
										</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
