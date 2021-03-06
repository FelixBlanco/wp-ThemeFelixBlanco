<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php the_title(); ?> - de Félix Blanco </title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/img/favicon.ico">
	
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<meta name="author" content="Felix Blanco">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<!-- Encabezado general -->
				<div id="titulo_index">
					<a href="<?php bloginfo('url'); ?>">
						<h1 class="text-center">
						<img src="<?php bloginfo('template_url') ?>/img/logoFB.png" class="img-responsive center-block" alt="Logo Oficial Felix Blanco" width="90" style="display: inline-block;">
							<span class="TipoLetra">F</span>élix <span class="TipoLetra">B</span>lanco
						</h1>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Menu general -->
				<div class="menu_general">
					<ul class="list-inline text-center">
						<li>
							<a href="<?php bloginfo('url'); ?>"> 
								<h3><span class="lnr lnr-home"></span>Inicio</h3>
							</a>
						</li>
						<li><a href="<?php bloginfo('url'); ?>/articulos/">
							<h3><span class="lnr lnr-pencil"></span>Articulos</h3>
						</a></li>
						<li><a href="<?php bloginfo('url'); ?>/yo">
							<h3><span class="lnr lnr-briefcase"></span>Portafolio</h3>
						</a></li>
						<li><a href="<?php bloginfo('url'); ?>/yo">
										<h3><span class="lnr lnr-star-half"></span>Yo</h3>
									</a></li>
						<!-- <li><a href="">
								<h3><span class="lnr lnr-laptop-phone"></span>Planes Web</h3>
							</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>