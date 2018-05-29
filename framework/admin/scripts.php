<?php
/**
 * Enqueue scripts and styles.
 */
function infobiz_scripts() {
	/*---------------------------------------- */
	/* CSS
	/*---------------------------------------- */
	wp_enqueue_style( 
		'infobiz-skin', 
		IB_PATH_CSS . '/style.css', 
		array(), rand(), 'all' 
	);

	wp_enqueue_style( 
		'infobiz-responsive', 
		IB_PATH_CSS . '/responsive.css', 
		array(), rand(), 'all' 
	);

	wp_enqueue_style( 'infobiz-style', get_stylesheet_uri() );

	/*-------------------------------------*/
	/* JS File
	/*-------------------------------------*/

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 
		'bootstrap', 
		IB_PATH_JS . '/bootstrap/bootstrap.min.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'bootstrap-select', 
		IB_PATH_JS . '/bootstrap-select/dist/js/bootstrap-select.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'Camera-master', 
		IB_PATH_JS . '/Camera-master/scripts/jquery.mobile.customized.min.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'easing', 
		IB_PATH_JS . '/Camera-master/scripts/jquery.easing.1.3.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'camera-script', 
		IB_PATH_JS. '/Camera-master/scripts/camera.min.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'bootstrap-mega-menu', 
		IB_PATH_JS . '/bootstrap-mega-menu/js/menu.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'WOW-master', 
		IB_PATH_JS . '/WOW-master/dist/wow.min.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'owl-carousel', 
		IB_PATH_JS . '/owl-carousel/owl.carousel.min.js', 
		array(), rand(), true 
	);

	wp_enqueue_script( 
		'theme', 
		get_template_directory_uri(). '/js/theme.js', 
		array(), rand(), true 
	);


	wp_enqueue_script( 
		'infobiz-navigation', 
		get_template_directory_uri() . '/js/navigation.js', 
		array(), '20151215', true 
	);

	wp_enqueue_script( 
		'infobiz-skip-link-focus-fix', 
		get_template_directory_uri() . '/js/skip-link-focus-fix.js', 
		array(), '20151215', true 
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'infobiz_scripts' );

if(! function_exists('infobiz_ie_scripts')){
	function infobiz_ie_scripts(){
		?>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

		<?php
	}
	add_action('wp_head', 'infobiz_ie_scripts');
}
