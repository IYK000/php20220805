<?php
	// 
	require_once(dirname(__FILE__) . "/../common/db.php");

	try {
		$db = parse_url(DB_URL);

		$pdo = new PDO("pgsql:" . sprintf(
			"host=%s;port=%s;user=%s;password=%s;dbname=%s",
			$db["host"],
			$db["port"],
			$db["user"],
			$db["pass"],
			ltrim($db["path"], "/")
	));
	} catch (PDOException $e) {
			$isConnect = false;
			$msg       = "DB接続に失敗しました。<br>(" . $e->getMessage() . ")";
	}
 
	// debug
	echo '<pre>';
	echo var_dump(DB_URL);
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
	<p>OTZ</p>
</body>
</html>
