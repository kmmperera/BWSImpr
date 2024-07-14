
<?php 

													//enqueue styles 

function budd_enqueue_scripts() {	


	wp_enqueue_style( 'commonstyles', get_stylesheet_directory_uri() . '/css/sass/common.css', '', '1.0.0', 'all' );

	wp_enqueue_style( 'swiperjscss', 'https://unpkg.com/swiper/swiper-bundle.min.css', '', '1.0.0', 'all' );

	wp_enqueue_style( 'bootsrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', '', '1.0.0', 'all' );

	wp_enqueue_style( 'googlefontone', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', '', '1.0.0', 'all' );

	wp_enqueue_style( 'googlefonttwo', 'https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', '', '1.0.0', 'all' );



	wp_register_script('swiperjs','https://unpkg.com/swiper/swiper-bundle.min.js',array(),'1.0.0',true);
	wp_enqueue_script('swiperjs');

	wp_register_script('mainjs',get_template_directory_uri().'/js/main.js',array('jquery','swiperjs'),'1.0.0',true);
	wp_enqueue_script('mainjs');


}

add_action('wp_enqueue_scripts', 'budd_enqueue_scripts');




?>