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
	<title>Medic Medical Category Bootstrap Responsive Web Template | About Us :: W3layouts</title>
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
					<a class="navbar-brand font-weight-bold font-italic" href="{{url('/')}}">
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
								<a class="nav-link" href="{{url('/')}}">Accueil
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
									<a class="dropdown-item" href="{{url('Gallerie')}}">Gallerie</a>
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
					<a href="index.html">Accueil</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">A propos</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- about -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">A propos</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
			</div>
			<p class="aboutpara text-center mx-auto"></p>

			<div class="row about_grids mt-5">
				<div class="col-lg-4">
					<img src="images/doctor_patient_drc.jpg" alt="" class="img-fluid" />
					<h3 class="mt-3 text-dark">Aliquam iaculis erat porta </h3>
					<p class="my-3">Nam ut nulla a ligula dictum imperdiet nec ligula dictum imperdiet nec</p>
					<a href="single.html">Lire plus</a>
				</div>
				<div class="col-lg-4 my-lg-0 my-5">
					<img src="images/images 2.jpg" alt="" class="img-fluid" />
					<h3 class="mt-3 text-dark">Aliquam iaculis erat porta </h3>
					<p class="my-3">Nam ut nulla a ligula dictum imperdiet nec ligula dictum imperdiet nec</p>
					<a href="single.html">Lire plus</a>
				</div>
				<div class="col-lg-4">
					<img src="images/blog3.jpg" alt="" class="img-fluid" />
					<h3 class="mt-3 text-dark">Aliquam iaculis erat porta </h3>
					<p class="my-3">Nam ut nulla a ligula dictum imperdiet nec ligula dictum imperdiet nec</p>
					<a href="single.html">Lire plus</a>
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->

	<!-- middle section -->
	<div class="w3ls-welcome py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-5 welcome-right">
					<img src="images/banner2.jpg" alt=" " class="img-fluid">
				</div>
				<div class="col-lg-7 welcome-left mt-4">
					<h3>Awesome Theme for Medical and Health Websites</h3>
					<h6 class="mt-3">Suspendisse porta erat sit amet eros sagittis</h6>
					<h4 class="my-4 font-italic">Cum sociis natoque penatibus et magnis dis parturient montesmus, Proin vel nibh et
						elit mollis commodo et nec augue
						tristique sed.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis
						hendrerit
						libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</p>
					<div class="readmore-w3-agileits mt-md-5 mt-4">
						<a href="single.html" class="w3ls-button-agile text-dark">Lire Plus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- team -->
	<section class="team py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Nos Docteurs</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="col-md-4 team-grids text-center">
					<img src="images/f2.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Ouedraogo Adèle</h4>
							<h6>Doctor 1</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter-square"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest"></i>
							</a>

						</div>

					</div>
				</div>
				<div class="col-md-4 team-grids my-md-0 my-4 text-center">
					<img src="images/male.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Adama Sanou</h4>
							<h6>Doctor 2</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter-square"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest"></i>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-4 team-grids text-center">
					<img src="images/f.jpg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Christina </h4>
							<h6>Doctor 3</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter-square"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- team -->

	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h6 class="text-white">Mr Ouedraogo Bénissan</h6>
				<h3 class="text-white my-3">Docteur Principal</h3>
			</div>
			{{-- <div class="button">
				<a href="about.html" class="w3ls-button-agile">Voir Plus
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div> --}}
		</div>
	</div>
	<!-- //banner bottom -->

	<!-- services -->
	<div class="why-choose-agile pt-5" id="services">
		<div class="container pt-xl-5 pt-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Nos meilleures Services</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Des services de qualité irréprochable</p>
			</div>
			<div class="row why-choose-agile-grids-top">
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-user-md"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Médecine Générale</h4>
							<p>est une spécialité médicale prenant en charge le suivi durable, le bien-être et les soins de santé généraux.</p>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-syringe"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Services dentaire</h4>
							<p>Le service bucco-dentaire de Medic traite l'ensemble des pathologies
								 des dents et de la bouche.</p>
						</div>
					</div>
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fab fa-medrt"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Traitement Médical</h4>
							<p>fait intervenir un pharmacien, un médecin ou un infirmier
								.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid img text-center">
					<img src="images/images.jpg" alt=" " class="img-fluid" />
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Cardiologie</h4>
							<p>branche de la médecine qui traite des troubles du cœur ainsi que de certaines parties du système circulatoire..</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-medkit"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Orthopédie</h4>
							<p>est la spécialité chirurgicale qui a pour objet la prévention et la correction des
								 affections de l'appareil locomoteur.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-wheelchair"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Laboratoire</h4>
							<p> Notre laboratoire vous offres toutes sorte
								 d'analyse et met à votre disposition une équipe de professinnel 24H/24 et 7j/7</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-hospital"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- //services -->

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