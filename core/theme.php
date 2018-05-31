<?php
/**
 * Created by PhpStorm.
 * User: alexf
 * Date: 21/04/2018
 * Time: 11:59 AM
 */

class theme {

	private $page = "My search";

	public function __construct($page = ""){
		$this->page = $page;
	}

	public function header(){
		?>
		<html>
			<head>
				<title><?php print $this->page; ?></title>
				<!--Import Google Icon Font-->
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				<!--Import materialize.css-->
				<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
				<link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
				<link type="text/css" rel="stylesheet" href="css/fontawesome-all.min.css"  media="screen,projection"/>

				<!--Let browser know website is optimized for mobile-->
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			</head>
			<body>
				<nav class="indigo darken-4">
					<div class="nav-wrapper container">
						<a href="index.php" class="brand-logo"><i class="material-icons">search</i>My search</a>
						<ul class="right hide-on-med-and-down">
							<li><a href="about.php"><i class="material-icons left">class</i>Quienes somos</a></li>
							<li><a href="affiliates.php"><i class="material-icons left">recent_actors</i>Afiliados</a></li>
							<li><a href="contact.php"><i class="material-icons left">contact_mail</i>Contacto</a></li>
							<li><a href="login.php"><i class="material-icons left">account_circle</i>Inicia sesión</a></li>
						</ul>
					</div>
				</nav>
				<main class="container">


		<?php
	}

	public function footer(){
		?>
				</main>
				<footer class="page-footer indigo darken-4">
					<div class="container">
						<div class="row">
							<div class="col l6 s12">
								<h5 class="white-text">Eslogan</h5>
								<p class="grey-text text-lighten-4">Busca, cotiza y compra.</p>
							</div>
							<div class="col l4 offset-l2 s12">
								<h5 class="white-text">Redes sociales</h5>
								<ul>
									<li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-facebook-square"></i>&nbsp;Facebook</a></li>
									<li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-instagram"></i>&nbsp;Instagram</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="footer-copyright">
						<div class="container">
							© 2018 Copyright Text
						</div>
					</div>
				</footer>
				<!--JavaScript at end of body for optimized loading-->
				<script type="text/javascript" src="js/jquery.min.js"></script>
				<script type="text/javascript" src="js/materialize.min.js"></script>
				<script type="text/javascript" src="js/script.js"></script>
			</body>
		</html>
		<?php
	}
}