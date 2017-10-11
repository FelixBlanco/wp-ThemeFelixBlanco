<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <title> Félix Blanco - Desarrollo & Mantenimiento Web</title>


	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/img/favicon.ico">

	 <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <!-- Meta datos para el SEO -->
    <meta name="description" content="Soy Félix Blanco, Desarrollador web y me encanta comprar mis conocimientos, asi contruiremos una mejor Internet">
	<meta name="keywords" content="Blog Felix Blanco, Laravel, VueJs, Consejos Programacion, css, consejos generales">
	<meta name="author" content="Felix Blanco">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body>
	
	<!-- Especial para Index -->
	<div class="container-fluid">
		<!-- Redes Sociales -->
		<div class="row">
			<div class="col-md-11 text-right">
				<div class="paddin10">
					<ul class="list-inline">
						<li><a target="_blank" href="https://github.com/FelixBlanco"><img src="<?php bloginfo('stylesheet_directory' );?>/img/RedesSocial/1446050680_github.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/in/felix-blanco-54488684/"><img src="<?php bloginfo('stylesheet_directory' );?>/img/RedesSocial/1446050682_linkedin.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a target="_blank" href="https://www.youtube.com/channel/UCfMpmLlmj4kN5YP7aeAtidw"><img src="<?php bloginfo('stylesheet_directory' );?>/img/RedesSocial/1446050683_youtube.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a target="_blank" href="https://www.facebook.com/FelixBlancoWeb"><img src="<?php bloginfo('stylesheet_directory' );?>/img/RedesSocial/1446050688_facebook.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a target="_blank" href="https://twitter.com/felixan9292"><img src="<?php bloginfo('stylesheet_directory' );?>/img/RedesSocial/1446050693_twitter.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<!-- Encabezado Principal -->
				<div id="titulo_index">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('stylesheet_directory') ?>/img/logoFB.png" class="img-responsive center-block" alt="Logo Oficial Felix Blanco" width="200">
						<h1 class="text-center">
							<span class="TipoLetra">F</span>élix <span class="TipoLetra">B</span>lanco
						</h1>
					</a>
				</div>
				<!-- Menu Index -->
				<div class="menu_index">
					<ul class="list-inline text-center">
						<li><a href="<?php bloginfo('url'); ?>">
							<h3><span class="lnr lnr-home"></span>Inicio</h3>
									</a></li>
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
	
	<div class="paddin10"></div>

	<!-- Post inicio -->
	<div class="container">
		<div class="row">
		<?php query_posts(' posts_per_page=4' );  if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
					<div class="col-md-6 articulo_index">
						
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(" medium_large",[ 'class' => 'img-responsive center-block img-thumbnail'] ); ?>
						</a>

						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>
						
						<div class="paddin10">
							<time><span class="lnr lnr-calendar-full"></span> <?php the_time('F j, Y'); ?></time> || <span class="lnr lnr-tag"></span> <span><?php the_category( "," ); ?></span>
						</div>

						<div class="pie_articulo">
							<a href=" <?php the_permalink(); ?>">
								<h4 class="text-right">Ver articulo completo</h4>
							</a>
						</div>
					</div>
				

			<?php endwhile; ?>
			</div>
		<?php else : ?>
		  <h2 class="center">No se encontro nada</h2>
		  <p class="center"><?php _e("Lo sentimo, si quiere saber mas comunicarse a felixablancoe@gmail.com"); ?></p>
		<?php endif; ?>
	</div>


<div class="container-fluid" style="background-color:  #141E66; color:white; padding-top: 20px; padding-bottom: 20px; ">
	<div class="form-group">
		<h2>Habilidades & Conocimientos</h2>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h3># Generales</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					HTML 98%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 90%;">
					Css 90%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 92%;">
					Javascript 92%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 95%;">
					Ajax 95%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					Json  98%
				</div>
			</div>			 			
		</div>
		<div class="col-md-3">
			<h3># Lenguajes</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 90%;">
					PHP 90%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 90%;">
					Python 90%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 90%;">
					Bash 90%
				</div>
			</div> 
		</div>
		<div class="col-md-3">
			<h3># Frameword Css</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 99%;">
					Bootstrap 99%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 99%;">
					Fondation 99%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 95%;">
					Bulma 95%
				</div>
			</div> 
		</div>
		<div class="col-md-3">
			<h3># Frameword & Libreria Js</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 95%;">
					Jquery 95%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 85%;">
					VueJs 85%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 85%;">
					Angular 85%
				</div>
			</div> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h3># Control de Versiones</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 85%;">
					Git 85%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 85%;">
					Github 85%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 85%;">
					Gitlab 85%
				</div>
			</div>		 			
		</div>
		<div class="col-md-3">
			<h3># Frameword Backend</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 90%;">
					Laravel 90%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 60%;">
					Django 60%
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<h3># Gestor de Base datos</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					Mysql 98%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					PostgreSql 98%
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<h3># CMS & E commerce</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					Wordpress 98%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					Woocommerce 98%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 98%;">
					Magneto 98%
				</div>
			</div>		 			
		</div>
	</div>
</div>

<div class="container-fluid" style="background-color:  #42B332; color: white;  padding-top: 15px;  padding-bottom: 15px;">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Para Contrataciones  <b>felixablancoe@gmail.com</b></h2>
		</div>
	</div>
</div>

<?php get_footer(); ?>