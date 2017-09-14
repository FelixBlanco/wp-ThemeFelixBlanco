<?php  /* Template Name:  Articulos */  get_header(); ?>

<div class="container">
	<div class="row">	
		<?php  query_posts(' posts_per_page=10' ); if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post();?>
		    	<a href="<?php the_permalink(); ?>" style="color: black; text-decoration: none;">
				<div class="col-md-6">
					<?php the_post_thumbnail('',['class'=>'img-responsive center-block img-thumbnail'] );?>
					<?php the_title('<h2>','</h2>'); ?>
					<div class="paddin10">
						<time><span class="lnr lnr-calendar-full"></span> <?php the_time('F j, Y'); ?></time> || <span class="lnr lnr-tag"></span> <span><?php the_category( "," ); ?></span>
					</div>
				</div>
			</a>
			<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>
	</div>
</div>
<?php get_footer() ?>