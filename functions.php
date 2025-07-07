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

?>