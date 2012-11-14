
	<?php

	/*
		//文字コード定義(phpソースやHTMLのソースに合わせて設定してください)
		//以下の定義しないと、文字化けの原因になります。
		mb_language("Japanese");
		mb_internal_encoding("SHIFT-JIS");

		//宛先
		$to = "spider,d,o,d@gmail.com";
		//差出人
		$header = "From: "."joho.pcp@gmail.com";
		//件名
		$subject = "お問い合わせ";
		//本文
		$body .= "テストメール送信";

		if(mb_send_mail($to,$subject,$body,$header)){
		   echo "メール送信成功しました。";
		}else{
		   echo "メール送信失敗しました。";
		}

	*/

	?>



include("noticemail.inc");

<?php
	$data[to] = 'o-hara1045104@mail.goo.ne.jp';
	$data[subject] = 'なんか投稿されてますよー';
	$data[name] = '水田';
	$data[email] = 'o_hara1145007@mail.goo.ne.jp';
	$data[comment] = 'プリントを受信しました';
	$data[option][] = 'URL,http://www.google.co.jp';

	noticemail::send($data);

?>