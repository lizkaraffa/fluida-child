<?php
/**
 * Enqueue scripts and styles.
 */
function fluida_child_scripts() {
	$parenthandle = 'parent-style';

	wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        time()
    );

	wp_enqueue_style( 'fluida-child-style', get_stylesheet_uri(),
		array( $parenthandle ),
		time() 
	);

	wp_enqueue_style( 'fluida-child-google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Montserrat:wght@300;400;700&family=Spartan:wght@400;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'fluida_child_scripts' );
