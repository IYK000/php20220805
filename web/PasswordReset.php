<?php
	// 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../class_db/PasswordResetDb.php');

	// POSTデータ取得
	$MailAddress = isset($_POST['MailAddress']) ? $_POST['MailAddress'] : '';

	$Display = '';

	if($MailAddress != ''){
		$Db = new PasswordResetDb();

		$Result = $Db->isMailAddress($MailAddress);

		if($Result == false){
			$Display='記載メール無し';
		} else {
			$isSetResetUrl = $Db->setResetUrl($MailAddress);
			if($isSetResetUrl){
				$Display='リセットメール通知';
			}else{
				$Display='リセットURL生成失敗';
			}
		}
		
	} else {
		$Display='メール入力';
	}

	// // debug
	// echo '<pre>';
	// echo var_dump($Result2);
	// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>パスワードリセット</title>
</head>
<body>
	<?php if ($Display == 'メール入力'){ ?>
			<form action="./PasswordReset.php" method="post">
				<p>メールアドレス：<input type="mail" name="MailAddress"></p>
				<p>アドレス確認用：<input type="mail" name="MailAddressCheck"></p>
				<button type="submit" value="">送信</buttom>
			</form>
	<?php }elseif($Display == 'リセットメール通知'){?>
		<p>対象のメールにリセットメールをお送りいたしました。</p>
		<a href="./">ログイン画面に戻る</a>
	<?php }elseif($Display == '記載メール無し'){?>
		<p>対象のメールアドレスは登録されておりません、ご確認のほどお願いいたします。</p>
		<p>(メールアドレス：<?=$MailAddress;?>)</p>
		<a href="./">ログイン画面に戻る</a>
	<?php }elseif($Display == 'リセットURL生成失敗'){?>
		<p>リセット用URLの生成に失敗いたしました。時間を置いてから再度ご確認頂くか、管理者にご連絡の程お願いいたします。</p>
		<a href="./">ログイン画面に戻る</a>
	<?php }else{?>
		<p>不具合が起きております。しばらく待って再度ご利用願います。</p>
		<p>しばらくたって改善されない場合はお手数ですが管理者にご連絡をお願いいたします。</p>
		<p><?=$Msg;?></p>
		<a href="./">ログイン画面に戻る</a>
	<?php }?>
</body>
</html>