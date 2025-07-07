<?php
/*
 * functions.php
 */

// Добавляем возможность использовать миниатюры записей
add_theme_support('post-thumbnails');

// Регистрируем меню
add_theme_support('menus');

function register_theme_menus()
{
	register_nav_menus(array(
		'footer-menu' => 'Меню в футере',
		'main-menu' => 'Главное меню'
	));
}
add_action('init', 'register_theme_menus');

// Добавляем классы к пунктам меню
function add_menu_link_class($atts, $item, $args)
{
	if (isset($args->link_class)) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_list_item_class($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


// Изменяем количество символов в превью the_excerpt()
add_filter('excerpt_length', function () {
	return 18;
});


// Меняем окончание превью the_excerpt()
add_filter('excerpt_more', function ($more) {
	return '...';
});


/*** ОБНОВЛЕНИЕ THEME ***/
add_filter('pre_set_site_transient_update_themes', 'check_custom_theme_updates');

function check_custom_theme_updates($transient)
{
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
				'theme' => $theme_slug,
				'new_version' => $update_data->version,
				'package' => $update_data->download_url,
				'url' => 'https://site100.ru/wp-themes/site100/changelog' // Опционально
			);
		}
	}

	return $transient;
}
/*** END ОБНОВЛЕНИЕ THEME ***/


/*** МЕТА-ТЕГИ ДЛЯ КАЖДОЙ СТРАНИЦЫ ***/

// Добавляем метабоксы для страниц и записей
add_action('add_meta_boxes', 'add_seo_meta_boxes');

function add_seo_meta_boxes()
{
	add_meta_box(
		'seo_meta_box',
		'SEO настройки',
		'seo_meta_box_callback',
		'page',
		'normal',
		'high'
	);

	add_meta_box(
		'seo_meta_box',
		'SEO настройки',
		'seo_meta_box_callback',
		'post',
		'normal',
		'high'
	);
}

// Отображение полей в метабоксе
function seo_meta_box_callback($post)
{
	wp_nonce_field('seo_meta_box_nonce', 'seo_meta_box_nonce');

	// Получаем сохраненные значения
	$seo_title = get_post_meta($post->ID, '_seo_title', true);
	$seo_description = get_post_meta($post->ID, '_seo_description', true);
	$seo_keywords = get_post_meta($post->ID, '_seo_keywords', true);
	$og_title = get_post_meta($post->ID, '_og_title', true);
	$og_description = get_post_meta($post->ID, '_og_description', true);
	$og_image = get_post_meta($post->ID, '_og_image', true);

	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="seo_title">Заголовок страницы (Title)</label>
			</th>
			<td>
				<input type="text" id="seo_title" name="seo_title" value="<?php echo esc_attr($seo_title); ?>" size="70" />
				<p class="description">Заголовок, который отображается в браузере и поисковых системах</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="seo_description">Описание (Meta Description)</label>
			</th>
			<td>
				<textarea id="seo_description" name="seo_description" rows="3"
					cols="70"><?php echo esc_textarea($seo_description); ?></textarea>
				<p class="description">Описание страницы для поисковых систем (до 160 символов)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="seo_keywords">Ключевые слова</label>
			</th>
			<td>
				<textarea id="seo_keywords" name="seo_keywords" rows="2"
					cols="70"><?php echo esc_textarea($seo_keywords); ?></textarea>
				<p class="description">Ключевые слова через запятую</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="og_title">Open Graph заголовок</label>
			</th>
			<td>
				<input type="text" id="og_title" name="og_title" value="<?php echo esc_attr($og_title); ?>" size="70" />
				<p class="description">Заголовок для социальных сетей</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="og_description">Open Graph описание</label>
			</th>
			<td>
				<textarea id="og_description" name="og_description" rows="3"
					cols="70"><?php echo esc_textarea($og_description); ?></textarea>
				<p class="description">Описание для социальных сетей</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="og_image">Open Graph изображение</label>
			</th>
			<td>
				<input type="text" id="og_image" name="og_image" value="<?php echo esc_attr($og_image); ?>" size="70" />
				<input type="button" id="og_image_button" class="button" value="Выбрать изображение" />
				<p class="description">URL изображения для социальных сетей</p>
			</td>
		</tr>
	</table>

	<script>
		jQuery(document).ready(function ($) {
			$('#og_image_button').click(function () {
				var image_frame = wp.media({
					title: 'Выберите изображение',
					multiple: false,
					library: {
						type: 'image'
					}
				});

				image_frame.on('select', function () {
					var selection = image_frame.state().get('selection');
					var attachment = selection.first().toJSON();
					$('#og_image').val(attachment.url);
				});

				image_frame.open();
			});
		});
	</script>
	<?php
}

// Сохранение данных метабокса
add_action('save_post', 'save_seo_meta_box');

function save_seo_meta_box($post_id)
{
	// Проверка nonce
	if (!isset($_POST['seo_meta_box_nonce']) || !wp_verify_nonce($_POST['seo_meta_box_nonce'], 'seo_meta_box_nonce')) {
		return;
	}

	// Проверка автосохранения
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Проверка прав пользователя
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	// Сохранение данных
	if (isset($_POST['seo_title'])) {
		update_post_meta($post_id, '_seo_title', sanitize_text_field($_POST['seo_title']));
	}

	if (isset($_POST['seo_description'])) {
		update_post_meta($post_id, '_seo_description', sanitize_textarea_field($_POST['seo_description']));
	}

	if (isset($_POST['seo_keywords'])) {
		update_post_meta($post_id, '_seo_keywords', sanitize_textarea_field($_POST['seo_keywords']));
	}

	if (isset($_POST['og_title'])) {
		update_post_meta($post_id, '_og_title', sanitize_text_field($_POST['og_title']));
	}

	if (isset($_POST['og_description'])) {
		update_post_meta($post_id, '_og_description', sanitize_textarea_field($_POST['og_description']));
	}

	if (isset($_POST['og_image'])) {
		update_post_meta($post_id, '_og_image', esc_url_raw($_POST['og_image']));
	}
}

// Функция для получения SEO данных страницы
function get_page_seo_data($field, $default = '')
{
	global $post;

	if (!$post) {
		return $default;
	}

	$value = get_post_meta($post->ID, '_' . $field, true);

	// Если поле пустое, возвращаем значение по умолчанию
	if (empty($value)) {
		switch ($field) {
			case 'seo_title':
				return $post->post_title . ' | ' . get_bloginfo('name');
			case 'seo_description':
				return wp_trim_words($post->post_excerpt ?: $post->post_content, 20);
			case 'og_title':
				return $post->post_title;
			case 'og_description':
				return wp_trim_words($post->post_excerpt ?: $post->post_content, 20);
			default:
				return $default;
		}
	}

	return $value;
}

/*** END МЕТА-ТЕГИ ДЛЯ КАЖДОЙ СТРАНИЦЫ ***/


require_once get_template_directory() . '/inc/class-bootstrap-walker-nav-menu.php';

?>