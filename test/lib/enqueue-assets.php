<?php

	/*
	 * Après avoir cloner le projet:
	 * changer le mot test par le nom du projet
	 * en terme d'organiser, on renomme les handle par le nom du projet pour mieux s'y retrouver
	 * ex: test_assets -> myProject_assets
	 */

	function test_assets() {
		wp_enqueue_style( 'test-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0' ,  'all' );

		wp_enqueue_script( 'test-scripts', get_template_directory_uri() . '/dist/assets/js/main.js', array(), '1.0.1' ,   true );

		wp_enqueue_script( 'test-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array() ,  true );
	}

	add_action( 'wp_enqueue_scripts', 'test_assets' );

	function test_admin_assets() {
		wp_enqueue_script( 'test-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0' , true );
	}

	add_action( 'admin_enqueue_scripts', 'test_admin_assets' );
