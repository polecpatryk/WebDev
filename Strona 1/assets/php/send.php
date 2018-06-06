<?php

	error_reporting(E_STRICT);
	
	date_default_timezone_set('Europe/Warsaw');
	$title = $_POST['title'];
	$email = $_POST['email'];
	$content  = str_replace('\n', '<br>', $_POST['content']);
	
	include('./phpmailer/class.phpmailer.php');
	$phpmailer = new PHPMailer();
	$phpmailer->SetLanguage('pl', './phpmailer/language/');
	$phpmailer->CharSet    = 'UTF-8';
	
	$phpmailer->SMTPAuth   = true;
	$phpmailer->SMTPSecure = 'tls';
	$phpmailer->Port       = 587;
	$phpmailer->Host       = 'smtp.gmail.com';
	
	$phpmailer->From       = $email;
	$phpmailer->FromName   = $email;
	$phpmailer->Subject    = $title;
	$phpmailer->MsgHTML('<div style="font-size:1.1em;">'.$content.'</div>');
	$phpmailer->AddAddress('cyklinowanie.org@gmail.com');
	
	$phpmailer->Send();
	
	$phpmailer->ClearAddresses();
	$phpmailer->ClearAttachments();
	
?>