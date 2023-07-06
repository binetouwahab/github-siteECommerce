@extends('layouts.app')

@section('contenu')
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Ayni's</span>Beauty</h1>
									<h2>la beauté autrement </h2>
									<p>Bienvenue chez Ayni's Beauty ! Nous sommes une boutique spécialisée dans la vente de savons et de laits pour le corps de qualité. Nous mettons l'accent sur les produits naturels et nous nous engageons à offrir à nos clients une expérience de beauté et de bien-être exceptionnel </p>
									<button type="button" class="btn btn-default get">obtenir</button>
								</div>
								<div class="col-sm-6">
									<img src="frontend/images/home/AYNI.png" class="girl img-responsive" alt="" />
									{{-- <img src="frontend/images/home/logo.jpg" width="65" class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Ayni's</span>Beauty</h1>
									<h2>la beaute autrement</h2>
									<p>Bienvenue chez Ayni's Beauty ! Nous sommes une boutique spécialisée dans la vente de savons et de laits pour le corps de qualité. Nous mettons l'accent sur les produits naturels et nous nous engageons à offrir à nos clients une expérience de beauté et de bien-être exceptionnel </p>
									<button type="button" class="btn btn-default get">obtenir</button>
								</div>
								<div class="col-sm-6">
									<img src="frontend/images/home/AYNI2.JPG" class="girl img-responsive" alt="" />
									<img src="frontend/images/home/logo.jpg" width="75" class="pricing" alt="" /> 
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Ayni's</span>Beauty</h1>
									<h2>La beaute autrement</h2>
									<p>Bienvenue chez Ayni's Beauty ! Nous sommes une boutique spécialisée dans la vente de savons et de laits pour le corps de qualité. Nous mettons l'accent sur les produits naturels et nous nous engageons à offrir à nos clients une expérience de beauté et de bien-être exceptionnel </p>
									<button type="button" class="btn btn-default get">obtenir</button>
								</div>
								<div class="col-sm-6">
									<img src="frontend/images/home/AYNI1.png" class="girl img-responsive" alt="" />
									<!-- <img src="frontend/images/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											savon
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">savon teint clair</a></li>
											<li><a href="#">savon teint marron</a></li>
											<li><a href="#">savon teint noir </a></li>
											<!-- <li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											lait de corps
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										<li><a href="#">pour teint clair</a></li>
											<li><a href="#">pour teint marron</a></li>
											<li><a href="#">pour teint noir </a></li>
											 <li><a href="#">pour teint metisse</a></li> 
										 <!--	<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li> -->
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											creme visage
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">teint marron</a></li>
											<li><a href="#">teint metisse</a></li>
											<li><a href="#">teint clair</a></li>
											<li><a href="#">teint noir</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">serum</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">creme main</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">creme pied</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">gel de douce</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">gommage</a></h4>
								</div>
							</div>
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div> -->
						</div><!--/category-products-->
					
						<!-- <div class="brands_products"> brands_products-->
							<!-- <h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div>/brands_products  ......commenter by me a partir du div	-->				
						<div class="price-range"><!--price-range-->
							<h2>echelle des prix</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">fcfa 1 000</b> <b class="pull-right">fcFa 85 000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="frontend/images/home/beauty.png" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">NOS PRODUITS</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="frontend/images/home/A1.jpg" alt="" />
											<h2>17 500 fcfa</h2>
											<p>Gamme teint marron</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>17 500 fcfa</h2>
												<p>Gamme teint marron</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Details du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A5.jpg" alt="" />
										<h2>25 000 fcfa</h2>
										<p>Lait de corps magic white</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>25 000 fcfa</h2>
											<p>Lait de corps magic white</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Details du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A3.jpg" alt="" />
										<h2>6 000 fcfa</h2>
										<p>Cyprus-gold</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>6 000 fcfa</h2>
											<p>Cyprus-gold</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Details du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A4.jpg" alt="" />
										<h2>15 000 fcfa</h2>
										<p>metisse glow</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>15 000 fcfa</h2>
											<p>metisse glow</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
										</div>
									</div>
									<img src="frontend/images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Details du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A2.jpg" alt="" />
										<h2>6 000 fcfa</h2>
										<p>Cyprus-gold</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>6 000 fcfa</h2>
											<p>Cyprus-gold</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
										</div>
									</div>
									<img src="frontend/images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Details du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A6.jpg" alt="" />
										<h2>10 000 fcfa</h2>
										<p>gel de douche eclaircissant</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>10 000 fcfa</h2>
											<p>gel de douche eclaircissant</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Details du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">lait de corps</a></li>
								<li><a href="#blazers" data-toggle="tab">Savons</a></li>
								<li><a href="#sunglass" data-toggle="tab">Shirley</a></li>
								<li><a href="#kids" data-toggle="tab">Type creme</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Kit</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/L1.jpg" alt="" />
												<h2>15 000 fcfa</h2>
												<p>Cindella</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/L2.jpg" alt="" />
												<h2>25 000fcfa</h2>
												<p>lait de corps magic white</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/L3.jpg" alt="" />
												<h2>15 000 fcfa</h2>
												<p>Metisse glow</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/L4.jpg" alt="" />
												<h2>10 000 fcfa</h2>
												<p>lait de corps teint marron</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/S5.jpg" alt="" />
												<h2>15 000 fcfa</h2>
												<p>duo dose</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/S2.jpg" alt="" />
												<h2>3 000 fcfa</h2>
												<p>savon peeling visage</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/S3.jpg" alt="" />
												<h2>5 000 fcfa</h2>
												<p>cindella soap</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/S4.jpg" alt="" />
												<h2>10 000 fcfa</h2>
												<p>savon metisse glow</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/R1.jpg" alt="" />
												<h2>2 000 fcfa</h2>
												<p>acne cream</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/R2.jpg" alt="" />
												<h2>4 000 fcfa</h2>
												<p>face fresh gold</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/R3.jpg" alt="" />
												<h2>2 000 fcfa</h2>
												<p>Doctor cream</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/R4.jpg" alt="" />
												<h2>4 000 fcfa</h2>
												<p>omni gold</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/A7.jpg" alt="" />
												<h2>3 000 fcfa</h2>
												<p>Dermaman</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/A8.jpg" alt="" />
												<h2>3 000 fcfa</h2>
												<p>Epitopic</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/A9.jpg" alt="" />
												<h2>3 000 fcfa</h2>
												<p>Akino</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/A10.jpg" alt="" />
												<h2>5 000fcfa</h2>
												<p>Doctor</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/K1.jpg" alt="" />
												<h2>15 000 fcfa</h2>
												<p>kit DR-racher aloe vera</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/K2.jpg" alt="" />
												<h2>15 000 fcfa</h2>
												<p>kit gentle magic</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/K3.jpg" alt="" />
												<h2>7 000 fcfa</h2>
												<p>Kit face fresh</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="frontend/images/home/K5.jpg" alt="" />
												<h2>7 000 fcfa</h2>
												<p>Creme vergeture</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">PRODUIT RECOMMENDER</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="frontend/images/home/E1.jpg" alt="" />
													<h2>15 000</h2>
													<p>Duo dose</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="frontend/images/home/E2.jpg" alt="" />
													<h2>17 500</h2>
													<p>gamme teint marron</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="frontend/images/home/E3.jpg" alt="" />
													<h2>35 000 fcfa</h2>
													<p> gamme magic white</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="frontend/images/home/E4.jpg" alt="" />
													<h2>7 000 fcfa</h2>
													<p>gommage coffee</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="frontend/images/home/E5.jpg" alt="" />
													<h2>12 000 fcfa</h2>
													<p>cindella body lotion</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="frontend/images/home/E6.jpg" alt="" />
													<h2>5 000 fcfa</h2>
													<p>Black soap</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	@endsection