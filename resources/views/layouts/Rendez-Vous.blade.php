@extends('layouts/include')
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Medic Medical Category Bootstrap Responsive Web Template | Appointment :: W3layouts</title>
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
							<li class="nav-item mt-lg-0 mt-3">
							<a class="nav-link" href="{{url('/')}}">Accueil
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
							<a class="nav-link" href="{{ url('A-propos')}}">A propos</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">Pages
								</a>
								
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="dropdown-item scroll" href="#services">Services</a>
									<a class="dropdown-item" href="{{ url('Gallerie')}}">Gallerie</a>
									<a class="dropdown-item scroll" href="#blog">Blog</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ url('Single')}}">Page Unique</a>
									</div>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="{{url('create-rdv')}}">Rendez-Vous</a>
							</li>
						
							<br>
					
					
							<li class="nav-item">
								<a class="nav-link" href="{{ url('Contact')}}">Contact</a>
							</li> 
							
						
							
						 
						
						<!-- login -->
						
						<!-- //login -->
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
						</ul>
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
							<h5 class="text-center mb-4">Connexion</h5>
							<form action="{{ route('login') }}" method="post">
								@csrf
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Mot de passe</label>
									<input type="password" class="form-control" name="password" placeholder="" required="">
								</div>
								{{-- <div class="form-group">
									<label class="mb-2">Statu</label>
									<select type="text" class="form-control"  name="statu" placeholder="" required="">
					                </select>
								</div> --}}
								<button type="submit" class="btn submit mb-4">Connexion</button>
								<p class="forgot-w3ls text-center pb-4">
									<a href="{{route('register')}}" class="text-white">Mot de passe oublié?</a>
								</p>
								<p class="account-w3ls text-center pb-4">
									Avez vous un compte?
									<a href="{{route('register')}}" >Créer un compte</a>
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
				<li class="breadcrumb-item active" aria-current="page">Appointment</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="appointment py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Nommination</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="d-flex">
				<div class="appoint-img">

				</div>
				
				<div class="d-flex row form-group mt-2">
					<div class="form-group col-md-11 text-center "> <br>
						<a href="{{url('/')}}"><button type="" class="btn btn-warning">Retour</button></a>
						</div>
				</div>

				<div class="contact-right-w3l appoint-form">
					
					<h5 class="title-w3 text-center mb-5">Remplissez votre formulaire de rendez-vous</h5>
					<form action="{{url('store-rdv')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Nom</label>
							<input type="text" class="form-control" placeholder="" name="nom" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-phone" class="col-form-label">EMail</label>
							<input type="email" class="form-control" placeholder="" name="email" id="recipient-phone" required="">
						</div>
						{{-- <div class="form-group">
							<label for="datepicker" class="col-form-label">Sélectionner votre Médecin</label>
							<select required="" class="form-control">
								<option value=""></option>
								<option value="1">Anne Dan</option>
								<option value="2">Carol Una</option>
								<option value="3">Diana Sue</option>
								<option value="4">Irene Sally</option>
								<option value="4">Jane Mary</option>
							</select>
						</div> --}}
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Sélectionner la date de votre RDV</label>
							<input placeholder="" class="date form-control" id="datepicker" type="date" name="date" value="" onfocus="this.value = '';"
							    onblur="if (this.value == '') {this.value = '';}" required="" />
						</div>
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Sélectionner l'heure de votre RDV</label>
							<select required="" name="heure"  class="form-control">
								<option value=""></option>
								<option value="08:00-8:30">08:00-8:30</option>
								<option value="08:30-9:00">08:30-9:00</option>
								<option value=" 09:00-9:30"> 09:00-9:30</option>
								<option value="09:30-10:00">09:30-10:00</option>
							</select>
						</div>
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Sélectionner le centre</label>
							<select  name="centre_id" id="make" class="form-control">
								<optgroup>
									<option value=""></option>
									@foreach ($centre as $centres)
									
									<option value="{{$centres->id}}">{{$centres->nom}}</option>
									@endforeach
								</optgroup>
							</select> 
						</div>
						<div class="form-group">
							<label for="datepicker" class="col-form-label">Sélectionner la Spécialité</label>
						     <select  name="specialite_id" id="make" class="form-control">
								<optgroup>
									<option value=""></option>
									@foreach ($specialite as $specialites)
									<option value="{{$specialites->id}}">{{$specialites->nom}}</option>
									@endforeach
								</optgroup>
							</select> 
						</div>
					<input type="submit" value="Réservé" class="btn_apt">

					</form>
				</div>
				<div class="clerafix"></div>
			</div>
		</div>
	</div>
	<!-- //contact -->

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
									<a href="{{url('/')}}">Accueil</a>
								</li>
								<li class="mt-2">
									<a href="{{ url('A-propos')}}">A propos</a>
								</li>
								<li class="mt-2">
									<a href="#">Pages</a>
								</li>
								<li class="mt-2">
									<a href="{{ url('rdv')}}">Rendez-Vous</a>
								</li>
								<li class="mt-2">
									<a href="{{ url('Contact')}}">Contact</a>
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