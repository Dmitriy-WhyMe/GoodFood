<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <!-- Подключаемые файлы, метатеги, название страницы -->

  <!-- Кодировка страницы-->
  <meta charset="utf-8"/> 
  <title>Название страницы</title>
</head>
<body>
  <header>
  <!-- Шапка сайта-->
  </header>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$to = "madesisudaidi@gmail.com";
			$message = "Имя заказчика: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
			$message .= "Адресс: ".$_POST['adres']."<br>"; //полученное из формы name=email
			$message .= "Номер телефона: ".$_POST['tel']."<br>"; //полученное из формы name=phone
			$message .= "Выбранная программа из 1 блока: ".$_POST['program_hiden']."<br>"; //полученное из формы 
			$message .= "Выбранная программа из 2 блока: ".$_POST['title_program_hiden']."<br>"; //полученное из формы 
			$message .= "Выбранная программа калории для неё: ".$_POST['calory_program_hiden']."<br>"; //полученное из формы 
			$message .= "Количество дней: ".$_POST['days_hiden']."<br>"; //полученное из формы 
			$message .= "Общая сумма: ".$_POST['price_hiden']."<br>"; //полученное из формы 
			$message .= "на : ".$_POST['date_hiden']."<br>"; //полученное из формы 
			$subject = "Заказ с сайта good-food.pro";
			$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
			mail ($to, $subject, $message, $headers);
		}
	?>
  <footer>
  <!-- Подвал сайта-->
  </footer>
</body>
</html>

