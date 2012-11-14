<?php

	require_once('qdmail.php');

	$mail = & new Qdmail();

	$mail -> smtp(true);

	$param = array(
			'host'=>'ssl://smtp.gmail.com',//メールサーバー
			'port'=> 465 , //これはSMTPAuthの例。認証が必要ないなら　25　でＯＫ。
			'from'=>'from@example.com',　//　Return-path: になります。
			'protocol'=>'SMTP_AUTH',// 認証が必要ないなら、'SMTP'
			'user'=>'user@gmail.com', //SMTPサーバーのユーザーID
			'pass' => 'gmail_password', //SMTPサーバーの認証パスワード
	);
	$mail -> smtpServer($param);

	$message="プリントを受信しました。";

	$mail ->to('o_hara1145007@mail.goo.ne.jp','スポック宛');
	$mail ->subject('メール通知のテスト');
	$mail ->from('o-hara1045104@mail.goo.ne.jp');
	$mail ->text($message);
	$return_flag = $mail ->send();

?>