<?php
	
	
	// Добавляем возможность использовать миниатюры записей
	add_theme_support('post-thumbnails');
	
	
	// Изменяем количество символов в превью the_excerpt()
	add_filter( 'excerpt_length', function(){
		return 18;
	} );
	
	
	// Меняем окончание превью the_excerpt()
	add_filter('excerpt_more', function($more) {
		return '...';
	});
	
	
	
	
	// REGISTER POST TYPE
	add_action( 'init', 'register_post_types' );
	function register_post_types() {
		
		// Add thumbnails
		add_theme_support('post-thumbnails');
		
		// Тип записи - наши работы (портфолио)
		register_post_type( 'uslugi', [
			'label'  => null,
			'labels' => [
				'name'               => 'Услуги', // основное название для типа записи
				'singular_name'      => 'Услуга', // название для одной записи этого типа
				'add_new'            => 'Добавить услугу', // для добавления новой записи
				'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
				'new_item'           => 'Новая услуга', // текст новой записи
				'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
				'search_items'       => 'Искать услугу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Услуги', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','trackbacks','comments', 'thumbnail', 'custom-fields','revisions','page-attributes','post-formats', 'excerpt'
			'taxonomies'          => [],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}
	// END REGISTER POST TYPE
	
	
	
	
	/*** ОБНОВЛЕНИЕ THEME ***/
	add_filter('pre_set_site_transient_update_themes', 'check_custom_theme_updates');

	function check_custom_theme_updates($transient) {
		// Проверка, что это Multisite и пользователь — супер-админ
		if (!is_multisite() || !is_super_admin()) {
			return $transient;
		}
		
		$theme_slug = 'furniture'; // Имя папки темы
		$current_version = wp_get_theme()->get('Version');
		$update_server = 'https://site100.ru/wp-themes/site100/site100-updates.json';

		// Запрос к вашему серверу
		$response = wp_remote_get($update_server);

		if (!is_wp_error($response)) {
			$update_data = json_decode(wp_remote_retrieve_body($response));

			if (
				$update_data &&
				version_compare($current_version, $update_data->version, '<') &&
				!empty($update_data->download_url)
			) {
				$transient->response[$theme_slug] = array(
					'theme'       => $theme_slug,
					'new_version' => $update_data->version,
					'package'     => $update_data->download_url,
					'url'         => 'https://site100.ru/wp-themes/site100/changelog' // Опционально
				);
			}
		}
		
		return $transient;
	}
	/*** END ОБНОВЛЕНИЕ THEME ***/
	
	require_once get_template_directory() . '/inc/transliteration.php';


	// Запуск сессий для WordPress
	function start_session() {
			if (!session_id()) {
					session_start();
			}
	}
	add_action('init', 'start_session', 1);

?>