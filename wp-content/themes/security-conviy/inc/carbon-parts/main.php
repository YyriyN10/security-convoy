<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'security_main_page' );

	function security_main_page(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_main_screen_title'.security_lang_prefix(), __( 'Голоаний заголовок' )  ),
			         Field::make( 'text', 'security_main_screen_text'.security_lang_prefix(), __( 'Текст' )  ),
			         Field::make_image('security_main_screen_image'.security_lang_prefix(), 'Фонове зображення')
				         ->set_type('image')
				         ->set_value_type('url'),

		         ));

		Container::make( 'post_meta', __('Переваги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'complex', 'security_product_description_advantages_list'.security_lang_prefix(), __( 'Перелік переваг' ) )
			              ->add_fields( array(
			              	  Field::make_image('icon', 'Іконка переваги')
								->set_value_type('url'),
				              Field::make( 'text', 'description', __( 'Текст переваги' ) ),
			              ) ),

		         ));

		Container::make( 'post_meta', __('Типи послуги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
		         	 Field::make_text('security_types_service_block_title'.security_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('security_types_service_list'.security_lang_prefix(), 'Перелік послуг')
						->add_fields(array(
							Field::make_text('name', 'Назва'),
							Field::make_image('image', 'Зображення')
								->set_type('image'),
							Field::make_text('description', 'Короткий опис'),
							Field::make_complex('inner_list', 'Перелік того що входить')
								->add_fields(array(
									Field::make_text('text', 'Текст')
								))
						))


		         ));

		Container::make('post_meta', 'Призив до дії')
		         ->where( function ( $homeFields){
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         })

		         ->add_fields( array(
			         Field::make_text('security_call_to_action_block_title'.security_lang_prefix(), 'Заголовок блоку'),
			         Field::make_text('security_call_to_action_text'.security_lang_prefix(), 'Текст'),
		         ));

		Container::make('post_meta', 'Результативність')
		         ->where( function ( $homeFields){
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         })

		         ->add_fields( array(
			         Field::make_text('security_performance_block_title'.security_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('security_performance_list'.security_lang_prefix(), 'Перелік складових успіху')
						->add_fields(array(
							Field::make_image('image', 'Зображення')
								->set_type('image'),
							Field::make_rich_text('text', 'Текст опису')
						)),
		         ));

		Container::make('post_meta', 'Слогін')
		         ->where( function ( $homeFields){
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         })

		         ->add_fields( array(
			         Field::make_text('security_slogan_block_title'.security_lang_prefix(), 'Заголовок блоку'),
			         Field::make_text('security_slogan_text'.security_lang_prefix(), 'Текст'),
			         Field::make_complex('security_slogan_image_list'.security_lang_prefix(), 'Галірея зображень')
			            ->set_max(3)
			            ->add_fields(array(
			            	Field::make_image('image', 'Зображення')
				                ->set_type('image')
			            ))
		         ));


		Container::make( 'post_meta', __('Про нас') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_about_us_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'text', 'security_about_us_text'.security_lang_prefix(), __( 'Текст блоку' )  ),

			         Field::make( 'complex', 'security_about_us_list'.security_lang_prefix(), __( 'Перелік досягнень' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'text', __( 'Текст досягнення' ) ),
				              Field::make_select( 'select_type', 'Оберіть тип контенту')
								->set_options( array(
									'image' => 'Зображення',
									'text'  => 'Текст'
								)),
				              Field::make( 'image', 'image', __( 'Іконка' ) )
				                   ->set_type( 'image' )
				                   ->set_value_type( 'url' )
					              ->set_conditional_logic( array(
						              'relation' => 'AND', // Optional, defaults to "AND"
						              array(
							              'field' => 'select_type',
							              'value' => 'image', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
							              'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
						              )
					              ) ),
				              Field::make( 'text', 'sense', __( 'Значення досягнення' ) )
					              ->set_conditional_logic( array(
						              'relation' => 'AND', // Optional, defaults to "AND"
						              array(
							              'field' => 'select_type',
							              'value' => 'text', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
							              'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
						              )
					              ) ),
			              ) ),

			            Field::make_text('security_about_us_assertion_text'.security_lang_prefix(), 'Текс твердження'),
			            Field::make_image('security_about_us_assertion_image'.security_lang_prefix(), 'Зображення твердження')
			                ->set_value_type('url'),
		         ));


		Container::make( 'post_meta', __('Шлях клієнта') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_steps_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'complex', 'security_steps_list'.security_lang_prefix(), __( 'Перелік кроків' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'title', __( 'Назва кроку' ) ),
				              Field::make( 'text', 'description', __( 'Опис кроку' ) ),
				              Field::make( 'image', 'image', __( 'Іконка кроку' ) )
				                   ->set_type( 'image' )
				                   ->set_value_type( 'url' ),
			              ) )


		         ));

		Container::make( 'post_meta', __('Контактна форма') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_contact_form_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'text', 'security_contact_form_block_subtitle'.security_lang_prefix(), __( 'Підзаголовок блоку' )  ),


		         ));
	}