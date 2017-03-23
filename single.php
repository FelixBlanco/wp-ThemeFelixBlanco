<?php get_header(); ?>
<!-- Contenido del articulo completo -->
<div class="container">
	<div class="row">
		<div class="col-md-8">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
	
				<?php 
					// Ruta de la imagen destacada (tamaño completo)
					global $post;
					$thumbID = get_post_thumbnail_id( $post->ID );
					$imgDestacada = wp_get_attachment_url( $thumbID );
				?>

				<!-- Meta para post -->
				<meta property="og:title" content="<?php the_title(); ?>"/>
				<meta property="og:description" content="<?php echo $imgDestacada; ?>"/>
				<meta property="og:description" content="<?php the_excerpt(); ?>"/>
				<meta property="og:url" content="<?php the_permalink(); ?>"/>
				
				<?php the_post_thumbnail(" medium_large",[ 'class' => 'img-responsive center-block img-thumbnail'] ); ?>

				<h2><?php the_title(); ?></h2>
				
				<div class="row paddin10">
					<div class="col-md-8">
						<time><span class="lnr lnr-calendar-full"></span> <?php the_time('F j, Y'); ?></time> || <span class="lnr lnr-tag"></span> <span><?php the_category( "," ); ?></span>
					</div>
					<div class="col-md-1">
						<!-- TWITTER -->
						<a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="FelixBlancoWeb">Twitter</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					<div class="col-md-1">
						<!-- FACEBOOK --> 
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a></div>
					</div>
				</div>
				<div class="articulo-single">
					
					<?php the_content(); ?>

					<!-- Anuncio_pequeño -->
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-8885363887400217"
					     data-ad-slot="4199231484"
					     data-ad-format="auto"></ins>

					<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

				</div>
			
			<?php endwhile; ?>

			<?php else : ?>
			  <h2 class="center">No se encontro nada</h2>
			  <p class="center"><?php _e("Lo sentimo, si quiere saber mas comunicarse a felixablancoe@gmail.com"); ?></p>
		<?php endif; ?>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar("slidebar_uno" ); ?>
		</div>
	</div>
<?php get_footer(); ?>