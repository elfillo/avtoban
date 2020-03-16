<?php
//styles
function enqueue_styles(){
	wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css', null, false);
	wp_enqueue_style('reset', get_template_directory_uri() .'/css/reset.css', null, false);
	wp_enqueue_style('swiper', get_template_directory_uri() .'/css/swiper.css', null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
//scripts
function enqueue_script(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery-3.2.1.min.js', null, true);
	wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('jquery'), null, true);
	wp_enqueue_script('map', get_template_directory_uri() .'/js/map.js', array('jquery'), null, true);
	wp_enqueue_script('swiperLib', get_template_directory_uri() .'/js/swiper.min.js', array('jquery'), null, true);
	wp_enqueue_script('swiper', get_template_directory_uri() .'/js/swiper-main.js', array('jquery', 'swiperLib'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_script');
//header_menu
register_nav_menu('header', 'Меню хедер');
register_nav_menu('mobile', 'Мобильное меню');
register_nav_menu('shop', 'Магазин');
register_nav_menu('footer', 'Меню футер');

//add thumbnails
add_theme_support( 'post-thumbnails' );
//add support excerpt
add_post_type_support( 'page', 'excerpt' );

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function zulza_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Сайдбар', 'avtoban' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Выводит виджеты в сайдбар.', 'avtoban' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'zulza_widgets_init' );

require_once ('parts/admin/helpers.php');
require_once ('parts/admin/custom_fields.php');
require_once ('parts/admin/shortcodes/recently_viewed_products.php');
require_once ('parts/admin/woocommerce.php');
require_once ('parts/admin/hooks.php');
require_once ('parts/admin/woo_hooks.php');
?>