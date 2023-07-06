@extends('layouts.app')

@section('contenu')	
	<section id="advertisement">
		<div class="container">
			<img src="frontend/images/shop/R.png"  alt="" />
		</div>
	</section>
	
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
							</div>/category-productsr-->
					
						<!-- <div class="brands_products">brands_products -->
							<!-- <h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div>/brands_products -->
						
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
						<h2 class="title text-center">NOS produits</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/shop/A1.jpg" alt="" />
										<h2>17 500 fcfa</h2>
										<p>gamme teint marron</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>17 500 fcfa</h2>
											<p>gamme teint marron</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/shop/A4.jpg" alt="" />
										<h2>15 000 fcfa</h2>
										<p>metisse glow</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>15 000 fcfa</h2>
											<p>metisse glow</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/shop/A6.jpg" alt="" />
										<h2>10 000</h2>
										<p>gel de douche eclaircissant</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>10 000</h2>
											<p>gel de douche eclaircissant</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/shop/E5.jpg" alt="" />
										<h2>15 000 fcfa</h2>
										<p>cindella</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>15 000 fcfa</h2>
											<p>cindella</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
									<img src="frontend/images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/shop/L2.jpg" alt="" />
										<h2>25 000 fcfa</h2>
										<p>lait de corps magic white</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>25 000 fcfa</h2>
											<p>lait de corps magic white</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
									<img src="frontend/images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/shop/L4.jpg" alt="" />
										<h2>10 000 fcfa</h2>
										<p>lait de corps teint marron</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>10 000 fcfa</h2>
											<p>lait de corps teint marron</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A7.jpg" alt="" />
										<h2>3 000 fcfa</h2>
										<p>dermaman</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>3 000 fcfa</h2>
											<p>dermaman</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A8.jpg" alt="" />
										<h2>3 000 fcfa</h2>
										<p>Epitopic</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>3 000 fcfa</h2>
											<p>Epitopic</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/A9.jpg" alt="" />
										<h2>3 000 fcfa</h2>
										<p>Akino</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>3 000 fcfa</h2>
											<p>Akino</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/K1.jpg" alt="" />
										<h2>15 000 fcfa</h2>
										<p>kit DR-rachel aloe vera</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>15 000 fcfa</h2>
											<p>kit DR-rachel aloe vera</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/K2.jpg" alt="" />
										<h2>15 000</h2>
										<p>kit gentle magic</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>15 000</h2>
											<p>kit gentle magic</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="frontend/images/home/K3.jpg" alt="" />
										<h2>7 000 fcfa</h2>
										<p>kit face fresh</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>7 000 fcfa</h2>
											<p>kit face fresh</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ajouter aux panier</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>ajouter aux favories</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>afficher detatils du produit</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
@endsection