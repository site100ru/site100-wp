<?php
/**
 * Обработчик формы обратного звонка
 */

// Подключаем WordPress
require_once('../../../../wp-load.php');

session_start();

// Проверяем, что форма отправлена методом POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	wp_redirect(home_url());
	exit;
}

// Получаем данные формы
$name = sanitize_text_field($_POST['name'] ?? '');
$tel = sanitize_text_field($_POST['tel'] ?? '');
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

// Проверяем обязательные поля
if (empty($name) || empty($tel)) {
	$_SESSION['recaptcha'] = '<p class="text-danger">Пожалуйста, заполните все обязательные поля.</p>';
	wp_redirect($_SERVER['HTTP_REFERER']);
	exit;
}

// Функция проверки reCAPTCHA
function verify_recaptcha($response)
{
	$secret_key = '6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y';
	$verify_url = 'https://www.google.com/recaptcha/api/siteverify';

	$response = wp_remote_post($verify_url, array(
		'body' => array(
			'secret' => $secret_key,
			'response' => $response
		)
	));

	if (is_wp_error($response)) {
		return false;
	}

	$body = wp_remote_retrieve_body($response);
	$result = json_decode($body, true);

	return isset($result['success']) && $result['success'] === true &&
		isset($result['score']) && $result['score'] > 0.125;
}

// Проверяем reCAPTCHA
if (!verify_recaptcha($recaptcha_response)) {
	$_SESSION['recaptcha'] = '<p class="text-danger"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста, повторите попытку!</p>';
	wp_redirect($_SERVER['HTTP_REFERER']);
	exit;
}

// Формируем письмо
// $to = 'sidorov-vv3@mail.ru'; // Замените на ваш email
$to = 'vasilyev-r@yandex.ru,  vasilyev-r@mail.ru, sidorov-vv3@mail.ru';
$subject = 'Заказ обратного звонка с сайта ' . get_bloginfo('name');
$message = "Новая заявка на обратный звонок\n\n";
$message .= "Имя: {$name}\n";
$message .= "Телефон: {$tel}\n";
$message .= "Сайт: " . home_url() . "\n";
$message .= "Дата: " . current_time('Y-m-d H:i:s') . "\n";

$headers = array(
	'Content-Type: text/plain; charset=UTF-8',
	'From: ' . get_bloginfo('name') . ' <noreply@' . $_SERVER['SERVER_NAME'] . '>'
);

// Отправляем письмо
$mail_sent = wp_mail($to, $subject, $message, $headers);

if ($mail_sent) {
	$_SESSION['recaptcha'] = '<p class="text-success">Спасибо за обращение! Мы ответим Вам в ближайшее время.</p>';
} else {
	$_SESSION['recaptcha'] = '<p class="text-danger">Произошла ошибка при отправке сообщения. Попробуйте еще раз.</p>';
}

// Перенаправляем обратно
wp_redirect($_SERVER['HTTP_REFERER']);
exit;