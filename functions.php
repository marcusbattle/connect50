<?php

class Connect50 {

	protected static $single_instance = null;

	static function init() {

		if ( self::$single_instance === null ) {
			self::$single_instance = new self();
		} 

		return self::$single_instance;

	}

	public function __construct() { }

	public function hooks() { 
	
		add_action( 'wp_enqueue_scripts', array( $this, 'load_styles_and_scripts' ) );

	}

	public function load_styles_and_scripts() { 

		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
		wp_enqueue_style( 'connect50', get_template_directory_uri() . '/css/landing.css' );

		wp_enqueue_script( 'bootstrap', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array('jquery'), '1.0.0', true );
		
	}

}

$Connect50 = Connect50::init();
$Connect50->hooks();
