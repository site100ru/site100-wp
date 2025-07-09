<?php
	session_start();
	$win = "true";

	// Если существует переменная POST, то
	if ( $_POST ) {
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Принимаем данные обратно */
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > .125 ){
			
			$name = $_POST['name'];	
			$tel = $_POST['tel'];
			
			/* Проверям что заполнено поле с телефоном */
			if ( $_POST['tel'] ) {
				// Если поле с телефоно заполненно
				mail( "sidorov-vv3@mail.ru, vasilyev-r@yandex.ru, vasilyev-r@mail.ru", "Заказ обратного звонка с сайта dekorsever.ru", "
					Клиент: " . $name ."\n
					Телефон: " . $tel
				);
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit();
			} else {
				// Если поле с телефоно НЕ заполненно
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполненно! Пожалуйста, повторите попытку и заполенте поле с номером телефона.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit();
			}
			
		
		} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
			exit();
		}
	}
?>