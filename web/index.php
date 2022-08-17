<?php
	// // debug
	// echo '<pre>';
	// echo var_dump(DB_URL);
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
	<form action="./main.php" method="post">
		<p><span>ID:</span><input type="text" name="MemberId"></p>
		<p><span>PW:</span><input type="password" name="LoginPassword"></p>
		<p><button type="submit">送信</button></p>
	</form>
</body>
</html>
