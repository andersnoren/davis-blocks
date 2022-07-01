<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'davis_blocks_setup' ) ) :
	function davis_blocks_setup() {

		load_theme_textdomain( 'tove', get_template_directory() . '/languages' );
		set_post_thumbnail_size( 620, 9999 );

	}
	add_action( 'after_setup_theme', 'davis_blocks_setup' );
endif;


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'davis_blocks_styles' ) ) :
	function davis_blocks_styles() {

		wp_register_style( 'davis-blocks-styles-shared', 		get_theme_file_uri( '/assets/css/shared.css' ) );
		wp_register_style( 'davis-blocks-styles-blocks', 		get_theme_file_uri( '/assets/css/blocks.css' ) );

		$dependencies = apply_filters( 'davis_blocks_style_dependencies', array( 'davis-blocks-styles-shared', 'davis-blocks-styles-blocks' ) );

		wp_enqueue_style( 'davis-blocks-styles', get_theme_file_uri( '/assets/css/front-end.css' ), $dependencies, wp_get_theme( 'Tove' )->get( 'Version' ) );

	}
	add_action( 'wp_enqueue_scripts', 'davis_blocks_styles' );
endif;


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE EDITOR STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'davis_blocks_editor_styles' ) ) :
	function davis_blocks_editor_styles() {

		add_editor_style( array( 
			'./assets/css/editor.css',
			'./assets/css/blocks.css',
			'./assets/css/shared.css',
		) );

	}
	add_action( 'admin_init', 'davis_blocks_editor_styles' );
endif;
