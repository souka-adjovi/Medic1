@extends('layouts/include')
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Medic Medical Category Bootstrap Responsive Web Template | Single Page :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 top-social-agile">
						<div class="row">
							<!-- social icons -->
							<ul class="col-lg-4 col-6 top-right-info text-center">
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li class="mx-3">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="#">
										<i class="fa fa-pinterest-p"></i>
									</a>
								</li>
							</ul>
							<!-- //social icons -->
							<div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
								<p class="text-white">
									<i class="fa fa-map-marker mr-2"></i>Ouaga 2000, Avenue ADGREN Burkina-Faso</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 top-social-agile text-lg-right text-center">
						<div class="row">
							<div class="col-lg-7 col-6 top-w3layouts">
								<p class="text-white">
									<i class="fa fa-envelope-open mr-2"></i>
									<a href="mailto:info@example.com" class="text-white">info@medic.com</a>
								</p>
							</div>
							<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
								<p class="text-white">
									<i class="fa fa-phone mr-2"></i>+226 70263676</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<div id="home">
		<!-- navigation -->
		<div class="main-top py-1">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
				<div class="container">
					<!-- logo -->
					<h1>
					<a class="navbar-brand font-weight-bold font-italic" href="{{('/')}}">
							<span>M</span>edic
							<i class="fas fa-syringe"></i>
						</a>
					</h1>
					<!-- //logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item active mt-lg-0 mt-3">
								<a class="nav-link" href="{{url('accueil')}}">Accueil
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="{{url('A-propos')}}">A propos</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										Pages
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	
										<a class="dropdown-item scroll" href="#services">Services</a>
									<a class="dropdown-item" href="{{url('gallerie')}}">Gallerie</a>
										<a class="dropdown-item scroll" href="#blog">Blog</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{url('Single')}}">Single Page</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{url('Contact')}}">Contact</a>
								 </li> 
						</ul>
						<!-- login -->
						@guest
						
						@if (Route::has('register'))
						<a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
							<i class="fas fa-user"></i>Connexion</a>
						@endif
					@else
						<li class="nav-item dropdown">
								<a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
									{{ Auth::user()->name }}
								</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a><a class="dropdown-item " href="">Dashboard</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
						<!-- //login -->
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
		<!-- modal -->
		<!-- login -->
		<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Login Now</h5>
							<form action="#" method="post">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="password" placeholder="" required="">
								</div>
								<button type="submit" class="btn submit mb-4">Login</button>
								<p class="forgot-w3ls text-center pb-4">
									<a href="#" class="text-white">Forgot your password?</a>
								</p>
								<p class="account-w3ls text-center pb-4">
									Don't have an account?
									<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //login -->
		<!-- register -->
		<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-2">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Register Now</h5>
							<form action="#" method="post">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
								</div>
								<button type="submit" class="btn btn-primary submit mb-4">Register</button>
								<p class="text-center pb-2">
									<a href="#" class="text-white">By clicking Register, I agree to your terms</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //register -->
		<!-- //modal -->
	</div>
	<!-- //header 2 -->

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Single Page</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- single -->
	<div class="single-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Single Page</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tabmenu1" role="tab" aria-selected="true">Left Sidebar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabmenu2" role="tab" aria-selected="false">Right Sidebar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabmenu3" role="tab" aria-selected="false">Without Sidebar</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tabmenu1" role="tabpanel">
					<div class="row inner_sec_info">
						<!-- left side -->
						<div class="col-lg-8 single-left">
							<div class="single-left1">
								<img src="images/unnamed.jpg" alt=" " class="img-fluid" />
								<h6 class="blog-first text-dark text-center my-4">
									<i class="far fa-user mr-2"></i>Jenny Joy
								</h6>
								<ul class="blog_list my-3 text-center">
									<li>June 02, 2018</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart mr-1"></i>
											22</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comments mr-1"></i>
											16</a>
									</li>
								</ul>
								<h5 class="card-title">
									<a href="single.html" class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit facilisis erat
										posuere erat</a>
								</h5>
								<p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac
									urna. Suspendisse
									ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque
									purus,
									rhoncus nec nibh non, mollis sodales odio. Nullam facilisis diam non magna porta luctus. Aenean facilisis erat
									posuere
									erat ornare ultrices. Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
									<i class="my-3 font-weight-bold">Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi
										et lacinia. Aliquam maximus iaculis
										mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur orci efficitur nec.</i> In
									consectetur,
									elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse ut
									neque
									orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
									rhoncus
									nec nibh non, mollis sodales odio.</p>
							</div>
							<div class="admin p-4 my-4">
								<p>
									<i class="fas fa-quote-left mr-2"></i>nibh eu consequat magna ipsum ac ex. Nulla iaculis tincidunt elit,
									tortor luctus sit amet. Morbi in porta dolor.
									Morbi eget dui elit. consequat magna ipsum ac ex, Nulla iaculis consequat magna ipsum ac ex Nulla iaculis.
									<i class="fas fa-quote-right ml-2"></i>
								</p>
								<a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">James Doe</a>
							</div>
							<div class="row single-left2">
								<div class="col-md-6 single-left2-left">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 single-left2-left">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="comments my-5">
								<h3 class="blog-title text-dark">Nos récents commentaires</h3>
								<div class="comments-grids mt-4">
									<div class="row comments-grid">
										<div class="col-3 comments-grid-left">
											<img src="images/.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Parker Moe</h4>
											<ul class="my-2">
												<li class="font-weight-bold">6 June 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
									<div class="row comments-grid my-4">
										<div class="col-3 comments-grid-left">
											<img src="images/te2.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Mary Jane</h4>
											<ul class="my-2">
												<li class="font-weight-bold">16 May 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
									<div class="row comments-grid">
										<div class="col-3 comments-grid-left">
											<img src="images/te3.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Michael Loe</h4>
											<ul class="my-2">
												<li class="font-weight-bold">16 June 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="leave-coment-form">
								<h3 class="blog-title text-dark mb-4">Leave a Reply</h3>
								<form action="#" method="post">
									<input type="text" name="Name" placeholder="Name" required="">
									<input type="email" name="Email" placeholder="Email" required="">
									<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
									<div class="mm_single_submit">
										<input type="submit" value="Post Comment">
									</div>
								</form>
							</div>
						</div>
						<!-- //left side -->
						<!-- right side -->
						<div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
							<div class="event-right1">
								<div class="search1">
									<form class="form-inline" action="#" method="post">
										<input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Rechercher ici" aria-label="Search"
										    required>
										<button class="btn btn-outline-success rounded-0 mt-3" type="submit">Recherche</button>
									</form>
								</div>
								<div class="categories my-4 p-4 border">
									<h3 class="blog-title text-dark">Categories</h3>
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
								<div class="posts p-4 border">
									<h3 class="blog-title text-dark">Nos evenements</h3>
									<div class="posts-grids">
										<div class="row posts-grid mt-4">
											<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
												<a href="single.html">
													<img src="images/unnamed.jpg" alt=" " class="img-fluid" />
												</a>
											</div>
											<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
												<h4>
													<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
												</h4>
												<ul class="wthree_blog_events_list mt-2">
													<li class="mr-2 text-dark">
														<i class="fa fa-calendar mr-2" aria-hidden="true"></i>02/10/20</li>
													<li>
														<i class="fa fa-user" aria-hidden="true"></i>
														<a href="single.html" class="text-dark ml-2">Admin</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row posts-grid mt-4">
											<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
												<a href="single.html">
													<img src="images/n6.jpg" alt=" " class="img-fluid" />
												</a>
											</div>
											<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
												<h4>
													<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
												</h4>
												<ul class="wthree_blog_events_list mt-2">
													<li class="mr-2 text-dark">
														<i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/09/20</li>
													<li>
														<i class="fa fa-user" aria-hidden="true"></i>
														<a href="single.html" class="text-dark ml-2">Admin</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row posts-grid mt-4">
											<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
												<a href="single.html">
													<img src="images/n3.jpg" alt=" " class="img-fluid" />
												</a>
											</div>
											<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
												<h4>
													<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
												</h4>
												<ul class="wthree_blog_events_list mt-2">
													<li class="mr-2 text-dark">
														<i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/09/20</li>
													<li>
														<i class="fa fa-user" aria-hidden="true"></i>
														<a href="single.html" class="text-dark ml-2">Admin</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="tags mt-4 p-4 border">
									<h3 class="blog-title text-dark">Recent Tags</h3>
									<ul class="mt-4">
										<li>
											<a href="single.html" class="text-dark border">Designs</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Growth</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Latest</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Price</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Tools</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Real Estate</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Work Space</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">New Property</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Advantage</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Concepts</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Apartment</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Property</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Recherche</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Tips</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- //right side -->
					</div>
				</div>

				<div class="tab-pane fade" id="tabmenu2" role="tabpanel">
					<div class="row inner_sec_info">
						<!-- right side -->
						<div class="col-lg-4 event-right">
							<div class="event-right1">
								<div class="search1">
									<form class="form-inline" action="#" method="post">
										<input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search"
										    required>
										<button class="btn btn-outline-success rounded-0 mt-3" type="submit">Recherche</button>
									</form>
								</div>
								<div class="categories my-4 p-4 border">
									<h3 class="blog-title text-dark">Categories</h3>
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
								<div class="posts p-4 border">
									<h3 class="blog-title text-dark">Our Events</h3>
									<div class="posts-grids">
										<div class="row posts-grid mt-4">
											<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
												<a href="single.html">
													<img src="images/n1.jpg" alt=" " class="img-fluid" />
												</a>
											</div>
											<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
												<h4>
													<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
												</h4>
												<ul class="wthree_blog_events_list mt-2">
													<li class="mr-2 text-dark">
														<i class="fa fa-calendar mr-2" aria-hidden="true"></i>07/07/18</li>
													<li>
														<i class="fa fa-user" aria-hidden="true"></i>
														<a href="single.html" class="text-dark ml-2">Admin</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row posts-grid mt-4">
											<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
												<a href="single.html">
													<img src="images/n6.jpg" alt=" " class="img-fluid" />
												</a>
											</div>
											<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
												<h4>
													<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
												</h4>
												<ul class="wthree_blog_events_list mt-2">
													<li class="mr-2 text-dark">
														<i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/08/18</li>
													<li>
														<i class="fa fa-user" aria-hidden="true"></i>
														<a href="single.html" class="text-dark ml-2">Admin</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row posts-grid mt-4">
											<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
												<a href="single.html">
													<img src="images/n3.jpg" alt=" " class="img-fluid" />
												</a>
											</div>
											<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-4">
												<h4>
													<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
												</h4>
												<ul class="wthree_blog_events_list mt-2">
													<li class="mr-2 text-dark">
														<i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/08/18</li>
													<li>
														<i class="fa fa-user" aria-hidden="true"></i>
														<a href="single.html" class="text-dark ml-2">Admin</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="tags mt-4 p-4 border">
									<h3 class="blog-title text-dark">Recent Tags</h3>
									<ul class="mt-4">
										<li>
											<a href="single.html" class="text-dark border">Designs</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Growth</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Latest</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Price</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Tools</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Real Estate</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Work Space</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">New Property</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Advantage</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Concepts</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Apartment</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Property</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Research</a>
										</li>
										<li>
											<a href="single.html" class="text-dark border">Tips</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- //right side -->
						<!-- left side -->
						<div class="col-lg-8 single-left">
							<div class="single-left1">
								<img src="images/3.jpg" alt=" " class="img-fluid" />
								<h6 class="blog-first text-dark text-center my-4">
									<i class="far fa-user mr-2"></i>Jenny Joy
								</h6>
								<ul class="blog_list my-3 text-center">
									<li>June 02, 2018</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart mr-1"></i>
											22</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comments mr-1"></i>
											16</a>
									</li>
								</ul>
								<h5 class="card-title">
									<a href="single.html" class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit facilisis erat
										posuere erat</a>
								</h5>
								<p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac
									urna. Suspendisse
									ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque
									purus,
									rhoncus nec nibh non, mollis sodales odio. Nullam facilisis diam non magna porta luctus. Aenean facilisis erat
									posuere
									erat ornare ultrices. Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
									<i class="my-3 font-weight-bold">Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi
										et lacinia. Aliquam maximus iaculis
										mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur orci efficitur nec.</i> In
									consectetur,
									elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse ut
									neque
									orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
									rhoncus
									nec nibh non, mollis sodales odio.</p>
							</div>
							<div class="admin p-4 my-4">
								<p>
									<i class="fas fa-quote-left mr-2"></i>nibh eu consequat magna ipsum ac ex. Nulla iaculis tincidunt elit,
									tortor luctus sit amet. Morbi in porta dolor.
									Morbi eget dui elit. consequat magna ipsum ac ex, Nulla iaculis consequat magna ipsum ac ex Nulla iaculis.
									<i class="fas fa-quote-right ml-2"></i>
								</p>
								<a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">James Doe</a>
							</div>
							<div class="row single-left2">
								<div class="col-md-6 single-left2-left">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 single-left2-left">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="comments my-5">
								<h3 class="blog-title text-dark">Our Recent Comments</h3>
								<div class="comments-grids mt-4">
									<div class="row comments-grid">
										<div class="col-3 comments-grid-left">
											<img src="images/te1.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Parker Moe</h4>
											<ul class="my-2">
												<li class="font-weight-bold">6 June 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
									<div class="row comments-grid my-4">
										<div class="col-3 comments-grid-left">
											<img src="images/te2.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Mary Jane</h4>
											<ul class="my-2">
												<li class="font-weight-bold">16 May 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
									<div class="row comments-grid">
										<div class="col-3 comments-grid-left">
											<img src="images/te3.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Michael Loe</h4>
											<ul class="my-2">
												<li class="font-weight-bold">16 June 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="leave-coment-form">
								<h3 class="blog-title text-dark mb-4">Leave a Reply</h3>
								<form action="#" method="post">
									<input type="text" name="Name" placeholder="Name" required="">
									<input type="email" name="Email" placeholder="Email" required="">
									<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
									<div class="mm_single_submit">
										<input type="submit" value="Post Comment">
									</div>
								</form>
							</div>
						</div>
						<!-- //left side -->
					</div>
				</div>
				<div class="tab-pane fade" id="tabmenu3" role="tabpanel">
					<div class="inner_sec_info">
						<!-- left side -->
						<div class="single-left">
							<div class="single-left1">
								<img src="images/3.jpg" alt=" " class="img-fluid" />
								<h6 class="blog-first text-dark text-center my-4">
									<i class="far fa-user mr-2"></i>Jenny Joy
								</h6>
								<ul class="blog_list my-3 text-center">
									<li>June 02, 2018</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart mr-1"></i>
											22</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comments mr-1"></i>
											16</a>
									</li>
								</ul>
								<h5 class="card-title">
									<a href="single.html" class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit facilisis erat
										posuere erat</a>
								</h5>
								<p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac
									urna. Suspendisse
									ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque
									purus,
									rhoncus nec nibh non, mollis sodales odio. Nullam facilisis diam non magna porta luctus. Aenean facilisis erat
									posuere
									erat ornare ultrices. Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
									<i class="my-3 font-weight-bold">Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi
										et lacinia. Aliquam maximus iaculis
										mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur orci efficitur nec.</i> In
									consectetur,
									elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse ut
									neque
									orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
									rhoncus
									nec nibh non, mollis sodales odio.</p>
							</div>
							<div class="admin p-4 my-4">
								<p>
									<i class="fas fa-quote-left mr-2"></i>nibh eu consequat magna ipsum ac ex. Nulla iaculis tincidunt elit,
									tortor luctus sit amet. Morbi in porta dolor.
									Morbi eget dui elit. consequat magna ipsum ac ex, Nulla iaculis consequat magna ipsum ac ex Nulla iaculis.
									<i class="fas fa-quote-right ml-2"></i>
								</p>
								<a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">James Doe</a>
							</div>
							<div class="row single-left2">
								<div class="col-md-6 single-left2-left">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 single-left2-left">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">At vero eos et accusamus iusto</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Sed ut perspiciatis unde omnis</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Accusantium doloremque lauda</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Vel illum qui dolorem fugiat quo</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Quis autem vel eum repreh</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="single.html">Neque porro quisquam est qui</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="comments my-5">
								<h3 class="blog-title text-dark">Our Recent Comments</h3>
								<div class="comments-grids mt-4">
									<div class="row comments-grid">
										<div class="col-lg-2 col-3 comments-grid-left">
											<img src="images/te1.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-lg-7 col-8 comments-grid-right mt-3">
											<h4>Parker Moe</h4>
											<ul class="my-2">
												<li class="font-weight-bold">6 June 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
									<div class="row comments-grid my-4">
										<div class="col-lg-2 col-3 comments-grid-left">
											<img src="images/te2.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-lg-7 col-8 comments-grid-right mt-3">
											<h4>Mary Jane</h4>
											<ul class="my-2">
												<li class="font-weight-bold">16 May 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
									<div class="row comments-grid">
										<div class="col-lg-2 col-3 comments-grid-left">
											<img src="images/te3.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-lg-7 col-8 comments-grid-right mt-3">
											<h4>Michael Loe</h4>
											<ul class="my-2">
												<li class="font-weight-bold">16 June 2018
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Reply</a>
												</li>
											</ul>
											<p>mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus bibendum
												eu.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="leave-coment-form">
								<h3 class="blog-title text-dark mb-4">Leave a Reply</h3>
								<form action="#" method="post">
									<input type="text" name="Name" placeholder="Name" required="">
									<input type="email" name="Email" placeholder="Email" required="">
									<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
									<div class="mm_single_submit">
										<input type="submit" value="Post Comment">
									</div>
								</form>
							</div>
						</div>
						<!-- //left side -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //single -->

	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids pt-sm-4 pt-3">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-md-4 w3l-footer">
						<h2 class="mb-sm-3 mb-2">
							<a href="index.html" class="text-white font-italic font-weight-bold">
								<span>M</span>edic
								<i class="fas fa-syringe"></i>
							</a>
						</h2>
						<p>Médic met à votre disposition une équipe dynamique, professionnelle composée d’homme et 
							de femme déterminés à vous satisfaire et disponible 24 heures sur 24..</p>
					</div>
					<div class="col-md-4 w3l-footer my-md-0 my-4">
						<h3 class="mb-sm-3 mb-2 text-white">Adresse</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-location-arrow float-left"></i>
								<p class="ml-4">Medic,
									<span></span>Ouaga 2000, Avenue ADGREN Burkina-Faso. </p>
								<div class="clearfix"></div>
							</li>
							<li class="my-3">
								<i class="fa fa-phone float-left"></i>
								<p class="ml-4">226 70263676</p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="fa fa-envelope-open float-left"></i>
								<a href="mailto:info@example.com" class="ml-3">info@medic.com</a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 w3l-footer">
						<h3 class="mb-sm-3 mb-2 text-white">Liens importants</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li>
									<a href="index.html">Accueil</a>
								</li>
								<li class="mt-2">
									<a href="about.html">A propos</a>
								</li>
								<li class="mt-2">
									<a href="gallery.html">Pages</a>
								</li>
								<li class="mt-2">
									<a href="appointment.html">Formulaire</a>
								</li>
								<li class="mt-2">
									<a href="contact.html">Comptes</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
					<p class="copy-right-grids mt-lg-1">© 2020 Medic. All Rights Reserved | Design by
						<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>