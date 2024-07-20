<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Register a clients post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since security 1.0
	 */

	function security_clients_post_type() {

		$labels = array(
			'name'               => _x( 'Наші клієнти', 'post type general name', 'security' ),
			'singular_name'      => _x( 'Наші клієнти', 'post type singular name', 'security' ),
			'menu_name'          => _x( 'Наші клієнти', 'admin menu', 'security' ),
			'name_admin_bar'     => _x( 'Наші клієнти', 'add new on admin bar', 'security' ),
			'add_new'            => _x( 'Додати нового клієнта', 'actions', 'security' ),
			'add_new_item'       => __( 'Додати нового клієнта', 'security' ),
			'new_item'           => __( 'Новий клієнт', 'security' ),
			'edit_item'          => __( 'Редагувати клієнта', 'security' ),
			'view_item'          => __( 'Переглянути клієнта', 'security' ),
			'all_items'          => __( 'Всі клієнти', 'security' ),
			'search_items'       => __( 'Шукати клієнта', 'security' ),
			'parent_item_colon'  => __( 'Батько клієнта:', 'security' ),
			'not_found'          => __( 'Кліента не знайдено.', 'security' ),
			'not_found_in_trash' => __( 'Кліента у не корзині знайдено.', 'security' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'security' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'clients' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-businessman',
			'supports'           => array( 'title', 'thumbnail', 'editor',)
		);

		register_post_type( 'clients', $args );
	}

	add_action( 'init', 'security_clients_post_type' );