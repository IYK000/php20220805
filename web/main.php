<?php
	// // 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../class_db/LoginDb.php');

	$MemberId = isset($_POST['MemberId']) ?  $_POST['MemberId'] : '';
	$LoginPassword = isset($_POST['LoginPassword']) ?  $_POST['LoginPassword'] : '';
	$LoginPassword = $sh = hash('sha256', $LoginPassword);

	$msg = '';

	try {
		$db = new loginDb();

		$result = $db->loginCheck($MemberId, $LoginPassword);
		
	} catch (PDOException $e) {
			$msg       = 'DB接続に失敗しました。<br>('.$e->getMessage().')';
	}
 
	// debug
	echo '<pre>';
	echo var_dump($result);
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
	<p>Hello world!</p>
	<p><?=$msg;?></p>
</body>
</html>
