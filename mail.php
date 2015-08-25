<?php

$frm_name  = "das";
$recepient = "profifood@ukr.net";
$sitename  = "das.in.ua";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);

$message = "
Имя: $name <br>
Телефон: $phone <br>

";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
