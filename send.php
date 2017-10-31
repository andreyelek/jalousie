<?php 

$name=$_POST['name'];
$phone=$_POST['phone']
$what=$_POST['what']
$question=$_POST['question']
$to = 'sukanov2015@yandex.ru'
$subject = "Заявка с сайта jalousie"
$message = "
Письмо отправлено из моей формы.<br/> 
Пользователь хочет: ".htmlspecialchars($what)."<br/>
Имя: ".htmlspecialchars($name)."<br/>
Телефон: ".htmlspecialchars($phone)."<br/>
Вопрос: ".htmlspecialchars($question);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html;
	charset=UTF-8 \r\n"
mail($to, $subject, $message, $headers)
header('Location thanks.html')
 ?>