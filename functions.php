<?php
/**
 * Theme Path(s) Contant(s)
 * 
 * @version 1.0.0
 */
define( 'IB_DIR' , get_template_directory() . '/' );
define( 'IB_PATH_CSS' , get_template_directory_uri() . '/css' );
define( 'IB_PATH_JS' , get_template_directory_uri() . '/vendor' );

/**
 * Infobiz Theme Setup
 */
require_once( IB_DIR . 'framework/functions/infobiz-theme-init.php' );

/**
 * Infobiz Theme Widgets
 */
require_once( IB_DIR . 'framework/functions/widgets/widgets.php' );

/**
 * Infobiz Theme Scripts
 */
require_once( IB_DIR . 'framework/admin/scripts.php' );


/**
 * Implement the Custom Header feature.
 */
require IB_DIR . 'inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require IB_DIR . 'inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require IB_DIR . 'inc/template-functions.php';

/**
 * Customizer additions.
 */
require IB_DIR . 'inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require IB_DIR . 'inc/jetpack.php';
}

/**
 * Load Code star Framework.
 */

 require_once(IB_DIR . 'libs/csframework/cs-framework.php');

/**
 * Codestar Framework Theme Option.
 */

 require_once(IB_DIR . 'framework/functions/infobiz_theme_options.php');


/**
 * Inline Css
 */

 require_once(IB_DIR . 'framework/admin/output-css.php');

 /**
 * Custom Post
 */

 require_once(IB_DIR . 'framework/functions/infobiz_custom_post.php');

 
 

