<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ayni's Beauty</title>
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/css/prettyPhoto.css" rel="stylesheet">
    <link href="frontend/css/price-range.css" rel="stylesheet">
    <link href="frontend/css/animate.css" rel="stylesheet">
	<link href="frontend/css/main.css" rel="stylesheet">
	<link href="frontend/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="frontend/js/html5shiv.js"></script>
    <script src="frontend/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="frontend/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="frontend/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +221 77 900 75 60</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> ninabella015@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/profile.php?id=100066900727640&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								{{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/')}}"><img src="frontend/images/home/logo.jpg" width="80" alt="" /></a>
						</div>

					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- {{-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> --}}
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="{{URL::to('/panier')}}"><i class="fa fa-shopping-cart"></i> Panier</a></li>
								<li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> connexion</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/')}}">Accueil</a></li>
								<li class="dropdown"><a href="{{URL::to('/categories')}}">Categories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        {{-- <li><a href="{{URL::to('/categories')}}">Categories</a></li> --}}
										<li><a href="product-details.html">savons</a></li> 
										<li><a href="checkout.html">lait de corps</a></li> 
										<li><a href="{{URL::to('/panier')}}">gommages</a></li> 
										<li><a href="{{URL::to('/login')}}">serum</a></li> 
                                    </ul>
                                </li> 
								{{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>  --}}
								<li><a href="{{URL::to('/produits')}}">Produits</a></li>
								<li><a href="{{URL::to('/contact')}}">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Rechercher"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

{{-- Fin Header --}}

{{--  Debut Contenu  --}}

  @yield('contenu')

{{--  Fin Contenu  --}}

{{--  Debut Header  --}}
<footer id="footer"><!--Footer-->
  {{-- <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="companyinfo">
            <h2><span>e</span>-shopper</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="frontend/images/home/iframe1.png" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Circle of Hands</p>
              <h2>24 DEC 2014</h2>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="frontend/images/home/iframe2.png" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Circle of Hands</p>
              <h2>24 DEC 2014</h2>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="frontend/images/home/iframe3.png" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Circle of Hands</p>
              <h2>24 DEC 2014</h2>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="frontend/images/home/iframe4.png" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Circle of Hands</p>
              <h2>24 DEC 2014</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="address">
            <img src="frontend/images/home/map.png" alt="" />
            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  
  <div class="footer-widget">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Service clients</h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#"></a></li>
              <li><a href="#">Contactez-nous</a></li>
              <li><a href="#">signaler un produit</a></li>
              <li><a href="#">livraisons</a></li>
              <li><a href="#">aide et FAQ’s</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>A propos </h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">qui sommes nous?</a></li>
              <li><a href="#">Nos boutiques officielles</a></li>
              <li><a href="#">Informations de paiement ayni's beauty</a></li>
              <li><a href="#">conditions générales d'utilisation</a></li>
              <li><a href="#">ayni's beauty anniversaire</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
            {{-- <h2>Policies</h2> --}}
            <h2>Mode de paiement </h2>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">paiement a la livraison</a></li>
              {{-- <li><a href="#">Careers</a></li>
              <li><a href="#">Store Location</a></li>
              <li><a href="#">Affillate Program</a></li>
              <li><a href="#">Copyright</a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="single-widget">
             {{-- <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privecy Policy</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Billing System</a></li>
              <li><a href="#">Ticket System</a></li>
            </ul> --}}
          </div>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
          <div class="single-widget">
            <h2>A propos de l'acheteur</h2>
            <form action="#" class="searchform">
              <input type="text" placeholder="votre adresse e-mail" />
              <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
              <p>Obtenez les mises à jour les plus récentes <br />de notre  site et être mis à jour vous-même...</p>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright ©2023 Ayni's beauty ABWND-ELN All rights reserved.</p>
        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Theme</a></span></p>
        <div class="social-networks">
          {{-- <h2 class="title text-center">Réseaux sociaux</h2> --}}
        <ul>
          <li>
            <a href="https://www.facebook.com/profile.php?id=100066900727640&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fas fa-heart"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </li>
        </ul>
        </div>
      </div>
    </div>
  </div>
  
</footer><!--/Footer-->



  <script src="frontend/js/jquery.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/jquery.scrollUp.min.js"></script>
<script src="frontend/js/price-range.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="frontend/js/jquery.prettyPhoto.js"></script>
  <script src="frontend/js/main.js"></script>
</body>
</html>
