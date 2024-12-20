<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{$title}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('user/coza/images')}}/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/fonts')}}/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/fonts')}}/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/fonts')}}/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/vendor')}}/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/css')}}/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('user/coza/css')}}/main.css">
	<!--===============================================================================================-->

	<!-- start eshopper script -->
	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="{{asset('user/eshopper')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Master Gallery -->
	<!-- <link rel="stylesheet" href="{{asset('user/master_gallery')}}/css/bootstrap.min.css" /> -->
	<!-- <link rel="stylesheet" href="{{asset('user/master_gallery')}}/css/font-awesome.min.css" /> -->
	<!-- <link rel="stylesheet" href="{{asset('user/master_gallery')}}/css/owl.carousel.min.css" /> -->
	<!-- <link rel="stylesheet" href="{{asset('user/master_gallery')}}/css/animate.css" /> -->

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('user/master_gallery')}}/css/style.css" />
	<!-- End Master Gallery -->

	<!-- Customized Bootstrap Stylesheet [TO BE DELETED] -->
	<!-- <link href="{{asset('user/eshopper')}}/css/style.css" rel="stylesheet"> -->

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('user/eshopper')}}/lib/easing/easing.min.js"></script>
	<script src="{{asset('user/eshopper')}}/lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Contact Javascript File -->
	<script src="{{asset('user/eshopper')}}/mail/jqBootstrapValidation.min.js"></script>
	<script src="{{asset('user/eshopper')}}/mail/contact.js"></script>

	<!-- Template Javascript -->
	<script src="{{asset('user/eshopper')}}/js/main.js"></script>
	<!-- end eshopper script -->
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="{{url('/')}}" class="logo">
						<img src="{{asset('user/coza/images')}}/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="{{$active_menu == 'home' ? 'active-menu' : ''}}">
								<a href="{{url('/')}}">Home</a>
								<!-- Sub-menu -->
								<!-- <ul class="sub-menu">
									<li><a href="{{url('/')}}">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul> -->
							</li>

							<li class="{{$active_menu == 'paintings' ? 'active-menu' : ''}}">
								<a href="{{url('/paintings')}}">Paintings</a>
							</li>

							<!-- deleted menu Features -->
							<!-- <li class="label1" data-label1="hot" class="{{$active_menu == true ? 'active-menu' : ''}}">
								<a href="{{url('/cart')}}">Features</a>
							</li> -->

							<li class="{{$active_menu == 'gallery' ? 'active-menu' : ''}}">
								<a href="{{url('/gallery')}}">Gallery</a>
							</li>

							<li class="{{$active_menu == 'aboutus' ? 'active-menu' : ''}}">
								<a href="{{url('/aboutus')}}">About Us</a>
							</li>

							<li class="{{$active_menu == 'contact' ? 'active-menu' : ''}}">
								<a href="{{url('/contact')}}">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div> -->

						<!-- Preview Cart [OPTIONAL] -->
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 {{count($layout_carts) > 0 ? 'icon-header-noti' : ''}} js-show-cart" data-notify="{{count($layout_carts)}}">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<!-- <a href="/cart/{{Session::get('userid')}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<i class="zmdi zmdi-shopping-cart"></i>
						</a> -->

						<!-- <a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a> -->

						<!-- PREVIEW PROFILE [OPTIONAL] -->
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-profile">
							<i class="zmdi zmdi-account-circle"></i>
						</div>
						<!-- <a href="/profile/{{Session::get('userid')}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<i class="zmdi zmdi-account-circle"></i>
						</a> -->

					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="{{url('/')}}"><img src="{{asset('user/coza/images')}}/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div> -->

				<!-- Preview Cart [OPTIONAL] -->
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 {{count($layout_carts) > 0 ? 'icon-header-noti' : ''}} js-show-cart" data-notify="{{count($layout_carts)}}">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<!-- <a href="{{url('/cart/'.Session::get('userid'))}}" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
					<i class="zmdi zmdi-shopping-cart"></i>
				</a> -->

				<!-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a> -->

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-profile">
					<i class="zmdi zmdi-account-circle"></i>
				</div>

			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="{{url('/')}}">Home</a>
					<!-- <ul class="sub-menu-m">
						<li><a href="{{url('/')}}">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul> -->
					<!-- <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span> -->
				</li>

				<li>
					<a href="{{url('/paintings')}}">Paintings</a>
				</li>

				<!-- <li>
					<a href="{{url('/cart')}}" class="label1 rs1" data-label1="hot">Features</a>
				</li> -->

				<li>
					<a href="{{url('/gallery')}}">Gallery</a>
				</li>

				<li>
					<a href="{{url('/aboutus')}}">About Us</a>
				</li>

				<li>
					<a href="{{url('/contact')}}">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<!-- <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('user/coza/images')}}/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div> -->
	</header>

	<!-- Cart -->
	<!-- [OPTIONAL] -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					@foreach($layout_carts as $layout_cart)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<a href="/paintings/painting_details/{{$layout_cart->paintingId}}"><img src="{{asset('admin/images/paintingImages')}}/{{$layout_cart->photoName}}" alt="IMG"></a>

						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="/paintings/painting_details/{{$layout_cart->paintingId}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$layout_cart->paintingName}}
							</a>

							<span class="header-cart-item-info">
								{{$layout_cart->quantity}} x ${{$layout_cart->paintingPrice}}
							</span>
						</div>
					</li>
					@endforeach
				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						@php
						$totalSumProduct = 0;
						@endphp

						@foreach($layout_carts as $layout_cart)
						@php
						$sumProduct = $layout_cart->quantity * $layout_cart->paintingPrice;
						$totalSumProduct += $sumProduct;
						@endphp
						@endforeach
						Total: ${{$totalSumProduct}}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{url('/cart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 ">
							View Cart
						</a>

						<!-- <a href="{{url('/cart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Profile -->
	<div class="wrap-header-profile js-panel-profile">
		<div class="s-full js-hide-profile"></div>

		<div class="header-profile flex-col-l p-l-65 p-r-25">
			<div class="header-profile-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Profile
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-profile">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-profile-content flex-w js-pscroll">
				<div class="w-full">
					<div class="header-profile-total w-full p-tb-40">
						@if(Session::get('userid'))
						<a style="color: black;"><b class="trans-04">Hi, {{Session::get('username')}}!</b></a>
						<br><br>
						<a href="{{url('/profile')}}" style="color: black;"><b class="hov-cl1 trans-04">Purchase History</b></a>
						<br><br>
						<a href="{{url('/logout_proceed')}}" style="color: black;"><b class="hov-cl1 trans-04">Logout</b></a>
						@else
						<a href="{{url('/login')}}" style="color: black;"><b class="hov-cl1 trans-04">Login</b></a>
						<br><br>
						<a href="{{url('/register')}}" style="color: black;"><b class="hov-cl1 trans-04">Sign Up</b></a>
						@endif
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Dynamic Content -->
	@yield('content')


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Menu
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="/" class="stext-107 cl7 hov-cl1 trans-04">
								Home
							</a>
						</li>

						<li class="p-b-10">
							<a href="/paintings" class="stext-107 cl7 hov-cl1 trans-04">
								Paintings
							</a>
						</li>

						<li class="p-b-10">
							<a href="/gallery" class="stext-107 cl7 hov-cl1 trans-04">
								Gallery
							</a>
						</li>

						<li class="p-b-10">
							<a href="/aboutus" class="stext-107 cl7 hov-cl1 trans-04">
								About Us
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Contact
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="/contact" class="stext-107 cl7 hov-cl1 trans-04">
								Contact Information
							</a>
						</li>

						<li class="p-b-10">
							<p class="stext-107 cl7 trans-04">
								(+84) 932152110
							</p>
						</li>

						<li class="p-b-10">
							<p class="stext-107 cl7 trans-04">
								sale@galleria.com
							</p>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 123 Dien Bien Phu Street, Ward 22, Binh Thanh District, Ho Chi Minh City
					</p>
				</div>
			</div>

			<div class="p-t-40">
				<p class="stext-107 cl6 txt-center">
					LuonVuiTuoi Group
				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{asset('user/coza/images')}}/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="{{asset('user/coza/images')}}/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="{{asset('user/coza/images')}}/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('user/coza/images')}}/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{{asset('user/coza/images')}}/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="{{asset('user/coza/images')}}/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('user/coza/images')}}/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{{asset('user/coza/images')}}/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="{{asset('user/coza/images')}}/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('user/coza/images')}}/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								...
							</h4>

							<span class="mtext-106 cl2">
								...
							</span>

							<p class="stext-102 cl3 p-t-23">
								...
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/bootstrap/js/popper.js"></script>
	<script src="{{asset('user/coza/vendor')}}/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/daterangepicker/moment.min.js"></script>
	<script src="{{asset('user/coza/vendor')}}/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/slick/slick.min.js"></script>
	<script src="{{asset('user/coza/js')}}//slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/sweetalert/sweetalert.min.js"></script>
	<script>
		// $('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
		// 	e.preventDefault();
		// });

		// $('.js-addwish-b2').each(function() {
		// 	var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		// 	$(this).on('click', function() {
		// 		swal(nameProduct, "is added to wishlist !", "success");

		// 		$(this).addClass('js-addedwish-b2');
		// 		$(this).off('click');
		// 	});
		// });

		// $('.js-addwish-detail').each(function() {
		// 	var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		// 	$(this).on('click', function() {
		// 		swal(nameProduct, "is added to wishlist !", "success");

		// 		$(this).addClass('js-addedwish-detail');
		// 		$(this).off('click');
		// 	});
		// });

		/*---------------------------------------------*/

		// Add Cart Success Notification
		// $('.js-addcart-detail').each(function() {
		// 	var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		// 	$(this).on('click', function() {
		// 		swal(nameProduct, "is added to cart !", "success");
		// 	});
		// });

		// $('.js-addcart-detail').each(function() {
		// 	var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		// 	$(this).on('click', function() {
		// 		if (typeof sessionStorage.getItem('userid') !== 'undefined' && sessionStorage.getItem('userid') !== null) {
		// 			// Display notification if userid exists
		// 			swal(nameProduct, "is added to cart !", "success");
		// 		} else {
		// 			// Optional: Display a message if user is not logged in
		// 			// console.log("Please log in to add to cart");
		// 		}
		// 	});
		// });
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/vendor')}}/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('user/coza/js')}}/main.js"></script>

	<!-- Master Gallery Script -->
	<script src="{{asset('user/master_gallery')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/owl.carousel.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/jquery.nicescroll.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/isotope.pkgd.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/imagesloaded.pkgd.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/circle-progress.min.js"></script>
	<script src="{{asset('user/master_gallery')}}/js/main.js"></script>
	<!-- End Master Gallery Script -->

</body>

</html>