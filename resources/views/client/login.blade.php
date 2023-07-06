@extends('layouts.app')

@section('contenu')	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>connexion a votre compte</h2>
						<form action="#">
							<input type="text" placeholder="Nom" />
							<input type="email" placeholder="Adresse Email" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Garder ma session ouverte
							</span>
							<button type="submit" class="btn btn-default">se connecter</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>inscription!</h2>
						<form action="#">
							<input type="text" placeholder="Nom"/>
							<input type="email" placeholder="Adresse Email"/>
							<input type="password" placeholder="Mot de Passe"/>
							<button type="submit" class="btn btn-default">S'inscrire</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
@endsection