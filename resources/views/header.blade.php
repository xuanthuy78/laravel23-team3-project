<!-- login modal -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
	aria-hidden="true">
	<div class="form-w3ls">
	<div class="form-head-w3l">
		<h2>Welcome</h2>
	</div>
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Sign In</a></li>
		<li class="tab"><a href="#signup-agile">Sign Up</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="#" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="user" placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me?</label>
				
				<input type="submit" class="sign-in" value="Sign In">
			</form>
		</div>
		<div id="signup-agile">   
			<form action="#" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="user" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required">
				
				<p class="header">Email Address</p>
				<input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<p class="header">Confirm Password</p>
				<input type="password" name="password" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required">
				
				<input type="submit" class="register" value="Sign up">
			</form>
		</div> 
    </div><!-- tab-content -->
</div>
</div> 
	
<!-- login modal -->
<div id="header">
		 <div class="topbar">
                <div class="container">
                    <div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><span class="phone">0(123) 456 789</span></li>
                            <li><span class="email">info@plazathemes.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="topbar-nav clearfix">
                            <li><a href="#" class="login" data-toggle="modal" data-target="#myModal88">Login</a></li>
                            <li class="dropdown">
                                <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="account.html">My Account</a></li>
                                    <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                                    <li><a title="My Cart" href="cart.html">My Cart</a></li>
                                    <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                    <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="currency dropdown-toggle" data-toggle="dropdown">USD</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">US Dollar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="images/flag-us.png" alt=""> English</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><img src="images/flag-us.png" alt=""> &nbsp;English</a></li>
                                    <li><a href="#"><img src="images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{url('index')}}" id="logo"><img src="source/image/product/logo.png" width="150px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
							<div class="header-middle">
								<form class="form-search" action="{{url('search_categories')}}" method="get">
									<div class="search">
										<input type="text" name="search_key" placeholder="Nhập tên bánh cần tìm">
									</div>
									<div class="section_room">
										<select id="country" onchange="change_country(this.value)" class="frm-field required" name="nameCategory">
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>     
											@endforeach
										</select>
									</div>
									<div class="sear-sub">
										<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
										<!-- <input type="submit" value="Search"> -->
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/1.png" alt=""></a>
										<div class="media-body">
											 <button type="button" class="remove-cart-item" >&times;</button>
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/2.png" alt=""></a>
										<div class="media-body">
											 <button type="button" class="remove-cart-item" >&times;</button>
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/3.png" alt=""></a>
										<div class="media-body">
											 <button type="button" class="remove-cart-item" >&times;</button>
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #FFA803;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{url('index')}}">Trang chủ</a></li>
						<li><a>Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($categories as $categorie)
								<li><a href="{{url('categories/'.$categorie->id)}}">{{$categorie->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{url('contact')}}">Giới thiệu</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="clearfix"> </div>
