<?php
	// // 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../common/config.php');
	require_once(dirname(__FILE__) . '/../class_db/LoginDb.php');

	$MemberId = filter_input(INPUT_POST, 'MemberId');
	$LoginPassword = filter_input(INPUT_POST, 'LoginPassword');

	$Msg = '';

	try {
		// ログインCheck
		$Db = new loginDb();
		switch(DEBUG){
			case 99:
				$result = '01234567890123456';
				break;
			default:
				$result = $Db->loginCheck($MemberId, $LoginPassword);
		}



		// ログインチェック結果
		if( array_key_exists('error', $result) == FALSE ){
			$disply_type = 'OK';

			// セッション開始
			session_name('nttms-member-support');
			session_start();
			session_regenerate_id(TRUE);

			// セッション設置
			$_SESSION['user_id'] = $result['user_id'];
			$_SESSION['session'] = $result['session'];

			// 画面遷移
//			header('Location: ./main.php');
			exit;
		} else {
			$disply_type = 'NG';
			$msg = 'ユーザIDもしくはパスワードが違います。';
			if(1 <= DEBUG){
				$msg .= '（'.$result['error'].'）';
			}
		}
	} catch (PDOException $e) {
		$disply_type = 'NG';
		$msg = '管理者にお問合せをお願いします。';
		switch(DEBUG){
			case 1:
				$msg .= '（1-1）';
				break;
			case 99:
				$msg .= $e->getMessage().' - '.$e->getLine().PHP_EOL;
				break;
			default:
		}
	}
 
	// debug
	echo '<pre>';
	echo var_dump ($result);
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
	<?php if($disply_type == 'OK'){ ?>
		<p>ログインされました</p>
	<?php } elseif($disply_type == 'NG'){ ?>
		<p><?=$msg;?></p>
		<a href="./">ログイン画面へ</a>
	<?php } else { ?>
		<p><?=$msg;?></p>
		<a href="./">ログイン画面へ</a>
	<?php } ?>
</body>
</html>
