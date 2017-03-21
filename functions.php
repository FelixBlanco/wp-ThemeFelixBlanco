<?php

add_theme_support("post-thumbnails");

function slidebar_uno(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( 'primer slidebar'),
			'id'            => 'slidebar_uno',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<div class="entradas-reciente">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3><strong> <span class="lnr lnr-list"></span> ',
			'after_title'   => '</strong></h3> <hr>'
		);
		register_sidebar( $args );	
}

add_action("widgets_init","slidebar_uno");