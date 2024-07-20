<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'security_theme_options' );

	function security_theme_options(){
		Container::make( 'theme_options', __( 'Theme Options' ) )
		         ->add_tab( __( 'Контакти' ), array(
			         Field::make( 'text', 'security_address'.security_lang_prefix(), __( 'Адреса' )  ),
			         Field::make( 'text', 'security_phone', __( 'Телефон' )  )
			              ->set_attribute('type', 'tel'),
			         Field::make( 'text', 'security_facebook_link', __( 'Facebook' )  )
			             ->set_attribute('type', 'url'),
			         Field::make( 'text', 'security_instagram_link', __( 'Instagram' )  )
				         ->set_attribute('type', 'url'),
			         Field::make( 'text', 'security_telegram_link', __( 'Telegram' )  )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'security_viber_link', __( 'Viber' )  )
			              ->set_attribute('type', 'url'),

		         ) );

	}