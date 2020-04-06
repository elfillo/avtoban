<?php
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'product_type' );
	add_action( 'carbon_fields_register_fields', 'theme_setting' );
	add_action( 'carbon_fields_register_fields', 'sales' );
	add_action( 'carbon_fields_register_fields', 'contactPage' );

	function product_type(){
		Container::make( 'post_meta', 'ОСНОВНЫЕ ОСОБЕННОСТИ И ОБОРУДОВАНИЕ КОМПЛЕКТАЦИИ' )
			->show_on_post_type( 'product' )
			->add_fields( array(
				Field::make( 'complex', 'configuration_features', 'Особенности' )
					->add_fields( 'configuration_features-list', 'Особенности', array(
						Field::make( 'image', 'configuration_features--img', 'Иконка' )->set_value_type( 'url' ),
						Field::make( 'text', 'configuration_features--title', 'Заголовок' ),
						Field::make( 'text', 'configuration_features--desc', 'Описание' ),
					) )
			));
	}

	function theme_setting(){
		Container::make( 'theme_options', 'Общий контент' )
			//->set_page_parent( 'themes.php' )
			->set_page_file( 'theme-options' )
			->add_tab( 'Приемущества', array(
				Field::make( 'complex', 'benefits', 'Приемущества' )
					->add_fields( 'benefits-list', 'Особенности', array(
							Field::make( 'image', 'benefits--img', 'Иконка' )->set_value_type( 'url' )->set_width( 33 ),
							Field::make( 'text', 'benefits--title', 'Заголовок' )->set_width( 67 ),
							Field::make( 'rich_text', 'benefits--desc', 'Описание' ),
						)
					) )
			)
			->add_tab( 'Отзывы', array(
				Field::make( 'complex', 'review', 'Отзывы' )
					->add_fields( 'review-list', 'Отзывы', array(
							Field::make( 'text', 'review--title', 'Заголовок' ),
							Field::make( 'rich_text', 'review--text', 'Текст отзыва' ),
							Field::make( 'text', 'review--name', 'Имя' )->set_width( 50 ),
							Field::make( 'text', 'review--position', 'Должность' )->set_width( 50 ),
						)
					) )
			)
			->add_tab( 'Банки', array(
				Field::make( 'media_gallery', 'bank-list', 'Галерея' ),
			) )
			->add_tab( 'Партнеры', array(
				Field::make( 'media_gallery', 'partner-list', 'Галерея' ),
			) )
			->add_tab( 'Другие организации', array(
					Field::make( 'complex', 'other_organizations', 'Организации' )
						->add_fields( 'other_organizations-list', 'Организации', array(
								Field::make( 'image', 'organization--img', 'Лого' )->set_value_type( 'url' )->set_width( 33 ),
								Field::make( 'text', 'organization--title', 'Название' )->set_width( 67 ),
								Field::make( 'rich_text', 'organization--desc', 'Короткое описание' ),
								Field::make( 'text', 'organization--link', 'Ссылка' ),
							)
						) )
			)
			->add_tab( 'Услуги', array(
					Field::make( 'complex', 'services', 'Услуги' )
						->add_fields( 'services-list', 'Организации', array(
								Field::make( 'text', 'services--title', 'Название' ),
								Field::make( 'rich_text', 'services--desc', 'Короткое описание' ),
							)
						) )
			)
		;
	}

	function sales(){
		$id = get_page_data('sale')->ID;
		Container::make( 'post_meta', 'Акции' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'complex', 'sales', 'Список акций' )
					->add_fields( 'sales-list', 'Акции', array(
						Field::make( 'image', 'sale--img', 'Банер' )->set_value_type( 'url' ),
						Field::make( 'text', 'sale--title', 'Заголовок' ),
						Field::make( 'rich_text', 'sale--desc', 'Описание' ),
					) )
			));
	}

	function contactPage(){
		$id = get_page_data('contact')->ID;
		Container::make( 'post_meta', 'Адреса' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'complex', 'contacts', 'Список офисов' )
					->add_fields( 'contact-list', 'Офисы', array(
						Field::make( 'text', 'contact--title', 'Заголовок' ),
						Field::make( 'rich_text', 'contact--desc', 'Описание' ),
					) )
			));
	}
?>