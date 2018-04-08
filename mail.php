<?php
/*
$recepient = "stratulat777@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>*/
mail('dima82.91@mail.ru', 'stratulat777@gmail.com', $_POST['name'].''.$_POST['log'],
"Content-type:text/html;charset=utf-8");
?>