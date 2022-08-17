<?php
	// // 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../class_db/LoginDb.php');

	$MemberId = $_POST['MemberId'];
	$LoginPassword = $sh = hash('sha256', $_POST['LoginPassword']);

	$msg = '';

	try {
		$db = new loginDb();

		$result = $db->loginCheck($MemberId, $LoginPassword);
		
	} catch (PDOException $e) {
			$msg       = 'DB接続に失敗しました。<br>('.$e->getMessage().')';
	}

	
 
	// debug
	echo '<pre>';
	echo var_dump($LoginPassword);
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
