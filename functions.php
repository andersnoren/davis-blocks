<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'davis_blocks_setup' ) ) :
	function davis_blocks_setup() {

		// Make theme localizable.
		load_theme_textdomain( 'davis-blocks', get_template_directory() . '/languages' );

		// Set the post thumbnail size.
		set_post_thumbnail_size( 620, 9999 );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add editor styles.
		add_editor_style( 'style.css' );

	}
	add_action( 'after_setup_theme', 'davis_blocks_setup' );
endif;


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'davis_blocks_styles' ) ) :
	function davis_blocks_styles() {

		wp_enqueue_style( 'davis-blocks-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'davis-blocks' )->get( 'Version' ) );

	}
	add_action( 'wp_enqueue_scripts', 'davis_blocks_styles' );
endif;


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'davis_blocks_register_block_styles' ) ) :
	function davis_blocks_register_block_styles() {

		// Separator: Diamonds
		register_block_style( 'core/separator', array(
			'name'  	=> 'davis-separator',
			'label' 	=> esc_html__( 'Diamonds', 'davis-blocks' ),
		) );
		
	}
	add_action( 'init', 'davis_blocks_register_block_styles' );
endif;
