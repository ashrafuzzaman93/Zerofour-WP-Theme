<?php
	
	/* ----------------------------------------------------- */
	/* Theme initial setup */
	/* ----------------------------------------------------- */
	if ( !function_exists('zerofour_theme_setup') ) :
		function zerofour_theme_setup() {

			/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on twentyfifteen, use a find and replace
			 * to change 'twentyfifteen' to the name of your theme in all the template files
			 */
			load_theme_textdomain( 'zerofour' );
 
		    // Add default posts and comments RSS feed links to head.
		    add_theme_support( 'automatic-feed-links' );
		 
		    /*
		     * Let WordPress manage the document title.
		     * By adding theme support, we declare that this theme does not use a
		     * hard-coded  tag in the document head, and expect WordPress to
		     * provide it for us.
		     */
		    add_theme_support( 'title-tag' );


		    /*
		     * Enable support for Heaader image.
		     */

		    register_default_headers( array(
			    'default-image' => array(
			        'url'           => '%s/assets/images/header.jpg',
			        'thumbnail_url' => '%s/assets/images/header.jpg',
			        'description'   => __( 'Default Header Image', 'zerofour' )
			    ),
			) );
		    $zerofour_header_args = array(
		    	'default-image'	=> '%s/assets/images/header.jpg'
		    );
		    add_theme_support( 'custom-header', $zerofour_header_args );


		    /*
		     * Enable support for Post Thumbnails on posts and pages.
		     *
		     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		     */
		    add_theme_support( 'post-thumbnails' );
		    add_image_size( 'zerofour-post-thumbnail', 180, 167, true );

		    // Add image size for services post thumbnail
		    add_image_size( 'zerofour-services-thumbnail', 370, 220, true );

		    /*
		     * Switch default core markup for search form, comment form, and comments
		     * to output valid HTML5.
		     */
		    add_theme_support( 'html5', array(
		        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		    ) );

		    // Setup the WordPress core custom background feature.
		    add_theme_support( 'custom-background' );

		    // This theme uses wp_nav_menu() in one location.
		    register_nav_menu( 'primary_menu', __( 'Primary Menu', 'zerofour' ) );

		    /*
		     * This theme styles the visual editor to resemble the theme style,
		     * specifically font, colors, icons, and column width.
		     */
		    add_editor_style( get_theme_file_uri( '/assets/css/editor.css' ) );

		    if ( ! isset( $content_width ) ) $content_width = 900;

		}
	endif;
	add_action( 'after_setup_theme', 'zerofour_theme_setup' );


	/* ----------------------------------------------------- */
	/* Register sidebars */
	/* ----------------------------------------------------- */
	function zerofour_register_sidebar() {

		/* Register Sidebar for default sidebar */
		$zerofour_sidebar_args = array(
			'id'			=> 'zerofour-sidebar',
			'name'			=> __( 'Default Sidebar', 'zerofour' ),
			'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>',
			'before_title'	=> '<header class="major"><h2>',
			'after_title'	=> '</header>'
		);

		register_sidebar( $zerofour_sidebar_args );

		/* Register Sidebar for footer widget area one */
		$zerofour_footer_sidebar_args1 = array(
			'id'			=> 'zerofour-footer-sidebar-1',
			'name'			=> __( 'Footer Sidebar One', 'zerofour' ),
			'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>'
		);
		register_sidebar( $zerofour_footer_sidebar_args1 );

		/* Register Sidebar for footer widget area two */
		$zerofour_footer_sidebar_args2 = array(
			'id'			=> 'zerofour-footer-sidebar-2',
			'name'			=> __( 'Footer Sidebar Two', 'zerofour' ),
			'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>'
		);
		register_sidebar( $zerofour_footer_sidebar_args2 );

		/* Register Sidebar for footer widget area threee */
		$zerofour_footer_sidebar_args3 = array(
			'id'			=> 'zerofour-footer-sidebar-3',
			'name'			=> __( 'Footer Sidebar Three', 'zerofour' ),
			'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>'
		);
		register_sidebar( $zerofour_footer_sidebar_args3 );

		/* Register Sidebar for footer text area */
		$zerofour_footer_sidebar_args3 = array(
			'id'			=> 'zerofour-footer-text',
			'name'			=> __( 'Footer Text', 'zerofour' ),
			'before_widget'	=> ' ',
			'after_widget'	=> ' '
		);
		register_sidebar( $zerofour_footer_sidebar_args3 );

	}
	add_action( 'widgets_init', 'zerofour_register_sidebar' );



	/* ----------------------------------------------------- */
	/* Enqueue theme assets */
	/* ----------------------------------------------------- */
	function zerofour_theme_assets() {

		$zerofour_opt = wp_get_theme();
    	$zerofour_ver = $zerofour_opt->get( 'Version' );

		/* ADDING CSS */
		wp_enqueue_style( 'zerofour-open-sans-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,800', null, ''  );
		wp_enqueue_style( 'zerofour-font-awesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ), null, '4.7.0'  );
		wp_enqueue_style( 'zerofour-main-css', get_theme_file_uri( '/assets/css/main.css' ), null, $zerofour_ver  );
		wp_enqueue_style( 'zerofour-theme-css', get_stylesheet_uri(), null, $zerofour_ver );

		/* ADDING SCRIPTS */
		wp_enqueue_script( 'zerofour-dropotron-min-js', get_theme_file_uri( '/assets/js/jquery.dropotron.min.js' ), array('jquery'), null, true  );
		wp_enqueue_script( 'zerofour-browser-min-js', get_theme_file_uri( '/assets/js/browser.min.js' ), array('jquery'), null, true  );
		wp_enqueue_script( 'zerofour-breakpoints-min-js', get_theme_file_uri( '/assets/js/breakpoints.min.js' ), array('jquery'), null, true  );
		wp_enqueue_script( 'zerofour-util-js', get_theme_file_uri( '/assets/js/util.js' ), array('jquery'), null, true  );
		wp_enqueue_script( 'zerofour-main-js', get_theme_file_uri( '/assets/js/main.js' ), array('jquery'), $zerofour_ver, true  );

		if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
	        // Load comment-reply.js (into footer)
	        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
	    }

	}
	add_action( 'wp_enqueue_scripts', 'zerofour_theme_assets' );


	/* ----------------------------------------------------- */
	/* Modify the_excerpt() function */
	/* ----------------------------------------------------- */
	function zerofour_excerpt_length( $length ) {
		return 30;
	}
	add_filter( 'excerpt_length', 'zerofour_excerpt_length' );

	function zerofour_excerpt_more( $more ) {
		return '...';
	}
	add_filter( 'excerpt_more', 'zerofour_excerpt_more' );



	/* ----------------------------------------------------- */
	/* Add custom style in header */
	/* ----------------------------------------------------- */
	function zerofour_custom_style() {
		?>
			<style>
				<?php 
					if ( current_theme_supports('custom-header') ) {
						echo !display_header_text() ? '#header h1 {display: none;}': ''; 
					}
				?>
				#header-wrapper { 
					background: url("<?php echo esc_url( get_theme_file_uri('/assets/images/bg01.png') ); ?>"), url("<?php echo esc_url( header_image() ); ?>");
				}
			</style>
		<?php
	}
	add_action( 'wp_head', 'zerofour_custom_style' );


	/* ----------------------------------------------------- */
	/* INCLUDE REQUIRED FILES */
	/* ----------------------------------------------------- */
	require_once( get_theme_file_path( '/inc/tgm.php' ) );
	require_once( get_theme_file_path( '/inc/acf-options.php' ) );