<?php 
/**
 * Enqueue scripts and styles.
 */
function adeptphotobooths_scripts() {
	
	wp_enqueue_style( 'adeptphotobooths-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'adeptphotobooths-style', 'rtl', 'replace' );
	wp_enqueue_script( 'adeptphotobooths-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), time(), 'all');
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), time(), true);
	/*--------- DD Enqueue Styles ---------*/
	global $post;
	$flex_modules = get_post_meta( get_the_ID(), 'page-builder', true );
	if ( ! empty( $flex_modules ) ) {
		array_map( function ($element) {
			$element = str_replace( "_", "-", $element );
			$file_abs_path = ABSPATH . 'wp-content/themes/adeptphotobooths/assets/css/' . $element . '.css';
			$file_path = get_template_directory_uri() . '/assets/css/' . $element . '.css';
			if ( file_exists( $file_abs_path ) ) {
				$file_id = str_replace( "_", "-", $element );
				wp_enqueue_style( $file_id, $file_path, array(), time(), "all" );
			}
		}, $flex_modules );
	}
    /* faqs */
	if(is_page_template( 'page-templates/faqs.php' ))
	{
		wp_enqueue_style('faq-section', get_template_directory_uri() . '/assets/css/faq-section.css', array(), time(), 'all');
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adeptphotobooths_scripts' );