<?php
try {
	define("PG_HOST","ec2-54-85-56-210.compute-1.amazonaws.com");
	define("PG_PORT", "5432");
	define("PG_USER", "eyencudwuyhxpn");
	define("PG_PASS", "caea2aebea0daf832a47e3de0df1d4d349fb39780918cbd946a8ddfb3ab25fdb");

	$db = parse_url(getenv("postgres://eyencudwuyhxpn:caea2aebea0daf832a47e3de0df1d4d349fb39780918cbd946a8ddfb3ab25fdb@ec2-54-85-56-210.compute-1.amazonaws.com:5432/d28e45qo92r39c"));

	$pdo = new PDO("pgsql:" . sprintf(
		"host=%s;port=%s;user=%s;password=%s;dbname=%s",
		PG_HOST,
		PG_PORT,
		PG_USER,
		PG_PASS,
		ltrim($db["path"], "/")
	));
	} catch (PDOException $e) {
		$isConnect = false;
		$msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
	}

	// debug
	echo '<pre>';
	echo var_dump($db);
	echo '</pre>';
?>
<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p><?php echo $msg; ?></p>
</body>
</html>
