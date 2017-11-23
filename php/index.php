<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		
		<!-- Déclatration des styles css et scripts js -->
		<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="../js/timer.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/style.css">
		<?php
			$name = 'Accueil';
			echo "<title> $name </title>";
		?>
	</head>
	<body class="generic-background">
		<a id="haut"></a>
		<!-- Barre de navigation -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php"> <span class="span-green">Biblio</span><span class="span-red">Code</span> </a>
					</li>
					<li class="active">
						<a href="index.php">Accueil</a>
					</li>
					<!-- Menu WEB -->
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							Langages web
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">PHP</a></li>
							<li><a href="#">JS</a></li>
						</ul>
					</li>
					<!-- Menu ALGO -->
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							Algorithmes utiles
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Tris</a></li>
							<li><a href="#">Graphes</a></li>
							<!-- Sous menu de ALGO a partir de Arbres -->
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">
									Arbres
									<span class="caret"></span>
								</a>
								<ul class="dropdown-submenu">
									<li><a href="#">Binaires</a></li>
									<li><a href="#">Recherches</a></li>
									<li><a href="#">Index</a></li>
							   </ul>
							</li>
					   </ul>
					</li>
					<!-- Menu BD -->
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							Bases de données
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">MySQL</a></li>
							<li><a href="#">MongoDB</a></li>
					   </ul>
					</li>
				</ul>
				<!-- Barre de recherche -->
				<form class="navbar-form navbar-right inline-form">
					<div class="form-group">
						<input type="search" class="input-sm form-control" placeholder="Recherche">
						<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
					</div>
				</form>
			</div>
		</nav>
		<br/>
		<br/>
		<div class="container-fluid">
			<!-- Zone de titre -->
			<div class="jumbotron">
				<div class="container">
					<h1 class="text-center">Bienvenue sur <span class="span-green">Biblio</span><span class="span-red">Code</span> !</h1>
				</div>
			</div>
			<br/>
			<!-- Corps de la page -->
			<content class="container">
				<!-- Description -->
				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h1> Partie WEB </h1>
						<p> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor mollis egestas. Mauris eu ligula eget augue molestie molestie. Donec tempus magna dolor. Maecenas vestibulum pellentesque enim nec iaculis. Praesent sit amet justo eros. Sed enim urna, semper non scelerisque cursus, vulputate nec felis. Maecenas ac orci sed metus euismod ullamcorper. Maecenas dolor nunc, lobortis at tortor quis, semper euismod sem. Sed nec rutrum libero. Nulla dignissim neque nec maximus consequat. 
						</P>
					</article>
					<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h1> Partie ALGO </h1>
						<p> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor mollis egestas. Mauris eu ligula eget augue molestie molestie. Donec tempus magna dolor. Maecenas vestibulum pellentesque enim nec iaculis. Praesent sit amet justo eros. Sed enim urna, semper non scelerisque cursus, vulputate nec felis. Maecenas ac orci sed metus euismod ullamcorper. Maecenas dolor nunc, lobortis at tortor quis, semper euismod sem. Sed nec rutrum libero. Nulla dignissim neque nec maximus consequat. 
						</P>
					</article>
					<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h1> Partie BD </h1>
						<p> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor mollis egestas. Mauris eu ligula eget augue molestie molestie. Donec tempus magna dolor. Maecenas vestibulum pellentesque enim nec iaculis. Praesent sit amet justo eros. Sed enim urna, semper non scelerisque cursus, vulputate nec felis. Maecenas ac orci sed metus euismod ullamcorper. Maecenas dolor nunc, lobortis at tortor quis, semper euismod sem. Sed nec rutrum libero. Nulla dignissim neque nec maximus consequat. 
						</P>
					</article>
				</div>
				<br/>
				<br/>
				<br/>
				<!-- Pied de page -->
				<footer class="footer text-center grey-background row">
					<div>
						<?php
							echo "
								Vous êtes sur l'$name et il est : 
								<div id='div_horloge'></div>
								<a href='#haut'> Retourner en haut </a>
							";
						?>
					</div>
				</footer>
			</content>
		</div>	
	</body>
</html>
