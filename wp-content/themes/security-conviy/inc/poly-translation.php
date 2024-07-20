<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action('init', 'security_polylang_strings' );

	function security_polylang_strings(){
		if( ! function_exists( 'pll_register_string' ) ) {
			return;
		}

		//Form Content

		pll_register_string(
			'security_form_placeholder_name',
			'Ваше ім’я',
			'Переклажи форм',
			false
		);

		pll_register_string(
			'security_form_placeholder_phone',
			'Ваш номер телефону',
			'Переклажи форм',
			false
		);



		//Buttons

		pll_register_string(
			'security_btn_get_consultation_text',
			'Отримати консультацію',
			'Переклажи кнопок',
			false
		);

		pll_register_string(
			'security_btn_more_text',
			'Дізнатися більше',
			'Переклажи кнопок',
			false
		);

		pll_register_string(
			'security_btn_calculate_text_2',
			'Розрахувати вартість послуги',
			'Переклажи кнопок',
			false
		);

		pll_register_string(
			'security_btn_request',
			'Залишити заявку',
			'Переклажи кнопок',
			false
		);

		pll_register_string(
			'security_btn_home',
			'Повернутись на головну',
			'Переклажи кнопок',
			false
		);

		pll_register_string(
			'security_btn_home',
			'Отримати пропозицію',
			'Переклажи кнопок',
			false
		);



		//Text

		pll_register_string(
			'security_text_map',
			'Обслуговування по всій території України',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_client_count',
			'Задоволених клієнтів',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_clients_title',
			'Нам довіряють',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_contacts_text',
			'Контакти',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_social_text',
			'Соціальні мережі',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_footer_logo',
			'Охоронний холдінг — на варті вашої безпеки та спокою',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_copyright',
			'ОХОРОННИЙ ХОЛДІНГ. Всі права захищені',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_dev',
			'розроблено в',
			'Переклажи текстових елементів',
			false
		);

		pll_register_string(
			'security_text_404',
			'Сторінки не знайденно',
			'Переклажи текстових елементів',
			false
		);




	}

