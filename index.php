<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Félix Blanco - Desarrollo & Mantenimiento Web</title>
	
	 <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/img/logo-ico32x32.ico" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta datos para el SEO -->
    <meta name="description" content="Felix Blanco, Desarrollo & Mantenimiento Web, Planes web, Blog, programacion y diseños de aplicaciones.">
	<meta name="keywords" content="Blog,CSS,HTML,JavaScript,Felix Blanco, Blog Felix Blanco,laravel,php,bootstrap, Historia Felix Blanco">
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
						<li><a href=""><img src="<?php bloginfo('stylesheet_directory') ?>/img/RedesSocial/1446050680_github.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a href=""><img src="<?php bloginfo('stylesheet_directory') ?>/img/RedesSocial/1446050682_linkedin.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a href=""><img src="<?php bloginfo('stylesheet_directory') ?>/img/RedesSocial/1446050683_youtube.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a href=""><img src="<?php bloginfo('stylesheet_directory') ?>/img/RedesSocial/1446050688_facebook.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
						<li><a href=""><img src="<?php bloginfo('stylesheet_directory') ?>/img/RedesSocial/1446050693_twitter.png" class="img-responsive center-block" alt="Redes Sociales de Felix Blanco" width="45"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<!-- Encabezado Principal -->
				<div id="titulo_index">
					<a href="">
						<img src="<?php bloginfo('stylesheet_directory') ?>/img/logoFB.png" class="img-responsive center-block" alt="Logo Oficial Felix Blanco" width="200">
						<h1 class="text-center">
							<span class="TipoLetra">F</span>élix <span class="TipoLetra">B</span>lanco
						</h1>
					</a>
				</div>
				<!-- Menu Index -->
				<div class="menu_index">
					<ul class="list-inline text-center">
						<li><a href="">
								<h3>Inicio</h3>
							</a></li>
						<li><a href="">
								<h3>Portafolio</h3>
							</a></li>
						<li><a href="">
								<h3>Yo</h3>
							</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="paddin10"></div>

	<!-- Post inicio -->
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2 articulo_index">
						
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(" medium_large",[ 'class' => 'img-responsive center-block img-thumbnail'] ); ?>
						</a>

						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>
						
						<div class="paddin10">
							<time><span class="lnr lnr-calendar-full"></span> <?php the_time('F j, Y'); ?></time> || <span class="lnr lnr-tag"></span> <span><?php the_category( "," ); ?></span>
						</div>
						
						<a href="<?php the_permalink(); ?>">
							<p class="text-justify">
								<?php the_excerpt(); ?>
							</p>
						</a>

						<div class="pie_articulo">
							<a href=" <?php the_permalink(); ?>">
								<h4 class="text-right">Ver articulo completo</h4>
							</a>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		<?php else : ?>
		  <h2 class="center">No se encontro nada</h2>
		  <p class="center"><?php _e("Lo sentimo, si quiere saber mas comunicarse a felixablancoe@gmail.com"); ?></p>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>