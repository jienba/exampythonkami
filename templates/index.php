
<?php
	session_start();
	// var_dump(md5(sha1(kami2021)));
?>
{% load static %}
<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Astral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{% static 'assets/css/main.css'%}" />
		<link rel="stylesheet" type="text/css" href="{% static 'bootstrap-5/css/bootstrap.min.css'%}">
		<link rel="stylesheet" type="text/css" href="{% static 'mdbootstrap/css/bootstrap.min.css'%}">
		<noscript><link rel="stylesheet" href="{% static 'assets/css/noscript.css'%}" /></noscript>
		    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

	</head>
	<body class="is-preload bg-light">
		<div class="shadow-lg p-4 mb-4 bg-white"><span class="text-danger fs-1 fw-bold">Sen Immo</span>
			<a href="login/logout.php">
				<i class="fas fa-power-off fa-3x text-danger float-end "></i>
			</a>
		</div>
		<!-- Wrapper-->
			<div id="wrapper" >

				<div class="container">
				  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
				    
				    	<div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<a href="table/liste_bien.php">
					      	<i class="fas fa-home fa-4x text-danger"></i><br>
					      	<span class="text-danger fw-bold">Vente</span>
					      </a>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<i class="fas fa-city fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Location</span>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<a class="" href="formulaire Kami/formulaire.php">
				      		<i class="fas fa-user-plus fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Contrat</span>
				      	</a>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<i class="fas fa-user-edit fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Editer</span>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<i class="fas fa-user-times fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Suspendre</span>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<a href="table/liste_client.php">
				      		<i class="fas fa-users fa-4x text-danger"></i><br>
				      		<span class="text-danger fw-bold">Liste</span>
				      	</a>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<i class="fas fa-building fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Hotel</span>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<i class="fas fa-store-alt fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Boutique</span>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<a href="formulaire Kami/formulaire_bien.php">
				      	<i class="fas fa-plus-square fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Ajouter</span>
				      	</a>
				      </div>
				    </div>
				    <div class="col">
				      <div class="rounded border-0 shadow-lg p-3 border bg-light text-center">
				      	<i class="fas fa-times fa-4x text-danger"></i><br>
				      	<span class="text-danger fw-bold">Supprimer</span>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="bootstrap-5/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="mdbootstrap/js/bootstrap.min.js"></script>

	</body>
</html>