
<?php 

// theme support and menu

add_theme_support('post-thumbnails');

register_nav_menus(

    array(

        'lang-switer' => 'Language switer menu',


    )

);



													//enqueue styles 

function budd_enqueue_scripts() {	


	wp_enqueue_style( 'commonstyles', get_stylesheet_directory_uri() . '/css/sass/common.css', '', '1.0.6', 'all' );

	wp_enqueue_style( 'swiperjscss', 'https://unpkg.com/swiper/swiper-bundle.min.css', '', '1.0.0', 'all' );

	wp_enqueue_style( 'bootsrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', '', '1.0.0', 'all' );

	wp_enqueue_style( 'googlefontone', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', '', '1.0.0', 'all' );

	wp_enqueue_style( 'googlefonttwo', 'https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', '', '1.0.0', 'all' );



	wp_register_script('swiperjs','https://unpkg.com/swiper/swiper-bundle.min.js',array(),'1.0.0',true);
	wp_enqueue_script('swiperjs');

	wp_register_script('mainjs',get_template_directory_uri().'/js/main.js',array('jquery','swiperjs'),'1.0.2',true);
	wp_enqueue_script('mainjs');

	wp_localize_script( 'mainjs', 'ajax_object', [ 'ajax_url' => admin_url('admin-ajax.php') ] );



}

add_action('wp_enqueue_scripts', 'budd_enqueue_scripts');


						// wp mail set up

function my_phpmailer_smtp( $phpmailer ) {
	$phpmailer->isSMTP();     
	$phpmailer->Host = SMTP_server;  
	$phpmailer->SMTPAuth = SMTP_AUTH;
	$phpmailer->Port = SMTP_PORT;
	$phpmailer->Username = SMTP_username;
	$phpmailer->Password = SMTP_password;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->From = SMTP_FROM;
	$phpmailer->FromName = SMTP_NAME;
}

add_action( 'phpmailer_init', 'my_phpmailer_smtp' );



									// jobs post type 

function bms_process_post_type() {

	$args = array(


	'labels' => array(

				'name' => 'Quatations',
				'singular_name' => 'Quatation',
	),
	'hierarchical' => true,
	'public' => true,
	'has_archive' => true,
	
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title', 'editor', 'thumbnail','custom-fields', 'excerpt', 'comments'),

	);


	register_post_type('quatations', $args);


}
add_action('init', 'bms_process_post_type',0);



								// user input forms submission to custom post type


add_action( 'wp_ajax_bms_quations_add', 'bmsquationfunc' );
add_action( 'wp_ajax_nopriv_bms_quations_add', 'bmsquationfunc' );

function bmsquationfunc(){

		
			$name = $_POST['name'];
			$reason = $_POST['message'];
			$address = $_POST['email'];
			$telnum = $_POST['telnum'];
			
			
			$final_content="Full Name: ".$name." \n";
			$final_content .="Email address: ".$address."\n";
			$final_content .="Telephone Number: ".$telnum."\n";
			$final_content .="Reason: ".$reason."\n";

		
			$post = array(
				'post_title'    => $name,
				'post_content' =>  $final_content,
				'post_status'   => 'draft',   
				'post_type'     => 'quatations'
			);

			$post_id = wp_insert_post($post);

		

		//send mail

		   $from = 'contact@bmsimpresa.com';
		   $to = "kmmperera@gmail.com";
		   $message=$final_content;
		   $subject="Testing mails from Monza";
			$headers = array('Content-Type: text/html; charset=UTF-8');
 
		  if(  wp_mail($to, $subject, $message, $headers)){

			echo 'You have submitted details successfully';

		  }
		  else{
			echo 'Failed.Something went wrong.Try again after a while';
		  }


			
			wp_die();


}











?>