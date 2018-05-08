@extends('master')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer">
					    <div class="banner">
								<ul>
									<!-- THE FIRST SLIDE -->
									@foreach($slides as $slide)
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$slide->image}}" data-src="source/image/slide/{{$slide->image}}"  style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$slide->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>
						        </li>
						        @endforeach
								</ul>
							</div>
						</div>
						<div class="tp-bannertimer"></div>
					</div>
				</div>
</div> 
<div class="inner-header ">
		<div class="container ">
			<div class="pull-left">
			<!-- 	<h6 class="inner-title">Sản phẩm</h6> -->
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<!-- <a href="index.html">Home</a> / <span>Sản phẩm</span> -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container editcontainer">
				<div class="col-sm-3">
			<div class="left-sidebar">
				<h2 class="text-center"><span>C</span>ategories
					<div class="line-text"></div>
				</h2>
					<div class="panel-group category-products" id="accordian">
						@foreach($categories as $categorie)
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#{{$categorie->id}}">
										<span class="span-heart"><i class="fa fa-caret-square-o-down"></i></span>
											<p class="category-label-sportswear">{{$categorie->name}}</p>
									</a>
								</h4>
								<div class="line"></div>
							</div>
								
								<div id="{{$categorie->id}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											@foreach($categorie->products as $products)
											<li><a href="{{url('categories/product/'.$products->id)}}">{{$products->name}}</a></li>
											@endforeach
										</ul>
									</div>
								</div>
								
					</div>
					@endforeach
			</div>
			<!--</div>-->
			<!--/category-products-->
			<div class="left-sidebar">
				<h2 class="text-center"><span>S</span>earch
					<div class="line-text"></div>
				</h2>
				<div class="category-products2 side-bar">
					
					<div class="search-hotel">
						<h3 class="agileits-sear-head">  Search Here..</h3>
							<form id="target" action="{{url('search_products')}}" method="get">
								<input type="hidden" value="min_slide" id="min_slider" name ="min_slider">
								<input type="hidden" value="max_slide" id="max_slider" name ="max_slider">
								<input type="search" placeholder="Product name..." name="search_key">
								<input type="submit" value="Tìm" class="bstn btn-info" id="submit">
								<br> <br>
								<h3 class="agileits-sear-head">  Giá từ:</h3>
									<span id="app_min_price" ></span>
									<span id="app_max_price" style="float: right"></span>
									<br /><br />
									<div id="slider_price"></div>
							</form>
					</div>
					
					
		
					<div class="clearfix"></div>

				</div>
				 <div class="banner-left"><a href="#"><img src="source/image/product/banh-bong-lan-cuon-cam-6-80462.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>sale up to</h1>
                                <h2>20% off</h2>
                                <p>selected products</p>
                                <a href="#">buy now</a>
                            </div>
                        </div>
			<div class="clearfix"></div>
			</div>
</div>
						</div>

			<!--</div>-->
					<div class="col-sm-9">
						<div class="beta-products-list">
							<!-- <h4>New Products</h4> -->
							<h3 class="wthree_text_info">New <span>Product</span>
			    			<div class="line-text"></div>
			    			</h3>		
							<div class="beta-products-details">
								<p class="pull-left"><i class="fa fa-spinner fa-spin"> </i>Có {{count($newproducts)." "}}  Bánh mới</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($newproducts as $newproduct)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="source\image\product\{{$newproduct->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$newproduct->name}}</p>
											<p class="single-item-price">
												<span>{{number_format($newproduct->unit_price)}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('additemcart/'.$newproduct->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('categories/product/'.$newproduct->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row"> {{$newproducts->links()}}</div>
						</div> <!-- .beta-products-list -->


						<div class="space50">&nbsp;</div>
						<div class="agile_last_double_sectionw3ls">
           					 <div class="col-md-6 multi-gd-img multi-gd-text">
								<a href="#"><img src="source/image/product/cupcake.jpg" alt=" " height="300px"><h4>Hello <span></span> New Day</h4></a>
								</div>
								<div class="col-md-6 multi-gd-img multi-gd-text ">
										<a href="#"><img src="source/image/product/Maccaron-am-thuc-chau-au-mixtourist.jpg" alt=" "><h4>Welcome <span></span> you</h4></a>
								</div>
								<div class="space50">&nbsp;</div>
	   					</div>	

						<div class="beta-products-list">
							<h3 class="wthree_text_info">Promotion<span> Product</span>
			    			<div class="line-text"></div>
			    			</h3>		
							<div class="beta-products-details">
								<!-- <p class="pull-left">438 styles found</p> -->
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($promotionproducts as $promotionproduct)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">
											<a href="product.html"><img src="source\image\product\{{$promotionproduct->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$promotionproduct->name}}</p>
											<p class="single-item-price">
												@if($promotionproduct->promotion_price != 0)
												<span class="flash-del">{{number_format($promotionproduct->unit_price)}}</span>
												<span class="flash-sale">{{number_format($promotionproduct->promotion_price)}}</span>
												@else
												<span class="flash-sale">{{number_format($promotionproduct->unit_price)}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('additemcart/'.$promotionproduct->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('categories/product/'.$promotionproduct->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row"> {{$promotionproducts->links()}}</div>
							<div class="space40">&nbsp;</div>

							<!-- <div class="row">
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div> -->
							
							
						</div> <!-- .beta-products-list -->
					</div>
				 <!-- end section with sidebar and main content -->
			 <!-- .main-content -->
		<!-- #content -->
	</div> <!-- .container -->
	<div class="space40">&nbsp;</div>
@endsection()