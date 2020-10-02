@extends('layouts/include')
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Médic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                    @else
                        <a href="{{ route('login') }}">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Création de Compte</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bienvenu dans Médic!!
                </div>

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            {{-- </div>
        </div>
    </body>
</html>  --}} 
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Medic Medical Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
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
<link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
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
						<a class="navbar-brand font-weight-bold font-italic" href="index.html">
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
							<a class="nav-link" href="{{route('A-propos')}}">A propos</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">Pages
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="dropdown-item scroll" href="#services">Services</a>
								<a class="dropdown-item" href="{{route('gallerie')}}">Gallerie</a>
									<a class="dropdown-item scroll" href="#blog">Blog</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{route('Single')}}">Single Page</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('contact')}}">Contact</a>
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
									<label>Votre Email</label>
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
									<a href="#" class="text-white">Mot de passe oublié?</a>
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

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Le Service médical 
									<span>auquel vous croyez</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Nous vous soignons, Dieu vous guérit.</p>
								<a href="about.html">Lire plus
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>L'excellence médicale
									<span>tout les jours</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">La technologie à votre portée!!
									</p>
								<a href="about.html">Lire Plus
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>L'hopital du
									<span>future, maintenant</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Toutes choses en tout temps!!</p>
								<a href="about.html">Lire Plus
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

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

	<!-- middle section -->
	<div class="w3ls-welcome py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-5 welcome-right">
					<img src="images/g1.jpg" alt=" " class="img-fluid">
				</div>
				<div class="col-lg-7 welcome-left mt-4">
					<h3>Qui sommes-nous?</h3>
					<h6 class="mt-3"></h6>
					<h4 class="my-4 font-italic">Créé en 2009, notre laboratoire dentaire accompagne depuis près de 8 ans de nombreux médecins répartis au Burkina-Faso et à travers le monde pour toute réalisation en orthodontie esthétique (gouttière orthodontie). Les avancées techniques visant la production d’un appareil dentaire transparent, ont conduit à l’utilisation, dans notre laboratoire, de compétences semblable à la gouttière Invisalign, permettant un déplacement dentaire doux et progressif.</h4>
					<p>
						Nous sommes équipés des dernières innovations technologiques (numérisation des dents, laser, logiciel de traitement 3SHAPE®, imprimante 3D Printer Stratasys leader mondial de l’impression 3D) et pratiquons quotidiennement les meilleures solutions techniques des nouvelles générations numériques..</p>
					<div class="readmore-w3-agileits mt-md-5 mt-4">
						<a href="single.html" class="w3ls-button-agile text-dark">Lire Plus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

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

	<!-- blog -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Vos avantages</h3>
				<span>
					<i class="fa fa-user-md text-white"></i>
				</span>
				<p class="mt-2 text-white">Des tarifs de services à votre portée</p>
			</div>
			<div class="row package-grids mt-5">
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/hemoglobine1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>Aout</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Diagnostique de l'hémoglobineA</h4>
						<h6>Dans le cas de la drépanocytose (anomalie héréditaire de l'hémoglobine), le diagnostic se fait par l'observation des globules rouges. </h6>
						<a href="single.html">
							<i class="fa fa-user mr-2"></i>Posté par Médic</a>
					</div>
				</div>
				<div class="col-md-4 pricing my-md-0 my-5">
					<div class="price-top">
						<a href="single.html">
							<img src="images/rad.PNG" alt="" class="img-fluid" />
						</a>
						<h3>24
							<span>Aout</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Diagnostique cranier</h4>
						<h6>Le diagnostic du traumatisme crânien peut être évident lorsqu'il 
							est signalé par la personne concernée consciente au sortir de la perte de connaissance, ou par l'entourage,suspecté chez une personne. 
							</h6>
						<a href="single.html">
							<i class="fa fa-user mr-2"></i>Posté par Médic</a>
					</div>
				</div>
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/g2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>30
							<span>Septembre</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Transplantation de la colonne vertébrale</h4>
						<h6>Pour rigidifier un segment de colonne vertébrale,
							 une greffe osseuse est fixée sur les vertèbres concernées.</h6>
						<a href="single.html">
							<i class="fa fa-user mr-2"></i>Posté par Médic</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- treatments -->
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Nos meilleures traitements</h3>
				<span>
					<i class="fa fa-user-md"></i>
				</span>
				<p class="mt-2">Vous accompagner tout les jours à moindre cout!!</p>
			</div>
			<div class="row">
				<div class="col-lg-6 w3ls-wthree-screen text-center">
					<img src="images/bébé.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 w3ls-wthree-texts mt-5">
					<div class="row icons-screen">
						<div class="col-3 screen-agile text-right">
							<i class="fas fa-syringe"></i>
						</div>
						<div class="col-9 screen-agile-2">
							<h5 class="mb-3">Accouchement</h5>
							<p> Depuis l'épidémie de coronavirus, le séjour à la maternité, après l'accouchement, est très court..</p>
						</div>
					</div>
					<div class="row icons-screen mt-5">
						<div class="col-3 screen-agile text-right">
							<i class="fab fa-medrt"></i>
						</div>
						<div class="col-9 screen-agile-2">
							<h5 class="mb-3">Procédure Médicale</h5>
							<p>Un examen médical est une procédure de diagnostic réalisée pour des motifs de santé</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //treatments -->

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
