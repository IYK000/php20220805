<?php
	try {
		$db = parse_url("postgres://eyencudwuyhxpn:caea2aebea0daf832a47e3de0df1d4d349fb39780918cbd946a8ddfb3ab25fdb@ec2-54-85-56-210.compute-1.amazonaws.com:5432/d28e45qo92r39c");
		

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

	// SQL
	$stmt = $pdo->query("UPDATE salesforce.account SET name='個人取引先②' WHERE id=1;");
	$rs = $stmt->fetchall();
 
	// debug
	echo '<pre>';
	echo var_dump($rs);
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
