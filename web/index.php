<?php
try {

	//$db = parse_url(getenv("postgres://eyencudwuyhxpn:caea2aebea0daf832a47e3de0df1d4d349fb39780918cbd946a8ddfb3ab25fdb@ec2-54-85-56-210.compute-1.amazonaws.com:5432/d28e45qo92r39c"));
	

	// $pdo = new PDO("pgsql:" . sprintf(
	// 	"host=ec2-54-85-56-210.compute-1.amazonaws.com;port=5432;user=eyencudwuyhxpn;password=caea2aebea0daf832a47e3de0df1d4d349fb39780918cbd946a8ddfb3ab25fdb;dbname=d28e45qo92r39c",
	// 	PG_HOST,
	// 	PG_PORT,
	// 	PG_USER,
	// 	PG_PASS,
	// 	PG_DB
	// ));
	// } catch (PDOException $e) {
	// 	$isConnect = false;
	// 	$msg       = "接続に失敗しました。<br>(" . $e->getMessage() . ")";
	// }

	// debug
	echo '<pre>';
	echo var_dump(getenv("postgres://eyencudwuyhxpn:caea2aebea0daf832a47e3de0df1d4d349fb39780918cbd946a8ddfb3ab25fdb@ec2-54-85-56-210.compute-1.amazonaws.com:5432/d28e45qo92r39c"));
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
