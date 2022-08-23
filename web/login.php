<?php
	// // 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../class_db/LoginDb.php');

	$MemberId = isset($_POST['MemberId']) ?  $_POST['MemberId'] : '';
	$LoginPassword = isset($_POST['LoginPassword']) ?  $_POST['LoginPassword'] : '';

	$Msg = '';

	try {
		// ログインCheck
		$Db = new loginDb();
		$Result = $Db->loginCheck($MemberId, $LoginPassword);

		if($Result){
			$DisplyType = 'OK';
			// 画面遷移
			header('Location: ./main.php');
			exit;
		} else {
			$DisplyType = 'NG';
			$Msg = 'ユーザIDもしくはパスワードが違います。';
		}
	} catch (PDOException $e) {
			$Msg = 'DB接続に失敗しました。<br>('.$e->getMessage().')';
	}
 
	// // debug
	// echo '<pre>';
	// echo var_dump($result);
	// echo '</pre>';
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
	<?php if($DisplyType == 'OK'){ ?>
		<p>ログインされました</p>
	<?php } elseif($DisplyType == 'NG'){ ?>
		<p><?=$Msg;?></p>
		<a href="./">ログイン画面へ</a>
	<?php } else { ?>
		<p><?=$Msg;?></p>
		<a href="./">ログイン画面へ</a>
	<?php } ?>
</body>
</html>
