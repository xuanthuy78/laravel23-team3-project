@extends('master')
@section('content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Sweet<span> Bakery</span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{{url('index')}}">Trang chủ</a><i>|</i></li>
								<li>Chi tiết sản phẩm</li>
							</ul>
						 </div>

				</div>
	   <!--//w3_short-->
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
			    
								
								<div class="quantity"> 
												<div class="quantity-select">                           
													<div class="entry value-minus">&nbsp;</div>
													<input type="hidden" value="valtg" id="valtg" name ="val">
													<input type="hidden" value="{{$product->id}}" name ="id" id="proId">
													<div class="entry value" id="value2"><span>1</span></div>
													<div class="entry value-plus active">&nbsp;</div>
												</div>
								</div>
									<button type="submit" class="add-to item_add hvr-skew-backward qtyAddCart ">Add to cart</button>
								
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
						<h4>Bánh cùng loại</h4>

						<div class="row">
							@foreach($productRelated as $productR)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{url('categories/product/'.$productR->id)}}"><img src="source/image/product/{{$productR->image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$productR->name}}</p>
										<p class="single-item-price">
											@if($productR->promotion_price != 0)
												<span class="flash-del">{{number_format($productR->unit_price)}}</span>
												<span class="flash-sale">{{number_format($productR->promotion_price)}}</span>
												@else
												<span class="flash-sale">{{number_format($productR->unit_price)}}</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										 <input type="hidden" value="{{$productR->id}}" name="ProductId">
										<a class="add-to-cart pull-left submit-cart" ><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{url('categories/product/'.$productR->id)}}">Details<i class="fa fa-chevron-right"></i></a>
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
						<h3 class="widget-title">Bánh HOT</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($productTop as $productT)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{url('categories/product/'.$productT->id)}}"><img src="source/image/product/{{$productT->image}}" alt=""></a>
									<div class="media-body">
										{{$productT->name}}
										<span class="beta-sales-price">
											@if($productT->promotion_price != 0 || $productT->promotion_price >0 )
												{{number_format($productT->promotion_price)}}
												@else
												{{number_format($productT->unit_price)}}
											@endif</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Bánh mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($productNew as $productN)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{url('categories/product/'.$productN->id)}}"><img src="source/image/product/{{$productN->image}}" alt=""></a>
									<div class="media-body">
										{{$productN->name}}
										<span class="beta-sales-price">
											@if($productN->promotion_price != 0 || $productN->promotion_price >0 )
												{{number_format($productN->promotion_price)}}
												@else
												{{number_format($productN->unit_price)}}
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
