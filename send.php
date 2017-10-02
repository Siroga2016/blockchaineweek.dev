<?php
session_start();
error_reporting(85);


$mail_to = "o.petryashev@gmail.com,blockchainweek+lead@mail.amocrm.ru"; // E-mail на который будут отправляться уведомления
$mail_from = "mail@".$_SERVER['HTTP_HOST']; $mail_from_name = $_SERVER['HTTP_HOST']; // E-mail с которого будут отправляться уведомления ($_SERVER['HTTP_HOST'] - домен текущего сайта)
$mail_subject = "Заявка с сайта \"Технологии блокчейн и криптовалюты — 2017\""; // Тема уведомлений


$utm = array("utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term");

// текст письма
$message = "
<html>
<head>
  <title>Сообщение с сайта 'Технологии блокчейн и криптовалюты — 2017'</title>
</head>
<body>
  <p>Сообщение с сайта 'Технологии блокчейн и криптовалюты — 2017'</p>
  <table>
    <tr>
        <th>Имя</th>
        <td>{$_POST['name']}</td>
    </tr>
   <tr>
        <th>Email</th>
        <td>{$_POST['email']}</td>
    </tr>
  <tr>
     <th>Текст:</th>
     <td>{$_POST['phone']}</td>
    </tr>
  <tr>
     <th>Текст:</th>
     <td>{$_POST['select_form']}</td>
    </tr>"; foreach($utm as $v){if($_SESSION[$v]){$message .= "<tr><th>".$v.":</th><td>".htmlspecialchars($_SESSION[$v])."</td></tr>";}} $message .= "
  </table>
</body>
</html>
";

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-Type: text/html; charset="UTF-8"'."\r\n";
$headers .= 'From: =?UTF-8?B?'.base64_encode($mail_from_name).'?= <'.$mail_from.'>'."\r\n";


// Отправляем
mail($mail_to, "=?UTF-8?B?".base64_encode($mail_subject)."?=", $message, $headers);
?>