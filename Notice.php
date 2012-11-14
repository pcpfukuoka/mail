<?php

	require_once('qdsmtp.php');

	$mail = new Qdmail();

	$mail -> smtp(true);

	$param = array(
			'host'=>'ssl://smtp.gmail.com',//メールサーバー
			'port'=> 465 , //これはSMTPAuthの例。認証が必要ないなら　25　でＯＫ。
			'from'=>'joho.pcp@gmail.com',　//　Return-path: になります。
			'protocol'=>'SMTP_AUTH',// 認証が必要ないなら、'SMTP'
			'user'=>'joho.pcp', //SMTPサーバーのユーザーID
			'pass' => 'joho_pcp', //SMTPサーバーの認証パスワード
	);
	$mail -> smtpServer($param);

	$message="プリントを受信しました。";

	$mail ->to('o_hara1145007@mail.goo.ne.jp','スポック宛');
	$mail ->subject('メール通知のテスト');
	$mail ->from('joho.pcp@gmail.com');
	$mail ->text($message);
	$return_flag = $mail ->send();

?>

<html><head></head><body>aaaa</body></html>