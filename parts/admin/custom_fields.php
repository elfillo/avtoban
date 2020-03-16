<?php
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'product_type' );
	//add_action( 'carbon_fields_register_fields', 'theme_setting' );

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
		Container::make( 'theme-options', 'Общий контент' )
			->set_page_parent( 'themes.php' )
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
							Field::make( 'image', 'review--title', 'Заголовок' ),
							Field::make( 'text', 'review--text', 'Текст отзыва' ),
							Field::make( 'rich_text', 'review--name', 'Имя' )->set_width( 50 ),
							Field::make( 'rich_text', 'review--position', 'Должность' )->set_width( 50 ),
						)
					) )
			)
			->add_tab( 'Банки', array(
				Field::make( 'media_gallery', 'bank-list', 'Галерея' ),
			) )
			->add_tab( 'Партнеры', array(
				Field::make( 'media_gallery', 'partner-list', 'Галерея' ),
			) );
	}
?>