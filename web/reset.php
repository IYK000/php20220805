<?php
	// // 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../class_db/ResetDb.php');

	$Url = isset($_GET['url']) ?  $_GET['url'] : '';
	$MemberId = isset($_POST['MemberId']) ? $_POST['MemberId'] : '';
	$LoginPassword = isset($_POST['LoginPassword']) ? $_POST['LoginPassword'] : '';
	$DisplyType = '';
	$Msg = '';

	if($Url){
		// PWリセットが有効化判断
		try {
			$Db = new ResetDb();
	
			$Result = $Db->isUrl($Url);
			
			// 
			if($Result == false){
				$Msg = 'URLが正しく無いか期限切れとなっております。(1)';
			} elseif( $MemberId != '' && $LoginPassword != '') {
				$DisplyType = '変更完了画面';
				$Db->updatePassword($MemberId, $LoginPassword);
			} else {
				$DisplyType = 'リセット画面';
			}
		} catch (PDOException $e) {
			$Msg = 'DB接続に失敗しました。<br>('.$e->getMessage().')';
		}
	} else {
		$Msg = 'URLが正しく無いか期限切れとなっております。(2)';
	}

	// debug
	echo '<pre>';
	echo var_dump($MemberId);
	echo '</pre>';
?>
<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HerokuTest</title>
</head>
<body>
	
	<?php if($DisplyType == 'リセット画面'){ ?>
		<form action="./reset.php?url=<?=$Url;?>" method="post">
			<input type="hidden" name="MemberId" value="<?=$Result['memberid__c'];?>">
			<p><span>新しいPW:</span><input type="password" name="LoginPassword"></p>
			<p><span>確認用PW:</span><input type="password" name="CheckPassword"></p>
			<p><button type="submit">送信</button></p>
		</form>
	<?php } elseif($DisplyType == '変更完了画面'){ ?>
		<p>パスワードを変更しました。</p>
		<a href="./">ログイン画面へ</a>
	<?php } else{ ?>
		<p><?=$Msg;?></p>
		<a href="./">ログイン画面へ</a>
	<?php } ?>
</body>
</html>
